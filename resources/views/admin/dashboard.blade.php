<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charshet="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        @vite(['resources/css/app.css','resources/js/admin/navbar.js'])
    </head>
    <body>
        <div class="dashboard-header">
            <div class="user-login">
                <i class="fa-solid fa-user"></i>
                <h2>{{session('nama')}}</h2>
            </div>
        </div>  
        <nav>
            <div class="navbar-menu-admin" id="navbarMenuAdmin">
                <div class="navbar-admin-toggle" id="navbarAdminToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="menu" id="menu">
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-users"></i>
                            <span class="keterangan">Data Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span class="keterangan">Keluar</span>
                        </button>
                    </form>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>