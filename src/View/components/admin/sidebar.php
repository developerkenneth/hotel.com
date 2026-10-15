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

<div class="mobile-header">
    <div class="brand">
        <h2 class="brand-title">Hotel.com</h2>
    </div>
    <button type="button" id="menu-toggle" class="menu-toggle-btn" aria-label="Toggle Navigation">
        <i class="fa-solid fa-bars icon-hamburger"></i>
        <i class="fa-solid fa-xmark icon-close" style="display: none;"></i>
    </button>
</div>

<nav class="nav-menu" id="nav-menu">
    <a href="<?= getUrl('/admin/dashboard') ?>" class="nav-link <?php echo getActivePage($currentPage, 'dashboard') ?>">Overview</a>
    <a href="<?= getUrl('/admin/bookings') ?>" class="nav-link <?php echo getActivePage($currentPage, 'bookings') ?>">Bookings</a>
    <a href="<?= getUrl('/admin/rooms') ?>" class="nav-link <?php echo getActivePage($currentPage, 'rooms') ?>">Rooms</a>
    <a href="<?= getUrl('/admin/messages') ?>" class="nav-link <?php echo getActivePage($currentPage, 'messages') ?>">Messages</a>
    <a href="<?= getUrl('/auth/logout') ?>" class="nav-link logout">Log out</a>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');
    const iconHamburger = menuToggle.querySelector('.icon-hamburger');
    const iconClose = menuToggle.querySelector('.icon-close');

    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('show');
        const isOpen = navMenu.classList.contains('show');
        iconHamburger.style.display = isOpen ? 'none' : 'inline-block';
        iconClose.style.display = isOpen ? 'inline-block' : 'none';
    });
</script>