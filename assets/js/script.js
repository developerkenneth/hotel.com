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
const errorMssg = document.getElementsByClassName("field__error");
/* array */
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

// const handleFetcch = async () => {
//   const body = {
//     age: 24,
//     height: "8,9",
//     name: "john"
//   };
//   const response = await fetch("https://dummyjson.com/test", {
//     method: "PATCH",
//     body: JSON.stringify(body),
//     headers: {
//       "Content-Type": "application/json",
//     }

//   });
//   console.log(response.ok, response.status);
//   const data = await response.json();
//   console.log(data);
// }

// handleFetcch();

const handleRegistration = async (data) => {
  const url = "auth/register";
  submitBtn.disabled = true;
  submitBtn.classList.add("disabled");

  try {
    const response = await fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    });
  } catch (error) {
  } finally {
    submitBtn.disabled = false;
    submitBtn.classList.remove("disabled");
  }
};
/* MAIN CODE */
let formIsValid = true;
form.addEventListener("submit", (e) => {
  e.preventDefault();
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

  if (formIsValid) {
    // send a post request back to our registration api

    handleRegistration();
  }
});
for (let i = 0; i <= 6; i++) {
  if (i <= 4) {
    inputs[i].addEventListener("input", () => {
      errorMssg[i].classList.replace("-show", "-hide");
      formIsValid = true;
    });
  }
  if (i == 5 || i == 6) {
    inputs[i].addEventListener("input", () => {
      errorMssg[5].classList.replace("-show", "-hide");
      formIsValid = true;
    });
  }
  if (i == 7) {
    inputs[i].addEventListener("input", () => {
      errorMssg[6].classList.replace("-show", "-hide");
      formIsValid = true;
    });
  }
  if (i == 8) {
    inputs[i].addEventListener("input", () => {
      errorMssg[7].classList.replace("-show", "-hide");
      if (password.value == confirmPassword.value) {
        errorMssg[8].classList.replace("-show", "-hide");
      }
      formIsValid = true;
    });
  }
}
