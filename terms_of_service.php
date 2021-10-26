<?php require_once 'resources/config.php'; ?>
<?php $title="Terms of Service"; ?>


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

                    <h1>Welcome to our Terms of Service</h1>

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

                    <?php echo get_content(1); ?>
                    <!-- <ul>
                        <li>You may use the Pocketbook Wallet to:
                            <ul>
                                <li>transfer the digital currency known as the Barter Unit to other private users of the app.</li>
                                <li>receive and/or hold Barter Units.</li>
                                <li>receive and/or hold Universal Basic Income (UBI) Barter Units. </li>
                                <li>facilitate transactions on the app.</li>
                            </ul>
                        </li>
                        <li>
                            In terms of:
                            <ul>
                                <li>Deposits into your Pocketbook Wallet:
                                    <ul>
                                        <li>BarterUnit LLC, in its sole discretion, has the right to accept or reverse or temporarily withhold any deposit request;</li>
                                        <li>BarterUnit LLC will credit your Pocketbook Wallet with the relevant amount of BarterUnits on completion of the relevant transaction;</li>
                                    </ul>
                                </li>
                                <li>Withdrawals from your Pocketbook Wallet
                                    <ul>
                                        <li>BarterUnit LLC, in its sole discretion, has the right to accept or reverse or temporarily withhold your withdrawal request;</li>
                                        <li>BarterUnit LLC may immediately debit your Pocketbook Wallet when a withdrawal is authorised by you.</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>You acknowledge and agree that your use of the Pocketbook Wallet and/or functionality of the Pocketbook Wallet may be limited and/or restricted by BarterUnit LLC:
                            <ul>
                                <li>due to any Website or Mobile App limitations from time to time;</li>
                                <li>if BarterUnit LLC determines that you must complete any further verification procedures;</li>
                                <li>if, at BarterUnit LLC sole discretion, it believes you are using the Pocketbook Wallet for inappropriate purposes or in contravention to any of the terms and conditions of this agreement.</li>
                            </ul>
                        </li>
                    </ul> -->

                </div>

            </div>

        </div>

    </div>

</section>



<?php include 'include/footer.php'; ?>