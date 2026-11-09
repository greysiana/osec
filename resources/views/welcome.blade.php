<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OSEC - Information System</title>
        <link rel="icon" type="image/png" href="{{ asset('logo_osec.png') }}">
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        <x-navbar-home />
        <div class="card-container">
            <div class="card1" style="background-image: url('{{ asset('images/Card1.png') }}');">
                <div class="card-content">
                    <h3>Jevando</h3>
                    <p>Kelas untuk anak usia dini.</p>
                </div>
            </div>
            <div class="card2" style="background-image: url('{{asset('images/Card2.png')}}');">
                <div class="card-content">
                    <h3>Pre Kindy</h3>
                    <p>Kelas persiapan anak.</p>
                </div>
            </div>
            <div class="card3" style="background-image: url('{{asset('images/Card3.png')}}');">
                <div class="card-content">
                    <h3>Pre Primary</h3>
                    <p>Kelas persiapan sekolah dasar.</p>
                </div>
            </div>
            <div class="card4" style="background-image: url('{{asset('images/Card4.png')}}');">
                <div class="card-content">
                    <h3>Primary</h3>
                    <p>Kelas pembelajaran dasar.</p>
                </div>
            </div>
        </div>
        <div class="button-container">
            <a href="#" class="btn-more">Other Students Achievement</a>
        </div>
        <div class="about" id="about">
            <h2>About Us</h2>
            <div class="container-about">
                <div class="founder">
                    <div class="foto-founder">
                        <img src="foto_founder.png" alt="foto founder">
                    </div>
                    <h3>Tateisi Theresa Kabwere</h3>
                    <h4>Co-Founder</h4>
                </div>
                <div class="text-about">
                    <p>OSEC is an informal institute for teaching english since 2013.
                        The Founder is Tateisi Theresa Kabwere or known as mam Regar.
                        Since 1999 started teaching in English towards teenagers in a town.
                        Because of her big willing to improve the education, 
                        in 2003 an informal institute <a href="https://www.google.com/maps/place/One+Stop+Education+Center+(OSEC)/@2.9843625,99.6274753,20z/data=!4m6!3m5!1s0x30324b4bef9bb12b:0x759170e3cee45bb0!8m2!3d2.9843617!4d99.6281273!16s%2Fg%2F11h4dkzx_5?entry=ttu&g_ep=EgoyMDI2MTEwMy4wIKXMDSoASAFQAw%3D%3D" target="_blank">One Stop Education Kisaran</a> or known as OSEC Kisaran was built.
                    </p>
                    <p>
                        OSEC has create a big improvement in education especially in english.
                        It has a several levels of learning english for kids. 
                        Start from age 4<sup>th</sup>-17<sup>th</sup> years old.
                        The youngest level is "Pre-nursery" and the highest level is "TOEFL". 
                        Through many years a lot of OSEC's students are able to know english even win a lot of english competition in a few location in Indonesia.
                        Now, OSEC has another branch in Sidikalang, North Sumatera.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>