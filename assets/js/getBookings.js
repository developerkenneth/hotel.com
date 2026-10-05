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
                                
                            <button
                                  type="button"
                                   class="history-edit-button"
                                  data-booking-id="${booking.id}">
                                   Edit
                            </button>

                        </div>

                    </div>

                </article>
        `
    })

    // Edit button styling
const editButtons = document.querySelectorAll(".history-edit-button");

editButtons.forEach((button) => {

    button.style.display = "inline-block";
    button.style.padding = "8px 12px";
    button.style.margin = "0 5px";
    button.style.border = "none";
    button.style.borderRadius = "5px";
    button.style.color = "#fff";
    button.style.backgroundColor = "#FF6B00";
    button.style.cursor = "pointer";

});

    const limit = parseInt(data.limit);
    const totalBookings = parseInt(data.data.total_count);

    const totalPages = Math.ceil(totalBookings / limit);

    const pages = document.querySelector(".pages");

    // for (let i = 1; i <= totalPages; i++) {

    //     // style the links here
    //     pages.innerHTML += `
    //     <a href="?page=${i}">${i}</a>
    //     `;
    // }


    const pageLinks = pages.querySelectorAll("a");

pageLinks.forEach((link) => {
    link.style.display = "inline-block";
    link.style.padding = "8px 12px";
    link.style.margin = "0 5px";
    link.style.textDecoration = "none";
    link.style.borderRadius = "5px";
    link.style.color = "#000";
    link.style.backgroundColor = "#fff";
    link.style.border = "1px solid #FF6B00";

    if (link.href.includes(`page=${page}`)) {
        link.style.backgroundColor = "#FF6B00";
        link.style.color = "#fff";
    }
});

}

handleFetch();



// Edit booking status
document.addEventListener("click", function (event) {

    if (event.target.classList.contains("history-edit-button")) {

        const bookingId = event.target.dataset.bookingId;

        // Create modal
        const modal = document.createElement("div");

        modal.className = "booking-status-modal";

        modal.innerHTML = `
            <div class="booking-status-modal-content">

                <h3>Edit Booking Status</h3>

                <label for="booking-status">
                    Booking Status
                </label>

                <select id="booking-status">

                    <option value="pending">
                        Pending
                    </option>

                    <option value="confirmed">
                        Confirmed
                    </option>

                    <option value="checked_in">
                        Checked In
                    </option>

                    <option value="checked_out">
                        Checked Out
                    </option>

                </select>

                <div class="booking-status-modal-buttons">

                    <button
                        type="button"
                        class="booking-status-cancel">
                        Cancel
                    </button>

                    <button
                        type="button"
                        class="booking-status-save">
                        Save
                    </button>

                </div>

            </div>
        `;

        // Modal styling
        modal.style.position = "fixed";
        modal.style.top = "0";
        modal.style.left = "0";
        modal.style.width = "100%";
        modal.style.height = "100%";
        modal.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
        modal.style.display = "flex";
        modal.style.justifyContent = "center";
        modal.style.alignItems = "center";
        modal.style.zIndex = "9999";

        const modalContent = modal.querySelector(
            ".booking-status-modal-content"
        );

        modalContent.style.backgroundColor = "#fff";
        modalContent.style.padding = "25px";
        modalContent.style.borderRadius = "8px";
        modalContent.style.width = "350px";

        const select = modal.querySelector("#booking-status");

        select.style.width = "100%";
        select.style.padding = "10px";
        select.style.marginTop = "8px";
        select.style.marginBottom = "20px";

        const cancelButton = modal.querySelector(
            ".booking-status-cancel"
        );

        const saveButton = modal.querySelector(
            ".booking-status-save"
        );

        cancelButton.style.padding = "8px 15px";
        cancelButton.style.marginRight = "10px";
        cancelButton.style.cursor = "pointer";

        saveButton.style.padding = "8px 15px";
        saveButton.style.backgroundColor = "#FF6B00";
        saveButton.style.color = "#fff";
        saveButton.style.border = "none";
        saveButton.style.borderRadius = "5px";
        saveButton.style.cursor = "pointer";

        document.body.appendChild(modal);


        // Cancel button
        cancelButton.addEventListener("click", function () {
            modal.remove();
        });


        // Save button
        saveButton.addEventListener("click", function () {

            const status = select.value;

            updateBookingStatus(bookingId, status);

            modal.remove();

        });

    }

});


// Update booking status
async function updateBookingStatus(bookingId, status) {

    try {

        const response = await fetch(
            `http://localhost/hotel.com/bookings/api/${bookingId}`,
            {
                method: "PUT",

                headers: {
                    "Content-Type": "application/json"
                },

                body: JSON.stringify({
                    status: status
                })
            }
        );

        const data = await response.json();

        console.log(data);

        if (response.ok) {

            alert("Booking status updated successfully");

            location.reload();

        } else {

            alert("Failed to update booking status");

        }

    } catch (error) {

        console.error(error);

        alert("Something went wrong");

    }

}