const menuBar = document.querySelector(".menu-bar");
const MenuNav = document.querySelector(".menu-navigation");

menuBar.addEventListener("click",function() {
    MenuNav.classList.toggle("menu-active");
})

const goTopBtn = document.querySelector(".go-top-btn");
window.onscroll = function() {checkHeight()};

function checkHeight(){
    if (window.scrollY > 200) {
        goTopBtn.style.display = "flex"
    } else {
        goTopBtn.style.display = "none"
    }
}

goTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top : 0,
        behavior : "smooth"
    })
})





