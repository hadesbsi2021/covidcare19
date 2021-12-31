<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <title> <?php echo 'About' ?> </title>
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
            <a class="navbar-brand" href="#">
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
</body>