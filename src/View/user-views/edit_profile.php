
<?php

use App\Middleware\Authentication;

$user = Authentication::user();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Profile | Hotel.com</title>

    <link rel="stylesheet" href="<?php assets("css/dashboard.css") ?>">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    >
</head>

<body>

    <main class="edit-profile-container">

        <!-- Page Header -->
        <div class="edit-profile-header">

            <a href="/hotel.com/user/profile" class="back-profile-link">
                <i class="fa-solid fa-arrow-left"></i>
                Back to Profile
            </a>

            <h1>Edit Profile</h1>

            <p>Manage your profile picture and personal details.</p>

        </div>

        <form id="edit-profile-form" enctype="multipart/form-data">

            <!-- Profile Picture Section -->
            <section class="edit-profile-card">

                <h2>Profile Picture</h2>

                <p class="section-description">
                    Choose a clear picture so people can recognize you.
                </p>

                <div class="profile-image-upload">

                    <label for="profile-image" class="profile-image-label">

                        <img
                            src="/hotel.com/images/profiles/default-profile.jpg"
                            alt="Profile picture"
                            id="profile-preview"
                        >

                        <span class="upload-camera-icon">
                            <i class="fa-solid fa-camera"></i>
                        </span>

                    </label>

                    <input
                        type="file"
                        id="profile-image"
                        name="profile_image"
                        accept="image/png, image/jpeg, image/webp"
                        hidden
                    >

                    <h3>
                        <?= htmlspecialchars(
                            ($user["first_name"] ?? "") . " " .
                            ($user["last_name"] ?? "")
                        ) ?>
                    </h3>

                    <p class="upload-hint">
                        Click the image to select a new picture
                    </p>

                    <p class="upload-format">
                        JPG, PNG or WEBP
                    </p>

                </div>

            </section>

            <!-- Personal Information Section -->
            <section class="edit-profile-card personal-information-card">

                <h2>Personal Information</h2>

                <p class="section-description">
                    Update your personal details below.
                </p>

                <div class="edit-profile-fields">

                    <!-- First Name -->
                    <div class="edit-profile-field">

                        <label for="first-name">First Name</label>

                        <input
                            type="text"
                            id="first-name"
                            name="first_name"
                            placeholder="Enter your first name"
                            value="<?= htmlspecialchars($user["first_name"] ?? "") ?>"
                        >

                    </div>

                    <!-- Last Name -->
                    <div class="edit-profile-field">

                        <label for="last-name">Last Name</label>

                        <input
                            type="text"
                            id="last-name"
                            name="last_name"
                            placeholder="Enter your last name"
                            value="<?= htmlspecialchars($user["last_name"] ?? "") ?>"
                        >

                    </div>

                    <!-- Email -->
                    <div class="edit-profile-field">

                        <label for="email">Email Address</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email address"
                            value="<?= htmlspecialchars($user["email"] ?? "") ?>"
                        >

                    </div>

                    <!-- Phone Number -->
                    <div class="edit-profile-field">

                        <label for="phone">Phone Number</label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="Enter your phone number"
                            value="<?= htmlspecialchars($user["phone"] ?? "") ?>"
                        >

                    </div>

                </div>

            </section>

            <!-- Action Buttons -->
            <div class="edit-profile-actions">

                <a href="/hotel.com/profile" class="cancel-profile-button">
                    Cancel
                </a>

                <button type="submit" class="update-profile-button">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Update Profile
                </button>

            </div>

        </form>

    </main>

    
   <script src="/hotel.com/assets/js/edit-profile.js"></script>
</body>

</html>
