<?php require_once 'resources/config.php'; validate_ubi_login_page(); ?>
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>UBI Sign In Form</title>
</head>

<body>
    <form action="" method="POST">
        <section class="registerFoms">
            <div class="container p-0">
                <div class="row no-gutters formFS">
                    <div class="col-md-5">
                        <div class="graph13">
                            <img class="img-fluid" src="images/graphics/graphic-13.png" alt="">
                        </div>

                    </div>

                    <div class="col-md-7">
                        <div class="p-3 text-right pr-5 formActionBtns">
                            <a href="#" >Sign in</a> <a href="ubi-register.form.php" class="active">Sign up</a>
                        </div>
                        <div class="formBox pt-3 pb-3 pr-5 pl-0">
                            <h2 class="formTile">Sign in</h2>



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Email Address </label>
                                        <input name="email" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Password </label>
                                        <input name="password" type="password" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="signin" type="submit" class="btn btn-primary w-100" value="SIGN IN">
                                    </div>
                                    <p class="text-center">
                                        <a href="forgot_password.php?type=ubi">Forgot Password</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </section>
        </form>
        <!--  -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ajax_calls.js"></script>
        <script src="js/alerts.js"></script>
        <script>
            new WOW().init();
            $(window).scroll(function() {
                var sticky = $('.navbar'),
                scroll = $(window).scrollTop();

                if (scroll >= 200) sticky.addClass('fixed');
                else sticky.removeClass('fixed');
            });

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            $(document).ready(function() {
                console.clear();
            });
        </script>
        <?php ubi_login(); ?>
    </body>

    </html>
