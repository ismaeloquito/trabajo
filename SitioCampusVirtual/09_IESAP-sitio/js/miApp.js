function myFunction() {
    var x = document.getElementById("nav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}document.onscroll = function() {
    if (window.innerHeight + window.scrollY > document.body.clientHeight) {
        document.getElementsByClassName('lateralBar').style.display='none';
    }else{
        document.getElementsByClassName('lateralBar').style.display='block';
    }
}window.addEventListener("scroll", function () {
    let navbar = document.getElementById("nav");
    if (this.window.pageYOffset > 100) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
})