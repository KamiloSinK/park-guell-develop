<?php require 'config.php' ?>
<!doctype html>
<html class="no-js notranslate" translate="no" lang="<?=$userLanguage['code']?>">
    <?php require 'header.php' ?>
    <body>       
    <!-- header-area START -->
    <?php require 'menu.php' ?>
    <!-- header-area END -->
    <main>
        <!-- privacy policy area start here -->
        <div class="container text-center">
            <div class="my-4 mx-auto">
                <div id="container-ok" class="d-none">
                  <img src="<?=$_ENV['WEB_URL']?>assets/img/ok.png" alt="ok" class="result-icon" />
                  <h4><?=__('checkout.ok1')?></h4>
                  <br/>
                  <h4><?=__('checkout.mail_notice')?></h4>
                  <br>
                  <!-- <p><b><?=__('checkout.ok2', ['orderID' => $_GET['oid']])?></b></p> -->
                  <p><b><?=__('checkout.ok3', ['redsysID' => $_GET['oid']])?></b></p>
                  <br/>
                  <p><?=__('checkout.ok4')?></p>
                  <a href="/" class="btn btn-primary px-4 mt-2 text-uppercase"><?=__('checkout.btn_continue')?></a>
                </div>
                <div id="container-ok" class="d-none">
                  <img src="<?=$_ENV['WEB_URL']?>assets/img/warning.png" alt="denied" class="result-icon" />
                  <h4><?=__('checkout.denied1')?></h4>
                  <br/>
                  <p><?=__('checkout.denied2')?></p>
                  <p><?=__('checkout.denied3')?></p>
                  <a href="/" class="btn btn-primary px-4 mt-2 text-uppercase"><?=__('checkout.btn_retry')?></a><br/>
                  <a href="javascript:void(0)" class="btn btn-chat btn-primary px-4 mt-2 text-uppercase"><?=__('checkout.btn_chat')?></a>
                </div>
                <div id="container-fail" class="d-none">
                  <img src="<?=$_ENV['WEB_URL']?>assets/img/ko.png" alt="error" class="result-icon" />
                  <h4><?=__('checkout.failed1')?></h4>
                  <br/>
                  <p><?=__('checkout.failed2')?></p>
                  <p><?=__('checkout.failed3')?></p>
                  <a href="/" class="btn btn-primary px-4 mt-2 text-uppercase"><?=__('checkout.btn_retry')?></a><br/>
                  <a href="javascript:void(0)" class="btn btn-chat btn-primary px-4 mt-2 text-uppercase"><?=__('checkout.btn_chat')?></a>
                </div>
            </div>
        </div>
    </main>
        <!---------footer Section START ---------->
        <?php require 'footer.php' ?>
        <!---------footer Section End ---------->
		<!-- JS here --> 
        <?php require 'scripts.php' ?>
        <script>
            const stripe = Stripe('<?=$_ENV['STRIPE_KEY_'.$_ENV['STRIPE_MODE']]?>', {
                locale: '<?=$userLanguage['code']?>'
            });

            (function() {
                let $container;
                checkStatus();

                function onTidioChatApiReady() {
                    window.tidioChatApi.hide();
                }

                if (window.tidioChatApi) {
                    window.tidioChatApi.on("ready", onTidioChatApiReady);
                }

                document.querySelector(".btn-chat").addEventListener("click", function() {
                    window.tidioChatApi.show();
                    window.tidioChatApi.open();
                });

                async function checkStatus() {
                    const clientSecret = new URLSearchParams(window.location.search).get(
                        "payment_intent_client_secret"
                    );
                    
                    if (!clientSecret) {
                        $("#container-fail").removeClass("d-none")
                        return;
                    }

                    const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

                    switch (paymentIntent.status) {
                        case "succeeded":
                            $container = $("#container-ok");
                            dataLayer.push({
                                event: "purchase",
                                ecommerce: {
                                    transaction_id: '<?=$_GET['oid']?>',
                                    value: <?=floatval($_GET['total'])?>,
                                    currency: '<?=$_GET['currency']?>'
                                }
                            });
                        break;
                        case "processing":
                            alert("<?=_('checkout.loading')?>");
                        break;
                        case "requires_payment_method":
                            $container = $("#container-ko");
                        break;
                        default:
                            $container = $("#container-fail");
                        break;
                    }

                    $container.removeClass("d-none");
                }
            })();
        </script>
    </body>
</html>
