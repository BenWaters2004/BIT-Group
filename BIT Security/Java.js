function toggleDropdown(contentId) {
    var dropdownContent = document.getElementById(contentId);
    var dropdown = dropdownContent.parentElement; // Get the parent dropdown element
    var dropdownIcon = dropdownContent.previousElementSibling.querySelector("i");

    if (dropdownContent.style.maxHeight) {
        dropdownContent.style.maxHeight = null;
        dropdownIcon.classList.remove("fa-rotate-90");
        dropdown.style.height = "100px"; // Reset the height of the dropdown
    } else {
        dropdownContent.style.maxHeight = "400px";
        dropdownIcon.classList.add("fa-rotate-90");
        dropdown.style.height = "400px"; // Adjust the height of the dropdown
    }
}
