<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pariwisata</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <header>
        <nav>
            <a href="#"><img width="170px" src="assets/img/logo1.png" alt=""></a>
            <ul>
                <li><a href="#destination">Destination</a></li>
                <li><a href="#guidetour">Guidetour</a></li>
                <li><a href="lihatdata.php">Guestbook</a></li>
                <li><a href="#aboutus">About us</a></li>
            </ul>
        </nav>
    </header>
    <div class="jumbotron">
        <div class="tittle">
            <img src="assets/img/garis1.png" alt="" style="padding-right: 20px;">
            <p>Kepulauan Raja Ampat</p>
        </div>
        <div class="pe" style="padding: 0 21%; padding-bottom: 3%;">
            <p>Tertarik melihat dan menjelajahi destinasi wisata</p>
            <p>di Raja Ampat yang memesona itu?</p>
        </div>
        <div class="pict-rajaampat" style="display: flex; justify-content: flex-end;">
            <img style="margin-right: -40px;" src="assets/img/rajaampat2.png" width="405px" alt="">
            <img src="assets/img/rajaampat3.png" width="370px" alt="">
        </div>
    </div>
    <div class="container-fluid" style="background-color: #FFF;">
        <div class="container" id="destination">
            <div class="atas">
                <p>Destination</p>
                <img src="assets/img/garis2.png" alt="">
            </div>
            <div class="bawah destination">
                <div class="content content-1">
                    <img src="assets/img/destinasi1.png" alt="">
                </div>
                <div class="content content-2">
                    <img src="assets/img/destinasi2.png" alt="">
                </div>
                <div class="content content-3">
                    <img src="assets/img/destinasi3.png" alt="">
                </div>
            </div>
        </div>
        <div class="container" id="guidetour" style="margin-top: -60px;">
            <div class="atas">
                <p>Guidetour</p>
                <img src="assets/img/garis2.png" alt="">
            </div>
            <div class="bawah guidetour">
                <div class="content">
                    <img src="assets/img/guidetour.png" alt="">
                </div>
                <div class="content">
                    <img src="assets/img/guidetour.png" alt="">
                </div>
                <div class="content">
                    <img src="assets/img/guidetour.png" alt="">
                </div>
            </div>
        </div>
        <div class="container" id="aboutus" style="margin-top: -60px;">
            <div class="atas">
                <p>About us</p>
                <img src="assets/img/garis2.png" alt="">
            </div>
            <div class="bawah aboutus-1" style="padding-bottom: 30px;">
                <div class="content">
                    <img src="assets/img/daffa.png" alt="">
                </div>
                <div class="content">
                    <img src="assets/img/mirza.png" alt="">
                </div>
            </div>
            <div class="bawah aboutus-2">
                <div class="content">
                    <img src="assets/img/nyimas.png" alt="">
                </div>
                <div class="content">
                    <img src="assets/img/ahista.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="isi">
            <img class="tittle-footer" src="assets/img/logo2.png" width="140px" alt="">
            <p>Layanan yang membantu seseorang untuk berwisata ke Papua Barat</p>
        </div>
        <div class="isi">
            <p class="tittle-footer">Tentang Kami</p>
            <p>Inspirasi Masalah</p>
            <p>Misi Kami</p>
            <p>Penghargaan</p>
            <p>Anggota</p>
            <p>Testimonial</p>
        </div>
        <div class="isi">
            <p class="tittle-footer">Sosial Media</p>
            <p>Instagram</p>
            <p>Facebook</p>
            <p>Twitter</p>
            <p>Linkedin</p>
            <p>Pinterest</p>
        </div>
        <div class="isi">
            <p class="tittle-footer">Kontak Kami</p>
            <p>Purwokerto, Jawa Tengah</p>
            <p>+62 673 8274 78326</p>
            <p>+62 673 8274 78354</p>
            <p>rajaampat@example.com</p>
        </div>
    </div>


    <script>
        window.onscroll = function() {
            var scroll = document.documentElement.scrollTop;

            if (scroll > 450) {
                document.querySelector("div.destination").style.opacity = "1";
                document.querySelector("div.destination").style.transform = "translate(0,0)";
            } else {
                document.querySelector("div.destination").style.opacity = "0";
                document.querySelector("div.destination").style.transform = "translate(0,250px)";
            }

            if (scroll > 1000) {
                document.querySelector("div.guidetour").style.opacity = "1";
                document.querySelector("div.guidetour").style.transform = "translate(0,0)";
            } else {
                document.querySelector("div.guidetour").style.opacity = "0";
                document.querySelector("div.guidetour").style.transform = "translate(0,250px)";
            }

            if (scroll > 1500) {
                document.querySelector("div.aboutus-1").style.opacity = "1";
                document.querySelector("div.aboutus-1").style.transform = "translate(0,0)";
            } else {
                document.querySelector("div.aboutus-1").style.opacity = "0";
                document.querySelector("div.aboutus-1").style.transform = "translate(0,250px)";
            }

            if (scroll > 1800) {
                document.querySelector("div.aboutus-2").style.opacity = "1";
                document.querySelector("div.aboutus-2").style.transform = "translate(0,0)";
            } else {
                document.querySelector("div.aboutus-2").style.opacity = "0";
                document.querySelector("div.aboutus-2").style.transform = "translate(0,250px)";
            }
            console.log(scroll);
        }
    </script>
</body>

</html>