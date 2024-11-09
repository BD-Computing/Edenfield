// set current year to the copyright
const currYear = new Date().getFullYear();
const year = document.getElementById("year");

if (year && currYear) {
    year.innerText = currYear;
}

// toggle hamburger menu
let menuOpen = false;
const mobileMenuBtn = document.getElementById("mobileMenuBtn");
if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener("click", toggleMenu(), true);
}
const mobileMenu = document.getElementById("mobileMenu");
console.log(mobileMenuBtn);

function toggleMenu() {
    console.log("Clicked");
    menuOpen = !menuOpen;
    console.log({ menuOpen });
    const mobileMenu = document.getElementById("mobileMenu");

    console.log({ mobileMenu });
}
