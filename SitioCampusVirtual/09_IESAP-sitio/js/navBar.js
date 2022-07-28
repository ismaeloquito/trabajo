window.addEventListener("scroll", function () {
    let navbar = document.getElementById("nav");
    if (this.window.pageYOffset > 100) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
})