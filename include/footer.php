
    <section class="footerTop">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="">
                        <h2>Barter Unit Universal <br>
Basic Income Program</h2>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="pl-5">
                        <ul class="teamList d-flex justify-content-between">
                            <li> <a href="terms_of_service.php">Terms of Service </a> </li>
                            <li> <a href="privacy_policy.php">Privacy Policy  </a> </li>
                            <li> <a href="mailto:barterunit@gmail.com">Contact Us </a><br><span class="text-white">barterunit@gmail.com</span> </li>

                        </ul>
                    </div>
                </div>

            </div>
            <!--  -->

            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="footerPlayIcon">
                        Experience our app on:
                        <a href="https://play.google.com/store/apps/details?id=com.barterunit" class="ml-3"> <img src="images/icons/google-store.png" alt=""> </a>
                        <a href="https://apps.apple.com/us/app/barterunit/id1457207657"> <img src="images/icons/app-store.png" alt=""> </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="folowUs text-right">
                        follow us: <!-- <a href="#" class="ml-3"><i class="fab fa-facebook-f"></i></a>  --><a href="https://twitter.com/barterunit"><i class="fab fa-twitter"></i></a> <a href="https://www.instagram.com/barterunit/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--  -->

    <footer class="text-center">
        &copy; www.BarterUnit.com 2020. All Rights Reserved.
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

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
    </script>
</body>

</html>
