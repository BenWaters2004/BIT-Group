function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdownContent");
    var dropdown = document.getElementById("dropdown");
    var dropdownIcon = document.querySelector(".dropdown-toggle i");

    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        dropdown.style.height = "100px";
        dropdownIcon.classList.remove("fa-rotate-90");
    } else {
        dropdownContent.style.display = "block";
        dropdown.style.height = "500px";
        dropdownIcon.classList.add("fa-rotate-90");
    }
}
