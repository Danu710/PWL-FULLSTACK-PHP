var dropdown = document.getElementsByClassName("dropdown-btn");
var navLinks = document.getElementsByClassName("nav-link");

for (let i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        // Toggle the dropdown content
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            // Close all other dropdowns
            var allDropdownContents = document.getElementsByClassName("dropdown-container");
            for (var j = 0; j < allDropdownContents.length; j++) {
                allDropdownContents[j].style.display = "none";
            }
            dropdownContent.style.display = "block";
        }

        // Manage the active state
        manageActiveState(this);
    });
}

function manageActiveState(clickedElement) {
    // Remove 'active' class from all nav links
    for (let i = 0; i < navLinks.length; i++) {
        navLinks[i].classList.remove('active', 'link-light');
        navLinks[i].classList.add('link--bs-emphasis-color');
    }

    // If it's a dropdown button, add 'active' class
    if (clickedElement.classList.contains('dropdown-btn')) {
        clickedElement.classList.add('active', 'link-light');
        clickedElement.classList.remove('link--bs-emphasis-color');
    }

    // Check if a sub-menu link was clicked
    var subMenuActiveLinks = document.querySelectorAll('.dropdown-container .nav-link.active');
    subMenuActiveLinks.forEach(function (subMenu) {
        var parentDropdown = subMenu.closest('.dropdown-container').previousElementSibling;
        parentDropdown.classList.remove('active', 'link-light');
        parentDropdown.classList.add('link--bs-emphasis-color');
    });
}

// Handle the active state on page load
window.onload = function () {
    var activeSubMenus = document.querySelectorAll('.dropdown-container .nav-link.active');
    activeSubMenus.forEach(function (subMenu) {
        var parentDropdown = subMenu.closest('.dropdown-container').previousElementSibling;
        parentDropdown.classList.remove('active', 'link-light');
        parentDropdown.classList.add('link--bs-emphasis-color');
    });
};

// Attach event listeners to nav links
for (let i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener('click', function () {
        manageActiveState(this);
    });
}