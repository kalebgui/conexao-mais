const wrapper = document.querySelector('.wrapper');
const form = document.querySelector('.form-box')
const loginLink = document.querySelector('.login-link');
const btnPopup = document.querySelector('.btnlogin-popup');
const iconClose = document.querySelector('.icon-close');

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
})
iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
})


var modal = document.getElementById("myModal");
var registerLink = document.getElementById("openModal");
var registerLink2 = document.getElementById("openModal2");
var span = document.getElementsByClassName("close")[0];

// When the user clicks the link, open the modal
registerLink.onclick = function() {
    modal.style.display = "block";
}
registerLink2.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

const btnMobile  = document.getElementById('btn-mobile');

function toggleMenu() {
    const nav  = document.getElementsByClassName('navigation');
    nav.classList.toggleMenu('active');
}

btnMobile.addEventListener('click', toggleMenu);
