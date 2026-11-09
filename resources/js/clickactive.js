document.addEventListener('DOMContentLoaded', function(){
    const menuLinks = document.querySelectorAll('.navbar-menu a');

    menuLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            // Menghapus class active dari semua menu
            menuLinks.forEach(function(item) {
                item.classList.remove('active');
            });
            // Menambahkan class active pada menu yang diklik
            this.classList.add('active');
        });
    });
});