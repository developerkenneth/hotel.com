<?php






?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 
     <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <!-- NAVBAR -->
    <header class="navbar">

        <div class="logo">
            <span class="logo-icon">H</span>

            <div>
                <h2>Hotel.com</h2>
                <p>LUXURY REDEFINED</p>
            </div>
        </div>
        <nav>
            <a href="home.php">Home</a>
            <a href="#about">About Us</a>
            <a href="room.php">Rooms</a>
            <a href="#facilities">Facilities</a>
            <a href="#contact">Contact</a>
        </nav>
        <a href="booking.php" class="nav-btn">Book Now</a>
    </header> 
     <!--HERO  -->
     <section id="home" class="hero">
        <div class="hero-content">
            <p class="hero-subtitle">
                PREMIUM HOSPITALITY • FIRST CLASS EXPERIENCES </p>
            <h1>Luxury Stays,<br>
                <span>Reimagined</span></h1>
            <div class="hero-line"></div>
            <p class="hero-description">
                Discover exceptional accommodations,
                experiences, and exclusive amenities designed
                for the modern traveler.</p>
            <div class="hero-buttons">
                <a href="booking.php" class="btn primary-btn">
                    Book Your Stay</a>
                <a href="rooms.php" class="btn secondary-btn">
                    Explore Rooms</a>
            </div>
        </div> 
         <!-- Hero highlights -->
         <div class="hero-features">
         <!-- FIRST CLASS SERVICES  -->
       <div class="feature">
        <div class="feature-icon">
            <i class="fa-solid fa-bell-concierge"></i></div>
        <div>
            <h4>FIRST CLASS SERVICES</h4>
            <p>Personalized for you <br>
            Class,Comfort meets Luxury.</p>
        </div>
    </div>
    <!-- ABOUT  -->
    <div class="feature" id="about">
        <div class="feature-icon">
            <i class="fa-solid fa-hotel"></i>
        </div>
        <div>
            <h4>ABOUT</h4>
            <p> Welcome to our hotel. We provide exceptional
                accommodation and first-class hospitality
                designed to make your stay comfortable and memorable.</p>
        </div>
    </div>
        <!-- GOURMET DINING -->
     <div class="feature">
        <div class="feature-icon">
            <i class="fa-solid fa-utensils"></i>
        </div>
        <div>
            <h4>GOURMET DINING</h4>
            <p>Exceptional cuisine<br>
            Where taste meets elegance,class and culture.</p>
        </div>
    </div> 
           <!-- FACILITIES   -->
    <div class="feature" id="facilities">
        <div class="feature-icon">
            <i class="fa-solid fa-building"></i>
        </div>

        <div>
            <h4>FACILITIES</h4>
            <p>Enjoy our swimming pool, gym, restaurant and
                other premium facilities during your stay.
            </p>
        </div>
    </div>

    </div>
    </section>
   <footer class="footer" id="contact">
    <div class="footer-content">
        <div class="footer-about">
            <h2>Hotel.com</h2>
            <p>Luxury stays and first-class experiences<br>
                designed for the modern traveler.<br>
                Tailored experiences with private tours.
            </p>
        </div>

        <div class="footer-contact">
         <h3>Contact Us</h3>

        <p><i class="fa-solid fa-location-dot"></i>
        Enugu State, Nigeria</p>
       <p><i class="fa-solid fa-phone"></i>
        +234 8125825031</p>
      <p><i class="fa-solid fa-envelope"></i>
        deragabriella@gmail.com</p>
     </div>
     </div>
    <div class="footer-bottom">
        <p>&copy; 2026 Hotel.com. All Rights Reserved.</p>
    </div>

</footer>





</body>
</html> 