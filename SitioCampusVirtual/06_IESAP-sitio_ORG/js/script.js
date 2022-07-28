
$(window).scroll(function(){
    if($("#menu").offset().top>56){
        $("#menu").addClass("bg-success");
    }else{
        $("#menu").removeClass("bg-primary");
    }
});
