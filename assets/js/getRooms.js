const roomsGrid = document.querySelector('.rooms-grid');
const loader = document.querySelector('.loader');
const handleLoading = () => {
    roomsGrid.innerHTML = "<p> Loading rooms ... </p>";
}

const displayRooms = (rooms) => {
    console.log(rooms);
    rooms.forEach((room) => {
        roomsGrid.innerHTML += `
                    <article class="room-card">

                    <div class="room-card-image">

                        <img
                            src="images/rooms/classic-room.jpg"
                            alt="Classic Room">

                        <span class="room-rating">
                            <i class="fa-solid fa-star"></i>
                            4.7
                        </span>

                    </div>


                    <div class="room-card-content">

                        <span class="room-type">
                           ${room.room_type}
                        </span>

                        <h3>
                            ${room.room_type}
                        </h3>

                        <p class="room-description">
                           ${room.description}
                        </p>


                        <div class="room-features">

                            <span>
                                <i class="fa-solid fa-user"></i>
                                ${room.capacity} Guests
                            </span>

                            <span>
                                <i class="fa-solid fa-bed"></i>
                                King Bed
                            </span>

                        </div>


                        <div class="room-card-footer">

                            <div class="room-price">

                                <strong>
                                   ${room.price}
                                </strong>

                                <span>
                                    / night
                                </span>

                            </div>

                            <a
                                href="/hotel.com/bookings/book/${room.id}"
                                class="room-book-button">
                                Book Now
                            </a>

                        </div>

                    </div>

                </article>
            `
    });
}


const fetchRooms = async () => {
    const url = "/hotel.com/rooms/api";
    let loading = true;
    try {
        const response = await fetch(url);
        const data = await response.json();
        const rooms = data.rooms;
        displayRooms(rooms);
        loading = false;
    } catch (error) {
        console.error(error)
    } finally {
        if (loading == false) {
            loader.classList.add("hide")
        }
    }
}


fetchRooms();