<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD

    <title>Available Rooms</title>

    <link rel="stylesheet" href="/hotel.com/ui/style.css">
=======
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="bookings.css">

    <title>Hotel Management</title>
>>>>>>> e4205f5a9cf416c1781fe214ba58250be1b38f36
</head>

<body>

<<<<<<< HEAD
    <!-- ================= HEADER ================= -->

    <header>
        <h1>🏨HOTEL.COM</h1>

        <p>Available Rooms</p>
    </header>


    <!-- ================= MAIN CONTENT ================= -->

    <main>

        <section class="page-header">

            <h2>Available Rooms</h2>

            <p>
                Choose a comfortable room for your stay.
            </p>

        </section>


        <!-- ================= ROOMS ================= -->

        <section class="rooms-container" id="rooms-container">

            <!-- Rooms will be displayed here by JavaScript -->

        </section>

    </main>


    <!-- ================= FOOTER ================= -->

    <footer>

        <p>
            &copy; 2026 HOTEL.COM. All Rights Reserved.
        </p>

    </footer>


    <!-- ================= JAVASCRIPT ================= -->

    <script src="script.js"></script>

=======
    <section class="booking-page">

        <div class="booking-container">
            <div class="booking-info">

                <p class="small-title">RESERVE YOUR ROOM</p>

                <h1>Book Your Stay</h1>

                <p class="description">
                    Experience comfort and luxury during your stay.
                    Select your preferred room and complete your booking.
                </p>

                <div class="info-box">
                    <span>✓</span>
                    <p>Comfortable and well-furnished rooms</p>
                </div>

                <div class="info-box">
                    <span>✓</span>
                    <p>24/7 hotel services</p>
                </div>

                <div class="info-box">
                    <span>✓</span>
                    <p>Easy and secure booking</p>
                </div>

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

                            <option value="standard" data-price="30000">
                                Standard Room — ₦30,000/night
                            </option>

                            <option value="deluxe" data-price="50000">
                                Deluxe Room — ₦50,000/night
                            </option>

                            <option value="suite" data-price="80000">
                                Executive Suite — ₦80,000/night
                            </option>

                        </select>
                        <small id="roomTypeError" class="error-message"></small>


                    </div>

                    <div class="form-group">

                        <label for="room">
                            Available Room
                        </label>

                        <select id="room" name="room">

                            <option value="">
                                Select available room
                            </option>

                            <option value="101">
                                Room 101
                            </option>

                            <option value="101">
                                Room 104
                            </option>

                            <option value="101">
                                Room 109
                            </option>

                            <option value="101">
                                Room 201
                            </option>

                            <option value="101">
                                Room 102
                            </option>


                            <option value="201">
                                Room 205
                            </option>

                            <option value="202">
                                Room 302
                            </option>

                            <option value="101">
                                Room 304
                            </option>


                            <option value="101">
                                Room 402
                            </option>

                            <option value="101">
                                Room 501
                            </option>

                            <option value="101">
                                Room 602
                            </option>


                        </select>
                        <small id="roomError" class="error-message"></small>


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

                    <button type="submit" class="book-btn">
                        Book Now
                    </button>

                </form>

            </div>

        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="booking.js"></script>
>>>>>>> e4205f5a9cf416c1781fe214ba58250be1b38f36
</body>

</html>