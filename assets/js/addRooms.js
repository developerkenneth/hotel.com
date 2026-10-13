const roomForm = document.querySelector('.room-form');


async function handleAddRoom(data) {

    const response = await fetch();

}

roomForm.addEventListener('submit', (event) => {
    event.preventDefault();
    // set values
    const roomType = document.querySelector('#room-type').value;
    const description = document.querySelector('#description').value;
    const price = document.querySelector('#price').value;
    const capacity = document.querySelector('#room-capacity').value;
    const floor = document.querySelector('#floor').value;
    // do validation here 

    // create data to be sent

    const data = {
        room_type: roomType,
        // others ...
    }

})