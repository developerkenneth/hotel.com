<?php $room = $data['room']; ?>

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

                    <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
                    <button type="submit" class="book-btn">
                        Book Now
                    </button>

                </form>

            </div>

        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="<?php assets('js/book.js') ?>"></script>
</body>

</html>