<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Browse Rooms | Hotel.com</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32;1,100..900&display=swap"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <link rel="stylesheet" href="<?php assets('css/dashboard.css'); ?>">
</head>

<body>

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
                aria-label="Open navigation menu">
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
                        id="check-in">

                </div>


                <div class="room-search-field">

                    <label for="check-out">
                        Check-out
                    </label>

                    <input
                        type="date"
                        id="check-out">

                </div>


                <button
                    type="button"
                    class="room-search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Search
                </button>

            </div>

        </section>


        <!-- =========================
             ROOM LIST
        ========================== -->

        <section class="dashboard-section">

            <div class="loader">
                <div>
                    <div class="spinner">

                    </div>
                    <p>Loading...</p>
                </div>

            </div>
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


            </div>

        </section>

    </main>

    <script src="<?php assets('js/getRooms.js'); ?>"></script>



</body>

</html>