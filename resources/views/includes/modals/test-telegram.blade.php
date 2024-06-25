<div class="modal fade" tabindex="-1" id="test_telegram_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Test Telegram</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mb-8">
                    <!--begin::Icon-->
                    <i class="ki-outline ki-information fs-2tx text-warning me-4"></i>
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-semibold">
                            <h4 class="text-gray-900 fw-bold">Pay attention!</h4>
                            <div class="fs-8 text-gray-700">This is for testing only
                                <a class="fw-bold" href="/land">Take me to schedule</a>.
                            </div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--begin::Input group-->
                <div class="input-group mb-5">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="ki-duotone ki-send fs-1"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Telegram id" aria-label="Telegram id"
                        aria-describedby="basic-addon1" />
                </div>
                <!--end::Input group-->

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="telegram-text" maxlength="400"
                        style="min-height: 200px !important; max-height: 200px !important"></textarea>
                    <label for="floatingTextarea2">Type your text here ...</label>
                </div>
            </div>
            <!-- End to -->

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary send-test-telegram">Send</button>
            </div>
        </div>
    </div>
</div>
