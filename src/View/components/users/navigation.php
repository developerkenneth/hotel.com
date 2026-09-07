<?php


$requestUrl = $_SERVER['REQUEST_URI'];
$urlArray = explode('/', $requestUrl);
$currentPage = end($urlArray);

function getActivePage($currentPage, $pageName)
{
    if ($currentPage === $pageName) {
        return 'active';
    }
}
?>

<!-- Dashboard Sidebar -->
<aside class="dashboard-sidebar">

    <!-- Hotel Logo -->
    <div class="hotel-logo">
        <i class="fa-solid fa-hotel"></i>
        <span>HOTEL.com</span>
    </div>

    <!-- Dashboard Navigation -->
    <nav class="dashboard-navigation">

        <a href="<?= getUrl('/user/dashboard'); ?>" class="dashboard-nav-link <?= getActivePage($currentPage, 'dashboard') ?>">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span>
        </a>

        <a href="<?= getUrl('/user/bookings'); ?>" class="dashboard-nav-link <?= getActivePage($currentPage, 'bookings') ?>">
            <i class="fa-solid fa-calendar-check"></i>
            <span>My Bookings</span>
        </a>

        <a href="<?= getUrl('/user/rooms') ?>" class="dashboard-nav-link <?= getActivePage($currentPage, 'rooms') ?>">
            <i class="fa-solid fa-bed"></i>
            <span>Browse Rooms</span>
        </a>

        <a href="<?= getUrl('/user/booking-history'); ?>" class="dashboard-nav-link <?= getActivePage($currentPage, 'booking-history') ?>">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span>Booking History</span>
        </a>

        <a href="<?= getUrl('/user/profile'); ?>" class="dashboard-nav-link <?= getActivePage($currentPage, 'profile') ?>">
            <i class="fa-solid fa-user"></i>
            <span>My Profile</span>
        </a>

        <a href="<?= getUrl('/user/settings') ?>" class="dashboard-nav-link <?= getActivePage($currentPage, 'settings') ?>">
            <i class="fa-solid fa-gear"></i>
            <span>Settings</span>
        </a>

    </nav>

    <!-- Logout -->
    <div class="dashboard-sidebar-footer">
        <a href="logout.php" class="dashboard-nav-link logout-link">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>
    </div>

</aside>
<div class="sidebar-overlay" id="sidebar-overlay"></div>