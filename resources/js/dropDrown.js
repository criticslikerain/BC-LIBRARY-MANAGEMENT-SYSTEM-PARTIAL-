
// JavaScript to toggle the dropdown menu on click
document.querySelector('.account-dropdown').addEventListener('click', function(event) {
    event.stopPropagation();
    const dropdown = this.querySelector('.dropdown-content');
    dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
});

// Close the dropdown if the user clicks anywhere outside the dropdown
document.addEventListener('click', function(event) {
    const dropdown = document.querySelector('.dropdown-content');
    if (!event.target.closest('.account-dropdown')) {
        dropdown.style.display = 'none';
    }
});
