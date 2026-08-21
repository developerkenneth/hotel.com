<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Settings | Hotel.com</title>

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

            <a href="booking-history.php" class="dashboard-nav-link">
                <i class="fa-solid fa-clock-rotate-left"></i>
                <span>Booking History</span>
            </a>

            <a href="profile.php" class="dashboard-nav-link">
                <i class="fa-solid fa-user"></i>
                <span>My Profile</span>
            </a>

            <a href="settings.php" class="dashboard-nav-link active">
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
                    Manage your account
                </p>

                <h1>
                    Settings
                </h1>

                <p class="dashboard-subtitle">
                    Manage your preferences and account settings.
                </p>

            </div>

        </header>


        <!-- =========================
             ACCOUNT SETTINGS
        ========================== -->

        <section class="settings-card">

            <div class="settings-heading">

                <div class="settings-heading-icon">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div>

                    <h2>
                        Account Settings
                    </h2>

                    <p>
                        Manage your basic account preferences.
                    </p>

                </div>

            </div>


            <div class="settings-form">

                <div class="settings-field">

                    <label for="language">
                        Language
                    </label>

                    <select id="language">

                        <option>
                            English
                        </option>

                    </select>

                </div>


                <div class="settings-field">

                    <label for="currency">
                        Currency
                    </label>

                    <select id="currency">

                        <option>
                            Nigerian Naira (₦)
                        </option>

                        <option>
                            US Dollar ($)
                        </option>

                        <option>
                            British Pound (£)
                        </option>

                    </select>

                </div>

            </div>

        </section>


        <!-- =========================
             NOTIFICATIONS
        ========================== -->

        <section class="settings-card">

            <div class="settings-heading">

                <div class="settings-heading-icon">
                    <i class="fa-solid fa-bell"></i>
                </div>

                <div>

                    <h2>
                        Notifications
                    </h2>

                    <p>
                        Choose which notifications you want to receive.
                    </p>

                </div>

            </div>


            <div class="settings-options">


                <!-- Booking notifications -->

                <div class="settings-option">

                    <div>

                        <h3>
                            Booking Notifications
                        </h3>

                        <p>
                            Receive updates about your bookings.
                        </p>

                    </div>

                    <label class="toggle-switch">

                        <input
                            type="checkbox"
                            checked
                        >

                        <span class="toggle-slider"></span>

                    </label>

                </div>


                <!-- Email notifications -->

                <div class="settings-option">

                    <div>

                        <h3>
                            Email Notifications
                        </h3>

                        <p>
                            Receive important account updates by email.
                        </p>

                    </div>

                    <label class="toggle-switch">

                        <input
                            type="checkbox"
                            checked
                        >

                        <span class="toggle-slider"></span>

                    </label>

                </div>


                <!-- Promotions -->

                <div class="settings-option">

                    <div>

                        <h3>
                            Special Offers
                        </h3>

                        <p>
                            Receive promotions and special hotel offers.
                        </p>

                    </div>

                    <label class="toggle-switch">

                        <input
                            type="checkbox"
                        >

                        <span class="toggle-slider"></span>

                    </label>

                </div>

            </div>

        </section>


        <!-- =========================
             SECURITY
        ========================== -->

        <section class="settings-card">

            <div class="settings-heading">

                <div class="settings-heading-icon">
                    <i class="fa-solid fa-lock"></i>
                </div>

                <div>

                    <h2>
                        Security
                    </h2>

                    <p>
                        Manage your password and account security.
                    </p>

                </div>

            </div>


            <div class="security-row">

                <div>

                    <h3>
                        Password
                    </h3>

                    <p>
                        Last changed 30 days ago.
                    </p>

                </div>

                <button
                    type="button"
                    class="settings-outline-button"
                >
                    Change Password
                </button>

            </div>


            <div class="security-row">

                <div>

                    <h3>
                        Two-Factor Authentication
                    </h3>

                    <p>
                        Add an extra layer of security to your account.
                    </p>

                </div>

                <button
                    type="button"
                    class="settings-outline-button"
                >
                    Enable
                </button>

            </div>

        </section>


        <!-- =========================
             SAVE
        ========================== -->

        <div class="settings-save-area">

            <button
                type="button"
                class="settings-save-button"
            >
                <i class="fa-solid fa-check"></i>
                Save Changes
            </button>

        </div>

    </main>

</div>


<script src="js/dashboard.js"></script>

</body>

</html>