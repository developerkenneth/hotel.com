/* DOM VARIABLES */
const form = document.getElementById("form");
const firstName = document.getElementById("first-name");
const lastName = document.getElementById("last-name");
const eMail = document.getElementById("e-mail");
const phone = document.getElementById("phone");
const gender = document.getElementById("gender");
const accountStaff = document.getElementById("staff-account");
const accountUser = document.getElementById("user-account");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirm-password");
const submitBtn = document.querySelector(".submit-btn");
const errorMssg = document.getElementsByClassName("field__error");
const showPassword = document.querySelector("#show-password");
const errorContainer = document.querySelector(".error-container");

showPassword.addEventListener("change", function (event) {
  event.preventDefault();
  const state = event.currentTarget.checked;
  if (state) {
    password.setAttribute("type", "text");
    confirmPassword.setAttribute("type", "text");

    return;
  }
  confirmPassword.setAttribute("type", "password");
  password.setAttribute("type", "password");
  return;
})

const inputs = [
  firstName,
  lastName,
  eMail,
  phone,
  gender,
  accountStaff,
  accountUser,
  password,
  confirmPassword,
];

async function handleRegistration(formData) {
  const url = "register";

  try {
    submitBtn.disabled = true;
    submitBtn.classList.add("disabled");

    const response = await fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(formData),
    });

    if (!response.ok) {
      const errorData = await response.json();
      const errors = errorData?.errors;
      errors.forEach(error => {
        errorContainer.innerHTML += `
          <p class="field__error -show"> ${error} </p>
          `;

      });

    }

    const result = await response.json(); // Renamed to avoid parameter shadowing
    Toastify({
      text: "Registration has been completed successfully, you will be redirected to the login page in 3 secs",
      duration: 3000, // Duration in milliseconds
      close: true,    // Adds a close 'x' button
      gravity: "top", // 'top' or 'bottom'
      position: "right", // 'left', 'center' or 'right'
      stopOnFocus: true, // Prevents dismissing of toast on hover
      style: {
        background: "linear-gradient(to right, #00b09b, #96c93d)",
      },
      onClick: function () { } // Callback after click
    }).showToast();

    setTimeout(function () {
      window.location = "login";

    }, 3000)

  } catch (error) {

  } finally {
    submitBtn.disabled = false;
    submitBtn.classList.remove("disabled");
  }
}

/* MAIN SUBMIT HANDLER */
form.addEventListener("submit", (e) => {
  e.preventDefault();

  // Reset form validity state on every submit attempt
  let formIsValid = true;
  errorContainer.innerHTML = "";

  if (firstName.validity.valueMissing) {
    formIsValid = false;
    errorMssg[0].classList.replace("-hide", "-show");
  }
  if (lastName.validity.valueMissing) {
    formIsValid = false;
    errorMssg[1].classList.replace("-hide", "-show");
  }
  if (eMail.validity.valueMissing || eMail.validity.typeMismatch) {
    formIsValid = false;
    errorMssg[2].classList.replace("-hide", "-show");
  }
  if (phone.validity.valueMissing) {
    formIsValid = false;
    errorMssg[3].classList.replace("-hide", "-show");
  }
  if (gender.value === "select") {
    formIsValid = false;
    errorMssg[4].classList.replace("-hide", "-show");
  }
  if (accountStaff.validity.valueMissing) {
    formIsValid = false;
    errorMssg[5].classList.replace("-hide", "-show");
  }
  if (password.validity.valueMissing) {
    formIsValid = false;
    errorMssg[6].classList.replace("-hide", "-show");
  }
  if (confirmPassword.validity.valueMissing) {
    formIsValid = false;
    errorMssg[7].classList.replace("-hide", "-show");
  }
  if (password.value !== confirmPassword.value) {
    formIsValid = false;
    errorMssg[8].classList.replace("-hide", "-show");
  }

  //Call registration function if valid
  if (formIsValid) {

    const data = {
      password: password.value,
      confirm_password: confirmPassword.value,
      first_name: firstName.value,
      last_name: lastName.value,
      email: eMail.value,
    };

    handleRegistration(data);
  }
});

/* INPUT CLEARING LISTENERS */
inputs.forEach((input, i) => {
  input.addEventListener("input", () => {
    if (i <= 4 && errorMssg[i]) {
      errorMssg[i].classList.replace("-show", "-hide");
    } else if ((i === 5 || i === 6) && errorMssg[5]) {
      errorMssg[5].classList.replace("-show", "-hide");
    } else if (i === 7 && errorMssg[6]) {
      errorMssg[6].classList.replace("-show", "-hide");
    } else if (i === 8 && errorMssg[7]) {
      errorMssg[7].classList.replace("-show", "-hide");
      if (password.value === confirmPassword.value && errorMssg[8]) {
        errorMssg[8].classList.replace("-show", "-hide");
      }
    }
  });
});