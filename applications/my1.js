// Function to toggle the dropdown visibility
function toggleDropdown() {
    const dropdown = document.getElementById("dropdown-content");
    dropdown.classList.toggle("show");
}

// Add an event listener to the button to toggle the dropdown
document.querySelector('.dropdown-btn').addEventListener('click', function(event) {
    event.stopPropagation(); // Prevent event from propagating to window.onclick
    toggleDropdown();
});

// Close the dropdown if clicked outside the dropdown or button
window.onclick = function(event) {
    const dropdown = document.getElementById("dropdown-content");
    if (!event.target.matches('.dropdown-btn')) {
        if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        }
    }
};
