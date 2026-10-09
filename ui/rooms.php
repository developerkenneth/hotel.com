<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

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

    <link rel="stylesheet" href="css/dashboard.css">
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
                            alt="Classic Room">

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
                                class="room-book-button">
                                Book Now
                            </a>

                        </div>

                    </div>

                </article>

            </div>

        </section>

    </main>

    <script src="js/dashboard.js"></script>

</body>

=======
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="brand">
                <h2 class="brand-title">Hotel.com</h2>
            </div>
            
            <?php include 'sidebar.php'; ?>
        </aside>

        <main class="main-content">
            <h1 class="page-title">Rooms</h1>

            <div class="table-container">
                <table class="rooms-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Units</th>
                            <th>Open</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="room-name">Standard Room</td>
                            <td>
                                <input type="number" class="table-input" value="15000.00" step="0.01">
                            </td>
                            <td>
                                <input type="number" class="table-input short-input" value="4">
                            </td>
                            <td>
                                <input type="checkbox" class="custom-checkbox" checked>
                            </td>
                            <td>
                                <button type="button" class="btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="room-name">Deluxe Room</td>
                            <td>
                                <input type="number" class="table-input" value="25000.00" step="0.01">
                            </td>
                            <td>
                                <input type="number" class="table-input short-input" value="3">
                            </td>
                            <td>
                                <input type="checkbox" class="custom-checkbox" checked>
                            </td>
                            <td>
                                <button type="button" class="btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="room-name">Family Room</td>
                            <td>
                                <input type="number" class="table-input" value="40000.00" step="0.01">
                            </td>
                            <td>
                                <input type="number" class="table-input short-input" value="2">
                            </td>
                            <td>
                                <input type="checkbox" class="custom-checkbox" checked>
                            </td>
                            <td>
                                <button type="button" class="btn-delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Add a Room Type Form -->
            <section class="add-room-section">
                <h2 class="section-title">Add a room type</h2>
                <form class="room-form" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="room-name">Name</label>
                        <input type="text" id="room-name" name="room_name" class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="room-description">Description</label>
                        <textarea id="room-description" name="room_description" class="form-input form-textarea" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="room-price">Price (₦)</label>
                        <input type="number" id="room-price" name="room_price" class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="room-capacity">Capacity</label>
                        <input type="number" id="room-capacity" name="room_capacity" class="form-input" value="2">
                    </div>

                    <div class="form-group">
                        <label for="room-units">Units</label>
                        <input type="number" id="room-units" name="room_units" class="form-input" value="1">
                    </div>

                    <div class="form-group">
                        <label for="room-image">Add Image</label>
                        <input type="file" id="room-image" name="room_image" class="form-input" accept="image/*">
                    </div>

                    <button type="submit" class="btn-submit">Add room</button>
                </form>
            </section>
        </main>
    </div>
</body>
>>>>>>> 55bf8d553beb84547d1109a5fba79df7e15b5e82
</html>