<div class="modal fade" id="pickerModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content fw-normal">
            <div class="modal-body">
                <p class="fw-bold">
                    <span class="float-start"></span><?=__('modal.title_1')?>
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                </p>
                <div id="datepicker"></div>
            </div>
            <div class="modal-footer align-items-center justify-content-center">
                <p class="fw-bold"><?=__('modal.title_2')?></p>
                <div id="time-select" class="row w-100"></div>
                <button type="button" class="thm_btn Ticket_purchase" id="calendar_ticket_purchase">
                    <?=__('form.text_6')?>
                    <div class="loader"></div>
                </button>
            </div>
        </div>
    </div>
</div>