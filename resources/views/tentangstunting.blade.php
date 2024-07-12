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
            <a href="{{ url("/") }}">Home</a></li>
            <a href="{{ url("/tentangstunting") }}">Tentang Stunting</a></li>
            <a href="{{ url("/Obat") }}">Obat</a></li>
            <a href="{{ url("/timkkn") }}">Tentang Kita</a></li>
        </div>
        <div class="login">
            <button class="signup">Register</button>
            <button>Login</button>
        </div>
    </nav>

    <header>
        <div class="left">
            <h1>Apa sih Penyebab <span>Stunting dini?</span></h1>
            <p>Yuk cari tau beberapa faktor penyebab stunting. Eits tapi… perlu diingat yaa, stunting BUKAN termasuk penyakit genetik (keturunan)
   
            </p>
        </div>
        <img src="/img/header1.png">
    </header>
    
    <header>
        <div class="left-1">
            <h1>Faktor dari <span>Stunting dini</span></h1>
            
           
        </div>
    </header>

    <header>
        <img src="/img/header1.png" class="faktor1-image">
        <div class="left-2">
            <h1>Faktor <span>Lingkungan</span></h1>
            <p>1.Hygiene sanitasi lingkungan tempat tinggal, sarana pembuangan air limbah dan pengelolaan sampah yang buruk dapat mempercepat pertumbuhan kuman 
                dan bakteri penyebab beberapa penyakit

            </p>
            <p>2.Kebersihan dalam penyiapan dan penyimpanan makanan perlu diperhatikan loohh
            </p>
           
        </div>
    </header>

    <header>
        <div class="left-3">
            <h1>Faktor <span>Perilaku</span></h1>
            <p>Ayah bunda… putra putri kalian tidak bisa tumbuh berkembang dengan sendirinya. Mereka perlu bantuan dan bimbingan kalian, jadilah orang tua yang cerdas dengan tidak malas untuk mencari tahu hal yang bisa menyebabkan stunting. Misalnya hal-hal di bawah ini
                ASI eksklusif (WAJIB selama 6 bulan tanpa adanya makanan minuman lain) 
                MPASI tepat umur dan jenjang tekstur
                PMT (ssstttt.. ini GRATIS loh, bagi balita yang membutuhkan)
                Cara menjaga kebersihan bahan makanan dan cara mengolahnya
                Imunisasi dasar lengkap
                Kebersihan diri sebelum berinteraksi dengan anak

   
            </p>
        </div>
        <img src="/img/header1.png" class="faktor2-image">
    </header>

    <header>
        <img src="/img/header1.png" class="faktor1-image">
        <div class="left-2">
            <h1>Faktor  <span>Demografi</span></h1>
            <p>Meskipun faktor ini tidak berhubungan langsung, tapi tetap perlu dicegah untuk mengurangi potensi anak terkena stunting yaa ayah bunda
                Jenis pekerjaan seperti petani, buruh pabrik, pekerja kasar dan beberapa pekerjaan lainnya dengan paparan bahan kimia, pestisida, dan debu secara tidak langsung menjadi penyebab stunting
                Tingkat pengetahuan dan ekonomi orang tua. Ah masa sih ini berpengaruh? Zaman dulu saya sehat-sehat aja padahal… Ayah bunda, perlu diingat bila zaman berkembang dan lingkungan juga berubah, sehingga penyebab penyakit mengalami perkembangan menjadi lebih banyak dan ganas
                
            </p>
            
           
        </div>
    </header>

    <header>
        <div class="left-3">
            <h1>Faktor  <span>Pelayanan Kesehatan</span></h1>
            <p>Faktor pelayanan kesehatan yang buruk juga menjadi penyebab stunting. Lalu, bagaimana mengatasinya? ayah bunda dapat membawa putra putri Anda ke pelayanan kesehatan yang terpercaya dan jangan malu bertanya pada tenaga kesehatan. Dan yang utama, jangan malas dan takut untuk terus mencari info terkait tumbuh kembang hingga masalah kesehatan yang dialami

   
            </p>
        </div>
        <img src="/img/header1.png" class="faktor2-image">
    </header>

    



    

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

    <script>
        document.querySelectorAll('.smooth-scroll').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    

</body>

</html>