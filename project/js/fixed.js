let position = document.getElementsByTagName('header'); 

window.addEventListener("scroll", function(event) { 
    let scroll_y = this.scrollY;  
    if (scroll_y >= 30) {
        position[0].classList.add('up');
    } else {
        position[0].classList.remove('up');
    }
}); 