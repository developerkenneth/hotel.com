// run a fetch
const params = new URLSearchParams(window.location.search);
const page = params.get('page') ?? 1;
let currentPage = parseInt(page);

/**
 * 
 *                 <!-- BOOKING 1 -->

                
 */


async function handleFetch() {
    const response = await fetch(`http://localhost/hotel.com/bookings/api?page=${page}&limit=1`);
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

    // const previousPage = page > 1 ? page - 1 : 1;
    // const nextPage = page < totalPages ? Number(page) + 1 : totalPages;

    const pages = document.querySelector(".pages");




    // previous page 
    const prev = currentPage > 1 ? currentPage - 1 : null;

    if (prev) {
        pages.innerHTML = `<a class=" pagination-prev" href="?page=${prev}">previous page</a>`;
    }

    for (let i = 1; i <= totalPages; i++) {

        if (currentPage === i) {
            pages.innerHTML += `<a class=" active" href="?page=${i}">${i}</a>`;
        } else {
            pages.innerHTML += `<a  href="?page=${i}">${i}</a>`;

        }


    }

    // next page 
    if (currentPage < totalPages) {
        pages.innerHTML += `<a class="pagination-next" href="?page=${currentPage + 1}">next page</a>`
    }

    // const pageLinks = pages.querySelectorAll("a");
    // const previousLink = pages.querySelector(".pagination-prev");
    // const nextLink = pages.querySelector(".pagination-next");

    // previousLink.href = `?page=${previousPage}`;
    // nextLink.href = `?page=${nextPage}`;

    // pageLinks.forEach((link) => {
    //     if (
    //         !link.classList.contains("pagination-prev") &&
    //         !link.classList.contains("pagination-next") &&
    //         link.getAttribute("href") === `?page=${page}`
    //     ) {
    //         link.classList.add("active");
    //     }
    // });
}
handleFetch();