const menuButton = document.getElementById("mobile-menu-button");
const sidebar = document.querySelector(".dashboard-sidebar");
const sidebarOverlay = document.getElementById("sidebar-overlay");

const toggleSidebar = () => {
    sidebar.classList.toggle("active");
    sidebarOverlay.classList.toggle("active");
};

menuButton.addEventListener("click", toggleSidebar);

sidebarOverlay.addEventListener("click", toggleSidebar);
console.log("Dashboard JS loaded");

const hour = new Date().getHours();

let greeting;

if (hour < 12) {
    greeting = "Good morning";
} else if (hour < 18) {
    greeting = "Good afternoon";
} else {
    greeting = "Good evening";
}

document.getElementById("greeting").textContent = greeting;

