const loginBtn = document.getElementById('loginBtn');
const popup = document.getElementById('popup');
const closePopup = document.getElementById('closePopup');
const navbarMenu = document.getElementById('navbarMenu');

loginBtn.addEventListener('click', function(e){
    e.preventDefault();
    popup.style.display = 'flex';
    if(window.matchMedia("(max-width: 768px)").matches)
    {
        navbarMenu.style.display = 'none';
    }
});

closePopup.addEventListener('click', function(e){
    e.preventDefault();
    popup.style.display = 'none';
});