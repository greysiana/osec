const navbarAdminToggle = document.getElementById('navbarAdminToggle');
const navbarMenuAdmin = document.getElementById('navbarMenuAdmin');
const keterangan = document.getElementById('keterangan');
const menu = document.getElementById('menu');

navbarAdminToggle.addEventListener('click', function(){
    navbarMenuAdmin.classList.toggle('active');
    keterangan.classList.toggle('active');
    if(window.matchMedia("(max-width: 768px)").matches){
        menu.style.display = 'flex';
    }
});
