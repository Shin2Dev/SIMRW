// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
const toggle = document.querySelector(".toggle");
const navigation = document.querySelector(".navigation");
const main = document.querySelector(".main");

// Close
const sidebarClose = document.querySelector(".sidebars-close");
const toggleTitle = document.querySelector(".toggle-title");

// HAMBURGER MENU
toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");

  if (navigation.classList.contains("active")) {
    toggleTitle.innerHTML = "<img src='assets/imgs/header.png' alt='Logo SIMRW'>";
  } else {
    toggleTitle.innerHTML = "<h2 class='title'>SIMRW</h2>";
  }
};

// CLOSE SIDEBAR IF HANDPHONE VIEW
sidebarClose.addEventListener("click", function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
});