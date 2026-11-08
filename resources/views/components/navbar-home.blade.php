<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OSEC | Bimbingan Belajar</title>
        <meta name="description" content="OSEC merupakan lembaga bimbingan belajar untuk membantu siswa meraih prestasi terbaik.">
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
                        <h2>OSEC</h2>
                        <span>ONE STOP EDUCATION CENTRE</span>
                    </div>
                </a>
                <ul class="navbar-menu">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{url('/about')}}">About</a>
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
                        <a href="#">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>