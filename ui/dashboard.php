<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Dashboard | Hotel Swan</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">


    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    >

    <!-- Dashboard CSS -->
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

    <div class="dashboard">

        <!-- Dashboard content  -->
         <!-- Dashboard Sidebar -->
<aside class="dashboard-sidebar">

    <!-- Hotel Logo -->
    <div class="hotel-logo">
        <i class="fa-solid fa-hotel"></i>
        <span>HOTEL.com</span>
    </div>

    <!-- Dashboard Navigation -->
    <nav class="dashboard-navigation">

        <a href="dashboard.php" class="dashboard-nav-link active">
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

    <!-- Logout -->
    <div class="dashboard-sidebar-footer">
        <a href="logout.php" class="dashboard-nav-link logout-link">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>
    </div>

</aside>

<div class="sidebar-overlay" id="sidebar-overlay"></div>

<!-- Main Dashboard Content -->
<main class="dashboard-main">

    <!-- Dashboard Header -->
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
            <p class="dashboard-greeting">Good morning,</p>
            <h1>Welcome back, William!</h1>
            <p class="dashboard-subtitle">
                Here's what's happening with your bookings.
            </p>
        </div>

        <div class="dashboard-header-actions">

            <button
                type="button"
                class="notification-button"
                id="notification-button"
                aria-label="View notifications"
            >
                <i class="fa-solid fa-bell"></i>
                <span class="notification-indicator"></span>
            </button>

            <button
                type="button"
                class="profile-button"
                id="profile-button"
            >
                <img
                    src="images/profiles/default-profile.jpg"
                    alt="William Dawson"
                    class="profile-image"
                >

                <span class="profile-name">William Dawson</span>

                <i class="fa-solid fa-chevron-down"></i>
            </button>

        </div>

    </header>


    <!-- Dashboard Summary -->
    <section class="dashboard-summary">

        <article class="summary-card">
            <div class="summary-icon">
                <i class="fa-solid fa-calendar-check"></i>
            </div>

            <div class="summary-content">
                <span class="summary-label">Active Bookings</span>
                <strong class="summary-value">2</strong>
            </div>
        </article>


        <article class="summary-card">
            <div class="summary-icon">
                <i class="fa-solid fa-bed"></i>
            </div>

            <div class="summary-content">
                <span class="summary-label">Completed Stays</span>
                <strong class="summary-value">5</strong>
            </div>
        </article>


        <article class="summary-card">
            <div class="summary-icon">
                <i class="fa-solid fa-hourglass-half"></i>
            </div>

            <div class="summary-content">
                <span class="summary-label">Pending Bookings</span>
                <strong class="summary-value">1</strong>
            </div>
        </article>

    </section>


    <!-- Upcoming Booking -->
    <section class="dashboard-section">

        <div class="section-heading">
            <div>
                <p class="section-label">Your next stay</p>
                <h2>Upcoming Booking</h2>
            </div>

            <a href="#" class="section-action">
                View all
            </a>
        </div>


        <article class="upcoming-booking-card">

            <div class="booking-room-image">
                <img
                    src="images/rooms/deluxe-king.jpg"
                    alt="Deluxe hotel room"
                >
            </div>

            <div class="booking-details">

                <div class="booking-status">
                    <span class="status-badge">Confirmed</span>
                </div>

                <h3>Deluxe King Room</h3>

                <p class="booking-location">
                    <i class="fa-solid fa-location-dot"></i>
                    Hotel.com
                </p>

                <div class="booking-information">

                    <div class="booking-info-item">
                        <span>Check-in</span>
                        <strong>20 Aug 2026</strong>
                    </div>

                    <div class="booking-info-item">
                        <span>Check-out</span>
                        <strong>23 Aug 2026</strong>
                    </div>

                    <div class="booking-info-item">
                        <span>Guests</span>
                        <strong>2 Guests</strong>
                    </div>

                </div>

                <div class="booking-reference">
                    <span>Booking Reference</span>
                    <strong>#HSW-20481</strong>
                </div>

            </div>

        </article>

    </section>


    <!-- Recent Bookings -->
    <section class="dashboard-section">

        <div class="section-heading">
            <div>
                <p class="section-label">Your activity</p>
                <h2>Recent Bookings</h2>
            </div>

            <a href="#" class="section-action">
                View history
            </a>
        </div>


        <div class="recent-bookings">

            <article class="booking-history-item">

                <div class="booking-history-icon">
                    <i class="fa-solid fa-bed"></i>
                </div>

                <div class="booking-history-details">
                    <h3>Executive Suite</h3>
                    <p>15 Jul 2026 — 18 Jul 2026</p>
                </div>

                <span class="status-badge completed-status">
                    Completed
                </span>

                <strong class="booking-price">
                    ₦450,000
                </strong>

            </article>


            <article class="booking-history-item">

                <div class="booking-history-icon">
                    <i class="fa-solid fa-bed"></i>
                </div>

                <div class="booking-history-details">
                    <h3>Classic Room</h3>
                    <p>02 Jun 2026 — 04 Jun 2026</p>
                </div>

                <span class="status-badge completed-status">
                    Completed
                </span>

                <strong class="booking-price">
                    ₦180,000
                </strong>

            </article>


            <article class="booking-history-item">

                <div class="booking-history-icon">
                    <i class="fa-solid fa-bed"></i>
                </div>

                <div class="booking-history-details">
                    <h3>Deluxe King Room</h3>
                    <p>25 May 2026 — 28 May 2026</p>
                </div>

                <span class="status-badge pending-status">
                    Pending
                </span>

                <strong class="booking-price">
                    ₦300,000
                </strong>

            </article>

        </div>

    </section>

</main>

<!-- Dashboard Right Panel -->
<aside class="dashboard-right-panel">

    <!-- Profile Card -->
    <section class="profile-card">

        <div class="profile-card-header">
            <div>
                <p class="profile-card-label">My Account</p>
                <h2>Profile</h2>
            </div>

            <button
                type="button"
                class="profile-edit-button"
                id="profile-edit-button"
                aria-label="Edit profile"
            >
                <i class="fa-solid fa-pen"></i>
            </button>
        </div>

        <div class="profile-card-content">

            <img
                src="images/profiles/default-profile.jpg"
                alt="William Dawson"
                class="profile-card-image"
            >

            <h3>William Dawson</h3>

            <p class="profile-email">
                william@example.com
            </p>

        </div>

    </section>


    <!-- Hotel Room Preview -->
    <section class="room-preview-card">

        <div class="room-preview-image">
            <img
                src="images/rooms/luxury2.jpg"
                alt="Luxury hotel room"
            >

            <span class="room-feature-badge">
                <i class="fa-solid fa-star"></i>
                4.8
            </span>
        </div>

        <div class="room-preview-content">

            <p class="room-preview-label">Featured Room</p>

            <h2>Luxury King Room</h2>

            <p class="room-preview-location">
                <i class="fa-solid fa-location-dot"></i>
                Hotel.com
            </p>

            <div class="room-preview-footer">

                <div class="room-price">
                    <strong>₦150,000</strong>
                    <span>/ night</span>
                </div>

                <a href="#" class="room-book-button">
                    Book Now
                </a>

            </div>

        </div>

    </section>


    <!-- Notifications -->
    <section class="notifications-card">

        <div class="right-panel-heading">
            <h2>Notifications</h2>

            <button
                type="button"
                class="more-button"
                aria-label="More notification options"
            >
                <i class="fa-solid fa-ellipsis"></i>
            </button>
        </div>

        <div class="notification-item">

            <div class="notification-icon">
                <i class="fa-solid fa-check"></i>
            </div>

            <div class="notification-content">
                <h3>Booking confirmed</h3>
                <p>Your upcoming stay has been confirmed.</p>
                <span>2 hours ago</span>
            </div>

        </div>


        <div class="notification-item">

            <div class="notification-icon">
                <i class="fa-solid fa-tag"></i>
            </div>

            <div class="notification-content">
                <h3>Special offer</h3>
                <p>Get 15% off your next hotel booking.</p>
                <span>Yesterday</span>
            </div>

        </div>

    </section>

</aside>

    </div>

    <script src="js/dashboard.js"></script>
</body>
</html>