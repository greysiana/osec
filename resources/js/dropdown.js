document.addEventListener('DOMContentLoaded', function(){
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    dropdownToggles.forEach(function (toggle){
        toggle.addEventListener('click', function(event){
            event.preventDefault();
            const dropdown = this.closest('.dropdown');
            document.querySelectorAll('.dropdown.active').forEach(function(item){
                if(item !== dropdown){
                    item.classList.remove('active');
                }
            });
            dropdown.classList.toggle('active');
        });
    });

     document.addEventListener('click', function (event) {
        if (!event.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown.active').forEach(function (item) {
                item.classList.remove('active');
            });
        }

    });
});