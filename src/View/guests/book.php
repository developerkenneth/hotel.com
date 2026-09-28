<?php $room = $data['room']; ?>
<?php require_once "$root_dir/load_env.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="<?php assets('css/book.css') ?>">

    <title>Hotel Management</title>
</head>

<body>
    <section class="booking-page">

        <div class="booking-container">
            <div class="booking-info">

                <p class="small-title">RESERVE ROOM <?= $room['room_number'] ?> FOR YOUR SELF</p>

                <h1>Book Room <?= $room['room_number'] ?></h1>

                <p class="description">
                    Experience comfort and luxury during your stay.
                    Select your preferred room and complete your booking.
                </p>


                <!-- amenities -->

                <?php

                $amenities = json_decode($room['amenities']);
                if (is_array($amenities)):
                    foreach ($amenities as $amenity):

                ?>
                        <div class="info-box">
                            <span>✓</span>
                            <p><?= $amenity ?></p>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>

            </div>

            <div class="booking-card">

                <form id="bookingForm">

                    <div class="form-group">

                        <label for="roomType">
                            Room Type
                        </label>

                        <select id="roomType" name="room_type">

                            <option value="">
                                Select room type
                            </option>

                            <option value="<?= $room['room_type'] ?>" data-price="<?= $room['price'] ?>">
                                <?= $room['room_type'] ?> — ₦<?= $room['price'] ?>/night
                            </option>

                        </select>
                        <small id="roomTypeError" class="error-message"></small>


                    </div>

                    <div class="date-row">

                        <div class="form-group">

                            <label for="checkIn">
                                Check-in
                            </label>

                            <input
                                type="date"
                                id="checkIn"
                                name="check_in">
                            <small id="checkInError" class="error-message"></small>
                        </div>



                        <div class="form-group">

                            <label for="checkOut">
                                Check-out
                            </label>

                            <input
                                type="date"
                                id="checkOut"
                                name="check_out">
                            <small id="checkOutError" class="error-message"></small>

                        </div>

                    </div>
                    <div class="form-group">

                        <label for="guests">
                            Number of Guests
                        </label>

                        <input
                            type="number"
                            id="guests"
                            name="guests"
                            min="1"
                            max="<?= $room['capacity'] ?>"
                            placeholder="Enter number of guests">
                        <small id="guestsError" class="error-message"></small>

                    </div>
                    <div class="form-group">

                        <label for="note">
                            Additional Note
                        </label>

                        <textarea
                            id="note"
                            name="note"
                            placeholder="Any special request?"></textarea>

                    </div>
                    <div class="booking-summary">

                        <div class="summary-row">
                            <span>Room price</span>
                            <span id="roomPrice">₦0</span>
                        </div>

                        <div class="summary-row">
                            <span>Number of nights</span>
                            <span id="nights">0</span>
                        </div>

                        <div class="total-row">
                            <span>Total Amount</span>
                            <span id="totalAmount">₦0</span>
                        </div>

                    </div>

                    <input type="hidden" name="csrf_token" id="csrf-token" value="<?= $csrf_token ?>">
                    <input type="hidden" name="room_id" id="room-id" value="<?= $room['id'] ?>">

                    <button type="submit" class="book-btn">
                        Book Now
                    </button>

                </form>

            </div>

        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="https://js.paystack.co/v2/inline.js"></script>
    <script>
        const roomType = document.getElementById("roomType");
        const checkIn = document.getElementById("checkIn");
        const checkOut = document.getElementById("checkOut");
        const roomPrice = document.getElementById("roomPrice");
        const nightsDisplay = document.getElementById("nights");
        const totalAmount = document.getElementById("totalAmount");
        const roomId = document.querySelector("#room-id").value;
        const csrfToken = document.querySelector("#csrf-token").value;

        const notyf = new Notyf();

        function formatMoney(amount) {
            return "₦" + amount.toLocaleString("en-NG");
        }

        function calculateBooking() {
            const selectedRoom =
                roomType.options[roomType.selectedIndex];

            const price =
                Number(selectedRoom.dataset.price) || 0;

            roomPrice.textContent = formatMoney(price);

            const startDate = new Date(checkIn.value);
            const endDate = new Date(checkOut.value);

            if (!checkIn.value || !checkOut.value) {
                nightsDisplay.textContent = "0";
                totalAmount.textContent = "₦0";
                return;
            }

            if (endDate <= startDate) {
                nightsDisplay.textContent = "0";
                totalAmount.textContent = "₦0";
                return;
            }

            const difference =
                endDate.getTime() - startDate.getTime();

            const nights =
                Math.ceil(difference / (1000 * 60 * 60 * 24));

            const total = price * nights;

            nightsDisplay.textContent = nights;
            totalAmount.textContent = formatMoney(total);
            return total;
        }

        roomType.addEventListener("change", calculateBooking);
        checkIn.addEventListener("change", calculateBooking);
        checkOut.addEventListener("change", calculateBooking);

        document
            .getElementById("bookingForm")
            .addEventListener("submit", function(event) {

                event.preventDefault();

                document.getElementById("roomTypeError").textContent = "";
                // document.getElementById("roomError").textContent = "";
                document.getElementById("checkInError").textContent = "";
                document.getElementById("checkOutError").textContent = "";
                document.getElementById("guestsError").textContent = "";

                let hasError = false;

                if (!roomType.value) {
                    document.getElementById("roomTypeError").textContent =
                        "Please select a room type";
                    hasError = true;
                }

                // if (!document.getElementById("room").value) {
                //     document.getElementById("roomError").textContent =
                //         "Please select an available room";
                //     hasError = true;
                // }

                if (!checkIn.value) {
                    document.getElementById("checkInError").textContent =
                        "Please select a check-in date";
                    hasError = true;
                }

                if (!checkOut.value) {
                    document.getElementById("checkOutError").textContent =
                        "Please select a check-out date";
                    hasError = true;
                }

                if (
                    checkIn.value &&
                    checkOut.value &&
                    new Date(checkOut.value) <= new Date(checkIn.value)
                ) {
                    document.getElementById("checkOutError").textContent =
                        "Check-out date must be after check-in date";
                    hasError = true;
                }

                if (!document.getElementById("guests").value) {
                    document.getElementById("guestsError").textContent =
                        "Please enter the number of guests";
                    hasError = true;
                }

                if (hasError) {
                    return;
                }


                const amount = calculateBooking();
                const guest = document.getElementById("guests").value;

                const bookingDetails = {
                    checkin: checkIn.value,
                    checkout: checkOut.value,
                    guest: guest,
                    room_id: roomId,
                    csrf_token: csrfToken,
                    amount: amount
                }

                const popup = new PaystackPop();

                popup.newTransaction({
                    key: "<?= $_ENV['PAYSTACK_API_KEY'] ?>",
                    email: "customer@example.com",
                    amount: Math.round(amount * 100),
                    currency: "NGN",
                    onSuccess: async (transaction) => {
                        bookingDetails.paystack = transaction;
                        const response = await fetch("http://localhost/hotel.com/bookings/api/book", {
                            headers: {
                                'content-type': 'application/json'
                            },
                            method: "POST",
                            body: JSON.stringify(bookingDetails)
                        })

                        const data = await response.json();

                    },
                    onCancel: (transaction) => {
                        console.log("transaction cancelled")
                    }
                });
                1

            });

        roomType.addEventListener("change", function() {
            if (roomType.value) {
                document.getElementById("roomTypeError").textContent = "";
            }
        });

        // document.getElementById("room").addEventListener("change", function () {
        //     if (this.value) {
        //         document.getElementById("roomError").textContent = "";
        //     }
        // });

        checkIn.addEventListener("change", function() {
            if (checkIn.value) {
                document.getElementById("checkInError").textContent = "";
            }
        });

        checkOut.addEventListener("change", function() {
            if (
                checkOut.value &&
                checkIn.value &&
                new Date(checkOut.value) > new Date(checkIn.value)
            ) {
                document.getElementById("checkOutError").textContent = "";
            }
        });

        document.getElementById("guests").addEventListener("input", function() {
            if (this.value) {
                document.getElementById("guestsError").textContent = "";
            }
        });
    </script>

    <!-- <script src="<?php //assets('js/book.js') 
                        ?>"></script> -->
</body>

</html>