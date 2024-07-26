<?php require 'config.php' ?>
<!doctype html>
<html class="no-js" lang="<?= $userLanguage['code'] ?>">
<?php require 'header.php' ?>
<body>
<!-- header-area START -->
<?php require 'menu.php' ?>
<!-- header-area END -->
<main>
    <!---------hero Section START ---------->
    <section class="hero-area py-5" style="background-image: url(./assets/img/conatct-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__title text-center ms-0">
                        <h1 class="w-100 mw-100"><?= __('contact.headline') ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------hero Section End ---------->
    <!--------- contact Section START ---------->
    <section class="contact-area position-relative">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="contact__form">
                        <h3>
                            <span><?= __('contact.title') ?></span>
                        </h3>
                        <div class="input__blk">
                            <label for=""><?= __('purchase.form.text_3') ?>*</label>
                            <input id="contact_firstname" type="text" placeholder="" required name="contact_firstname">
                        </div>
                        <div class="input__blk">
                            <label for=""><?= __('purchase.form.text_4') ?>*</label>
                            <input id="contact_lastname" type="text" placeholder="" required name="contact_lastname">
                        </div>
                        <!-- order id -->
                        <div class="input__blk">
                            <label for=""><?= __('contact.order_id') ?></label>
                            <input id="contact_order_id" type="text" placeholder="" name="contact_order_id">
                        </div>
                        <div class="input__blk">
                            <label for=""><?= __('purchase.form.text_5') ?>*</label>
                            <input id="contact_email" type="text" placeholder="" required name="contact_email">
                        </div>
                        <!-- message textarea -->
                        <div class="input__blk">
                            <label for=""><?= __('contact.message') ?>*</label>
                            <textarea class="form-control" id="contact_message" rows="5" required
                                      name="contact_message"></textarea>
                        </div>

                        <!-- submit contact form -->
                        <a href="#!" id="submitContactForm" class="thm_btn disabled m-auto">
                            <?= __('contact.submit') ?>
                            <img src="assets/img/right-arrow.svg" alt="">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------contact Section End ---------->
</main>
<!---------footer Section START ---------->
<?php require 'footer.php' ?>
<!---------footer Section End ---------->
<!-- JS here -->
<?php require 'scripts.php' ?>
</body>
</html>
