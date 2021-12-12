// script for more btn at main.php page
// don't touch it :)))

let mainProduct = document.getElementsByClassName('main--product');
let moreProduct = document.getElementById('moreProduct');

moreProduct.addEventListener('click', function() {
    for (let i = 4; i < 12; i++) {
        mainProduct[i].classList.remove('hideElement');
    }
});

