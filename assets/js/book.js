const roomType = document.getElementById("roomType");
const checkIn = document.getElementById("checkIn");
const checkOut = document.getElementById("checkOut");
const roomPrice = document.getElementById("roomPrice");
const nightsDisplay = document.getElementById("nights");
const totalAmount = document.getElementById("totalAmount");
const roomId = document.querySelector("#room-id").value;
const csrfToken = document.querySelector("#csrf-token").value;

const notyf = new Notyf();

function formatMoney(amount) {
    return "₦" + amount.toLocaleString("en-NG");
}


async function handleBoonking(data) {
    const body = JSON.stringify(data);
    try {
        const url = "/hotel.com/bookings/api/book";
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "content-type": "application/json"
            },
            body: body
        });

        if (!response.ok) {
            throw new Error(`Error code gotten: ${response.status}`);
        }


        const data = await response.json();
        console.log(data);
    } catch (err) {
        console.error(err);
    }
}
function calculateBooking() {
    const selectedRoom =
        roomType.options[roomType.selectedIndex];

    const price =
        Number(selectedRoom.dataset.price) || 0;

    roomPrice.textContent = formatMoney(price);

    const startDate = new Date(checkIn.value);
    const endDate = new Date(checkOut.value);

    if (!checkIn.value || !checkOut.value) {
        nightsDisplay.textContent = "0";
        totalAmount.textContent = "₦0";
        return;
    }

    if (endDate <= startDate) {
        nightsDisplay.textContent = "0";
        totalAmount.textContent = "₦0";
        return;
    }

    const difference =
        endDate.getTime() - startDate.getTime();

    const nights =
        Math.ceil(difference / (1000 * 60 * 60 * 24));

    const total = price * nights;

    nightsDisplay.textContent = nights;
    totalAmount.textContent = formatMoney(total);

    return total;
}

roomType.addEventListener("change", calculateBooking);
checkIn.addEventListener("change", calculateBooking);
checkOut.addEventListener("change", calculateBooking);

document
    .getElementById("bookingForm")
    .addEventListener("submit", function (event) {

        event.preventDefault();

        document.getElementById("roomTypeError").textContent = "";
        // document.getElementById("roomError").textContent = "";
        document.getElementById("checkInError").textContent = "";
        document.getElementById("checkOutError").textContent = "";
        document.getElementById("guestsError").textContent = "";

        let hasError = false;

        if (!roomType.value) {
            document.getElementById("roomTypeError").textContent =
                "Please select a room type";
            hasError = true;
        }

        // if (!document.getElementById("room").value) {
        //     document.getElementById("roomError").textContent =
        //         "Please select an available room";
        //     hasError = true;
        // }

        if (!checkIn.value) {
            document.getElementById("checkInError").textContent =
                "Please select a check-in date";
            hasError = true;
        }

        if (!checkOut.value) {
            document.getElementById("checkOutError").textContent =
                "Please select a check-out date";
            hasError = true;
        }

        if (
            checkIn.value &&
            checkOut.value &&
            new Date(checkOut.value) <= new Date(checkIn.value)
        ) {
            document.getElementById("checkOutError").textContent =
                "Check-out date must be after check-in date";
            hasError = true;
        }

        if (!document.getElementById("guests").value) {
            document.getElementById("guestsError").textContent =
                "Please enter the number of guests";
            hasError = true;
        }

        if (hasError) {
            return;
        }

        const guest = document.getElementById("guests").value;
        const amount = calculateBooking();
        const bookindDetails = {
            checkin: checkIn.value,
            checkout: checkOut.value,
            guest: guest,
            room_id: roomId,
            csrf_token: csrfToken,
            amount: amount
        }




        handleBoonking(bookindDetails);




    });

roomType.addEventListener("change", function () {
    if (roomType.value) {
        document.getElementById("roomTypeError").textContent = "";
    }
});

// document.getElementById("room").addEventListener("change", function () {
//     if (this.value) {
//         document.getElementById("roomError").textContent = "";
//     }
// });

checkIn.addEventListener("change", function () {
    if (checkIn.value) {
        document.getElementById("checkInError").textContent = "";
    }
});

checkOut.addEventListener("change", function () {
    if (
        checkOut.value &&
        checkIn.value &&
        new Date(checkOut.value) > new Date(checkIn.value)
    ) {
        document.getElementById("checkOutError").textContent = "";
    }
});

document.getElementById("guests").addEventListener("input", function () {
    if (this.value) {
        document.getElementById("guestsError").textContent = "";
    }
});