<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Bookings | Hotel.com</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,100..900&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    >

    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

<div class="dashboard">

    <!-- =========================
         SIDEBAR
    ========================== -->

    <aside class="dashboard-sidebar">

        <div class="hotel-logo">
            <i class="fa-solid fa-hotel"></i>
            <span>HOTEL.com</span>
        </div>

        <nav class="dashboard-navigation">

            <a href="dashboard.php" class="dashboard-nav-link">
                <i class="fa-solid fa-house"></i>
                <span>Dashboard</span>
            </a>

            <a href="bookings.php" class="dashboard-nav-link active">
                <i class="fa-solid fa-calendar-check"></i>
                <span>My Bookings</span>
            </a>

            <a href="rooms.php" class="dashboard-nav-link">
                <i class="fa-solid fa-bed"></i>
                <span>Browse Rooms</span>
            </a>

            <a href="booking-history.php" class="dashboard-nav-link">
                <i class="fa-solid fa-clock-rotate-left"></i>
                <span>Booking History</span>
            </a>

            <a href="profile.php" class="dashboard-nav-link">
                <i class="fa-solid fa-user"></i>
                <span>My Profile</span>
            </a>

            <a href="settings.php" class="dashboard-nav-link">
                <i class="fa-solid fa-gear"></i>
                <span>Settings</span>
            </a>

        </nav>

        <div class="dashboard-sidebar-footer">

            <a href="logout.php" class="dashboard-nav-link logout-link">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>

        </div>

    </aside>

    <div class="sidebar-overlay" id="sidebar-overlay"></div>


    <!-- =========================
         MAIN CONTENT
    ========================== -->

    <main class="dashboard-main">

        <!-- Header -->

        <header class="dashboard-header">

            <button
                type="button"
                class="mobile-menu-button"
                id="mobile-menu-button"
                aria-label="Open navigation menu"
            >
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="dashboard-welcome">

                <p class="dashboard-greeting">
                    Reservations
                </p>

                <h1>
                    My Bookings
                </h1>

                <p class="dashboard-subtitle">
                    View and manage all your hotel reservations.
                </p>

            </div>

        </header>


        <!-- =========================
             BOOKING SUMMARY
        ========================== -->

        <section class="booking-summary">

            <article class="summary-card">

                <div class="summary-icon">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>

                <div class="summary-content">

                    <span class="summary-label">
                        Active Bookings
                    </span>

                    <strong class="summary-value">
                        2
                    </strong>

                </div>

            </article>


            <article class="summary-card">

                <div class="summary-icon">
                    <i class="fa-solid fa-hourglass-half"></i>
                </div>

                <div class="summary-content">

                    <span class="summary-label">
                        Pending
                    </span>

                    <strong class="summary-value">
                        1
                    </strong>

                </div>

            </article>


            <article class="summary-card">

                <div class="summary-icon">
                    <i class="fa-solid fa-check"></i>
                </div>

                <div class="summary-content">

                    <span class="summary-label">
                        Completed
                    </span>

                    <strong class="summary-value">
                        5
                    </strong>

                </div>

            </article>

        </section>


        <!-- =========================
             UPCOMING BOOKINGS
        ========================== -->

        <section class="dashboard-section">

            <div class="section-heading">

                <div>

                    <p class="section-label">
                        Your reservations
                    </p>

                    <h2>
                        Upcoming Bookings
                    </h2>

                </div>

            </div>


            <!-- Booking 1 -->

            <article class="full-booking-card">

                <div class="full-booking-image">

                    <img
                        src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=800&q=80"
                        alt="Deluxe King Room"
                    >

                </div>


                <div class="full-booking-content">

                    <div class="full-booking-top">

                        <div>

                            <span class="status-badge">
                                Confirmed
                            </span>

                            <h3>
                                Deluxe King Room
                            </h3>

                            <p class="booking-location">
                                <i class="fa-solid fa-location-dot"></i>
                                Hotel.com
                            </p>

                        </div>

                        <div class="booking-price-large">
                            ₦300,000
                            <span>Total</span>
                        </div>

                    </div>


                    <div class="booking-information">

                        <div class="booking-info-item">

                            <span>
                                Check-in
                            </span>

                            <strong>
                                20 Aug 2026
                            </strong>

                        </div>


                        <div class="booking-info-item">

                            <span>
                                Check-out
                            </span>

                            <strong>
                                23 Aug 2026
                            </strong>

                        </div>


                        <div class="booking-info-item">

                            <span>
                                Guests
                            </span>

                            <strong>
                                2 Guests
                            </strong>

                        </div>

                    </div>


                    <div class="booking-card-footer">

                        <div class="booking-reference">

                            <span>
                                Booking Reference
                            </span>

                            <strong>
                                #HSW-20481
                            </strong>

                        </div>


                        <div class="booking-actions">

                            <button
                                type="button"
                                class="booking-action secondary-action"
                            >
                                View Details
                            </button>

                            <button
                                type="button"
                                class="booking-action cancel-action"
                            >
                                Cancel Booking
                            </button>

                        </div>

                    </div>

                </div>

            </article>


            <!-- Booking 2 -->

            <article class="full-booking-card">

                <div class="full-booking-image">

                    <img
                        src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80"
                        alt="Executive Suite"
                    >

                </div>


                <div class="full-booking-content">

                    <div class="full-booking-top">

                        <div>

                            <span class="status-badge">
                                Confirmed
                            </span>

                            <h3>
                                Executive Suite
                            </h3>

                            <p class="booking-location">
                                <i class="fa-solid fa-location-dot"></i>
                                Hotel.com
                            </p>

                        </div>

                        <div class="booking-price-large">
                            ₦450,000
                            <span>Total</span>
                        </div>

                    </div>


                    <div class="booking-information">

                        <div class="booking-info-item">

                            <span>
                                Check-in
                            </span>

                            <strong>
                                10 Sep 2026
                            </strong>

                        </div>


                        <div class="booking-info-item">

                            <span>
                                Check-out
                            </span>

                            <strong>
                                14 Sep 2026
                            </strong>

                        </div>


                        <div class="booking-info-item">

                            <span>
                                Guests
                            </span>

                            <strong>
                                3 Guests
                            </strong>

                        </div>

                    </div>


                    <div class="booking-card-footer">

                        <div class="booking-reference">

                            <span>
                                Booking Reference
                            </span>

                            <strong>
                                #HSW-20942
                            </strong>

                        </div>


                        <div class="booking-actions">

                            <button
                                type="button"
                                class="booking-action secondary-action"
                            >
                                View Details
                            </button>

                            <button
                                type="button"
                                class="booking-action cancel-action"
                            >
                                Cancel Booking
                            </button>

                        </div>

                    </div>

                </div>

            </article>

        </section>


        <!-- =========================
             PENDING BOOKING
        ========================== -->

        <section class="dashboard-section">

            <div class="section-heading">

                <div>

                    <p class="section-label">
                        Awaiting confirmation
                    </p>

                    <h2>
                        Pending Booking
                    </h2>

                </div>

            </div>


            <article class="pending-booking-card">

                <div class="pending-booking-icon">

                    <i class="fa-solid fa-hourglass-half"></i>

                </div>


                <div class="pending-booking-content">

                    <h3>
                        Classic Room
                    </h3>

                    <p>
                        Your booking is currently awaiting confirmation.
                    </p>

                    <span>
                        Booking Reference: #HSW-21015
                    </span>

                </div>


                <div class="pending-booking-price">

                    <strong>
                        ₦180,000
                    </strong>

                    <span>
                        Total
                    </span>

                </div>

            </article>

        </section>


        <!-- =========================
             NO MORE BOOKINGS
        ========================== -->

        <section class="booking-help-card">

            <div class="booking-help-icon">

                <i class="fa-solid fa-circle-info"></i>

            </div>

            <div>

                <h3>
                    Looking for another room?
                </h3>

                <p>
                    Browse our available rooms and make your next reservation.
                </p>

            </div>

            <a href="rooms.php" class="room-book-button">
                Browse Rooms
            </a>

        </section>

    </main>

</div>


<script src="js/dashboard.js"></script>

</body>
</html>