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

        // map booking status to display labels
        const statusLabels = {
           pending: "Pending",
           confirmed: "Confirmed",
           checked_in: "Checked In",
           checked_out: "Checked Out",
            cancelled: "Cancelled"
         };

        const statusLabel = statusLabels[booking.status] ?? booking.status;

        history.innerHTML += `
        <article
                 
                  class="history-card"
                  data-booking-id="${booking.id}"
                   data-status="${booking.status}">

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

                             
                            <span class="status-badge ${booking.status}-status booking-status">
                            ${statusLabel}
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

                            <button
                                type="button"
                                class="history-edit-button"
                                data-booking-id="${booking.id}">
                                 Edit
                            </button>
                                
                        </div>

                    </div>

                </>
        `
    })
        // Edit button functionality
    const editButtons = document.querySelectorAll(".history-edit-button");

const editBookingModal = document.querySelector("#editBookingModal");
const editBookingModalClose = document.querySelector("#editBookingModalClose");
const editBookingCancel = document.querySelector("#editBookingCancel");
const editBookingSave = document.querySelector("#editBookingSave");

editBookingSave.addEventListener("click", async () => {

    const bookingId = editBookingModal.dataset.bookingId;
    const status = document.querySelector("#bookingStatus").value;

    const response = await fetch(`http://localhost/hotel.com/api/book/${bookingId}`, {
    method: "PATCH",
    headers: {
        "Content-Type": "application/json"
    },
    body: JSON.stringify({
        status: status
    })
});
    const data = await response.json();

    if (data.success) {
    console.log(data.message);

    const bookingCard = document.querySelector(
    `.history-card[data-booking-id="${bookingId}"]`
    );

    const bookingStatus = bookingCard.querySelector(".booking-status");

    const statusLabels = {
    pending: "Pending",
    confirmed: "Confirmed",
    checked_in: "Checked In",
    checked_out: "Checked Out",
    cancelled: "Cancelled"
};

bookingStatus.textContent = statusLabels[status];
bookingStatus.classList.remove("completed-status");
bookingStatus.classList.add(`${status}-status`);
bookingCard.dataset.status = status;

    editBookingModal.style.display = "none";
} else {
    console.log(data.message);
}

}); 

editButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const bookingId = button.dataset.bookingId;

        document.querySelector("#editBookingReference").textContent = `#${bookingId}`;

         const bookingCard = document.querySelector(
          `.history-card[data-booking-id="${bookingId}"]`
        );
          
           const currentStatus = bookingCard.dataset.status;

           document.querySelector("#bookingStatus").value = currentStatus;

        editBookingModal.dataset.bookingId = bookingId;
        editBookingModal.style.display = "flex";
    });
});

editBookingModalClose.addEventListener("click", () => {
    editBookingModal.style.display = "none";
});

editBookingCancel.addEventListener("click", () => {
    editBookingModal.style.display = "none";
});

      //  pagination
    const limit = parseInt(data.limit);
    const totalBookings = parseInt(data.data.total_count);

    const totalPages = Math.ceil(totalBookings / limit);

    const previousPage = page > 1 ? page - 1 : 1;
    const nextPage = page < totalPages ? Number(page) + 1 : totalPages;

    const pages = document.querySelector(".pages");

    // for (let i = 1; i <= totalPages; i++) {

    //     // style the links here
    //     pages.innerHTML += `
    //     <a href="?page=${i}">${i}</a>
    //     `;
    // }

const pageLinks = pages.querySelectorAll("a");
const previousLink = pages.querySelector(".pagination-prev");
const nextLink = pages.querySelector(".pagination-next");

previousLink.href = `?page=${previousPage}`;
nextLink.href = `?page=${nextPage}`;

pageLinks.forEach((link) => {
    if (
        !link.classList.contains("pagination-prev") &&
        !link.classList.contains("pagination-next") &&
        link.getAttribute("href") === `?page=${page}`
    ) {
        link.classList.add("active");
    }
});
}
handleFetch();