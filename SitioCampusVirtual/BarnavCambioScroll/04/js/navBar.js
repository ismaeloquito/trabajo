window.addEventListener("scroll", function () {
    let navbar = document.querySelector("nav");
    if (this.window.pageYOffset > 100) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
})