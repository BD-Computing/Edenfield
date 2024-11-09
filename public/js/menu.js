// set current year to the copyright
const currYear = new Date().getFullYear();
const year = document.getElementById("year");

if (year && currYear) {
    year.innerText = currYear;
}

// toggle hamburger menu

const menuBtn = document.getElementById("mobileMenuBtn");
let menuOpen = false;
menuBtn.addEventListener("click", () => {
    const mobileMenu = document.getElementById("mobileMenu");
    if (!menuOpen) {
        mobileMenu.classList.remove("hidden");
        mobileMenu.classList.add("block");
        // change the icon
        menuBtn.classList.remove("bi-list");
        menuBtn.classList.add("bi-x");
        menuOpen = true;
    } else {
        mobileMenu.classList.remove("block");
        mobileMenu.classList.add("hidden");

        // change the icon
        menuBtn.classList.remove("bi-x");
        menuBtn.classList.add("bi-list");
        menuOpen = false;
    }
});
