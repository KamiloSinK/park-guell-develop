<?php require 'config.php' ?>
<!doctype html>
<html class="no-js notranslate" translate="no" lang="<?=$userLanguage['code']?>">
    <?php require 'header.php' ?>
    <body>       
    <!-- header-area START -->
    <?php require 'menu.php' ?>
    <!-- header-area END -->
    <main>
        <!---------hero Section START ---------->
        <section class="hero-area" style="background-image: url(./assets/img/1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero__title">
                            <h3><?=__('purchase.title_1')?></h3>
                            <h1><?=__('purchase.title_2')?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------hero Section End ---------->
        <!--------- contact Section START ---------->
        <section class="contact-area ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact__main__content">
                            <div class="contact__content">
                                <div class="d-flex justify-content-center mb-4">
                                    <p><img src="assets/img/info_icon.svg" alt=""> <?=__('purchase.alert_1')?></p>
                                </div>
                                <div class="date__icon pb-5">
                                    <span><img src="assets/img/calender.svg" alt=""> <span id="Ticket__schedule">DD/MM/YYYY</span></span>
                                    <span><img src="assets/img/clock.svg" alt=""> <span id="Ticket__datetime"><?=__('purchase.text_1')?></span></span>
                                </div>
                                <ul>
                                    <li><img src="assets/img/audio.svg" alt=""> <span id="Ticket__qty_a">0</span> <?=__('purchase.text_2')?></li>
                                    <li><img src="assets/img/calco.svg" alt=""> <span id="Ticket__qty_b">0</span> <?=__('purchase.text_3')?></li>
                                    <li><img src="assets/img/cradit.svg" alt=""> <span id="Ticket__qty_c">0</span> <?=__('purchase.text_4')?></li>
                                </ul>
                                <div class="text-end pe-5">
                                    <h1 class="mb-0"><?=__('form.total')?>: <span id="Ticket__total">0€</span></h1>
                                    <small class="tax-notice"><?=__('purchase.tax_notice')?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact__form">
                            <h3>
                                <span><?=__('purchase.form.text_1')?></span>
                                <?=__('purchase.form.text_2')?>
                            </h3>
                            <div class="input__blk">
                                <label for=""><?=__('purchase.form.text_3')?> <span class="text-danger">*</span></label>
                                <input id="contact_firstname" type="text" placeholder="">
                                <p class="text-danger" id="contact_firstname_error"></p>
                            </div>
                            <div class="input__blk">
                                <label for=""><?=__('purchase.form.text_4')?> <span class="text-danger">*</span></label>
                                <input id="contact_lastname" type="text" placeholder="">
                                <p class="text-danger" id="contact_lastname_error"></p>
                            </div>
                            <div class="input__blk">
                                <label for=""><?=__('purchase.form.text_5')?> <span class="text-danger">*</span></label>
                                <input id="contact_email" type="text" placeholder="">
                                <p class="text-danger" id="contact_email_error"></p>
                            </div>
                            <div class="input__blk">
                                <label for=""><?=__('purchase.form.text_6')?> <span class="text-danger">*</span></label>
                                <input id="contact_email_check" type="email" placeholder="" autocomplete="contact_email_check" autocomplete="off" onpaste="return false;">
                                <p class="text-danger" id="contact_email_check_error"></p>
                            </div>
                            <div class="check__blk">
                                <input type="checkbox" id="checkbox">
                                <label for="checkbox">
                                    <?=__('purchase.form.text_7')?>
                                    <a class="d-inline" href="<?=$_ENV['WEB_URL']?>conditions.php" target="_blank"><?=__('footer.legal_1')?></a>
                                </label>
                            </div>
                            <p class="text-danger small" id="checkbox_error"></p>
                            <a href="#!" id="paymentAction" role="button" class="thm_btn disabled"><?=__('purchase.form.button_1')?> <img src="assets/img/right-arrow.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentTitle" aria-hidden="true" data-bs-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <button type="button" class="btn-close" id="payment-modal-close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body p-4">
                            <div class="d-flex justify-content-center">
                                <div class="spinner-grow spinner-grow-sm" role="status" id="payment-method-loader">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <div id="payment-element"></div>
                        </div>
                        <div class="modal-footer">
                            <p id="payment-message" class="text-danger text-center mx-auto"></p>
                            <button type="button" class="btn btn-pruchase" id="btn-checkout">
                            <div class="spinner hidden" id="payment-spinner"></div>
                            <div class="spinner-border spinner-border-sm" role="status" id="payment-loading-spinner">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <span id="btn-payment-text"><i class="fa fa-lock" aria-hidden="true"></i> <?=__('purchase.form.button_1')?></span>
                            </button>
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

    <?php if ($_ENV['RECAPTCHA_KEY'] != "") { ?>
        <div id="gcaptcha"></div>
        <link rel="preconnect" href="https://www.google.com">
        <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
        <script async src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
        <script>
        // If reCAPTCHA is still loading, grecaptcha will be undefined.
        function onloadCallback() {
            grecaptcha.ready(function(){
                grecaptcha.render("gcaptcha", {
                    sitekey: "<?=$_ENV['RECAPTCHA_KEY']?>"
                });
            });
        }
        </script>
    <?php } ?>

    <?php $loadPurchaseScript = true; require 'scripts.php' ?>
    </body>
</html>
