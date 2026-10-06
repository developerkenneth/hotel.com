<?php

use App\Helpers\View;

View::handleComponents('users/head.php');

?>

<div class="dashboard">
    <?php View::handleComponents('users/navigation.php'); ?>
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
                            checked>

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
                            checked>

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
                            type="checkbox">

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
                    class="settings-outline-button" id="change-password-button">

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
                    class="settings-outline-button">
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
                class="settings-save-button">
                <i class="fa-solid fa-check"></i>
                Save Changes
            </button>

        </div>


        <!-- FOR CHANGE PASSWORD MODAL -->

        <div class="password-modal" id="password-modal">

            <div class="password-modal-content">

                <button
                    type="button"
                    class="password-modal-close"
                    id="password-modal-close"
                    aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <div class="password-modal-heading">

                    <div class="password-modal-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <div>
                        <h2>Change Password</h2>

                        <p>
                            Update your password to keep your account secure.
                        </p>
                    </div>

                </div>


                <form id="change-password-form">

                    <div class="password-field">

                        <label for="current-password">
                            Current Password
                        </label>

                        <input
                            type="password"
                            id="current-password"
                            name="current_password"
                            placeholder="Enter your current password"
                            required>

                    </div>


                    <div class="password-field">

                        <label for="new-password">
                            New Password
                        </label>

                        <input
                            type="password"
                            id="new-password"
                            name="new_password"
                            placeholder="Enter your new password"
                            required>

                    </div>


                    <div class="password-field">

                        <label for="confirm-password">
                            Confirm Password
                        </label>

                        <input
                            type="password"
                            id="confirm-password"
                            name="confirm_password"
                            placeholder="Confirm your new password"
                            required>

                    </div>


                    <button
                        type="submit"
                        class="password-change-button">
                        Change Password
                    </button>

                </form>

            </div>

        </div>
    </main>
</div>





<?php View::handleComponents('users/footer.php'); ?>