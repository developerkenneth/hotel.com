/* DOM VARIABLES */
const form = document.getElementById("form");
const firstName = document.getElementById("first-name");
const lastName = document.getElementById("last-name");
const eMail = document.getElementById("e-mail");
const phone = document.getElementById("phone");
const gender = document.getElementById("gender");
const accountStaff = document.getElementById("staff-account");
const accountUser = document.getElementById("user-account");
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
];
console.log(inputs);
/* MAIN CODE */
let formIsValid = true;
form.addEventListener("submit", (e) => {
  e.preventDefault();
  console.log(e);
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
  if (formIsValid){
    form.reset();
  }
});
for (let i = 0; i <= 6; i++) {
  if (i <= 4) {
    inputs[i].addEventListener("input", () => {
      errorMssg[i].classList.replace("-show", "-hide");
      formIsValid = true;
    });
  }
  if (i == 5 || i == 6){
    inputs[i].addEventListener("input", () => {
      errorMssg[5].classList.replace("-show", "-hide");
      formIsValid = true;
    });
  }
}
