<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Browse Rooms | Hotel.com</title>

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

            <a href="rooms.php" class="dashboard-nav-link active">
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
                    Hotel Accommodation
                </p>

                <h1>
                    Browse Rooms
                </h1>

                <p class="dashboard-subtitle">
                    Find the perfect room for your next stay.
                </p>

            </div>

        </header>


        <!-- =========================
             SEARCH / FILTER
        ========================== -->

        <section class="room-search-card">

            <div class="room-search-heading">

                <div>
                    <p class="section-label">
                        Find your stay
                    </p>

                    <h2>
                        Search Rooms
                    </h2>
                </div>

            </div>


            <div class="room-search-form">

                <div class="room-search-field">

                    <label for="room-type">
                        Room Type
                    </label>

                    <select id="room-type">

                        <option value="all">
                            All Rooms
                        </option>

                        <option value="classic">
                            Classic Room
                        </option>

                        <option value="deluxe">
                            Deluxe Room
                        </option>

                        <option value="executive">
                            Executive Suite
                        </option>

                        <option value="luxury">
                            Luxury King Room
                        </option>

                    </select>

                </div>


                <div class="room-search-field">

                    <label for="guests">
                        Guests
                    </label>

                    <select id="guests">

                        <option>
                            1 Guest
                        </option>

                        <option>
                            2 Guests
                        </option>

                        <option>
                            3 Guests
                        </option>

                        <option>
                            4 Guests
                        </option>

                    </select>

                </div>


                <div class="room-search-field">

                    <label for="check-in">
                        Check-in
                    </label>

                    <input
                        type="date"
                        id="check-in"
                    >

                </div>


                <div class="room-search-field">

                    <label for="check-out">
                        Check-out
                    </label>

                    <input
                        type="date"
                        id="check-out"
                    >

                </div>


                <button
                    type="button"
                    class="room-search-button"
                >
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Search
                </button>

            </div>

        </section>


        <!-- =========================
             ROOM LIST
        ========================== -->

        <section class="dashboard-section">

            <div class="section-heading">

                <div>

                    <p class="section-label">
                        Available accommodation
                    </p>

                    <h2>
                        Available Rooms
                    </h2>

                </div>

                <span class="room-count">
                    6 Rooms
                </span>

            </div>


            <div class="rooms-grid">


                <!-- ROOM 1 -->

                <article class="room-card">

                    <div class="room-card-image">

                        <img
                            src="images/rooms/classic-room.jpg"
                            alt="Classic Room"
                        >

                        <span class="room-rating">
                            <i class="fa-solid fa-star"></i>
                            4.7
                        </span>

                    </div>


                    <div class="room-card-content">

                        <span class="room-type">
                            Classic Room
                        </span>

                        <h3>
                            Classic Comfort Room
                        </h3>

                        <p class="room-description">
                            A comfortable room designed for a relaxing and enjoyable stay.
                        </p>


                        <div class="room-features">

                            <span>
                                <i class="fa-solid fa-user"></i>
                                2 Guests
                            </span>

                            <span>
                                <i class="fa-solid fa-bed"></i>
                                King Bed
                            </span>

                        </div>


                        <div class="room-card-footer">

                            <div class="room-price">

                                <strong>
                                    ₦120,000
                                </strong>

                                <span>
                                    / night
                                </span>

                            </div>

                            <a
                                href="bookings.php"
                                class="room-book-button"
                            >
                                Book Now
                            </a>

                        </div>

                    </div>

                </article>


                <!-- ROOM 2 -->

                <article class="room-card">

                    <div class="room-card-image">

                        <img
                            src="images/rooms/deluxe-king.jpg"
                            alt="Deluxe King Room"
                        >

                        <span class="room-rating">
                            <i class="fa-solid fa-star"></i>
                            4.8
                        </span>

                    </div>


                    <div class="room-card-content">

                        <span class="room-type">
                            Deluxe Room
                        </span>

                        <h3>
                            Deluxe King Room
                        </h3>

                        <p class="room-description">
                            Spacious accommodation with premium furnishings and modern amenities.
                        </p>


                        <div class="room-features">

                            <span>
                                <i class="fa-solid fa-user"></i>
                                2 Guests
                            </span>

                            <span>
                                <i class="fa-solid fa-bed"></i>
                                King Bed
                            </span>

                        </div>


                        <div class="room-card-footer">

                            <div class="room-price">

                                <strong>
                                    ₦150,000
                                </strong>

                                <span>
                                    / night
                                </span>

                            </div>

                            <a
                                href="bookings.php"
                                class="room-book-button"
                            >
                                Book Now
                            </a>

                        </div>

                    </div>

                </article>


                <!-- ROOM 3 -->

                <article class="room-card">

                    <div class="room-card-image">

                        <img
                            src="images/rooms/executive.jpg"
                            alt="Executive Suite"
                        >

                        <span class="room-rating">
                            <i class="fa-solid fa-star"></i>
                            4.9
                        </span>

                    </div>


                    <div class="room-card-content">

                        <span class="room-type">
                            Executive Suite
                        </span>

                        <h3>
                            Executive Suite
                        </h3>

                        <p class="room-description">
                            Elegant suite featuring a spacious living area and premium amenities.
                        </p>


                        <div class="room-features">

                            <span>
                                <i class="fa-solid fa-user"></i>
                                3 Guests
                            </span>

                            <span>
                                <i class="fa-solid fa-bed"></i>
                                King Bed
                            </span>

                        </div>


                        <div class="room-card-footer">

                            <div class="room-price">

                                <strong>
                                    ₦180,000
                                </strong>

                                <span>
                                    / night
                                </span>

                            </div>

                            <a
                                href="bookings.php"
                                class="room-book-button"
                            >
                                Book Now
                            </a>

                        </div>

                    </div>

                </article>


                <!-- ROOM 4 -->

                <article class="room-card">

                    <div class="room-card-image">

                        <img
                            src="images/rooms/luxury2.jpg"
                            alt="Luxury King Room"
                        >

                        <span class="room-rating">
                            <i class="fa-solid fa-star"></i>
                            4.8
                        </span>

                    </div>


                    <div class="room-card-content">

                        <span class="room-type">
                            Luxury Room
                        </span>

                        <h3>
                            Luxury King Room
                        </h3>

                        <p class="room-description">
                            Experience premium comfort with stylish interiors and exceptional service.
                        </p>


                        <div class="room-features">

                            <span>
                                <i class="fa-solid fa-user"></i>
                                2 Guests
                            </span>

                            <span>
                                <i class="fa-solid fa-bed"></i>
                                King Bed
                            </span>

                        </div>


                        <div class="room-card-footer">

                            <div class="room-price">

                                <strong>
                                    ₦150,000
                                </strong>

                                <span>
                                    / night
                                </span>

                            </div>

                            <a
                                href="bookings.php"
                                class="room-book-button"
                            >
                                Book Now
                            </a>

                        </div>

                    </div>

                </article>


                <!-- ROOM 5 -->

                <article class="room-card">

                    <div class="room-card-image">

                        <img
                            src="images/rooms/premium.jpg"
                            alt="Premium Suite"
                        >

                        <span class="room-rating">
                            <i class="fa-solid fa-star"></i>
                            4.9
                        </span>

                    </div>


                    <div class="room-card-content">

                        <span class="room-type">
                            Premium Suite
                        </span>

                        <h3>
                            Premium Business Suite
                        </h3>

                        <p class="room-description">
                            A refined suite with extra space, elegant furnishings and work facilities.
                        </p>


                        <div class="room-features">

                            <span>
                                <i class="fa-solid fa-user"></i>
                                3 Guests
                            </span>

                            <span>
                                <i class="fa-solid fa-bed"></i>
                                King Bed
                            </span>

                        </div>


                        <div class="room-card-footer">

                            <div class="room-price">

                                <strong>
                                    ₦200,000
                                </strong>

                                <span>
                                    / night
                                </span>

                            </div>

                            <a
                                href="bookings.php"
                                class="room-book-button"
                            >
                                Book Now
                            </a>

                        </div>

                    </div>

                </article>


                <!-- ROOM 6 -->

                <article class="room-card">

                    <div class="room-card-image">

                        <img
                            src="images/rooms/family-room.jpg"
                            alt="Family Room"
                        >

                        <span class="room-rating">
                            <i class="fa-solid fa-star"></i>
                            4.6
                        </span>

                    </div>


                    <div class="room-card-content">

                        <span class="room-type">
                            Family Room
                        </span>

                        <h3>
                            Family Comfort Room
                        </h3>

                        <p class="room-description">
                            A spacious room ideal for families looking for comfort and convenience.
                        </p>


                        <div class="room-features">

                            <span>
                                <i class="fa-solid fa-user"></i>
                                4 Guests
                            </span>

                            <span>
                                <i class="fa-solid fa-bed"></i>
                                2 Beds
                            </span>

                        </div>


                        <div class="room-card-footer">

                            <div class="room-price">

                                <strong>
                                    ₦220,000
                                </strong>

                                <span>
                                    / night
                                </span>

                            </div>

                            <a
                                href="bookings.php"
                                class="room-book-button"
                            >
                                Book Now
                            </a>

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