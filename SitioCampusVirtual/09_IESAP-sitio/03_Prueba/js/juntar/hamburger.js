function myFunction() {
    var x = document.querySelector('nav');
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}