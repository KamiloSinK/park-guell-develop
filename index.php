<?php require 'config.php' ?>
<?php $is_home_page = true; ?>
<!doctype html>
<html class="no-js notranslate" translate="no" lang="<?= $userLanguage['code'] ?>">
<?php require 'header.php' ?>

<body>
    <!-- header-area START -->
    <?php $scrollMenu = true;
    require 'menu.php' ?>
    <!-- header-area END -->
    <main>
        <!---------hero Section START ---------->
        <section class="hero-area overflow-hidden" style="background-image: url(<?= $_ENV['WEB_URL'] ?>assets/img/1.jpg);" id="ticket">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="fade-right">
                        <div class="hero__title">
                            <h3><?= __('form.title_1') ?></h3>
                            <h1><?= __('form.title_2') ?></h1>
                        </div>
                        <?php require 'form_header.php' ?>
                    </div>
                </div>
            </div>
        </section>
        <!---------hero Section End ---------->
        <!---------future Section START ---------->
        <section class="future-area overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center order-first">
                        <div class="sec__title" data-aos="fade-down">
                            <h1><?= __('content.main.title_1') ?></h1>
                            <p><?= __('content.main.title_2') ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-last order-lg-0">
                        <div class="future__text" data-aos="fade-up">
                            <h1><?= __('content.main.title_3') ?></h1>
                            <p><?= __('content.main.text_1') ?></p>
                            <p><?= __('content.main.text_2') ?></p>
                            <p><?= __('content.main.text_3') ?></p>
                            <a href="#" class="thm_btn"><?= __('content.main.button_1') ?> <img src="<?= $_ENV['WEB_URL'] ?>assets/img/right-arrow.svg" class="invert" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-md-0">
                        <div class="future__img" data-aos="zoom-in">
                            <i><img src="<?= $_ENV['WEB_URL'] ?>assets/img/12.jpg" alt=""></i>
                            <div class="future__img__content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="hoarios-area" id="Horarios">
                <div class="container">
                    <div class="row">
                        <div class="future__blk__wrapper">
                            <div class="row mt_100">

                                <div class="col-lg-6">
                                    <div class="future__blk" data-aos="zoom-in">
                                        <h2><i><img src="<?= $_ENV['WEB_URL'] ?>assets/img/aislamiento.svg" alt=""></i> <?= __('schedule.title_1') ?></h2>
                                        <hr>
                                        <p><?= __('schedule.title_2') ?></p>
                                        <p><?= __('schedule.title_3') ?></p>
                                        <p><?= __('schedule.title_4') ?></p>
                                        <p><?= __('schedule.title_5') ?></p>
                                        <p><?= __('schedule.title_5') ?></p>
                                        <p><?= __('schedule.title_6') ?></p>
                                        <p><?= __('schedule.title_7') ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="future__blk" data-aos="zoom-in">
                                        <h2><i><img src="<?= $_ENV['WEB_URL'] ?>assets/img/info.svg" alt=""></i> <?= __('schedule.info_1') ?></h2>
                                        <hr>
                                        <p style="text-align: center; font-size: 23px; font-weight: 100; margin-top: 4rem;">
                                            <b><?= __('schedule.info_2') ?></b> <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------future Section End ---------->
        <!---------asombro Section START ---------->
        <section class="asombro-area overflow-hidden a" style="background-image: url(<?= $_ENV['WEB_URL'] ?>assets/img/3.jpg);">
            <div class="opacity no-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <h1 data-aos="fade-up"><?= __('gallery.title_1') ?></h1>
                                <span data-aos="fade-up"><?= __('gallery.title_2') ?></span>
                                <p data-aos="fade-up"><?= __('gallery.text_1') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_2') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_3') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_4') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_5') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_6') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_7') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_8') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_9') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_10') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_11') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_12') ?></p>
                                <p data-aos="fade-up"><?= __('gallery.text_13') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!---------asombro Section End ---------->
        <!---------gallery Section START ---------->
        <section class="gallery-area overflow-hidden">
            <div class="gallery__btn d-md-none">
                <a href="#" class="thm_btn"><?= __('gallery.button_1') ?> <img src="<?= $_ENV['WEB_URL'] ?>assets/img/right-arrow.svg" class="invert" alt=""></a>
            </div>
            <div class="container d-none d-md-block">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery__blk" data-aos="zoom-in">
                            <img src="<?= $_ENV['WEB_URL'] ?>assets/img/4.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery__blk" data-aos="zoom-in">
                            <img src="<?= $_ENV['WEB_URL'] ?>assets/img/5.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery__blk" data-aos="zoom-in">
                            <img src="<?= $_ENV['WEB_URL'] ?>assets/img/6.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery__blk" data-aos="zoom-in">
                            <img src="<?= $_ENV['WEB_URL'] ?>assets/img/7.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery__blk" data-aos="zoom-in">
                            <img src="<?= $_ENV['WEB_URL'] ?>assets/img/8.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery__blk" data-aos="zoom-in">
                            <img src="<?= $_ENV['WEB_URL'] ?>assets/img/9.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12" data-aos="fade-up">
                        <div class="gallery__btn">
                            <a href="#" class="thm_btn"><?= __('gallery.button_2') ?> <img src="<?= $_ENV['WEB_URL'] ?>assets/img/right-arrow.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------gallery Section End ---------->
        <!---------Explora Section START ---------->
        <section class="Explora-area overflow-hidden a">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="Explora__img" data-aos="zoom-in">
                            <img src="<?= $_ENV['WEB_URL'] ?>assets/img/10.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="Explora__content">
                            <h1><?= __('explore.title_1') ?></h1>
                            <p><?= __('explore.text_1') ?></p>
                            <p><?= __('explore.text_2') ?></p>
                            <p><?= __('explore.text_3') ?></p>
                            <p><?= __('explore.text_4') ?></p>
                            <p><?= __('explore.text_5') ?></p>
                            <p><?= __('explore.text_6') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="Explora-area overflow-hidden b" style="background-image: url(<?= $_ENV['WEB_URL'] ?>assets/img/1.jpg);">
            <div class="container opacity">
                <div class="row">

                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="Explora__content">
                            <h1><?= __('explore.title_1') ?></h1>

                            <p><?= __('explore.text_1') ?></p>
                            <p><?= __('explore.text_2') ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------Explora Section End ---------->
        <!---------formas Section START ---------->
        <section id="como_llegar" class="formas-area overflow-hidden">
            <div class="container">
                <div class="text-center formas__area__top" data-aos="fade-up">
                    <div class="sec__title">
                        <h1><?= __('location.title_1') ?></h1>
                    </div>
                    <div class="formas__map" data-aos="zoom-in">
                        <div style="width: 100%">
                            <iframe width="100%" height="570" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2992.139114511692!2d2.148081077699117!3d41.41449873089034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2ae52d441ab%3A0x899a0ba01aaace58!2sPark%20G%C3%BCell!5e0!3m2!1ses-419!2sve!4v1722017583381!5m2!1ses-419!2sve"><a href="https://www.maps.ie/population/"></a></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="formas__accordion section-content">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item" data-aos="fade-up">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i><img src="<?= $_ENV['WEB_URL'] ?>assets/img/form-img-2.svg" alt=""></i> <?= __('location.metro.title') ?>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <p><?= __('location.metro.text_1') ?></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-up">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i><img src="<?= $_ENV['WEB_URL'] ?>assets/img/form-img-4.svg" alt=""></i> <?= __('location.bus.title') ?>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <p><?= __('location.bus.text_1') ?></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-up">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i><img src="<?= $_ENV['WEB_URL'] ?>assets/img/form-img-3.svg" alt=""></i> <?= __('location.taxi.title') ?>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <p><?= __('location.taxi.text_1') ?></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-up">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <i><img src="<?= $_ENV['WEB_URL'] ?>assets/img/form-img-4.svg" alt=""></i> <?= __('location.tour.title') ?>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <p><?= __('location.tour.text_1') ?></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-up">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <i><img src="<?= $_ENV['WEB_URL'] ?>assets/img/form-img-1.svg" alt=""></i> <?= __('location.walk.title') ?>
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <p><?= __('location.walk.text_1') ?></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-up">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseXis">
                                            <i><img src="<?= $_ENV['WEB_URL'] ?>assets/img/form-img-6.svg" alt=""></i> <?= __('location.car.title') ?>
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <p><?= __('location.car.text_1') ?></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------formas Section End ---------->
        <!---------nuestro Section START ---------->
        <section class="nuestro-area section-content overflow-hidden" id="normativas">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="nuestro__content">
                            <h3><?= __('rules.title_1') ?></h3>
                            <span><?= __('rules.title_2') ?></span>
                            <ul class="mt-3">
                                <li><?= __('rules.text_1') ?></li>
                                <li><?= __('rules.text_2') ?></li>
                                <li><?= __('rules.text_3') ?></li>
                                <li><?= __('rules.text_4') ?></li>
                                <li><?= __('rules.text_5') ?></li>
                                <li><?= __('rules.text_6') ?></li>
                                <li><?= __('rules.text_7') ?></li>
                                <li><?= __('rules.text_8') ?></li>
                                <li><?= __('rules.text_9') ?></li>
                                <li><?= __('rules.text_10') ?></li>
                                <li><?= __('rules.text_11') ?></li>
                                <li><?= __('rules.text_12') ?></li>
                                <li><?= __('rules.text_13') ?></li>
                                <li><?= __('rules.text_14') ?></li>
                                <li><?= __('rules.text_15') ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="nuestro__img" data-aos="fade-up">
                            <i><img src="<?= $_ENV['WEB_URL'] ?>assets/img/11.jpg" alt=""></i>
                            <span><?= __('rules.note_1') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------nuestro Section End ---------->
        <!---------Total Section START ---------->
        <?php /* require 'form_footer.php' */ ?>
        <!---------Total Section End ---------->
        <!--------- Section START ---------->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12"></div>
                </div>
            </div>
        </section>
        <!--------- Section End ---------->
    </main>
    <!---------footer Section START ---------->
    <?php require 'footer.php' ?>
    <!---------footer Section End ---------->
    <!-- JS here -->
    <?php require 'calendar.php' ?>
    <?php require 'scripts.php' ?>
</body>

</html>