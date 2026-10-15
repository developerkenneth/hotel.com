const deleteButtons = document.querySelectorAll(".btn-delete");

deleteButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const id = button.dataset.id;

        handleDeleteRoom(id);
    });
});

async function handleDeleteRoom(id) {
    try {
        const url = `/hotel.com/rooms/room/${id}`;

        const response = await fetch(url, {
            method: "DELETE"
        });

        const data = await response.json();
        if (response.ok && data.success) {
            alert(data.message);
            window.location.reload();
        } else {
            alert(data.message);
        }

    } catch (error) {
        console.log(error);
        alert("Something went wrong while deleting the room.");
    }
}

