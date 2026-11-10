const loginBtn = document.getElementById('loginBtn');
const popup = document.getElementById('popup');
const closePopup = document.getElementById('closePopup');

loginBtn.addEventListener('click', function(e){
    e.preventDefault();
    popup.style.display = 'flex';
});

closePopup.addEventListener('click', function(e){
    e.preventDefault();
    popup.style.display = 'none';
});