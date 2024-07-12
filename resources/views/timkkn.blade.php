<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Stunting kkn</title>
</head>

<body>

    <nav>
        <a href="/" class="logo">Stunting</a>
        <div class="links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/tentangstunting') }}">Tentang Stunting</a>
            <a href="{{ url('/Obat') }}">Obat</a>
            <a href="{{ url('/timkkn') }}">Tentang Kita</a>
        </div>
        <div class="login">
            <button class="signup">Register</button>
            <button>Login</button>
        </div>
    </nav>

    <header>
        <div class="left">
            <h1>Pusat Pencegahan <span>Stunting dini</span></h1>
            <p>Bersama cegah stunting untuk anak indonesia yang lebih pintar dan berwawasan tinggi
            </p>
            
                
            <div class="submit-button">
                <button type="submit" onclick="window.location.href='/tentangstunting'">Selengkapnya</button>
            </div>
            
           
        </div>
        <img src="/img/header1.png">
    </header>

    <header>
        <div class="left-7">
            <h1>Pahlawan<span> Stunting</span></h1>
            
           
        </div>
    </header>

    <div class="home-container">
        <div class="profile-card">
            <div class="img">
                <img src="img/profile-3.png">
            </div>
            <div class="caption">
                <h3>Belva</h3>
                <p>Teknik Komputer</p>
                <div class="social-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="img/profile-4.png">
            </div>
            <div class="caption">
                <h3>Rara</h3>
                <p>Kedokteran</p>
                <div class="social-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="img/profile-2.png">
            </div>
            <div class="caption">
                <h3>Nasywa</h3>
                <p>Kesehatan masyarakat</p>
                <div class="social-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <h3>Pusat Informasi, Edukasi & Pencegahan Stunting</h3>
        <div class="right">
            <div class="links">
            <a href="{{ url("/") }}">Home</a></li>
            <a href="{{ url("/tentangstunting") }}">Tentang Stunting</a></li>
            <a href="{{ url("/Obat") }}">Obat</a></li>
            <a href="{{ url("/timkkn") }}">Tentang Kita</a></li>
            </div>
            <div class="social">
                <i class='bx bxl-instagram'></i>
                <i class='bx bxl-facebook-square'></i>
                <i class='bx bxl-github'></i>
            </div>
            <p>Copyright © 2024 BelvaCorp, All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>