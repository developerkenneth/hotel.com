<?php $pageTitle = "Dashboard";

use App\Helpers\View;
use App\Middleware\Authentication;

// $bookings = $data['bookings'];

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

                <!-- <a href="?page=1" class="pagination-prev">
                    <i class="fa-solid fa-chevron-left"></i>
                    Previous
                </a>

                <a href="?page=1">1</a>
                <a href="?page=2">2</a>
                <a href="?page=3">3</a>

                <a href="?page=2" class="pagination-next">
                    Next
                    <i class="fa-solid fa-chevron-right"></i>
                </a> -->

            </div>

        </section>

        <!-- Edit Booking Modal -->
<div class="edit-booking-modal" id="editBookingModal">

    <div class="edit-booking-modal-content">

        <div class="edit-booking-modal-header">

            <div>
                <h2>Edit Booking</h2>
                <p>Update the status of this booking.</p>
            </div>

            <button
                type="button"
                class="edit-booking-modal-close"
                id="editBookingModalClose"
                aria-label="Close edit booking modal">
                <i class="fa-solid fa-xmark"></i>
            </button>

        </div>


        <div class="edit-booking-modal-body">

            <div class="edit-booking-reference">

                <span>Booking Reference</span>

                <strong id="editBookingReference">
                    #HSW-19842
                </strong>

            </div>


            <div class="edit-booking-field">

                <label for="bookingStatus">
                    Booking Status
                </label>

                <select id="bookingStatus">

                    <option value="pending">
                        Pending
                    </option>

                    <option value="confirmed">
                        Confirmed
                    </option>

                    <option value="checked_in">
                        Checked In
                    </option>

                    <option value="checked_out">
                        Checked Out
                    </option>

                    <option value="cancelled">
                        Cancelled
                    </option>

                </select>

                <small>
                    Choose the current status of this guest's booking.
                </small>

            </div>

        </div>


        <div class="edit-booking-modal-footer">

            <button
                type="button"
                class="edit-booking-cancel"
                id="editBookingCancel">
                Cancel
            </button>

            <button
                type="button"
                class="edit-booking-save"
                id="editBookingSave">
                Save Changes
            </button>

        </div>

    </div>

</div>

    </main>

</div>


<script src="<?php assets('js/dashboard.js') ?>"></script>
<script src="<?php assets('js/getBookings.js') ?>"></script>


</body>

</html>