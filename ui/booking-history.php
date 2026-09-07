<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Booking History | Hotel.com</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32;1,100..900&display=swap"
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

            <a href="bookings.php" class="dashboard-nav-link">
                <i class="fa-solid fa-calendar-check"></i>
                <span>My Bookings</span>
            </a>

            <a href="rooms.php" class="dashboard-nav-link">
                <i class="fa-solid fa-bed"></i>
                <span>Browse Rooms</span>
            </a>

            <a href="booking-history.php" class="dashboard-nav-link active">
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
                    Your booking activity
                </p>

                <h1>
                    Booking History
                </h1>

                <p class="dashboard-subtitle">
                    View your previous hotel stays and booking records.
                </p>

            </div>

        </header>


        <!-- =========================
             SUMMARY
        ========================== -->

        <section class="dashboard-summary">

            <article class="summary-card">

                <div class="summary-icon">
                    <i class="fa-solid fa-bed"></i>
                </div>

                <div class="summary-content">

                    <span class="summary-label">
                        Completed Stays
                    </span>

                    <strong class="summary-value">
                        5
                    </strong>

                </div>

            </article>


            <article class="summary-card">

                <div class="summary-icon">
                    <i class="fa-solid fa-naira-sign"></i>
                </div>

                <div class="summary-content">

                    <span class="summary-label">
                        Total Spent
                    </span>

                    <strong class="summary-value">
                        ₦1.35M
                    </strong>

                </div>

            </article>


            <article class="summary-card">

                <div class="summary-icon">
                    <i class="fa-solid fa-calendar"></i>
                </div>

                <div class="summary-content">

                    <span class="summary-label">
                        Last Stay
                    </span>

                    <strong class="summary-value">
                        Jul 2026
                    </strong>

                </div>

            </article>

        </section>


        <!-- =========================
             HISTORY HEADER
        ========================== -->

        <section class="dashboard-section">

            <div class="section-heading">

                <div>

                    <p class="section-label">
                        Previous bookings
                    </p>

                    <h2>
                        Your Stay History
                    </h2>

                </div>

                <select
                    class="history-filter"
                    id="history-filter"
                >
                    <option value="all">
                        All Bookings
                    </option>

                    <option value="completed">
                        Completed
                    </option>

                    <option value="cancelled">
                        Cancelled
                    </option>
                </select>

            </div>


            <!-- =========================
                 BOOKING HISTORY LIST
            ========================== -->

            <div class="history-list">


                <!-- BOOKING 1 -->

                <article
                    class="history-card"
                    data-status="completed"
                >

                    <div class="history-room-image">

                        <img
                            src="images/rooms/executive.jpg"
                            alt="Executive Suite"
                        >

                    </div>


                    <div class="history-card-content">

                        <div class="history-card-top">

                            <div>

                                <span class="history-room-type">
                                    Executive Suite
                                </span>

                                <h3>
                                    Executive Suite
                                </h3>

                            </div>

                            <span class="status-badge completed-status">
                                Completed
                            </span>

                        </div>


                        <div class="history-details">

                            <div>
                                <span>Check-in</span>
                                <strong>15 Jul 2026</strong>
                            </div>

                            <div>
                                <span>Check-out</span>
                                <strong>18 Jul 2026</strong>
                            </div>

                            <div>
                                <span>Guests</span>
                                <strong>2 Guests</strong>
                            </div>

                            <div>
                                <span>Amount</span>
                                <strong>₦450,000</strong>
                            </div>

                        </div>


                        <div class="history-card-footer">

                            <div class="history-reference">

                                <span>
                                    Booking Reference
                                </span>

                                <strong>
                                    #HSW-19842
                                </strong>

                            </div>

                            <button
                                type="button"
                                class="history-view-button"
                            >
                                View Details
                            </button>

                        </div>

                    </div>

                </article>


                <!-- BOOKING 2 -->

                <article
                    class="history-card"
                    data-status="completed"
                >

                    <div class="history-room-image">

                        <img
                            src="images/rooms/classic-room.jpg"
                            alt="Classic Room"
                        >

                    </div>


                    <div class="history-card-content">

                        <div class="history-card-top">

                            <div>

                                <span class="history-room-type">
                                    Classic Room
                                </span>

                                <h3>
                                    Classic Room
                                </h3>

                            </div>

                            <span class="status-badge completed-status">
                                Completed
                            </span>

                        </div>


                        <div class="history-details">

                            <div>
                                <span>Check-in</span>
                                <strong>02 Jun 2026</strong>
                            </div>

                            <div>
                                <span>Check-out</span>
                                <strong>04 Jun 2026</strong>
                            </div>

                            <div>
                                <span>Guests</span>
                                <strong>2 Guests</strong>
                            </div>

                            <div>
                                <span>Amount</span>
                                <strong>₦180,000</strong>
                            </div>

                        </div>


                        <div class="history-card-footer">

                            <div class="history-reference">

                                <span>
                                    Booking Reference
                                </span>

                                <strong>
                                    #HSW-18763
                                </strong>

                            </div>

                            <button
                                type="button"
                                class="history-view-button"
                            >
                                View Details
                            </button>

                        </div>

                    </div>

                </article>


                <!-- BOOKING 3 -->

                <article
                    class="history-card"
                    data-status="completed"
                >

                    <div class="history-room-image">

                        <img
                            src="images/rooms/deluxe-king.jpg"
                            alt="Deluxe King Room"
                        >

                    </div>


                    <div class="history-card-content">

                        <div class="history-card-top">

                            <div>

                                <span class="history-room-type">
                                    Deluxe Room
                                </span>

                                <h3>
                                    Deluxe King Room
                                </h3>

                            </div>

                            <span class="status-badge completed-status">
                                Completed
                            </span>

                        </div>


                        <div class="history-details">

                            <div>
                                <span>Check-in</span>
                                <strong>25 May 2026</strong>
                            </div>

                            <div>
                                <span>Check-out</span>
                                <strong>28 May 2026</strong>
                            </div>

                            <div>
                                <span>Guests</span>
                                <strong>2 Guests</strong>
                            </div>

                            <div>
                                <span>Amount</span>
                                <strong>₦300,000</strong>
                            </div>

                        </div>


                        <div class="history-card-footer">

                            <div class="history-reference">

                                <span>
                                    Booking Reference
                                </span>

                                <strong>
                                    #HSW-17491
                                </strong>

                            </div>

                            <button
                                type="button"
                                class="history-view-button"
                            >
                                View Details
                            </button>

                        </div>

                    </div>

                </article>


                <!-- BOOKING 4 -->

                <article
                    class="history-card"
                    data-status="cancelled"
                >

                    <div class="history-room-image">

                        <img
                            src="images/rooms/luxury2.jpg"
                            alt="Luxury King Room"
                        >

                    </div>


                    <div class="history-card-content">

                        <div class="history-card-top">

                            <div>

                                <span class="history-room-type">
                                    Luxury Room
                                </span>

                                <h3>
                                    Luxury King Room
                                </h3>

                            </div>

                            <span class="status-badge cancelled-status">
                                Cancelled
                            </span>

                        </div>


                        <div class="history-details">

                            <div>
                                <span>Check-in</span>
                                <strong>10 Apr 2026</strong>
                            </div>

                            <div>
                                <span>Check-out</span>
                                <strong>13 Apr 2026</strong>
                            </div>

                            <div>
                                <span>Guests</span>
                                <strong>2 Guests</strong>
                            </div>

                            <div>
                                <span>Amount</span>
                                <strong>₦270,000</strong>
                            </div>

                        </div>


                        <div class="history-card-footer">

                            <div class="history-reference">

                                <span>
                                    Booking Reference
                                </span>

                                <strong>
                                    #HSW-16125
                                </strong>

                            </div>

                            <button
                                type="button"
                                class="history-view-button"
                            >
                                View Details
                            </button>

                        </div>

                    </div>

                </article>


                <!-- BOOKING 5 -->

                <article
                    class="history-card"
                    data-status="completed"
                >

                    <div class="history-room-image">

                        <img
                            src="images/rooms/premium.jpg"
                            alt="Premium Suite"
                        >

                    </div>


                    <div class="history-card-content">

                        <div class="history-card-top">

                            <div>

                                <span class="history-room-type">
                                    Premium Suite
                                </span>

                                <h3>
                                    Premium Business Suite
                                </h3>

                            </div>

                            <span class="status-badge completed-status">
                                Completed
                            </span>

                        </div>


                        <div class="history-details">

                            <div>
                                <span>Check-in</span>
                                <strong>12 Mar 2026</strong>
                            </div>

                            <div>
                                <span>Check-out</span>
                                <strong>15 Mar 2026</strong>
                            </div>

                            <div>
                                <span>Guests</span>
                                <strong>1 Guest</strong>
                            </div>

                            <div>
                                <span>Amount</span>
                                <strong>₦200,000</strong>
                            </div>

                        </div>


                        <div class="history-card-footer">

                            <div class="history-reference">

                                <span>
                                    Booking Reference
                                </span>

                                <strong>
                                    #HSW-14982
                                </strong>

                            </div>

                            <button
                                type="button"
                                class="history-view-button"
                            >
                                View Details
                            </button>

                        </div>

                    </div>

                </article>

            </div>

        </section>

    </main>

</div>


<script src="js/dashboard.js"></script>

</body>
</html>