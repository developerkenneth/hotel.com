<?php $pageTitle = "Dashboard";

use App\Helpers\View;
use App\Middleware\Authentication;

$bookings = $data['bookings'];

View::handleComponents('users/head.php');

// check if user is loggedin
if (Authentication::isLoggedIn() === false) {
    header("location:" . ROOT_URL . "/auth/login");
    exit;
}


?>
<div class="dashboard">

    <!-- =========================
         SIDEBAR
    ========================== -->
    <?php View::handleComponents('users/navigation.php'); ?>

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
                    id="history-filter">
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


            </div>

            <!-- pages -->
            <!-- where links should be -->
            <div class="pages">

            </div>

        </section>

    </main>

</div>


<script src="<?php assets('js/dashboard.js') ?>"></script>
<script src="<?php assets('js/getBookings.js') ?>"></script>


</body>

</html>