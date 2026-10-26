async function suspend(event) {
    const userId = event.dataset.id;
    const response = await fetch('/hotel.com/admin/api/user', {
        method: "PATCH",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            user_id: userId,
            type: 'suspend'
        })
    });
    const data = await response.json();

    if (!response.ok) {
        throw Error(data.errors);
    }

    window.location.reload();

}


async function unsuspend(event) {
    const userId = event.dataset.id;
    const response = await fetch('/hotel.com/admin/api/user', {
        method: "PATCH",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            user_id: userId,
            type: 'unsuspend'
        })
    });
    const data = await response.json();

    if (!response.ok) {
        throw Error(data.errors);
    }

    window.location.reload();

}