document.onscroll = function() {
    if (window.innerHeight + window.scrollY > document.body.clientHeight) {
        document.getElementById('lateralBar').style.display='none';
    }else{
        document.getElementById('lateralBar').style.display='block';
    }
}