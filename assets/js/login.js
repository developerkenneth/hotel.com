const loginForm = document.querySelector("#login-form");
const errorContainer = document.querySelector("error-container");
const errorUL = document.querySelector(".errors");


const handlePost = async (post) => {
    const response = await fetch('login', {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(post)
    });

    const data = await response.json();
    if (data.success === true) {
        errorUL.innerHTML = "";
        window.location = "/hotel.com/user/dashboard";
    } else {
        const serverErrors = data?.errors;
        serverErrors.forEach(error => {
            errorUL.innerHTML += error;
        });

    }
}
loginForm.addEventListener("submit", (event) => {
    event.preventDefault();
    let valid = true;
    const password = document.querySelector("#password").value.trim();
    const email = document.querySelector("#email").value.trim();
    const csrfToken = document.querySelector("#csrf-token").value.trim();
    console.log(csrfToken);



    if (password.length < 1) {
        errorUL.innerHTML += "<li>password is required </li>";
        valid = false;
    }

    if (email.length < 1) {
        errorUL.innerHTML += "<li>password is required </li>";
        valid = false;
    }

    let posts = {
        email: email,
        password: password,
        csrf_token: csrfToken
    };


    handlePost(posts);

    if (valid) {


    }

});