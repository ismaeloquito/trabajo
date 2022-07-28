window.onscroll = function () {
    myFunction()
};
var fixed = document.getElementById("fixed");
var sticky = fixed.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        fixed.classList.add("sticky")
    } else {
        fixed.classList.remove("sticky");
    }
}