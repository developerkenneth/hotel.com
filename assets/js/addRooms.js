const roomForm = document.querySelector('.room-form');


async function handleAddRoom(data) {
    try {

        // post request only
        const url = `/hotel.com/rooms/api`;
        const response = await fetch(url, {
            method: "POST",
            body: data
        });
        const result = await response.json();
        console.log(result);


    } catch (error) {
        console.error(error);

    }

}

roomForm.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(roomForm);

    handleAddRoom(formData);

    // send to back end

})