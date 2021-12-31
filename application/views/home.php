<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> <?php echo $judul; ?> </title>
</head>

<!-- style -->
<style>
    .banner {
        height: 80vh;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('application/img/martin.jpg');
        background-size: cover;
        background-position: center;
    }

    .banner-content {
        height: 100%;
        color: cornsilk;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<!-- end of style -->

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="loginpage">
                <img src="application/img/cvd19.jpg" alt="" width="50">
                Covid Care 19
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSuportedContent" aria-controls="navbarSuportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSuportedContent">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="http://localhost/covidcare19/">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="http://localhost/covidcare19/application/views/about.php">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="http://localhost/covidcare19/application/views/contact.php">Contact</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="https://www.who.int/home/search?indexCatalogue=genericsearchindex1&searchQuery=covid&wordsMode=AnyWord">News</a>
                    </li>
                </ul>
                <form class="d-flex mx-5">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- banner -->
    <div class="container-fluid banner">
        <div class="container banner-content col-lg-6">
            <div class='text-center'>
                <p class="fs-1">
                    Selamat Datang Di Covid Care 19
                </p>
                <p class="d-none d-sm-block">
                    covid care 19 adalah website yang berguna untuk membantu masyarakat agar dapat memahami dan mencegah gejala dini terkait penyakit covid 19.
                </p>
                <button class="btn btn-outline-light">
                    Lakukan Pemeriksaan
                </button>
            </div>
        </div>
    </div>
    <!-- end of banner -->

    <!-- About -->
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center">
                <p class="fs-1">
                    About
                </p>
                <p class="text-center" style="font-size: 15px;">
                    Penyakit Coronavirus ( COVID-19 ) adalah penyakit menular yang disebabkan oleh virus SARS-CoV-2.
                    Kebanyakan orang yang terinfeksi virus akan mengalami penyakit pernapasan ringan hingga sedang dan sembuh tanpa memerlukan perawatan khusus. Namun, bebrapa akan menjadi sakit parah dan memerlukan perhatian medis. Orang yang lebih tua dan mereka yang memiliki kondisi medis mendasar seperti penyakit kardiovaskular, diabetes, penyakit pernapasan kronis, atau kanker lebih mungkin mengembangkan penyakit serius. Siapa pun dapat jatuh sakit dengan COVID-19 dan menjadi sakit parah atau meninggal pada usia berapa pun.
                    Cara terbaik untuk mencegah memperlambat penularan adalah dengan mendapat informasi yang baik tentang penyakit ini dan bagaimana virus menyebar. Lindungi diri Anda dan orang lain dari infeksi dengan menjaga jarak setidaknya 1 meter dari orang lain, mengenakan masker yang pas, dan sering mencuci tangan atau menggunakan gosok berbasis alkohol. Dapatkan vaksinasi saat giliran Anda dan ikuti panduan setempat.

                </p>
            </h2>
        </div>
    </div>
    <!-- end of About -->

    <!-- Contact -->
    <div class="container-fluid py-5 bg-dark">
        <div class="container">
            <h2 class="text-center text-light">
                <p class="fs-1">
                    Contact
                </p>
                <p style="font-size: 15px;">
                    <img src="https://img.icons8.com/ios-glyphs/30/ffffff/phone-disconnected.png" />
                    021-8967543
                    <img src="https://img.icons8.com/material-rounded/24/ffffff/mail.png" />
                    covidcare19@outlook.co.id
                    <img src="https://img.icons8.com/material/24/ffffff/instagram.png" />
                    @covid_care19
                    <img src="https://img.icons8.com/ios-glyphs/30/ffffff/facebook-new.png" />
                    covid care 19
                </p>
            </h2>
        </div>
    </div>
    <!-- end of Contact -->

    <!-- News -->
    <!-- end of News -->
</body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>

    </html>