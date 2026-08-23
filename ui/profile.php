<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile | Hotel.com</title>

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

    <!-- SIDEBAR -->

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

            <a href="profile.php" class="dashboard-nav-link active">
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


    <!-- MAIN CONTENT -->

    <main class="dashboard-main">

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
                    Your account
                </p>

                <h1>
                    My Profile
                </h1>

                <p class="dashboard-subtitle">
                    Manage your personal information and account details.
                </p>

            </div>

        </header>


        <!-- PROFILE OVERVIEW -->

        <section class="profile-page-card">

            <div class="profile-page-header">

                <div class="profile-page-user">

                    <img
                        src="images/profiles/default-profile.jpg"
                        alt="William Dawson"
                        class="profile-page-image"
                    >

                    <div>

                        <h2>
                            William Dawson
                        </h2>

                        <p>
                            william@example.com
                        </p>

                        <span class="profile-member">
                            <i class="fa-solid fa-circle-check"></i>
                            Verified Account
                        </span>

                    </div>

                </div>

                <button
                    type="button"
                    class="profile-edit-page-button"
                >
                    <i class="fa-solid fa-pen"></i>
                    Edit Profile
                </button>

            </div>

        </section>


        <!-- PERSONAL INFORMATION -->

        <section class="profile-information-card">

            <div class="profile-section-heading">

                <div>

                    <p class="section-label">
                        Account details
                    </p>

                    <h2>
                        Personal Information
                    </h2>

                </div>

            </div>


            <div class="profile-information-grid">

                <div class="profile-information-item">

                    <span>
                        Full Name
                    </span>

                    <strong>
                        William Dawson
                    </strong>

                </div>


                <div class="profile-information-item">

                    <span>
                        Email Address
                    </span>

                    <strong>
                        william@example.com
                    </strong>

                </div>


                <div class="profile-information-item">

                    <span>
                        Phone Number
                    </span>

                    <strong>
                        +234 801 234 5678
                    </strong>

                </div>


                <div class="profile-information-item">

                    <span>
                        Date of Birth
                    </span>

                    <strong>
                        15 March 1998
                    </strong>

                </div>


                <div class="profile-information-item">

                    <span>
                        Gender
                    </span>

                    <strong>
                        Male
                    </strong>

                </div>


                <div class="profile-information-item">

                    <span>
                        Country
                    </span>

                    <strong>
                        Nigeria
                    </strong>

                </div>

            </div>

        </section>


        <!-- CONTACT INFORMATION -->

        <section class="profile-information-card">

            <div class="profile-section-heading">

                <div>

                    <p class="section-label">
                        Where you live
                    </p>

                    <h2>
                        Contact Information
                    </h2>

                </div>

            </div>


            <div class="profile-information-grid">

                <div class="profile-information-item profile-full-width">

                    <span>
                        Address
                    </span>

                    <strong>
                        15 Admiralty Way, Lagos, Nigeria
                    </strong>

                </div>


                <div class="profile-information-item">

                    <span>
                        City
                    </span>

                    <strong>
                        Lagos
                    </strong>

                </div>


                <div class="profile-information-item">

                    <span>
                        State
                    </span>

                    <strong>
                        Lagos State
                    </strong>

                </div>

            </div>

        </section>


        <!-- ACCOUNT INFORMATION -->

        <section class="profile-information-card">

            <div class="profile-section-heading">

                <div>

                    <p class="section-label">
                        Account status
                    </p>

                    <h2>
                        Account Information
                    </h2>

                </div>

            </div>


            <div class="profile-account-list">

                <div class="profile-account-item">

                    <div class="profile-account-icon">
                        <i class="fa-solid fa-calendar-plus"></i>
                    </div>

                    <div>

                        <span>
                            Member Since
                        </span>

                        <strong>
                            January 2026
                        </strong>

                    </div>

                </div>


                <div class="profile-account-item">

                    <div class="profile-account-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div>

                        <span>
                            Account Status
                        </span>

                        <strong class="account-active">
                            Active
                        </strong>

                    </div>

                </div>


                <div class="profile-account-item">

                    <div class="profile-account-icon">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>

                    <div>

                        <span>
                            Total Bookings
                        </span>

                        <strong>
                            8 Bookings
                        </strong>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>


<script src="js/dashboard.js"></script>

</body>

</html>