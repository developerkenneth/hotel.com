// ==============================
// Available Rooms
// ==============================

const rooms = [
    {
        name: "Deluxe Room",
        price: 80000,
        capacity: 2,
        amenities: "Wi-Fi, TV, Air Conditioning",
        image: "images/room1.jpg"
    },

    {
        name: "Executive Suite",
        price: 120000,
        capacity: 4,
        amenities: "Wi-Fi, TV, Mini Bar, Air Conditioning",
        image: "images/room2.jpg"
    },

    {
        name: "Standard Room",
        price: 50000,
        capacity: 2,
        amenities: "Wi-Fi, TV, Private Bathroom",
        image: "images/room3.jpg"
    }
];


// ==============================
// Display Rooms
// ==============================

const roomsContainer = document.getElementById("rooms-container");

rooms.forEach(function(room) {

    const roomCard = document.createElement("div");

    roomCard.classList.add("room-card");

    roomCard.innerHTML = `
        <img src="${room.image}" alt="${room.name}">

        <div class="room-info">

            <h3>${room.name}</h3>

            <p class="price">
                ₦${room.price.toLocaleString()} / night
            </p>

            <p>👥 Capacity: ${room.capacity} Guests</p>

            <p>✨ ${room.amenities}</p>

            <p class="available">
                🟢 Available
            </p>

        </div>
    `;

    roomsContainer.appendChild(roomCard);

});