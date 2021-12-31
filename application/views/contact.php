<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> <?php echo 'Contact' ?> </title>
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
