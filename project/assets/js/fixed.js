let position = document.getElementsByTagName('header'); 
let arrowPosition = document.getElementsByClassName('fa-arrow-up');

window.addEventListener("scroll", function(event) { 
    let scroll_y = this.scrollY;  
    if (scroll_y) {
        position[0].classList.add('up');
    } else {
        position[0].classList.remove('up');
    }
}); 

window.addEventListener("scroll", function(event) { 
    let scroll_y = this.scrollY;  
    if (scroll_y >= 30e0) {
        arrowPosition[0].classList.remove('hideElement');
    } else {
        arrowPosition[0].classList.add('hideElement');
    }
}); 
