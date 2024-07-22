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
            <a href="{{ url('/Obat') }}">Nutrisi</a>
            <a href="{{ url('/timkkn') }}">Tentang Kita</a>
        </div>
        
    </nav>

    <header>
        <div class="left">
            <h1>Pusat Pencegahan <span>Stunting dini</span></h1>
            <p>Bersama cegah stunting untuk anak indonesia yang lebih pintar dan berwawasan tinggi</p>
            <div class="submit-button">
                <button type="submit" onclick="window.location.href='/selengkapnya'">Selengkapnya</button>
            </div>
        </div>
        <img src="/img/5sempurna.png">
    </header>
    <h2 class="separator">
        Suplemen Harian
    </h2>

    <div class="nft-shop">
        <div class="category">
            <a href="#6-11" class="category-link" data-category="6-11">6-11 bulan</a>
            <a href="#1-3" class="category-link" data-category="1-3">1-3 tahun</a>
            <a href="#4-6" class="category-link" data-category="4-6">4-6 tahun</a>
        </div>

        <div class="nft-list" id="products">
            
        </div>
    </div>
    <h2 class="separator">
        Tabel WHO
    </h2>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kelompok Umur</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Protein</th>
                    <th>Lemak</th>
                    <th>Karbohidrat</th>
                    <th>Serat</th>
                    <th>Air</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>0-5 Bulan</td>
                    <td>6</td>
                    <td>60</td>
                    <td>550</td>
                    <td>9</td>
                    <td>31</td>
                    <td>59</td>
                    <td>700</td>
                    


                </tr>
                <tr>
                    <td>2</td>
                    <td>6-11 Bulan</td>
                    <td>9</td>
                    <td>72</td>
                    <td>800</td>
                    <td>15</td>
                    <td>35</td>
                    <td>105</td>
                    <td>900</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1-3 Tahun</td>
                    <td>13</td>
                    <td>92</td>
                    <td>1350</td>
                    <td>20</td>
                    <td>45</td>
                    <td>215</td>
                    <td>1150</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>4-6 Tahun</td>
                    <td>19</td>
                    <td>113</td>
                    <td>1400</td>
                    <td>25</td>
                    <td>50</td>
                    <td>220</td>
                    <td>1450</td>
                </tr>
                
            </tbody>
        </table>
    </div>

    

    <footer>
        <h3>Pusat Informasi, Edukasi & Pencegahan Stunting</h3>
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
        let products = {
            data: [
                {
                    productName: "Protein",
                    category: "6-11",
                    price: "15 gram",
                    image: "/img/dada.png",
                },
                {
                    productName: "Protein",
                    category: "6-11",
                    price: "15 gram",
                    image: "/img/telur.png",
                },
                {
                    productName: "Protein",
                    category: "6-11",
                    price: "15 gram",
                    image: "/img/sapicincang.png",
                },
                {
                    productName: "Protein",
                    category: "6-11",
                    price: "15 gram",
                    image: "/img/ikan.png",
                },
                {
                    productName: "Lemak",
                    category: "6-11",
                    price: "35 gram",
                    image: "/img/keju.png",
                },
                {
                    productName: "Karbohidrat",
                    category: "6-11",
                    price: "105 gram",
                    image: "/img/nasi.png",
                },
                {
                    productName: "Serat",
                    category: "6-11",
                    price: "11 gram",
                    image: "/img/sayur.png",
                },
                {
                    productName: "Air",
                    category: "6-11",
                    price: "900 ml",
                    image: "/img/air.png",
                },
                {
                    productName: "Lemak",
                    category: "6-11",
                    price: "35 gram",
                    image: "/img/santan.png",
                },
                
                {
                    productName: "Protein",
                    category: "1-3",
                    price: "20 gram",
                    image: "/img/dada.png",
                },
                {
                    productName: "Protein",
                    category: "1-3",
                    price: "20 gram",
                    image: "/img/telur.png",
                },
                {
                    productName: "Protein",
                    category: "1-3",
                    price: "20 gram",
                    image: "/img/sapicincang.png",
                },
                {
                    productName: "Protein",
                    category: "1-3",
                    price: "20 gram",
                    image: "/img/ikan.png",
                },
                {
                    productName: "Lemak",
                    category: "1-3",
                    price: "45 gram",
                    image: "/img/keju.png",
                },
                {
                    productName: "Karbohidrat",
                    category: "1-3",
                    price: "215 gram",
                    image: "/img/nasi.png",
                },
                {
                    productName: "Serat",
                    category: "1-3",
                    price: "19 gram",
                    image: "/img/sayur.png",
                },
                {
                    productName: "Air",
                    category: "1-3",
                    price: "1150 ml",
                    image: "/img/air.png",
                },
                {
                    productName: "Lemak",
                    category: "1-3",
                    price: "45 gram",
                    image: "/img/santan.png",
                },
                {
                    productName: "Protein",
                    category: "4-6",
                    price: "25 gram",
                    image: "/img/dada.png",
                },
                {
                    productName: "Protein",
                    category: "4-6",
                    price: "25 gram",
                    image: "/img/telur.png",
                },
                {
                    productName: "Protein",
                    category: "4-6",
                    price: "25 gram",
                    image: "/img/sapicincang.png",
                },
                {
                    productName: "Protein",
                    category: "4-6",
                    price: "25 gram",
                    image: "/img/ikan.png",
                },
                {
                    productName: "Lemak",
                    category: "4-6",
                    price: "50 gram",
                    image: "/img/keju.png",
                },
                {
                    productName: "Karbohidrat",
                    category: "4-6",
                    price: "220 gram",
                    image: "/img/nasi.png",
                },
                {
                    productName: "Serat",
                    category: "4-6",
                    price: "20 gram",
                    image: "/img/sayur.png",
                },
                {
                    productName: "Air",
                    category: "4-6",
                    price: "1450 ml",
                    image: "/img/air.png",
                },
                {
                    productName: "Lemak",
                    category: "4-6",
                    price: "50 gram",
                    image: "/img/santan.png",
                },
            ],
        };

        for (let i of products.data) {
            let card = document.createElement("div");
            card.classList.add("item", i.category);
            let imgContainer = document.createElement("div");
            imgContainer.classList.add("image-container");
            let image = document.createElement("img");
            image.setAttribute("src", i.image);
            imgContainer.appendChild(image);
            card.appendChild(imgContainer);
            let container = document.createElement("div");
            container.classList.add("info");
            let name = document.createElement("h5");
            name.classList.add("product-name");
            name.innerText = i.productName;
            container.appendChild(name);
            let price = document.createElement("p");
            price.innerText = i.price;
            container.appendChild(price);
            card.appendChild(container);
            let bid = document.createElement("div");
            bid.classList.add("bid");
            let link = document.createElement("a");
            link.href = "#";
            
            bid.appendChild(link);
            card.appendChild(bid);
            document.getElementById("products").appendChild(card);
        }

        document.querySelectorAll(".category-link").forEach((link) => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                let category = this.getAttribute("data-category");
                document.querySelectorAll(".item").forEach((item) => {
                    if (item.classList.contains(category)) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });

        // Initially display all products
        window.onload = () => {
            document.querySelectorAll(".item").forEach((item) => {
                if (item.classList.contains("6-11")) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        };
    </script>
</body>

</html>
