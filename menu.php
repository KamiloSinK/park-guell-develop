<div class="header-area">
    <div class="container lg container_menu">
        <div class="row g-3 align-items-center">
            <div class="header__wrap d-flex d-md-none">
                <div class="bar d-flex d-md-none">
                    <a class="bar-icon siteBar-btn" href="javascript:void(0)">
                        <span></span>
                    </a>
                </div>
                <div class="logo-area">
                    <a href="<?= !!isset($scrollMenu) && !!$scrollMenu ? '' : $_ENV['WEB_URL'] ?>"><img src="<?= $_ENV['WEB_URL'] ?>assets/img/logo.png" alt="site logo"></a>
                </div>
                <div class="header__right">
                    <div class="dropdown" tab-index="0">
                        <button class="dropdown-btn">
                            <img src="https://flagsapi.com/<?= strtoupper($userLanguage['flag']) ?>/shiny/64.png" />
                            <?= __('menu.language') ?>
                            <span class="arrow-down"></span>
                        </button>
                        <ul class="dropdown-content">
                            <?php for ($i = 0; $i < count($languages['code']); $i++) { ?>
                                <li onmousedown="setSelectedLocale('<?= $languages['code'][$i] ?>')"><?= $languages['text'][$i] ?><img src="https://flagsapi.com/<?= strtoupper($languages['flag'][$i]) ?>/shiny/64.png"></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 d-none d-md-block">
                <div class="logo-area">
                    <a href="<?= !!isset($scrollMenu) && !!$scrollMenu ? '' : $_ENV['WEB_URL'] ?>"><img src="<?= $_ENV['WEB_URL'] ?>assets/img/logo.png" alt="site logo" style="height: 4vw"></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7  d-none d-md-block text-right">
                <div class="menu-area">
                    <nav>
                        <ul id="nav">
                            <li><a class="nav__item active" href="<?= !!isset($scrollMenu) && !!$scrollMenu ? '' : $_ENV['WEB_URL'] ?>#ticket"><?= __('menu.opt_1') ?></a></li>
                            <li><a class="nav__item" href="<?= !!isset($scrollMenu) && !!$scrollMenu ? '' : $_ENV['WEB_URL'] ?>#Horarios"><?= __('menu.opt_2') ?></a></li>
                            <li><a class="nav__item" href="<?= !!isset($scrollMenu) && !!$scrollMenu ? '' : $_ENV['WEB_URL'] ?>#como_llegar"><?= __('menu.opt_3') ?></a></li>
                            <li><a class="nav__item" href="<?= !!isset($scrollMenu) && !!$scrollMenu ? '' : $_ENV['WEB_URL'] ?>#normativas"><?= __('menu.opt_4') ?></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-4 col-lg-2 col-md-2 d-none d-md-block">
                <div class="header__right">
                    <div class="dropdown" tab-index="0">
                        <button class="dropdown-btn">
                            <img src="https://flagsapi.com/<?= strtoupper($userLanguage['flag']) ?>/shiny/64.png" />
                            <?= __('menu.language') ?>
                            <span class="arrow-down"></span>
                        </button>
                        <ul class="dropdown-content">
                            <?php for ($i = 0; $i < count($languages['code']); $i++) { ?>
                                <li onmousedown="setSelectedLocale('<?= $languages['code'][$i] ?>')"><?= $languages['text'][$i] ?><img src="https://flagsapi.com/<?= strtoupper($languages['flag'][$i]) ?>/shiny/64.png"></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu START -->
<div class="mobile-menu">
    <a href="#" class="bars siteBar-btn"><svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd" />
        </svg></a>
    <nav>
        <ul id="nav">
            <li><a class="nav__item nav__item__sm" href="<?= !!isset($scrollMenu) && !!$scrollMenu ? '' : $_ENV['WEB_URL'] ?>#ticket"><?= __('menu.opt_1') ?></a></li>
            <li><a class="nav__item nav__item__sm" href="<?= !!isset($scrollMenu) && !!$scrollMenu ? '' : $_ENV['WEB_URL'] ?>#Horarios"><?= __('menu.opt_2') ?></a></li>
            <li><a class="nav__item nav__item__sm" href="<?= !!isset($scrollMenu) && !!$scrollMenu ? '' : $_ENV['WEB_URL'] ?>#como_llegar"><?= __('menu.opt_3') ?></a></li>
            <li><a class="nav__item nav__item__sm" href="<?= !!isset($scrollMenu) && !!$scrollMenu ? '' : $_ENV['WEB_URL'] ?>#normativas"><?= __('menu.opt_4') ?></a></li>
            <li><a class="nav__item__sm" href="<?= $_ENV['WEB_URL'] ?>contact.php"><?= __('footer.link_1') ?></a></li>
            <li><a class="nav__item__sm" href="<?= $_ENV['WEB_URL'] ?>blog"><?= __('menu.opt_5') ?></a></li>
        </ul>
    </nav>
</div>
<div class="offcanvas-overlay"></div>