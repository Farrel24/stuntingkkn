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
            <p>Bersama cegah stunting untuk anak indonesia yang lebih pintar dan berwawasan tinggi</p>
            <div class="submit-button">
                <button type="submit" onclick="window.location.href='/selengkapnya'">Selengkapnya</button>
            </div>
        </div>
        <img src="/img/header1.png">
    </header>
    <h2 class="separator">
        Suplemen Harian
    </h2>

    <div class="nft-shop">
        <div class="category">
            <a href="#0-5" class="category-link" data-category="0-5">0-5 bulan</a>
            <a href="#6-11" class="category-link" data-category="6-11">6-11 bulan</a>
            <a href="#1-3" class="category-link" data-category="1-3">1-3 bulan</a>
            <a href="#4-6" class="category-link" data-category="4-6">4-6 bulan</a>
        </div>

        <div class="nft-list" id="products">
            
        </div>
    </div>

    <div class="view-more">
        <button onclick="window.location.href='/Obat'">View More</button>
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

    <script>
        let products = {
            data: [
                {
                    productName: "Vitamin A",
                    category: "0-5",
                    price: "50000",
                    image: "/img/vit1.png",
                },
                {
                    productName: "Folate",
                    category: "0-5",
                    price: "50000",
                    image: "/img/vit2.png",
                },
                {
                    productName: "Vitamin B2",
                    category: "0-5",
                    price: "50000",
                    image: "/img/vit3.png",
                },
                {
                    productName: "Vitamin B1",
                    category: "0-5",
                    price: "50000",
                    image: "/img/vit4.png",
                },
                {
                    productName: "Vitamin B1",
                    category: "6-11",
                    price: "75000",
                    image: "/img/vit5.png",
                },
                {
                    productName: "Vitamin K",
                    category: "6-11",
                    price: "75000",
                    image: "/img/vit6.png",
                },
                {
                    productName: "Vitamin E",
                    category: "6-11",
                    price: "75000",
                    image: "/img/vit7.png",
                },
                {
                    productName: "Vitamin C",
                    category: "6-11",
                    price: "75000",
                    image: "/img/vit8.png",
                },
                {
                    productName: "Mangan",
                    category: "1-3",
                    price: "90000",
                    image: "/img/mineral1.png",
                },
                {
                    productName: "Fosfor",
                    category: "1-3",
                    price: "90000",
                    image: "/img/mineral2.png",
                },
                {
                    productName: "Vitamin D3",
                    category: "1-3",
                    price: "90000",
                    image: "/img/mineral3.png",
                },
                {
                    productName: "Magnesium",
                    category: "1-3",
                    price: "90000",
                    image: "/img/mineral4.png",
                },
                {
                    productName: "Iron",
                    category: "4-6",
                    price: "80000",
                    image: "/img/mineral5.png",
                },
                {
                    productName: "Selenium",
                    category: "4-6",
                    price: "80000",
                    image: "/img/mineral6.png",
                },
                {
                    productName: "Mangan",
                    category: "4-6",
                    price: "80000",
                    image: "/img/mineral1.png",
                },
                {
                    productName: "Fosfor",
                    category: "4-6",
                    price: "80000",
                    image: "/img/mineral2.png",
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
            price.innerText = "Rp " + i.price;
            container.appendChild(price);
            card.appendChild(container);
            let bid = document.createElement("div");
            bid.classList.add("bid");
            let link = document.createElement("a");
            link.href = "#";
            link.innerText = "Beli disini";
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
                item.style.display = "block";
            });
        };
    </script>
</body>

</html>
