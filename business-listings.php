<?php $title="Business Listings"; include 'include/header.php'; ?>

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