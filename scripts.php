<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRSH26BG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script src="<?=$_ENV['WEB_URL']?>assets/js/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?=$_ENV['WEB_URL']?>assets/js/aos.js?v=<?=filemtime('assets/js/aos.js')?>"></script>
<script src="<?=$_ENV['WEB_URL']?>assets/js/main.js?v=<?=filemtime('assets/js/main.js')?>"></script>
<script src="<?=$_ENV['WEB_URL']?>assets/js/datepicker.min.js?v=<?=filemtime('assets/js/datepicker.min.js')?>"></script>
<script src="//code.tidio.co/rtlhokzis61ystldcuxhnzlr5n1bakga.js" async></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
<script type="module" src="assets/js/cookieconsent-config.js?v=<?=filemtime('assets/js/cookieconsent-config.js')?>"></script>
<script>
    let prices = {
        qtya: <?=$amountValues->qtya?>,
        qtyb: <?=$amountValues->qtyb?>,
        qtyc: <?=$amountValues->qtyc?>,
    };

    const dropdownBtns = document.querySelectorAll(".dropdown-btn");
    const dropdownContents = document.querySelectorAll(".dropdown-content");

    dropdownBtns.forEach((dropdownBtn, i) => {
        dropdownBtn.addEventListener("click", () => {
            dropdownContents[i].classList.toggle("show");
        });
    });

    document.body.addEventListener("click", (event) => {
        dropdownContents.forEach((dropdownContent, i) => {
            if (!dropdownContent.contains(event.target) && !dropdownBtns[i].contains(event.target)) {
                dropdownContent.classList.remove("show");
            }
        });
    });

    const setSelectedLocale = (locale) => window.location.href = `./?lang=${locale}`;

    // Check if the URL contains an anchor
    if (window.location.hash) {
        // Remove the anchor from the URL
        history.replaceState(null, document.title, window.location.pathname);
        
        // Scroll to the top of the page
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

    $(document).ready(function () {
        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        const popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        });

        $('.menu-area nav li a[href^="#"], .mobile-menu nav li a[href^="#"]').on("click", function (e) {
            e.preventDefault();

            const targetSection = $($(this).attr("href"));
            const offset = 60; // Adjust this value according to your header height

            $("html, body").animate({ scrollTop: targetSection.offset().top - offset }, 800);
        });

        const validateTickets = () => {
            const qty_a = $($('.Ticket_quantity[data-input=qty__a]')[0]).find('.counter__input').val();
            const qty_b = $($('.Ticket_quantity[data-input=qty__b]')[0]).find('.counter__input').val();
            const qty_c = $($('.Ticket_quantity[data-input=qty__c]')[0]).find('.counter__input').val();

            $.ajax({
                url: "<?=$_ENV['API_URL']?>api/attraction/stock",
                data: {
                    attraction: <?=$_ENV['ATTRACTION_ID']?>,
                    lang: '<?=strtolower($userLanguage['code'])?>',
                    date: datepickerValue,
                    time: datepickerHour
                }
            }).done(function(stock){
                if (stock.warning == 'auto-purchase disabled') {
                    $(".Ticket_purchase_error").hide()
                    $(".Ticket_purchase").removeClass("disabled");
                } else {
                    hasError = false
                    
                    if(stock.qty_a < qty_a) {
                        hasError = true
                        $(".Ticket_purchase_error_qty_a").text("<?=__('error.qty_a', ['num' => "%num%"])?>".replace('%num%', stock.qty_a));
                        $(".Ticket_purchase_error_qty_a").show()
                    }

                    if(stock.qty_b < +qty_b) {
                        hasError = true
                        $(".Ticket_purchase_error_qty_b").text("<?=__('error.qty_b', ['num' => "%num%"])?>".replace('%num%', stock.qty_b));
                        $(".Ticket_purchase_error_qty_b").show()
                    }

                    if(stock.qty_c < qty_c) {
                        hasError = true
                        $(".Ticket_purchase_error_qty_c").text("<?=__('error.qty_c', ['num' => "%num%"])?>".replace('%num%', stock.qty_c));
                        $(".Ticket_purchase_error_qty_c").show()
                    }

                    if (hasError) {
                        $(".Ticket_purchase_error").show()
                        $(".Ticket_purchase").addClass("disabled")
                    } else {
                        $(".Ticket_purchase_error").hide()
                        $(".Ticket_purchase").removeClass("disabled")
                    }
                }
            }).fail(function(){
                $("#stockError").show()
                $(".Ticket_purchase").addClass("disabled")
            });
        }

        <?php if (isset($loadFormScript) && !!$loadFormScript) { ?>
        (function($) {
            $.fn.inputFilter = function(callback, errMsg) {
                return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function(e) {
                    if (callback(this.value)) {
                        // Accepted value
                        if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0) {
                            $(this).removeClass("input-error");
                            this.setCustomValidity("");
                        }
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        // Rejected value - restore the previous one
                        $(this).addClass("input-error");
                        this.setCustomValidity(errMsg);
                        this.reportValidity();
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    } else {
                        // Rejected value - nothing to restore
                        this.value = "";
                    }
                });
            };
        }(jQuery));
        
        let focusedTicketInput, datepickerValue = "", datepickerFormat = "", datepickerHour = "";
        $(".Ticket_purchase").addClass("disabled")
        $(".Ticket_purchase_error").hide()
        $("#calendar_ticket_purchase").addClass("d-none")
        
        const calculateAmount = (redirect) => {
            const qty_a = $($('.Ticket_quantity[data-input=qty__a]')[0]).find('.counter__input').val();
            const qty_b = $($('.Ticket_quantity[data-input=qty__b]')[0]).find('.counter__input').val();
            const qty_c = $($('.Ticket_quantity[data-input=qty__c]')[0]).find('.counter__input').val();
            const total = (qty_a * prices.qtya) + (qty_b * prices.qtyb) + (qty_c * prices.qtyc);
            if (total > 0) {
                $(".Ticket_total").text(`${total}€`)
                $("#calendar_ticket_purchase").removeClass("d-none")
                $("#form-error-message").fadeOut(500);
                localStorage.setItem("qty_a", qty_a)
                localStorage.setItem("qty_b", qty_b)
                localStorage.setItem("qty_c", qty_c)
                localStorage.setItem("total", `${total}€`)
                if (datepickerHour != "") {
                    $(".Ticket_purchase").removeClass("disabled")
                    if (datepickerValue != "" && datepickerFormat != "") {
                        localStorage.setItem("fecha", datepickerValue)
                        localStorage.setItem("fecha_formatted", datepickerFormat)
                        if (!!redirect) window.location.href = "purchase.php"
                        validateTickets()
                    }
                }
            } else {
                $("#totalAmount").hide()
                $(".Ticket_total").text("0")
                $(".Ticket_purchase").addClass("disabled")
                $("#calendar_ticket_purchase").addClass("d-none")
            }
        }

        $('.counter__input').inputFilter(function(value) {
            return /^\d*$/.test(value);
        }, '<?=__('error.onlynumber')?>').on('input', function (e) {
            $input = $(this);
            $(`.Ticket_quantity[data-input=${$input.closest('div.Ticket_quantity').data('input')}]`).find('.counter__input').val($input.val());
            calculateAmount();
        }).on('focus', function () {
            if (focusedTicketInput == this) return; //already focused, return so user can now place cursor at specific point in input.
            focusedTicketInput = this;
            setTimeout(function () { focusedTicketInput.select(); }, 100); //select all text in any field on focus for easy re-entry. Delay sightly to allow focus to "stick" before selecting.
        });

        $(".counter__increment, .counter__decrement").click(function (e) {
            e.preventDefault()
            $this = $(this);
            $counter__input = $(this).parent().find(".counter__input");
            $currentVal = parseInt($(this).parent().find(".counter__input").val());
            if (isNaN($currentVal)) { $currentVal = 0; }
            let nextVal;
            if ($this.hasClass('counter__increment')) {
                nextVal = $currentVal + 1;
                $counter__input.val(nextVal);
            } else if ($this.hasClass('counter__decrement')) {
                if ($currentVal >= 1) {
                    nextVal = $currentVal - 1;
                    $counter__input.val(nextVal);
                }
            }
            if ($currentVal != 0) $(`.Ticket_quantity[data-input=${$this.closest('div.Ticket_quantity').data('input')}]`).find('.counter__input').val(nextVal);
            calculateAmount();
        });

        $('.Ticket_purchase').click(function(e){
            e.preventDefault();
            calculateAmount(true);
        });
        
        const currentDate = new Date();
        
        const picker = datepicker("#datepicker", {
            autoClose: false,
            alwaysShow: true,
            startDay: 1,
            maxDate: addDays(currentDate, <?=$_ENV['CALENDAR_CHECK_DAYS']?>),
            minDate: currentDate,
            customMonths: <?=json_encode($calendarMonths)?>,
            customDays: <?=json_encode($calendarDaysAbbrev)?>,
            <?php if (count($calendarDisabledDates) > 0) { ?>
                disabledDates: [<?php for ($i=0; $i < count($calendarDisabledDates); $i++) { ?>
                    new Date(<?=$calendarDisabledDates[$i][0]?>, <?=$calendarDisabledDates[$i][1]-1?>, <?=$calendarDisabledDates[$i][2]?>)<?=$i!=count($calendarDisabledDates)-1?',':''?>
                <?php } ?>],
                events: [<?php for ($i=0; $i < count($calendarDisabledDates); $i++) { ?>
                    new Date(<?=$calendarDisabledDates[$i][0]?>, <?=$calendarDisabledDates[$i][1]-1?>, <?=$calendarDisabledDates[$i][2]?>)<?=$i!=count($calendarDisabledDates)-1?',':''?>
                <?php } ?>],
            <?php } ?>
            onShow: (instance) => $(".qs-datepicker-container div.qs-num.qs-square:not(-qs-event):not(.qs-disabled):first").addClass('qs-first-available'),
            onSelect: (instance, d) => {
                datepickerHour = "";
                datepickerValue = formatDate(d);
                datepickerFormat = d.toLocaleDateString("<?=$userLanguage['code']?>", {
                    year: "numeric",
                    month: "2-digit",
                    day: "2-digit",
                });
                $(".Ticket_purchase").addClass("disabled")
                $(".datepicker").val(datepickerFormat);
                $("#time-select").html(``);
                $.ajax({
                    url: "<?=$_ENV['API_URL']?>api/attraction/schedule",
                    data: {
                        attraction: <?=$_ENV['ATTRACTION_ID']?>,
                        days: '<?=$_ENV['CALENDAR_CHECK_DAYS']?>',
                        date: datepickerValue,
                        form: "fa"
                    }
                }).done(function(schedule){
                    let options = "", options_a = "", options_b = "";
                    for (let i = 0; i < schedule.length; i++) {
                        const time = schedule[i].split(":");
                        if (time[0] < 12) {
                            options_a += `<div class="col-4 col-md-3 p-1 my-2 rounded text-center btn-hour" data-hour="${schedule[i]}">${schedule[i]}</div>`;
                        } else {
                            options_b += `<div class="col-4 col-md-3 p-1 my-2 rounded text-center btn-hour" data-hour="${schedule[i]}">${schedule[i]}</div>`;
                        }
                    }
                    if (options_a != "" || options_b != "") {
                        options = `<div class="row">`;
                        if (options_a != "") {
                            options += `<div class="col col-12 text-center fw-light mt-2"><small><?=__('modal.schedula_1')?></small></div>${options_a}`
                        }
                        if (options_b != "") {
                            options += `<div class="col col-12 text-center fw-light mt-2"><small><?=__('modal.schedula_2')?></small></div>${options_b}`
                        }
                        options += `</div>`
                    }
                    $("#time-select").html(options !== "" ? options : `<div class="col text-center mb-2"><?=__('modal.error_1')?></div>`);
                });
                getPriceOverride(datepickerValue);
            }
        });

        $(this).on('click', '.btn-hour', function (e) {
            e.preventDefault();
            datepickerHour = $(this).data('hour');
            console.log(datepickerHour)
            localStorage.setItem("hora", datepickerHour);
            $(".btn-hour").removeClass('bg-primary text-white');
            $(this).addClass('bg-primary text-white');

            getPriceOverride(`${datepickerValue} ${datepickerHour}`);
        });

        function getPriceOverride(value) {
            $(".loader").css("display", "inline-block");
            $(".Ticket_purchase").addClass("disabled");
            $.ajax({
                url: "<?=$_ENV['API_URL']?>api/attraction/prices/override",
                data: {
                    attraction: <?=$_ENV['ATTRACTION_ID']?>,
                    date: value
                }
            }).done(function(override){
                prices = override;
                calculateAmount(false);
                $(".loader").hide();
            });
        }

        $(".datepicker").click(function (e) {
            e.stopPropagation();

            let counter_inputs = $(".counter__input");

            // if ticket counter input not greater than 0 show error message
            if (counter_inputs[0].value == 0 && counter_inputs[1].value == 0) {
                error_p = $("#form-error-message");
                error_p.text("<?=__('form.alert_1')?>");
                error_p.fadeIn(1000);
                return;
            }

            $("#pickerModal").modal('show');
        });

        function addDays(date, days) {
            let result = new Date(date);
                result = result.setDate(result.getDate() + days);
            return new Date(result);
        }

        function formatDate(d) {
            return [d.getFullYear(), ("0" + (d.getMonth() + 1)).slice(-2), ("0" + d.getDate()).slice(-2)].join('-');
        }
        
        <?php } else if (isset($loadPurchaseScript) && !!$loadPurchaseScript) { ?>

        $(document).ready(function(){
            // Initialize form fields with local storage values
            initializeForm();

            // Add event listeners for input fields and checkboxes
            addEventListeners();

            // Event listeners for modal events
            $('#paymentModal').on('show.bs.modal', prepareCheckout);
            $('#paymentModal').on('hidden.bs.modal', function () {
                $("#payment-method-loader").show();
            });

            // Validate form when the payment button is clicked
            $("#paymentAction").on('click', function (e) {
                e.preventDefault();
                if (validateForm()) {
                    $('#paymentModal').modal('show');
                } else {
                    $("#paymentAction").addClass('disabled');
                }
            });
        });

        function initializeForm() {
            $("#Ticket__schedule").text(localStorage.getItem('fecha_formatted') || "");
            $("#Ticket__datetime").text(localStorage.getItem('hora') || "");
            $("#Ticket__qty_a").text(localStorage.getItem('qty_a') || "0");
            $("#Ticket__qty_b").text(localStorage.getItem('qty_b') || "0");
            $("#Ticket__qty_c").text(localStorage.getItem('qty_c') || "0");
            $("#Ticket__total").text(localStorage.getItem('total') || "0");
        }


        function checkFieldsNotEmpty() {
            const fields = ["contact_firstname", "contact_lastname", "contact_email", "contact_email_check"];
            let isValid = true;

            fields.forEach(field => {
                if ($("#" + field).val().trim().length < 1) {
                    isValid = false;
                }
            });

            if (!$("#checkbox").is(':checked')) {
                isValid = false;
            }

            if (isValid) {
                $("#paymentAction").removeClass('disabled');
            } else {
                $("#paymentAction").addClass('disabled');
            }
        }

        function addEventListeners() {
            const fields = ["contact_firstname", "contact_lastname", "contact_email", "contact_email_check", "checkbox"];

            fields.forEach(field => {
                $("#" + field).on("input propertychange", function () {
                    // Remove error class and message on input
                    $("#" + field).removeClass('error-input');
                    $("#" + field + "_error").text("");
                    checkFieldsNotEmpty();
                });
            });
        }

        function validateForm() {
            return validateField("contact_firstname") &&
                validateField("contact_lastname") &&
                validateField("contact_email") &&
                validateField("contact_email_check") &&
                validateField("checkbox");
        }

        function validateField(field) {
            let isValid = true;

            switch (field) {
                case "contact_firstname":
                    isValid = validateTextField(field, "<?=__('error.first_name_required')?>");
                    break;
                case "contact_lastname":
                    isValid = validateTextField(field, "<?=__('error.last_name_required')?>");
                    break;
                case "contact_email":
                    isValid = validateEmailField("contact_email", "<?=__('error.email_invalid')?>");
                    if (isValid) {
                        isValid = validateEmailsMatch();
                    }
                    break;
                case "contact_email_check":
                    isValid = validateEmailsMatch();
                    break;
                case "checkbox":
                    isValid = validateCheckbox(field, "<?=__('error.agree_terms')?>");
                    break;
            }

            return isValid;
        }

        function validateTextField(field, errorMessage) {
            const value = $("#" + field).val().trim();
            if (value.length < 1) {
                $("#" + field).addClass('error-input');
                $("#" + field + "_error").text(errorMessage);
                return false;
            }
            return true
        }

        function validateEmailField(field, errorMessage) {
            const email = $("#" + field).val().trim();
            // if email field is empty, show email required message
            if (email.length < 1) {
                $("#" + field).addClass('error-input');
                $("#" + field + "_error").text("<?=__('error.email_required')?>");
                return false;
            }

            const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!regexEmail.test(email)) {
                $("#" + field).addClass('error-input');
                $("#" + field + "_error").text(errorMessage);
                return false;
            }
            return true;
        }

        function validateEmailsMatch() {
            const email = $("#contact_email").val().trim().toLowerCase();
            const confirmEmail = $("#contact_email_check").val().trim().toLowerCase();

            // if confirm email field is empty, show email required message
            if (confirmEmail.length < 1) {
                $("#contact_email_check").addClass('error-input');
                $("#contact_email_check_error").text("<?=__('error.email_required')?>");
                return false;
            }

            if (email !== confirmEmail) {
                $("#contact_email").addClass('error-input');
                $("#contact_email_check").addClass('error-input');
                $("#contact_email_check_error").text("<?=__('error.email_not_match')?>");
                return false;
            }
            return true;
        }

        function validateCheckbox(field, errorMessage) {
            if (!$("#" + field).is(':checked')) {
                $("#" + field).addClass('error-input');
                $("#" + field + "_error").text(errorMessage);
                return false;
            } else {
                $("#" + field).removeClass('error-input');
                $("#" + field + "_error").text("");
                return true;
            }
        }

        const stripe = Stripe('<?=$_ENV['STRIPE_KEY_'.$_ENV['STRIPE_MODE']]?>', {
            locale: '<?=$userLanguage['code']?>'
        });

        let elements, paymentElement, paymentIdentifier;

        document
            .querySelector("#btn-checkout")
            .addEventListener("click", handleSubmit);

        // Validate the request body
        function validateRequestBody(requestBody) {
            if (!requestBody.rtime || requestBody.rtime === "00:00") {
                throw new Error("<?=__('error.purchase_rtime')?>");
            }
            const currentDate = new Date().setHours(0, 0, 0, 0);
            const requestDate = new Date(requestBody.rdate).setHours(0, 0, 0, 0);
            if (!requestBody.rdate || requestDate < currentDate) {
                throw new Error("<?=__('error.purchase_rdate')?>");
            }
            const qty_a = parseInt(requestBody.qty_a, 10);
            const qty_b = parseInt(requestBody.qty_b, 10);
            const qty_c = parseInt(requestBody.qty_c, 10);
            const total = parseFloat(requestBody.total);
            if (isNaN(qty_a) || isNaN(qty_b) || isNaN(qty_c) || isNaN(total)
                || qty_a + qty_b + qty_c === 0 || total === 0) {
                throw new Error("<?=__('error.purchase_qty')?>");
            }
            if (!requestBody.currency) {
                throw new Error("<?=__('error.purchase_currency')?>");
            }
        }

        async function prepareCheckout () {
            try {
                setLoading(true);

                if (!!paymentElement) {
                    paymentElement.unmount();
                    paymentElement.destroy();
                }

                $("#payment-spinner").hide();

                const requestBody = {
                    rtime: localStorage.getItem('hora'),
                    rdate: localStorage.getItem('fecha'),
                    qty_a: ($("#Ticket__qty_a").text() || "0").replace(/\D/g, ''),
                    qty_b: ($("#Ticket__qty_b").text() || "0").replace(/\D/g, ''),
                    qty_c: ($("#Ticket__qty_c").text() || "0").replace(/\D/g, ''),
                    total: $("#Ticket__total").text().replace('€', ''),
                    firstname: $("#contact_firstname").val(),
                    lastname: $("#contact_lastname").val(),
                    email: $("#contact_email").val(),
                    phone: "123456789",
                    redirect: "<?=$_ENV['REDIRECT_URL']?>",
                    description: "<?=$_ENV['WEB_NAME']?>",
                    aid: "<?=$_ENV['ATTRACTION_ID']?>",
                    lang: "<?=$userLanguage['code']?>",
                    currency: "<?=$userCurrency?>"
                };

                validateRequestBody(requestBody);

                const response = await fetch("<?=$_ENV['STRIPE_URL']?>/checkout", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(requestBody),
                })

                if (!response.ok) {
                    throw new Error("<?=__('error.purchase')?>", {cause: response});
                }

                const {clientSecret, orderId} = await response.json();

                elements = stripe.elements({ clientSecret });
                const paymentElementOptions = {
                    layout: {
                        type: 'accordion',
                        defaultCollapsed: false,
                        radios: false,
                        spacedAccordionItems: true
                    },
                    fields: {
                        billingDetails: {
                            name: 'never',
                            email: 'never',
                        }
                    }
                };

                paymentElement = elements.create("payment", paymentElementOptions);
                paymentElement.mount("#payment-element");

                $("#payment-method-loader").fadeOut('slow');

                paymentIdentifier = orderId;
                
                setLoading(false);
            } catch (error) {
                showMessage(error.message, true);
                setLoading(false, true);
            }
        }

        async function handleSubmit(e) {
            e.preventDefault();
            setLoading(true);
            $("#payment-message").hide();
            
            $.ajax({
                url: "<?=$_ENV['API_URL']?>api/attraction/stock",
                data: {
                    attraction: <?=$_ENV['ATTRACTION_ID']?>,
                    lang: '<?=strtolower($userLanguage['code'])?>',
                    date: localStorage.getItem('fecha'),
                    time: localStorage.getItem('hora')
                }
            }).done(async function(stock){
                hasError = false
                
                if (stock.warning != 'auto-purchase disabled') {
                    if (stock.warning == "no ticket available") {
                        showError = true;
                    } else {
                        const qty_a = +$("#Ticket__qty_a").text() || 0;
                        const qty_b = +$("#Ticket__qty_b").text() || 0;
                        const qty_c = +$("#Ticket__qty_c").text() || 0;
                        
                        if(stock.qty_a < qty_a) {
                            hasError = true
                        }

                        if(stock.qty_b < +qty_b) {
                            hasError = true
                        }

                        if(stock.qty_c < qty_c) {
                            hasError = true
                        }
                    }
                }
                
                if (hasError) {
                    showMessage("<?=__('error.purchase')?>");
                } else {
                    const { error } = await stripe.confirmPayment({
                        elements,
                        confirmParams: {
                            return_url: `<?=$_ENV['REDIRECT_URL']?>?oid=${paymentIdentifier}&total=${$("#total").text().replace('€', '')}&currency=<?=$userCurrency?>`,
                            payment_method_data: {
                                billing_details: {
                                    name: `<?=$_ENV['STRIPE_NAME']?>: ${$("#contact_firstname").val()} | ${$("#contact_lastname").val()}`,
                                    email: $("#contact_email").val()
                                }
                            }
                        },
                    });

                    if (error.type === "card_error" || error.type === "validation_error") {
                        showMessage(error.message);
                    } else {
                        showMessage("<?=__('checkout.failed3')?>");
                    }
                }
            }).always(function(){
                setLoading(false);
            });
        }

        function showMessage(messageText, html) {
            $("#payment-message").show();
            if (!!html) $("#payment-message").html(messageText);
            else $("#payment-message").text(messageText);
        }

        function setLoading(isLoading, error) {
            $("#paymentModal").find(".modal-body.p-4").show();
            if (isLoading) {
                $("#payment-loading-spinner").show();
                $("#payment-message").hide();
                $("#btn-checkout").show();
                $("#btn-checkout").prop('disabled', true);
                $("#btn-checkout").addClass('disabled');
                $("#payment-spinner").show();
                $("#btn-payment-text").hide();
            } else {
                $("#payment-loading-spinner").hide();
                $("#payment-spinner").hide();
                $("#btn-payment-text").show();
                $("#btn-checkout").prop('disabled', false);
                $("#btn-checkout").removeClass('disabled');
                if (!!error) {
                    $("#paymentModal").find(".modal-body.p-4").hide();
                    $("#btn-checkout").hide();
                }
            }
        }

        var domains = ["gmail.com", "hotmail.com", "outlook.com", "yahoo.com"];

        // Email domain suggester
        var EmailDomainSuggester = function ($bindTo) {
            var datalist = null;

            var init = function () {
                addElements();
                bindEvents();
            };

            var addElements = function () {
                var datalistId = 'email_options_' + $bindTo.attr('id');

                // Create empty datalist
                datalist = $('<datalist />', {
                    id: datalistId
                }).insertAfter($bindTo);

                // Correlate to input
                $bindTo.attr("list", datalistId);
            };

            var bindEvents = function () {
                $bindTo.on("input", testValue);
            };

            var testValue = function (event) {
                var el = $(this),
                    value = el.val();

                // Email has @
                if (value.indexOf("@") !== -1) {
                    value = value.split("@")[0];
                    addDatalist(value);
                } else {
                    // Empty list
                    emptyDatalist();
                }
            };

            var emptyDatalist = function () {
                datalist.empty();
            };

            var addDatalist = function (value) {
                var newOptionsString = '';

                // Loop over all the domains in our array
                for (var i = 0; i < domains.length; i++) {
                    newOptionsString += "<option value='" + value + "@" + domains[i] + "'>";
                }

                // Add all the <option>s to the datalist
                datalist.html(newOptionsString);
            };

            init();
        };

        $(document).ready(function () {
            var edsEmail = new EmailDomainSuggester($('#contact_email'));
        });

        <?php } ?>
    });
</script>