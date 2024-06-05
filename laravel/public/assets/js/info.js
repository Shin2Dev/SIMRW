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
