<?php require_once 'resources/config.php'; ?>
<?php $title="Business Listings";?>
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

<body style="margin-top:-15px">
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
                            <a class="nav-link" href="barterunit.php">BARTERUNITS</a>
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
<section class="businessBanner">

</section>
<!-- businessBanner -->

<section class="localBusiness">
    <div class="">
        <div class="row no-gutters m-0">
            <div class="col-md-12 col-lg-6 col-xl-6 d-flex align-items-center">
                <div class="localBusinessInner wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                    <h2>Find local business</h2>
                    <div class="localSearch">
                        <form class="" method="POST">
                            <input type="text" name="keywords" placeholder="Enter Business Name along with State or Country." value="<?php if(isset($_POST['keywords'])){ echo $_POST['keywords'];}?>" required>
                            <button type="submit" name="search">SEARCH</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6 text-right pr-3">
                <div class="graph12">
                    <img src="images/graphics/graphic-12.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <img src="images/graphics/wave-09.png" class="waveImage" alt="">
</section>
<!--  localBusiness -->

<section class="businessListing">
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">BUSINESS LISTINGS</h1>
        <div class="row">

<?php get_all_listing(); ?>

        </div>
    </div>
</section>
<!-- businessListing -->

<img src="images/graphics/wave-08.png" class="waveImage" alt="">
<?php include 'include/footer.php'; ?>  