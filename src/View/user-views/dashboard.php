<?php

use App\Helpers\View;
use App\Middleware\Authentication;


// check if user is loggedin
if (Authentication::isLoggedIn() === false) {
    header("location:" . ROOT_URL . "/auth/login");
    exit;
}

$user = Authentication::user();

$pendingBookings = count($data['pending_bookings']);
$activeBookings = count($data['active_bookings']);
$completedStays = count($data['completed_stay']);
$latestBookings = $data['latest'];


?>

<?php
$pageTitle = "Dashboard";
View::handleComponents('users/head.php');

?>

<div class="dashboard">

    <!-- Dashboard content  -->

    <!-- sidebar here -->

    <?php View::handleComponents('users/navigation.php'); ?>

    <!-- Main Dashboard Content -->
    <main class="dashboard-main">

        <!-- Dashboard Header -->
        <header class="dashboard-header">

            <button
                type="button"
                class="mobile-menu-button"
                id="mobile-menu-button"
                aria-label="Open navigation menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="dashboard-welcome">
                <p class="dashboard-greeting" id="greeting"></p>

                <h1>Welcome back, <?= $user['first_name'] ?>!</h1>

                <p class="dashboard-subtitle">
                    Here's what's happening with your bookings.
                </p>
            </div>

            <div class="dashboard-header-actions">

                <button
                    type="button"
                    class="notification-button"
                    id="notification-button"
                    aria-label="View notifications">
                    <i class="fa-solid fa-bell"></i>
                    <span class="notification-indicator"></span>
                </button>

                <button
                    type="button"
                    class="profile-button"
                    id="profile-button">
                    <img
                        src="images/profiles/default-profile.jpg"
                        alt="William Dawson"
                        class="profile-image">

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
                    <strong class="summary-value"><?= $activeBookings ?></strong>
                </div>
            </article>


            <article class="summary-card">
                <div class="summary-icon">
                    <i class="fa-solid fa-bed"></i>
                </div>

                <div class="summary-content">
                    <span class="summary-label">Completed Stays</span>
                    <strong class="summary-value"><?= $completedStays ?></strong>
                </div>
            </article>


            <article class="summary-card">
                <div class="summary-icon">
                    <i class="fa-solid fa-hourglass-half"></i>
                </div>

                <div class="summary-content">
                    <span class="summary-label">Pending Bookings</span>
                    <strong class="summary-value"><?= $pendingBookings; ?></strong>
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
                        alt="Deluxe hotel room">
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

                <a href="<?= ROOT_URL ?>/booking-history" class="section-action">
                    View history
                </a>
            </div>


            <div class="recent-bookings">

                <?php
                if (!empty($latestBookings)):
                    foreach ($latestBookings as $lastestBooking):
                ?>
                        <article class="booking-history-item">

                            <div class="booking-history-icon">
                                <i class="fa-solid fa-bed"></i>
                            </div>

                            <div class="booking-history-details">
                                <h3><?= $lastestBooking['customers_name'] ?></h3>
                                <p><?= $lastestBooking['checkin'] ?> — <?= $lastestBooking['checkout'] ?></p>
                            </div>

                            <?= $lastestBooking['status'] === "check_out" ? '<span class="status-badge completed-status">Completed</span>' : '<span class="status-badge pending-status">
                        Pending
                    </span>';  ?>

                            <strong class="booking-price">
                                ₦<?= number_format($lastestBooking['payment']) ?>
                            </strong>

                        </article>

                    <?php endforeach; ?>

                    <!-- end else if -->

                <?php else : ?>

                    <p>NO recent bookings</p>
                <?php endif; ?>
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
                    <h2>Staff Profile</h2>
                </div>

                <button
                    type="button"
                    class="profile-edit-button"
                    id="profile-edit-button"
                    aria-label="Edit profile">
                    <i class="fa-solid fa-pen"></i>
                </button>
            </div>

            <div class="profile-card-content">

                <img
                    src="<?php assets('svg/profile-pic.svg'); ?>"
                    alt="William Dawson"
                    class="profile-card-image">

                <h3><?= $user['first_name'] . " " . $user['last_name'] ?></h3>

                <p class="profile-email">
                    <?= $user['email'] ?>
                </p>

            </div>

        </section>



        <!-- Notifications -->
        <section class="notifications-card">

            <div class="right-panel-heading">
                <h2>Notifications</h2>

                <button
                    type="button"
                    class="more-button"
                    aria-label="More notification options">
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
<!-- footer -->

<?php View::handleComponents('users/footer.php');
