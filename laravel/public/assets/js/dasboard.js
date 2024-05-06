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

const detailmodal3 = document.querySelector('#item-detail3');
const detailbutton3 = document.querySelectorAll('.aksi100');

detailbutton3.forEach((btn) => {

    btn.onclick = (e) => {
        detailmodal3.style.display = 'flex';
        e.preventDefault();
    };

})

// klik tombol close

document.querySelector('.modal3 .close-icon').onclick = (e) => {
    detailmodal3.style.display = 'none';
    e.preventDefault();
};

//klik di luar modal
window.onclick = (e) => {
    if (e.target === detailmodal3){
        detailmodal3.style.display = 'none';
    }
};
