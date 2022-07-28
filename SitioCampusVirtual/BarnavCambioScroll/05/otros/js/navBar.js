function scrollValue() {
    var navbar = document.getElementById('navbar');
    var scroll = window.scrollY;
    if (scroll < 70) {
        navbar.classList.remove('BgColor');
    } else {
        navbar.classList.add('BgColor');
    }
}

window.addEventListener('scroll', scrollValue);





