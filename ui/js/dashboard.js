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