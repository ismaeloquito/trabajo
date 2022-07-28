
$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 300) {
	    $(".navBar").css("background" , "Viesap");
	  }

	  else{
		  $(".navBar").css("background" , "rgba(3, 89, 38, 0.5)");  	
	  }
  })
})