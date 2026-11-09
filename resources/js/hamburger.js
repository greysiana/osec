document.addEventListener('DOMContentLoaded', function () {

    const navbarToggle = document.getElementById('navbarToggle');
    const navbarMenu = document.getElementById('navbarMenu');

    navbarToggle.addEventListener('click', function () {
        navbarMenu.classList.toggle('active');
        const isOpen = navbarMenu.classList.contains('active');
        navbarToggle.setAttribute('aria-expanded', isOpen);
    });

     document.addEventListener('click', function (event) {

        if (!navbarMenu.contains(event.target) && !navbarToggle.contains(event.target)) {
            navbarMenu.classList.remove('active');
            navbarToggle.setAttribute('aria-expanded', 'false');

        }
    });


});