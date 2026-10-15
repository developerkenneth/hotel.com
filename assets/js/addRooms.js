const roomForm = document.querySelector('.room-form');


async function handleAddRoom(data) {
    try {

        // post request only
        const url = `/hotel.com/rooms/api`;
        const response = await fetch(url, {
            headers: {
                "Content-Type": "application/json"
            },
            method: "POST",
            body: JSON.stringify(data)
        });
        const result = await response.json();
        console.log(result);


    } catch (error) {
        console.error(error);

    }

}

roomForm.addEventListener('submit', (event) => {
    event.preventDefault();
    // set values
    const roomType = document.querySelector('#room-type').value;
    const roomNumber = document.querySelector('#room-number').value;
    const description = document.querySelector('#description').value;
    const price = document.querySelector('#price').value;
    const capacity = document.querySelector('#capacity').value;
    const amenities = document.querySelector('#amenities').value;

    const floor = document.querySelector('#floor').value;
    const status = document.querySelector('#status').value;

    // do validation here 

    // create data to be sent

    const data = {
        room_type: roomType,
        description: description,
        price: price,
        capacity: capacity,
        floor: floor,
        status: status,
        amenities: amenities,
        room_number: roomNumber
    }

    handleAddRoom(data);

    // send to back end

})