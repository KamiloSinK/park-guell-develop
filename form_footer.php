<?php $loadFormScript = true ?>
<section class="Total-area overflow-hidden">
    <div class="container">
        <div class="Total__wrp">
            <div class="row" data-aos="fade-up" >
                <div class="col-lg-6">
                    <div class="Total__content">
                        <h1><?=__('footer.title_1')?></h1>
                        <p><?=__('footer.text_1')?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer_form">
                        <h3><?=__('footer.button_1')?></h3>
                        <p><img src="<?=$_ENV['WEB_URL']?>assets/img/info_icon.svg" alt=""> <?=__('footer.alert_1')?></p>
                    
                        <div class=" form__content">
                            <div class="hero__form__blk">
                                <label for=""><?=__('form.text_3')?></label>
                                <div class="Ticket_quantity"data-input="qty__a">
                                    <button type="button" class=" counter__decrement">-</button>
                                    <input type="text" class="counter__input" value="0">
                                    <button type="button" class=" counter__increment">+ </button>
                                </div>
                            </div>
                            <div class="hero__form__blk">
                                <label for=""><?=__('form.text_4')?></label>
                                <div class="Ticket_quantity"data-input="qty__b">
                                    <button type="button" class=" counter__decrement">-</button>
                                    <input type="text" class="counter__input" value="0">
                                    <button type="button" class=" counter__increment">+ </button>
                                </div>
                            </div>
                            <div class="hero__form__blk">
                                <label for=""><?=__('form.text_7')?></label>
                                <div class="Ticket_quantity"data-input="qty__c">
                                    <button type="button" class=" counter__decrement">-</button>
                                    <input type="text" class="counter__input" value="0">
                                    <button type="button" class=" counter__increment">+ </button>
                                </div>
                            </div>
                            <div class="hero__form__blk">
                                <label for=""><?=__('form.text_5')?></label>
                                <input type="text" id="datetimepickerTwo" class="datepicker" placeholder="<?=$calendarDatePlaceholder?>" readonly>
                            </div>
                            <div class="hero__form__blk sb_btn order-last order-md-5">
                                <a href="#!" class="thm_btn Ticket_purchase"><?=__('form.text_6')?> <img src="<?=$_ENV['WEB_URL']?>assets/img/right-arrow.svg" alt=""></a>
                            </div>
                            <div class="hero__form__blk total__price order-5 order-md-last">
                                <h1><?=__('form.total')?>: <span class="Ticket_total"></span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>