<div class="home-hero-section">
    <div class="bubble">
        <img src="<?= base_url('assets') ?>/img/bubble.png" alt="bubble-images " class="w-100 img-fluid" />
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="home-hero-content">
                    <h1>
                        Siguntang <strong>Cafe</strong> & <strong>Resto</strong>
                        <!-- <strong>Let’s</strong>
                        <span>Go.</span> -->
                    </h1>
                    <p>
                        Have any food on your mind?<span>
                            <a href="<?= base_url('meja/1') ?>">Just order now!</a></span>
                    </p>
                    <!-- <a class="btn menu-btn" href="#food-menu">Today's Menu <i class="icofont-double-right"></i></a> -->
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="burger-img">
                    <img src="<?= base_url('assets') ?>/img/burger1.png" class="w-100 img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!--HOME HERO SECTION END-->

<!--SPECIAL SECTION START-->
<div class="special-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-5 col-lg-6 col-xl-6">
                <?php
                $menu_l = HotOffer();
                ?>
                <div class="special-img">
                    <img src="<?= base_url('uploads/menu/' . $menu_l['spesial']['gambar']) ?>" class="w-100" alt="" />
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
                <div class="special-content text-center">
                    <div class="donut-icon m-auto">
                        <img src="<?= base_url('assets') ?>/img/donut.png" class="w-100" alt="" />
                    </div>
                    <h2>
                        Penawaran Spesial
                        <span>untuk kamu</span>
                    </h2>
                    <!-- <p>
                        It is a long established fact that a will distracted readable
                        content of a page when looking at its the layout using Lorem
                        Ipsum is that it has a normal distribution
                        <span> as opposed to using making it look like.</span>
                    </p>
                    <div class="offer-info">
                        <div class="form-row justify-content-center align-items-center">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="item-price">
                                    <h3><span>$</span>89.00</h3>
                                    <span><i class="icofont-clock-time"></i> 25 min away</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="item-number">
                                    <div class="item-quantity">
                                        <button><i class="icofont-plus"></i></button>
                                        <span>02</span>
                                        <button><i class="icofont-minus"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <a href="#" class="btn order-btn">Order Now</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--SPECIAL SECTION END-->

<!--HOME SERVICES SECTION START-->
<div class="home-services-section">
    <div class="container">
        <div class="home-services">
            <div class="form-row">


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="image-box clearfix">
                        <div class="box-image float-left">
                            <img src="<?= base_url('assets') ?>/img/macaron.png" alt="" />
                        </div>
                        <div class="image-text float-left">
                            <h2>Pilih Tempat</h2>
                            <p>
                                Scan barcode yang tertera pada meja.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="image-box clearfix">
                        <div class="box-image float-left">
                            <img src="<?= base_url('assets') ?>/img/honney.png" alt="" />
                        </div>
                        <div class="image-text float-left">
                            <h2>Pilih Menu</h2>
                            <p>
                                klik dan pesan menu kesukaan anda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="image-box clearfix">
                        <div class="box-image float-left">
                            <img src="<?= base_url('assets') ?>/img/dinner.png" alt="" />
                        </div>
                        <div class="image-text float-left">
                            <h2>Happy food</h2>
                            <p>
                                Pesanan anda akan masuk antrian dan akan dibuat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--HOME SERVICES SECTION END-->

<!--MENU SECTION START-->
<div class="food-menu-section" id="food-menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="menu-head text-center">
                    <h2>Menu andalan <span>Siguntang <br>Cafe & Resto</span></h2>
                    <p>
                        Berikut merupakan beberapa menu andalan kami
                    </p>
                </div>
            </div>
        </div>
        <div class="row food-box">
            <?php foreach ($menu_l['promo'] as $p) { ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="<?= base_url('uploads/menu/' . $p['gambar']) ?>" class="w-100" style="height : 100px !important" alt="" />
                            </div>
                            <!-- <div class="overlay text-left">
                                <h4>Ingredients</h4>
                                <span>½ tbsp olive oil</span>
                                <span>1 onion, peeled and finely chopped</span>
                                <span>1 tsp mixed dried herbs</span>
                                <span>1 egg, beaten</span>
                                <span> 4 slices mature Cheddar (optional)</span>
                            </div> -->
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2><?= $p['nama_menu'] ?></h2>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="food-info text-left">
                                        <!-- <span><i class="icofont-clock-time"></i> 25 min away</span> -->

                                        <h3><?php if ($p['promo'] == 'Y') {
                                                echo '<small><del style="text-decoration-style: single; font-size: 15px">Rp ' . number_format($p['harga']) . ' </del></small><br>';
                                                echo '<span>Rp</span> ' . number_format($p['harga'] - $p['diskon']);
                                            } else
                                                echo '<span>Rp</span> ' . number_format($p['harga']);

                                            ?>
                                        </h3>
                                    </div>
                                </div>
                                <!-- <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                                    <a href="#" class="btn order-btn2">Order Now</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                <div class="food-menu text-center">
                    <div class="food-img-info">
                        <div class="food-img">
                            <img src="<?= base_url('assets') ?>/img/food2.png" class="w-100" alt="" />
                        </div>
                        <div class="overlay text-left">
                            <h4>Ingredients</h4>
                            <span>½ tbsp olive oil</span>
                            <span>1 onion, peeled and finely chopped</span>
                            <span>1 tsp mixed dried herbs</span>
                            <span>1 egg, beaten</span>
                            <span> 4 slices mature Cheddar (optional)</span>
                        </div>
                    </div>
                    <div class="food-informaion">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h2>Special Beef Burger</h2>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="food-info text-left">
                                    <span><i class="icofont-clock-time"></i> 25 min away</span>
                                    <h3><span>$</span>95.00</h3>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                                <a href="#" class="btn order-btn2">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>
<!--MENU SECTION END-->

<!--OFFER SECTION START-->
<!-- <div class="offer-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="offer-content">
                    <h2>Today's <span>Offers.</span></h2>
                    <h5>
                        It is a long established fact that a will distracted readable
                        content of a page when looking the layout
                    </h5>
                    <blockquote>
                        There are many variations passages of Lorem Ipsum available, but
                        the majority have suffered alteration in form, by injected
                        humour randomised words which don't look even slightly
                        believable.
                    </blockquote>
                    <div class="row mt-4 align-items-center">
                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="offer text-left">
                                <h3><span>$</span>89.00</h3>
                                <span><i class="icofont-clock-time"></i> 25 min away</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-8 col-md-8 col-lg-8 col-xl-8 mt-2 text-right">
                            <a href="#" class="btn offer-btn">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="offer-img">
                    <img src="<?= base_url('assets') ?>/img/offerimg.png" class="w-100 img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--OFFER SECTION END-->

<!--CUSTOMER SECTION START-->
<!-- <div class="customer-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg 12 col-xl-12">
                <div class="customer-head text-center">
                    <h2>Some of Our Satisfied <span>Customer.</span></h2>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="images-position position-relative">
                <div class="customer1-img">
                    <img src="<?= base_url('assets') ?>/img/customer1.png" class="w-100 img-fluid" alt="" />
                </div>
                <div class="customer2-img">
                    <img src="<?= base_url('assets') ?>/img/customer2.png" class="w-100 img-fluid" alt="" />
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="testimonial-slider">
                    <div class="customer-information text-center">
                        <div class="customer-img">
                            <img src="<?= base_url('assets') ?>/img/customer1.png" class="w-100 img-fluid" alt="" />
                        </div>
                        <div class="customer-content">
                            <p>
                                If you are going to use a passage of cren you need to isn't
                                anything embarrassing hidden in the middle of text
                                generators Internet tend repeat predefined chunks as
                                necessary making this the first true generator on the
                                Internet.
                            </p>
                            <h3><a href="#">Kristyn Hairston</a></h3>
                            <span>Happy Customer</span>
                        </div>
                    </div>
                    <div class="customer-information text-center">
                        <div class="customer-img">
                            <img src="<?= base_url('assets') ?>/img/customer2.png" class="w-100 img-fluid" alt="" />
                        </div>
                        <div class="customer-content">
                            <p>
                                If you are going to use a passage of cren you need to isn't
                                anything embarrassing hidden in the middle of text
                                generators Internet tend repeat predefined chunks as
                                necessary making this the first true generator on the
                                Internet.
                            </p>
                            <h3><a href="#">Antor Biswas</a></h3>
                            <span>Happy Customer</span>
                        </div>
                    </div>
                    <div class="customer-information text-center">
                        <div class="customer-img">
                            <img src="<?= base_url('assets') ?>/img/customer3.png" class="w-100 img-fluid" alt="" />
                        </div>
                        <div class="customer-content">
                            <p>
                                If you are going to use a passage of cren you need to isn't
                                anything embarrassing hidden in the middle of text
                                generators Internet tend repeat predefined chunks as
                                necessary making this the first true generator on the
                                Internet.
                            </p>
                            <h3><a href="#">Marie Hairston</a></h3>
                            <span>Happy Customer</span>
                        </div>
                    </div>
                    <div class="customer-information text-center">
                        <div class="customer-img">
                            <img src="<?= base_url('assets') ?>/img/customer4.png" class="w-100 img-fluid" alt="" />
                        </div>
                        <div class="customer-content">
                            <p>
                                If you are going to use a passage of cren you need to isn't
                                anything embarrassing hidden in the middle of text
                                generators Internet tend repeat predefined chunks as
                                necessary making this the first true generator on the
                                Internet.
                            </p>
                            <h3><a href="#">Hannah Hairston</a></h3>
                            <span>Happy Customer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="images-position position-relative">
                <div class="customer3-img">
                    <img src="<?= base_url('assets') ?>/img/customer3.png" class="w-100 img-fluid" alt="" />
                </div>
                <div class="customer4-img">
                    <img src="<?= base_url('assets') ?>/img/customer4.png" class="w-100 img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--CUSTOMER SECTION END-->

<!--TESTY FOOD SECTION START-->
<!-- <div class="testy-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="testy-content">
                    <h3>We make testy <span>food everyday</span></h3>
                    <p>
                        If you are going to use aa passage of you need to be sure there
                        isn't anything embarrassing hidden in the middle of text.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 text-center">
                <div class="video-content">
                    <div class="video">
                        <a href="https://youtu.be/V6Vd1E9OL-U" class="venobox" data-autoplay="true" data-vbtype="video">
                            <i class="icofont-ui-play"></i>
                        </a>
                    </div>
                    <span>20 Minutes Intro</span>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--TESTY FOOD SECTION END-->