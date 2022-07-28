function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("ies-show") == -1) {
      x.className += " ies-show";
      x.previousElementSibling.className = 
      x.previousElementSibling.className.replace("ies-black", "ies-red");
    } else { 
      x.className = x.className.replace(" ies-show", "");
      x.previousElementSibling.className = 
      x.previousElementSibling.className.replace("ies-red", "ies-black");
    }
  }