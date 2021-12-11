const subtn = document.querySelector('.sign-up-btn');

subtn.addEventListener('click', function() {
    console.log(subtn);
    document.querySelector('.sign-up').classList.add('active');
});