<?php require_once 'resources/config.php'; ?>
<?php $title="Privacy Policy"; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/banners/ubi-home-banner.png">

    <!-- Bootstrap / Style CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-01.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title><?php echo $title ?> | Barter Unit</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg barterNav">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="images/brand/logo.png" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <img src="images/icons/menu_icon.png" alt="">
            </button>
            <ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="how-it-works.html">HOW IT WORKS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">BARTERUNITS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ubi.php">UBI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="edc.php">MERCHANTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="business-listings.php">BUSINESS LISTINGS</a>
                        </li>
                    </ul>
        </div>
    </nav>
<style type="text/css">
   .tos_content ul {
        list-style-type: disc;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
    }
</style>
    <section class="homeBanner ubiBanner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="ubiBannerC wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <h1>Welcome to our Privacy Policy</h1>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 ">
                    <div class="ubiBannerI d-flex align-items-center wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                        <img class="img-fluid" src="images/banners/ubi-home-banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-banner -->

    <section class="ubiAgenda">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-11">
                    <div class="doubleBG tos_content">
                        <?php echo get_content(2); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'include/footer.php'; ?>