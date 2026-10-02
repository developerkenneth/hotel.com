// run a fetch
const params = new URLSearchParams(window.location.search);
const page = params.get('page') ?? 1;


/**
 * 
 *                 <!-- BOOKING 1 -->

                
 */


async function handleFetch() {
    const response = await fetch(`http://localhost/hotel.com/bookings/api?page=${page}&limit=10`);
    const data = await response.json();
    const history = document.querySelector('.history-list');

    data.data.bookings.forEach((booking) => {
        history.innerHTML += `
        <article
                    class="history-card"
                    data-status="completed">

                    <div class="history-room-image">

                        <img
                            src="images/rooms/executive.jpg"
                            alt="Executive Suite">

                    </div>


                    <div class="history-card-content">

                        <div class="history-card-top">

                            <div>

                                <span class="history-room-type">
                                    Executive Suite
                                </span>

                                <h3>
                                    Executive Suite
                                </h3>

                            </div>

                            <span class="status-badge completed-status">
                                Completed
                            </span>

                        </div>


                        <div class="history-details">

                            <div>
                                <span>Check-in</span>
                                <strong>${booking.checkin}</strong>
                            </div>

                            <div>
                                <span>Check-out</span>
                                <strong>${booking.checkout}</strong>
                            </div>

                            <div>
                                <span>Guests</span>
                                <strong>2 Guests</strong>
                            </div>

                            <div>
                                <span>Amount</span>
                                <strong>₦${booking.amount}</strong>
                            </div>

                        </div>


                        <div class="history-card-footer">

                            <div class="history-reference">

                                <span>
                                    Booking Reference
                                </span>

                                <strong>
                                    #HSW-19842
                                </strong>

                            </div>

                            <button
                                type="button"
                                class="history-view-button">
                                View Details
                            </button>

                        </div>

                    </div>

                </article>
        `
    })

    const limit = parseInt(data.limit);
    const totalBookings = parseInt(data.data.total_count);

    const totalPages = Math.ceil(totalBookings / limit);

    const pages = document.querySelector(".pages");

    for (let i = 1; i <= totalPages; i++) {

        // style the links here
        pages.innerHTML += `
        <a href="?pages=${i}">${i}</a>
        `;
    }



}

handleFetch();