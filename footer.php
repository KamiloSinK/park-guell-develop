<footer class="footer-area f__home overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up" >
                <div class="footer__nav">
                    <ul>
                        <li>
                            <div class="visacard__content">
                                <p class="m-0"><?=__('footer.title_2')?></p>
                                <img src="<?=$_ENV['WEB_URL']?>assets/img/payment-methods.svg" alt="">
                            </div>
                        </li>
                    </ul>
                    <ul class="d-button">
                        <li><a href="<?=$_ENV['WEB_URL']?>contact.php"><?=__('footer.link_1')?></a></li>
                        <li><a href="<?=$_ENV['WEB_URL']?>blog"><?=__('footer.link_2')?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="footer__content" data-aos="zoom-in" >
                    <h1><?=__('footer.title_3')?></h1>
                    <a href="javascript:;" onclick="tidioChatApi.display(true);tidioChatApi.open()" class="thm_btn"><?=__('footer.title_4')?></a>
                </div>
                <div class="btn-mobile d-md-none d-block">
                    <ul>
                        <li><a href="<?=$_ENV['WEB_URL']?>contact.php"><?=__('footer.link_1')?></a></li>
                        <li><a href="<?=$_ENV['WEB_URL']?>blog"><?=__('footer.link_2')?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="footer__btn">
                    <p>
                        <?=__('footer.copyright')?>
                        <?=date('Y')?>
                        <?php if (isset($is_home_page) && $is_home_page) : ?>© TicketGo<?php endif; ?>
                    </p>
                    <ul>
                        <li><a href="<?=$_ENV['WEB_URL']?>conditions.php"><?=__('footer.legal_1')?></a></li>
                        <li><span>|</span></li>
                        <li><a href="<?=$_ENV['WEB_URL']?>cookies.php"><?=__('footer.legal_2')?></a></li>
                        <li><span>|</span></li>
                        <li><a href="<?=$_ENV['WEB_URL']?>privacy.php"><?=__('footer.legal_3')?></a></li>
                        <li><span>|</span></li>
                        <li><a href="<?=$_ENV['WEB_URL']?>legal.php"><?=__('footer.legal_4')?></a></li>
                    </ul>
                    <a href="#" class="logo-f d-none"><img src="<?=$_ENV['WEB_URL']?>assets/img/f-logo.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</footer>