// FOR SIDEDEBAR
const menuButton = document.getElementById("mobile-menu-button");
const sidebar = document.querySelector(".dashboard-sidebar");
const sidebarOverlay = document.getElementById("sidebar-overlay");

const toggleSidebar = () => {
    sidebar.classList.toggle("active");
    sidebarOverlay.classList.toggle("active");
};

if (menuButton && sidebarOverlay) {
    menuButton.addEventListener("click", toggleSidebar);
    sidebarOverlay.addEventListener("click", toggleSidebar);
}

console.log("Dashboard JS loaded");

const hour = new Date().getHours();


// FOR GREETING

let greeting;

if (hour < 12) {
    greeting = "Good morning";
} else if (hour < 18) {
    greeting = "Good afternoon";
} else {
    greeting = "Good evening";
}

const greetingElement = document.getElementById("greeting");

if (greetingElement) {
    greetingElement.textContent = greeting;
}


// FOR CHANGE PASSWORD MODAL

const changePasswordButton = document.getElementById("change-password-button");
const passwordModal = document.getElementById("password-modal");
const passwordModalClose = document.getElementById("password-modal-close");

if (changePasswordButton && passwordModal && passwordModalClose) {

    // Open modal
    changePasswordButton.addEventListener("click", () => {
        passwordModal.classList.add("active");
    });

    // Close modal
    passwordModalClose.addEventListener("click", () => {
        passwordModal.classList.remove("active");
    });

}

const changePasswordForm = document.querySelector("#change-password-form");

changePasswordForm.addEventListener("submit", async function (e) {
    e.preventDefault();
    const newPassword = document.querySelector("#new-password").value;
    const currentPassword = document.querySelector("#current-password").value;
    const confirmPassword = document.querySelector("#confirm-password").value;

    if (newPassword !== confirmPassword) {
        console.error("password must match");
        return;
    }
    try {

        const datas = {
            new_password: newPassword,
            confirm_password: confirmPassword,
            current_password: currentPassword
        }
        const response = await fetch("/hotel.com/user/update-password", {
            method: "PATCH",
            body: JSON.stringify(datas),
            headers: {
                "Content-Type": "application/json"
            }
        });
        const data = await response.json();
        console.log(data);
    } catch (error) {
        console.error(error);

    }



})