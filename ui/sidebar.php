<?php
$current_page = basename($_SERVER['PHP_SELF']);
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
    <a href="index.php" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Overview</a>
    <a href="bookings.php" class="nav-link <?php echo ($current_page == 'bookings.php') ? 'active' : ''; ?>">Bookings</a>
    <a href="rooms.php" class="nav-link <?php echo ($current_page == 'rooms.php') ? 'active' : ''; ?>">Rooms</a>
    <a href="message.php" class="nav-link <?php echo ($current_page == 'message.php') ? 'active' : ''; ?>">Messages</a>
    <a href="login.php" class="nav-link logout">Log out</a>
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