<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        <nav class="navbar-home">
            <div class="navbar-container">
                <a href="{{url('/')}}" class="navbar-logo">
                    <div class="logo-icon">
                        <img src="logo_osec.png" alt="logo OSEC">
                    </div>
                    <div class="logo-text">
                        <h2>
                            <span class="kata">
                                <span class="huruf-besar">O</span><span>ne</span>
                            </span>
                            <span class="kata">
                                <span class="huruf-besar">S</span><span>top</span>
                            </span>
                            <span class="kata">
                                <span class="huruf-besar">E</span><span>ducation</span>
                            </span>
                            <span class="kata">
                                <span class="huruf-besar">C</span><span>entre</span>
                            </span>
                        </h2>
                    </div>
                </a>

                <button class="navbar-toggle" id="navbarToggle" type="button" aria-label="Buka menu navigasi" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <ul class="navbar-menu" id="navbarMenu">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#">Tutors</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">
                            Learning Levels
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Pre Nusery</a>
                            </li>
                            <li>
                                <a href="#">Pre Kindy</a>
                            </li>
                            <li>
                                <a href="#">Pre Primary</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Career</a>
                    </li>
                    <li>
                        <a href="#" id="loginBtn">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="popup-overlay" id="popup">
            <div class="popup-box">
                <span class="close-popup" id="closePopup">&times;</span>
                <h3>Login</h3>
            </div>
        </div>
    </body>
</html> 