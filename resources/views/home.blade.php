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
            <a href="{{ url("/Obat") }}">Nutrisi</a></li>
            <a href="{{ url("/timkkn") }}">Tentang Kita</a></li>
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
        <img src="/img/Stunting2.png">
    </header>

    <h2 class="separator" id ="checkstunting">
        Check Stunting
    </h2>

    <div class="initial-selection">
        <h2>Pilih Jenis Kelamin</h2>
        <div class="gender-selection">
            <div class="gender-option" id="selectCowo">
                <img src="/img/cowo.png" alt="Cowo">
            </div>
            <div class="gender-option" id="selectCewe">
                <img src="/img/cewe2.png" alt="Cewe">
            </div>
        </div>
    </div>

    <div id="formContainer" style="display: none;">
        <div class="sell-nft">
            <div class="item">
                <form id="stuntingForm">
                    <input type="hidden" name="jenis_kelamin" id="jenisKelamin">
                    
                    <table>
                        <tr>
                            <th>Tinggi Badan (cm)</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="tinggi_badan1" class="input-field" required></td>
                        </tr>
                    </table>
                    
                    <table>
                        <tr>
                            <th>Umur (bulan)</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="umur1" class="input-field" required></td>
                        </tr>
                    </table>
                    
                    <table>
                        <tr>
                            <th>Berat Badan (kg)</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="berat_badan1" class="input-field" required></td>
                        </tr>
                    </table>
                    
                    <div class="submit-button1">
                        <button type="submit">Submit</button>
                    </div>
                </form>
                <div class="result" id="result" style="display: none;">
                    <h3>Hasil Perhitungan Stunting</h3>
                    <p id="stuntingResult"></p>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.getElementById('selectCowo').addEventListener('click', function() {
            document.getElementById('jenisKelamin').value = 'cowo';
            document.querySelector('.initial-selection').style.display = 'none';
            document.getElementById('formContainer').style.display = 'block';
        });
    
        document.getElementById('selectCewe').addEventListener('click', function() {
            document.getElementById('jenisKelamin').value = 'cewe';
            document.querySelector('.initial-selection').style.display = 'none';
            document.getElementById('formContainer').style.display = 'block';
        });
    
        document.getElementById('stuntingForm').addEventListener('submit', function(event) {
            event.preventDefault();
    
            const tinggiBadan = parseFloat(document.querySelector('[name="tinggi_badan1"]').value);
            const umur = parseFloat(document.querySelector('[name="umur1"]').value);
            const beratBadan = parseFloat(document.querySelector('[name="berat_badan1"]').value);
            const jenisKelamin = document.getElementById('jenisKelamin').value;
            let stuntingStatus = '';
    
            // WHO height-for-age and weight-for-age thresholds
            // Note: These thresholds are illustrative and should be replaced with accurate values from WHO charts
            const heightThresholds = {
                'cowo': [
                    49.9, 54.7, 58.4, 61.4, 63.9, 65.9, 67.6, 69.2, 70.6, 72.0, 73.3, 74.5, 75.7, 76.9, 78.0,
                    79.2, 80.2, 81.2, 82.3, 83.2, 84.2, 85.1, 86.0, 86.9, 87.8, 88.7, 89.6, 90.5, 91.3, 92.1,
                    93.0, 93.8, 94.6, 95.4, 96.2, 97.0, 97.8, 98.6, 99.4, 100.1, 100.9, 101.6, 102.4, 103.1,
                    103.8, 104.6, 105.3, 106.0, 106.7, 107.4, 108.1, 108.7, 109.4, 110.1, 110.8, 111.4, 112.1,
                    112.7, 113.4, 114.0, 114.6
                ],
                'cewe': [
                    49.1, 53.7, 57.1, 59.8, 62.1, 64.0, 65.7, 67.3, 68.7, 70.1, 71.5, 72.8, 74.0, 75.2, 76.4,
                    77.5, 78.6, 79.7, 80.7, 81.7, 82.7, 83.7, 84.6, 85.5, 86.4, 87.3, 88.2, 89.1, 89.9, 90.7,
                    91.6, 92.4, 93.2, 94.0, 94.8, 95.6, 96.4, 97.1, 97.9, 98.6, 99.3, 100.0, 100.7, 101.4, 102.1,
                    102.8, 103.5, 104.2, 104.8, 105.5, 106.1, 106.8, 107.4, 108.0, 108.6, 109.3, 109.9, 110.5,
                    111.1, 111.7, 112.3, 112.9
                ]
            };
    
            const weightThresholds = {
                'cowo': [
                    3.3, 4.5, 5.4, 6.2, 6.7, 7.1, 7.5, 7.9, 8.3, 8.6, 8.9, 9.2, 9.6, 9.9, 10.2, 10.5, 10.8,
                    11.1, 11.4, 11.7, 12.0, 12.3, 12.5, 12.8, 13.1, 13.4, 13.6, 13.9, 14.2, 14.5, 14.7, 15.0,
                    15.3, 15.5, 15.8, 16.1, 16.3, 16.6, 16.9, 17.2, 17.4, 17.7, 18.0, 18.3, 18.5, 18.8, 19.1,
                    19.4, 19.7, 20.0, 20.3, 20.6, 20.9, 21.2, 21.5, 21.8, 22.1, 22.4, 22.7, 23.0, 23.3
                ],
                'cewe': [
                    3.2, 4.2, 5.1, 5.8, 6.4, 6.9, 7.3, 7.6, 8.0, 8.3, 8.6, 8.9, 9.2, 9.5, 9.8, 10.0, 10.3,
                    10.6, 10.9, 11.1, 11.4, 11.6, 11.9, 12.2, 12.4, 12.7, 12.9, 13.2, 13.5, 13.7, 14.0, 14.3,
                    14.5, 14.8, 15.1, 15.4, 15.6, 15.9, 16.2, 16.5, 16.7, 17.0, 17.3, 17.6, 17.9, 18.1, 18.4,
                    18.7, 19.0, 19.3, 19.6, 19.9, 20.2, 20.5, 20.8, 21.1, 21.4, 21.7, 22.0, 22.3, 22.6, 22.9,
                    23.2, 23.5
                ]
            };
    
            const heightThreshold = heightThresholds[jenisKelamin][umur - 1];
            const weightThreshold = weightThresholds[jenisKelamin][umur - 1];
    
            if (tinggiBadan < heightThreshold) {
                stuntingStatus = 'Stunting';
            } else {
                stuntingStatus = 'Normal';
            }
    
            document.getElementById('result').style.display = 'block';
            document.getElementById('stuntingResult').innerText = `Status: ${stuntingStatus}`;
        });
    </script>

    

    

    

    <h2 class="separator">
        Suplemen Harian
    </h2>

    <div class="nft-shop">

        <div class="nft-list" id ="0-5">
            <div class="item">
                <img src="/img/dada.png">
                <div class="info">
                    <div>
                        <h5>Protein</h5>
                        <div class="btc">
                            
                            <p>15 gram</p>
                        </div>
                    </div>
                    
                </div>
                <div class="bid">
                    
                    
                </div>
            </div>
            <div class="item">
                <img src="/img/sayur.png">
                <div class="info">
                    <div>
                        <h5>Serat</h5>
                        <div class="btc">
                            
                            <p class="harga">15 gram</p>
                        </div>
                    </div>
                    
                </div>
                <div class="bid">
                    
                    
                </div>
            </div>
            <div class="item">
                <img src="/img/telur.png">
                <div class="info">
                    <div>
                        <h5>Telur</h5>
                        <div class="btc">
                            
                            <p>15 gram</p>
                        </div>
                    </div>
                    
                </div>
                <div class="bid">
                    
                    
                </div>
            </div>
            
        </div>

        

    </div>

    <div class="view-more1">
        <button onclick="window.location.href='/Obat'">View More</button>
    </div>

    <h2 class="separator">
        Our Team
    </h2>

    <div class="home-container">
        <div class="profile-card1">
            <div class="img">
                <img src="img/irwan.jpg">
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
        <div class="profile-card1">
            <div class="img">
                <img src="img/siti.jpg">
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
        <div class="profile-card1">
            <div class="img">
                <img src="img/evanthe.jpg">
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
    <div class="view-more">
        <button onclick="window.location.href='/timkkn'">View More</button>
    </div>

    <footer>
        <h3>Pusat Informasi, Edukasi & <span>Pencegahan Stunting</span></h3>
        <div class="right">
            <div class="links">
            <a href="{{ url("/") }}">Home</a></li>
            <a href="{{ url("/tentangstunting") }}">Tentang Stunting</a></li>
            <a href="{{ url("/Obat") }}">Nutrisi</a></li>
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