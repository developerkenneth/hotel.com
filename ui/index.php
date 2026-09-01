<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b1d28a03dc.js" crossorigin="anonymous"></script>
    <title>Room Details</title>
</head>

<body>
    <div class="body">
        <div class="box">
       
     </div>
    <div class="main-content hide">
        <div class="header">
            <h1 class="head">Deluxe Rooms</h1>
            <p class="ppp"><span class="icon"><i class="fa-solid fa-star"></i></span>4.8 rated</p>
        </div>


        <div class="room-details">
            <div class="main-room">
                <img src="./images/room4.jpg" alt="main-image" id="mainImage">
            </div>
            <div class="small-room">
                <img src="./images/room1.jpg" alt="room1" class="thumbnail" onclick="changeImage(this)">
                <img src="./images/room2.jpg" alt="room2" class="thumbnail" onclick="changeImage(this)">
                <img src="./images/room3.jpg" alt="room3" class="thumbnail" onclick="changeImage(this)">
                <img src="./images/room4.jpg" alt="room4" class="thumbnail" onclick="changeImage(this)">
            </div>
        </div>
        <div class="next-section">

            <!-- PRICE -->
            <div class="price">
                <h1 class="bott">Price</h1>

                <div class="price-info">
                    <h2>₦120,000 <span>/ Night</span></h2>

                    <p>
                        Enjoy a luxurious and comfortable stay in our Deluxe Room,
                        designed to give you the perfect combination of comfort,
                        relaxation and modern style.
                    </p>

                    <p class="small-text">Taxes and additional charges may apply.</p>
                </div>
            </div>


            <!-- AMENITIES -->
            <div class="price">

                <h1 class="bott">Amenities</h1>

                <div class="amenities-list">

                    <p class="ameni-p">
                        <i class="fa-solid fa-wifi icon"></i>
                        Wifi
                    </p>

                    <p class="ameni-p">
                        <i class="fa-solid fa-seedling icon"></i>
                        Garden View
                    </p>

                    <p class="ameni-p">
                        <i class="fa-solid fa-tv icon"></i>
                        Smart TV
                    </p>

                    <p class="ameni-p">
                        <i class="fa-solid fa-bell icon"></i>
                        Alarm Clock
                    </p>

                    <p class="ameni-p">
                        <i class="fa-solid fa-volume-high icon"></i>
                        Sound System
                    </p>

                    <p class="ameni-p">
                        <i class="fa-solid fa-phone icon"></i>
                        Telephone
                    </p>

                    <p class="ameni-p">
                        <i class="fa-brands fa-playstation icon"></i>
                        PlayStation
                    </p>

                </div>

            </div>


            <!-- CAPACITY -->
            <div class="price">

                <h1 class="bott">Capacity</h1>

                <div class="capacity-info">

                    <div class="capacity-item">
                        <i class="fa-solid fa-user-group icon"></i>

                        <div>
                            <h3>4 Guests</h3>
                            <p>Maximum occupancy</p>
                        </div>
                    </div>


                    <div class="capacity-item">
                        <i class="fa-solid fa-bed icon"></i>

                        <div>
                            <h3>2 Beds</h3>
                            <p>Comfortable sleeping space</p>
                        </div>
                    </div>


                    <div class="capacity-item">
                        <i class="fa-solid fa-ruler-combined icon"></i>

                        <div>
                            <h3>35 m²</h3>
                            <p>Room size</p>
                        </div>
                    </div>

                </div>

            </div>


            <!-- AVAILABLE ROOMS -->
            <div class="price">

                <h1 class="bott">Available Rooms</h1>

                <div class="available-room">

                    <div>
                        <h3>Deluxe Room</h3>
                        <p>King Bed • Garden View</p>
                    </div>

                    <div class="room-price">
                        <h3>₦120,000</h3>
                        <span>per night</span>
                    </div>

                    <button class="book-btn">Book Now</button>

                </div>


                <div class="available-room">

                    <div>
                        <h3>Executive Suite</h3>
                        <p>2 Beds • Balcony • Smart TV</p>
                    </div>

                    <div class="room-price">
                        <h3>₦180,000</h3>
                        <span>per night</span>
                    </div>

                    <button class="book-btn">Book Now</button>

                </div>

            </div>

        </div>
    </div>
    <script>
        function changeImage(image) {

            document.getElementById("mainImage").src = image.src;

        }
        const box = document.querySelector(".box");
        const maincontent = document.querySelector(".main-content");

        setTimeout(function() {
            box.classList.add("hide");
            maincontent.classList.remove("hide");
        }, 6000)
    </script>

</body>


</html>