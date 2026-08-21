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