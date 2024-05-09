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
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");
let main2 = document.querySelector(".table")
let main3 = document.querySelector(".container2");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
  main2.classList.toggle("active");
  main3.classList.toggle("active");
};




// Modalbox2

const detailmodal2 = document.querySelector('#item-detail2');
const detailbutton2 = document.querySelectorAll('.aksi10');

detailbutton2.forEach((btn) => {

    btn.onclick = (e) => {
        detailmodal2.style.display = 'flex';
        e.preventDefault();
    };

})

// klik tombol close

document.querySelector('.modal2 .close-icon').onclick = (e) => {
    detailmodal2.style.display = 'none';
    e.preventDefault();
};

//klik di luar modal
window.onclick = (e) => {
    if (e.target === detailmodal2){
        detailmodal2.style.display = 'none';
    }
};
