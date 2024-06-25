<div class="modal fade" id="kt_modal_create_app_email" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Compose e-mail</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                    id="kt_modal_create_app_stepper" data-kt-stepper="true">
                    <!--begin::Aside-->
                    <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                        <!--begin::Nav-->
                        <div class="stepper-nav ps-lg-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                            class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Name
                                        </h3>

                                        <div class="stepper-desc">
                                            About this email
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                            class="stepper-number">2</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Notification details
                                        </h3>

                                        <div class="stepper-desc">
                                            Provide all relevant info
                                        </div>
                                    </div>
                                    <!--begin::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 2-->

                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                            class="stepper-number">3</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Settings
                                        </h3>

                                        <div class="stepper-desc">
                                            Additional settings and configs
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 3-->

                            <!--begin::Step 4-->
                            <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Completed
                                        </h3>

                                        <div class="stepper-desc">
                                            Review and Submit
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 4-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--begin::Aside-->

                    <!--begin::Content-->
                    <div class="flex-row-fluid py-lg-5 px-lg-15">
                        <!--begin::Form-->
                        <form class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                            id="kt_modal_create_app_form">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required">Email Name</span>
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                aria-label="Friendly and unique name"
                                                data-bs-original-title="Friendly and unique name"
                                                data-kt-initialized="1">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span></label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="name" placeholder="" value="">
                                        <!--end::Input-->
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                            <span class="required">Category</span>


                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                aria-label="Select your email category"
                                                data-bs-original-title="Select your email category"
                                                data-kt-initialized="1">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span> </label>
                                        <!--end::Label-->

                                        <!--begin:Options-->
                                        <div class="fv-row fv-plugins-icon-container">
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-compass fs-1 text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i> </span>
                                                    </span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Quick Online Courses</span>

                                                        <span class="fs-7 text-muted">Creating a clear text structure
                                                            is just one SEO</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        value="1">
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger  ">
                                                            <i class="ki-duotone ki-element-11 fs-1 text-danger"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i> </span>
                                                    </span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Face to Face Discussions</span>

                                                        <span class="fs-7 text-muted">Creating a clear text structure
                                                            is just one aspect</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        value="2">
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-duotone ki-timer fs-1 text-success"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i> </span>
                                                    </span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Full Intro Training</span>

                                                        <span class="fs-7 text-muted">Creating a clear text structure
                                                            copywriting</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        value="3">
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                        <!--end:Options-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required fs-5 fw-semibold mb-2">
                                            Database Name
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="dbname" placeholder="" value="master_db">
                                        <!--end::Input-->
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                            <span class="required">Select Database Engine</span>


                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                aria-label="Select your app database engine"
                                                data-bs-original-title="Select your app database engine"
                                                data-kt-initialized="1">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span> </label>
                                        <!--end::Label-->

                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin::Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin::Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="ki-duotone ki-note text-success fs-2x"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </span>
                                                <!--end::Icon-->

                                                <!--begin::Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bold fs-6">MySQL</span>

                                                    <span class="fs-7 text-muted">Basic MySQL database</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="dbengine"
                                                    checked="" value="1">
                                            </span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->

                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin::Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin::Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-danger">
                                                        <i class="ki-duotone ki-google text-danger fs-2x"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </span>
                                                <!--end::Icon-->

                                                <!--begin::Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bold fs-6">Firebase</span>

                                                    <span class="fs-7 text-muted">Google based app data
                                                        management</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="dbengine"
                                                    value="2">
                                            </span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->

                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer">
                                            <!--begin::Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin::Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-duotone ki-microsoft text-warning fs-2x"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span></i>
                                                    </span>
                                                </span>
                                                <!--end::Icon-->

                                                <!--begin::Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bold fs-6">DynamoDB</span>

                                                    <span class="fs-7 text-muted">Microsoft Fast NoSQL Database</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="dbengine"
                                                    value="3">
                                            </span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100 text-center">
                                    <!--begin::Heading-->
                                    <h1 class="fw-bold text-gray-900 mb-3">Release!</h1>
                                    <!--end::Heading-->

                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-3">
                                        Submit your app to kickstart your project.
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Illustration-->
                                    <div class="text-center px-4 py-15">
                                        <img src="/metronic8/demo1/assets/media/illustrations/sketchy-1/9.png"
                                            alt="" class="mw-100 mh-300px">
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                            </div>
                            <!--end::Step 4-->


                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous">
                                        <i class="ki-duotone ki-arrow-left fs-3 me-1"><span
                                                class="path1"></span><span class="path2"></span></i> Back
                                    </button>
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="submit">
                                        <span class="indicator-label">
                                            Submit
                                            <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span
                                                    class="path1"></span><span class="path2"></span></i> </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="next">
                                        Continue
                                        <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0"><span
                                                class="path1"></span><span class="path2"></span></i> </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
