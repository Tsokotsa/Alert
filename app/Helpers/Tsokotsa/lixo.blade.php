<?php


// Send Email Function.
public function sendTestEmail ($data)
{
    // Mail::to($data['to'])->queue(new \App\Mail\SendTestMail());
    Mail::send([], [], function ($message) use ($data) {
        $message->to($data['to'])
                ->subject($data['subject'])
                ->html('<h1>Hello, ' . $data['to'] . '</h1><p>' . $data['msg'] . '</p>'); // Use html() for HTML content
            });

    return 'Email sent successfully';
}




// Return Json message
return response()->json(['error' => 'Telegram bot token not supplied'], 500);


// Add Contact 
<div class="col-xl-6">
                        <!--begin::Contacts-->
                        <div class="card card-flush h-lg-100" id="kt_contacts_main" data-select2-id="select2-data-kt_contacts_main">
                            <!--begin::Card header-->
                            <div class="card-header pt-7" id="kt_chat_contacts_header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <i class="ki-outline ki-badge fs-1 me-2"></i>
                                    <h2>Add New Contact</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-5" data-select2-id="select2-data-110-ludd">
                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" data-select2-id="select2-data-kt_ecommerce_settings_general_form">
                                    <!--begin::Input group-->
                                    <div class="mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-3">
                                            <span>Update Avatar</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Allowed file types: png, jpg, jpeg." data-bs-original-title="Allowed file types: png, jpg, jpeg." data-kt-initialized="1">
                                                <i class="ki-outline ki-information fs-7"></i>
                                            </span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Image input wrapper-->
                                        <div class="mt-1">
                                            <!--begin::Image placeholder-->
                                            <style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                                            <!--end::Image placeholder-->
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Edit-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                    <i class="ki-outline ki-pencil fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="avatar_remove">
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Edit-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                                    <i class="ki-outline ki-cross fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                                    <i class="ki-outline ki-cross fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                        </div>
                                        <!--end::Image input wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Name</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-bs-original-title="Enter the contact's name." data-kt-initialized="1">
                                                <i class="ki-outline ki-information fs-7"></i>
                                            </span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" name="name" value="">
                                        <!--end::Input-->
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span>Company Name</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Enter the contact's company name (optional)." data-bs-original-title="Enter the contact's company name (optional)." data-kt-initialized="1">
                                                <i class="ki-outline ki-information fs-7"></i>
                                            </span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" name="company_name" value="">
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Row-->
                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Email</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Enter the contact's email." data-bs-original-title="Enter the contact's email." data-kt-initialized="1">
                                                        <i class="ki-outline ki-information fs-7"></i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="email" class="form-control form-control-solid" name="email" value="">
                                                <!--end::Input-->
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span>Phone</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Enter the contact's phone number (optional)." data-bs-original-title="Enter the contact's phone number (optional)." data-kt-initialized="1">
                                                        <i class="ki-outline ki-information fs-7"></i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="phone" value="">
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2" data-select2-id="select2-data-109-6l8z">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span>City</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Enter the contact's city of residence (optional)." data-bs-original-title="Enter the contact's city of residence (optional)." data-kt-initialized="1">
                                                        <i class="ki-outline ki-information fs-7"></i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="city" value="">
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col" data-select2-id="select2-data-108-j72x">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container" data-select2-id="select2-data-107-hy5a">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Country</span>
                                                </label>
                                                <!--end::Label-->
                                                <div class="w-100" data-select2-id="select2-data-106-vloy">
                                                    <!--begin::Select2-->
                                                    <select id="kt_ecommerce_select2_country" class="form-select form-select-solid select2-hidden-accessible" name="country" data-kt-ecommerce-settings-type="select2_flags" data-placeholder="Select a country" data-select2-id="select2-data-kt_ecommerce_select2_country" tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="select2-data-104-fjln"></option>
                                                        <option value="AF" data-kt-select2-country="assets/media/flags/afghanistan.svg" data-select2-id="select2-data-113-9dzs">Afghanistan</option>
                                                        <option value="AX" data-kt-select2-country="assets/media/flags/aland-islands.svg" data-select2-id="select2-data-114-6xyw">Aland Islands</option>
                                                        <option value="AL" data-kt-select2-country="assets/media/flags/albania.svg" data-select2-id="select2-data-115-b66g">Albania</option>
                                                        <option value="DZ" data-kt-select2-country="assets/media/flags/algeria.svg" data-select2-id="select2-data-116-7fji">Algeria</option>
                                                        <option value="AS" data-kt-select2-country="assets/media/flags/american-samoa.svg" data-select2-id="select2-data-117-gwke">American Samoa</option>
                                                        <option value="AD" data-kt-select2-country="assets/media/flags/andorra.svg" data-select2-id="select2-data-118-h3p2">Andorra</option>
                                                        <option value="AO" data-kt-select2-country="assets/media/flags/angola.svg" data-select2-id="select2-data-119-6zaf">Angola</option>
                                                        <option value="AI" data-kt-select2-country="assets/media/flags/anguilla.svg" data-select2-id="select2-data-120-47f4">Anguilla</option>
                                                        <option value="AG" data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg" data-select2-id="select2-data-121-9f93">Antigua and Barbuda</option>
                                                        <option value="AR" data-kt-select2-country="assets/media/flags/argentina.svg" data-select2-id="select2-data-122-ms5d">Argentina</option>
                                                        <option value="AM" data-kt-select2-country="assets/media/flags/armenia.svg" data-select2-id="select2-data-123-96n3">Armenia</option>
                                                        <option value="AW" data-kt-select2-country="assets/media/flags/aruba.svg" data-select2-id="select2-data-124-76c5">Aruba</option>
                                                        <option value="AU" data-kt-select2-country="assets/media/flags/australia.svg" data-select2-id="select2-data-125-dxcf">Australia</option>
                                                        <option value="AT" data-kt-select2-country="assets/media/flags/austria.svg" data-select2-id="select2-data-126-m16e">Austria</option>
                                                        <option value="AZ" data-kt-select2-country="assets/media/flags/azerbaijan.svg" data-select2-id="select2-data-127-c74k">Azerbaijan</option>
                                                        <option value="BS" data-kt-select2-country="assets/media/flags/bahamas.svg" data-select2-id="select2-data-128-pumc">Bahamas</option>
                                                        <option value="BH" data-kt-select2-country="assets/media/flags/bahrain.svg" data-select2-id="select2-data-129-cyt2">Bahrain</option>
                                                        <option value="BD" data-kt-select2-country="assets/media/flags/bangladesh.svg" data-select2-id="select2-data-130-u80s">Bangladesh</option>
                                                        <option value="BB" data-kt-select2-country="assets/media/flags/barbados.svg" data-select2-id="select2-data-131-fftk">Barbados</option>
                                                        <option value="BY" data-kt-select2-country="assets/media/flags/belarus.svg" data-select2-id="select2-data-132-g43g">Belarus</option>
                                                        <option value="BE" data-kt-select2-country="assets/media/flags/belgium.svg" data-select2-id="select2-data-133-2g54">Belgium</option>
                                                        <option value="BZ" data-kt-select2-country="assets/media/flags/belize.svg" data-select2-id="select2-data-134-jvc1">Belize</option>
                                                        <option value="BJ" data-kt-select2-country="assets/media/flags/benin.svg" data-select2-id="select2-data-135-dy2l">Benin</option>
                                                        <option value="BM" data-kt-select2-country="assets/media/flags/bermuda.svg" data-select2-id="select2-data-136-1vgm">Bermuda</option>
                                                        <option value="BT" data-kt-select2-country="assets/media/flags/bhutan.svg" data-select2-id="select2-data-137-txgf">Bhutan</option>
                                                        <option value="BO" data-kt-select2-country="assets/media/flags/bolivia.svg" data-select2-id="select2-data-138-r3fp">Bolivia, Plurinational State of</option>
                                                        <option value="BQ" data-kt-select2-country="assets/media/flags/bonaire.svg" data-select2-id="select2-data-139-mppz">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="BA" data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.svg" data-select2-id="select2-data-140-lcpw">Bosnia and Herzegovina</option>
                                                        <option value="BW" data-kt-select2-country="assets/media/flags/botswana.svg" data-select2-id="select2-data-141-lz1c">Botswana</option>
                                                        <option value="BR" data-kt-select2-country="assets/media/flags/brazil.svg" data-select2-id="select2-data-142-76gx">Brazil</option>
                                                        <option value="IO" data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.svg" data-select2-id="select2-data-143-n888">British Indian Ocean Territory</option>
                                                        <option value="BN" data-kt-select2-country="assets/media/flags/brunei.svg" data-select2-id="select2-data-144-ekb1">Brunei Darussalam</option>
                                                        <option value="BG" data-kt-select2-country="assets/media/flags/bulgaria.svg" data-select2-id="select2-data-145-0xpt">Bulgaria</option>
                                                        <option value="BF" data-kt-select2-country="assets/media/flags/burkina-faso.svg" data-select2-id="select2-data-146-8b3h">Burkina Faso</option>
                                                        <option value="BI" data-kt-select2-country="assets/media/flags/burundi.svg" data-select2-id="select2-data-147-t465">Burundi</option>
                                                        <option value="KH" data-kt-select2-country="assets/media/flags/cambodia.svg" data-select2-id="select2-data-148-hu2s">Cambodia</option>
                                                        <option value="CM" data-kt-select2-country="assets/media/flags/cameroon.svg" data-select2-id="select2-data-149-1l3k">Cameroon</option>
                                                        <option value="CA" data-kt-select2-country="assets/media/flags/canada.svg" data-select2-id="select2-data-150-8smb">Canada</option>
                                                        <option value="CV" data-kt-select2-country="assets/media/flags/cape-verde.svg" data-select2-id="select2-data-151-qm0l">Cape Verde</option>
                                                        <option value="KY" data-kt-select2-country="assets/media/flags/cayman-islands.svg" data-select2-id="select2-data-152-pz0o">Cayman Islands</option>
                                                        <option value="CF" data-kt-select2-country="assets/media/flags/central-african-republic.svg" data-select2-id="select2-data-153-jejh">Central African Republic</option>
                                                        <option value="TD" data-kt-select2-country="assets/media/flags/chad.svg" data-select2-id="select2-data-154-p5ig">Chad</option>
                                                        <option value="CL" data-kt-select2-country="assets/media/flags/chile.svg" data-select2-id="select2-data-155-wcj1">Chile</option>
                                                        <option value="CN" data-kt-select2-country="assets/media/flags/china.svg" data-select2-id="select2-data-156-nkih">China</option>
                                                        <option value="CX" data-kt-select2-country="assets/media/flags/christmas-island.svg" data-select2-id="select2-data-157-jxw8">Christmas Island</option>
                                                        <option value="CC" data-kt-select2-country="assets/media/flags/cocos-island.svg" data-select2-id="select2-data-158-s606">Cocos (Keeling) Islands</option>
                                                        <option value="CO" data-kt-select2-country="assets/media/flags/colombia.svg" data-select2-id="select2-data-159-mihz">Colombia</option>
                                                        <option value="KM" data-kt-select2-country="assets/media/flags/comoros.svg" data-select2-id="select2-data-160-0s25">Comoros</option>
                                                        <option value="CK" data-kt-select2-country="assets/media/flags/cook-islands.svg" data-select2-id="select2-data-161-aujo">Cook Islands</option>
                                                        <option value="CR" data-kt-select2-country="assets/media/flags/costa-rica.svg" data-select2-id="select2-data-162-w9xc">Costa Rica</option>
                                                        <option value="CI" data-kt-select2-country="assets/media/flags/ivory-coast.svg" data-select2-id="select2-data-163-hk85">Côte d'Ivoire</option>
                                                        <option value="HR" data-kt-select2-country="assets/media/flags/croatia.svg" data-select2-id="select2-data-164-x446">Croatia</option>
                                                        <option value="CU" data-kt-select2-country="assets/media/flags/cuba.svg" data-select2-id="select2-data-165-39x3">Cuba</option>
                                                        <option value="CW" data-kt-select2-country="assets/media/flags/curacao.svg" data-select2-id="select2-data-166-kbtl">Curaçao</option>
                                                        <option value="CZ" data-kt-select2-country="assets/media/flags/czech-republic.svg" data-select2-id="select2-data-167-faxe">Czech Republic</option>
                                                        <option value="DK" data-kt-select2-country="assets/media/flags/denmark.svg" data-select2-id="select2-data-168-jkxq">Denmark</option>
                                                        <option value="DJ" data-kt-select2-country="assets/media/flags/djibouti.svg" data-select2-id="select2-data-169-91vi">Djibouti</option>
                                                        <option value="DM" data-kt-select2-country="assets/media/flags/dominica.svg" data-select2-id="select2-data-170-iwwk">Dominica</option>
                                                        <option value="DO" data-kt-select2-country="assets/media/flags/dominican-republic.svg" data-select2-id="select2-data-171-8mcf">Dominican Republic</option>
                                                        <option value="EC" data-kt-select2-country="assets/media/flags/ecuador.svg" data-select2-id="select2-data-172-4hk5">Ecuador</option>
                                                        <option value="EG" data-kt-select2-country="assets/media/flags/egypt.svg" data-select2-id="select2-data-173-475v">Egypt</option>
                                                        <option value="SV" data-kt-select2-country="assets/media/flags/el-salvador.svg" data-select2-id="select2-data-174-6dqh">El Salvador</option>
                                                        <option value="GQ" data-kt-select2-country="assets/media/flags/equatorial-guinea.svg" data-select2-id="select2-data-175-jbgo">Equatorial Guinea</option>
                                                        <option value="ER" data-kt-select2-country="assets/media/flags/eritrea.svg" data-select2-id="select2-data-176-o9me">Eritrea</option>
                                                        <option value="EE" data-kt-select2-country="assets/media/flags/estonia.svg" data-select2-id="select2-data-177-gn4b">Estonia</option>
                                                        <option value="ET" data-kt-select2-country="assets/media/flags/ethiopia.svg" data-select2-id="select2-data-178-u5il">Ethiopia</option>
                                                        <option value="FK" data-kt-select2-country="assets/media/flags/falkland-islands.svg" data-select2-id="select2-data-179-c0ia">Falkland Islands (Malvinas)</option>
                                                        <option value="FJ" data-kt-select2-country="assets/media/flags/fiji.svg" data-select2-id="select2-data-180-m51s">Fiji</option>
                                                        <option value="FI" data-kt-select2-country="assets/media/flags/finland.svg" data-select2-id="select2-data-181-ow5i">Finland</option>
                                                        <option value="FR" data-kt-select2-country="assets/media/flags/france.svg" data-select2-id="select2-data-182-ww7r">France</option>
                                                        <option value="PF" data-kt-select2-country="assets/media/flags/french-polynesia.svg" data-select2-id="select2-data-183-d8ng">French Polynesia</option>
                                                        <option value="GA" data-kt-select2-country="assets/media/flags/gabon.svg" data-select2-id="select2-data-184-yaws">Gabon</option>
                                                        <option value="GM" data-kt-select2-country="assets/media/flags/gambia.svg" data-select2-id="select2-data-185-csta">Gambia</option>
                                                        <option value="GE" data-kt-select2-country="assets/media/flags/georgia.svg" data-select2-id="select2-data-186-qq57">Georgia</option>
                                                        <option value="DE" data-kt-select2-country="assets/media/flags/germany.svg" data-select2-id="select2-data-187-udo4">Germany</option>
                                                        <option value="GH" data-kt-select2-country="assets/media/flags/ghana.svg" data-select2-id="select2-data-188-n3e7">Ghana</option>
                                                        <option value="GI" data-kt-select2-country="assets/media/flags/gibraltar.svg" data-select2-id="select2-data-189-64lf">Gibraltar</option>
                                                        <option value="GR" data-kt-select2-country="assets/media/flags/greece.svg" data-select2-id="select2-data-190-gdwh">Greece</option>
                                                        <option value="GL" data-kt-select2-country="assets/media/flags/greenland.svg" data-select2-id="select2-data-191-4z79">Greenland</option>
                                                        <option value="GD" data-kt-select2-country="assets/media/flags/grenada.svg" data-select2-id="select2-data-192-q5cd">Grenada</option>
                                                        <option value="GU" data-kt-select2-country="assets/media/flags/guam.svg" data-select2-id="select2-data-193-fdok">Guam</option>
                                                        <option value="GT" data-kt-select2-country="assets/media/flags/guatemala.svg" data-select2-id="select2-data-194-jc1g">Guatemala</option>
                                                        <option value="GG" data-kt-select2-country="assets/media/flags/guernsey.svg" data-select2-id="select2-data-195-bzgx">Guernsey</option>
                                                        <option value="GN" data-kt-select2-country="assets/media/flags/guinea.svg" data-select2-id="select2-data-196-9o60">Guinea</option>
                                                        <option value="GW" data-kt-select2-country="assets/media/flags/guinea-bissau.svg" data-select2-id="select2-data-197-o2oj">Guinea-Bissau</option>
                                                        <option value="HT" data-kt-select2-country="assets/media/flags/haiti.svg" data-select2-id="select2-data-198-qiin">Haiti</option>
                                                        <option value="VA" data-kt-select2-country="assets/media/flags/vatican-city.svg" data-select2-id="select2-data-199-k84i">Holy See (Vatican City State)</option>
                                                        <option value="HN" data-kt-select2-country="assets/media/flags/honduras.svg" data-select2-id="select2-data-200-cxr9">Honduras</option>
                                                        <option value="HK" data-kt-select2-country="assets/media/flags/hong-kong.svg" data-select2-id="select2-data-201-4857">Hong Kong</option>
                                                        <option value="HU" data-kt-select2-country="assets/media/flags/hungary.svg" data-select2-id="select2-data-202-weju">Hungary</option>
                                                        <option value="IS" data-kt-select2-country="assets/media/flags/iceland.svg" data-select2-id="select2-data-203-7yvl">Iceland</option>
                                                        <option value="IN" data-kt-select2-country="assets/media/flags/india.svg" data-select2-id="select2-data-204-4kq9">India</option>
                                                        <option value="ID" data-kt-select2-country="assets/media/flags/indonesia.svg" data-select2-id="select2-data-205-gqp6">Indonesia</option>
                                                        <option value="IR" data-kt-select2-country="assets/media/flags/iran.svg" data-select2-id="select2-data-206-5jbi">Iran, Islamic Republic of</option>
                                                        <option value="IQ" data-kt-select2-country="assets/media/flags/iraq.svg" data-select2-id="select2-data-207-whyp">Iraq</option>
                                                        <option value="IE" data-kt-select2-country="assets/media/flags/ireland.svg" data-select2-id="select2-data-208-kgpp">Ireland</option>
                                                        <option value="IM" data-kt-select2-country="assets/media/flags/isle-of-man.svg" data-select2-id="select2-data-209-i66h">Isle of Man</option>
                                                        <option value="IL" data-kt-select2-country="assets/media/flags/israel.svg" data-select2-id="select2-data-210-ztjq">Israel</option>
                                                        <option value="IT" data-kt-select2-country="assets/media/flags/italy.svg" data-select2-id="select2-data-211-tn6w">Italy</option>
                                                        <option value="JM" data-kt-select2-country="assets/media/flags/jamaica.svg" data-select2-id="select2-data-212-zady">Jamaica</option>
                                                        <option value="JP" data-kt-select2-country="assets/media/flags/japan.svg" data-select2-id="select2-data-213-zy4m">Japan</option>
                                                        <option value="JE" data-kt-select2-country="assets/media/flags/jersey.svg" data-select2-id="select2-data-214-risz">Jersey</option>
                                                        <option value="JO" data-kt-select2-country="assets/media/flags/jordan.svg" data-select2-id="select2-data-215-ge9b">Jordan</option>
                                                        <option value="KZ" data-kt-select2-country="assets/media/flags/kazakhstan.svg" data-select2-id="select2-data-216-rm5c">Kazakhstan</option>
                                                        <option value="KE" data-kt-select2-country="assets/media/flags/kenya.svg" data-select2-id="select2-data-217-2x8s">Kenya</option>
                                                        <option value="KI" data-kt-select2-country="assets/media/flags/kiribati.svg" data-select2-id="select2-data-218-m520">Kiribati</option>
                                                        <option value="KP" data-kt-select2-country="assets/media/flags/north-korea.svg" data-select2-id="select2-data-219-7ud3">Korea, Democratic People's Republic of</option>
                                                        <option value="KW" data-kt-select2-country="assets/media/flags/kuwait.svg" data-select2-id="select2-data-220-x9ty">Kuwait</option>
                                                        <option value="KG" data-kt-select2-country="assets/media/flags/kyrgyzstan.svg" data-select2-id="select2-data-221-4qta">Kyrgyzstan</option>
                                                        <option value="LA" data-kt-select2-country="assets/media/flags/laos.svg" data-select2-id="select2-data-222-lmvx">Lao People's Democratic Republic</option>
                                                        <option value="LV" data-kt-select2-country="assets/media/flags/latvia.svg" data-select2-id="select2-data-223-9qsz">Latvia</option>
                                                        <option value="LB" data-kt-select2-country="assets/media/flags/lebanon.svg" data-select2-id="select2-data-224-8nu7">Lebanon</option>
                                                        <option value="LS" data-kt-select2-country="assets/media/flags/lesotho.svg" data-select2-id="select2-data-225-gpte">Lesotho</option>
                                                        <option value="LR" data-kt-select2-country="assets/media/flags/liberia.svg" data-select2-id="select2-data-226-6y6w">Liberia</option>
                                                        <option value="LY" data-kt-select2-country="assets/media/flags/libya.svg" data-select2-id="select2-data-227-lppr">Libya</option>
                                                        <option value="LI" data-kt-select2-country="assets/media/flags/liechtenstein.svg" data-select2-id="select2-data-228-jlc9">Liechtenstein</option>
                                                        <option value="LT" data-kt-select2-country="assets/media/flags/lithuania.svg" data-select2-id="select2-data-229-vjyn">Lithuania</option>
                                                        <option value="LU" data-kt-select2-country="assets/media/flags/luxembourg.svg" data-select2-id="select2-data-230-5hbi">Luxembourg</option>
                                                        <option value="MO" data-kt-select2-country="assets/media/flags/macao.svg" data-select2-id="select2-data-231-avgn">Macao</option>
                                                        <option value="MG" data-kt-select2-country="assets/media/flags/madagascar.svg" data-select2-id="select2-data-232-4dkp">Madagascar</option>
                                                        <option value="MW" data-kt-select2-country="assets/media/flags/malawi.svg" data-select2-id="select2-data-233-96i9">Malawi</option>
                                                        <option value="MY" data-kt-select2-country="assets/media/flags/malaysia.svg" data-select2-id="select2-data-234-o0jx">Malaysia</option>
                                                        <option value="MV" data-kt-select2-country="assets/media/flags/maldives.svg" data-select2-id="select2-data-235-0a8p">Maldives</option>
                                                        <option value="ML" data-kt-select2-country="assets/media/flags/mali.svg" data-select2-id="select2-data-236-2ykv">Mali</option>
                                                        <option value="MT" data-kt-select2-country="assets/media/flags/malta.svg" data-select2-id="select2-data-237-25bd">Malta</option>
                                                        <option value="MH" data-kt-select2-country="assets/media/flags/marshall-island.svg" data-select2-id="select2-data-238-3ewv">Marshall Islands</option>
                                                        <option value="MQ" data-kt-select2-country="assets/media/flags/martinique.svg" data-select2-id="select2-data-239-jxmm">Martinique</option>
                                                        <option value="MR" data-kt-select2-country="assets/media/flags/mauritania.svg" data-select2-id="select2-data-240-ccyq">Mauritania</option>
                                                        <option value="MU" data-kt-select2-country="assets/media/flags/mauritius.svg" data-select2-id="select2-data-241-2to9">Mauritius</option>
                                                        <option value="MX" data-kt-select2-country="assets/media/flags/mexico.svg" data-select2-id="select2-data-242-zyn4">Mexico</option>
                                                        <option value="FM" data-kt-select2-country="assets/media/flags/micronesia.svg" data-select2-id="select2-data-243-xomq">Micronesia, Federated States of</option>
                                                        <option value="MD" data-kt-select2-country="assets/media/flags/moldova.svg" data-select2-id="select2-data-244-vqt0">Moldova, Republic of</option>
                                                        <option value="MC" data-kt-select2-country="assets/media/flags/monaco.svg" data-select2-id="select2-data-245-4n6y">Monaco</option>
                                                        <option value="MN" data-kt-select2-country="assets/media/flags/mongolia.svg" data-select2-id="select2-data-246-ujk3">Mongolia</option>
                                                        <option value="ME" data-kt-select2-country="assets/media/flags/montenegro.svg" data-select2-id="select2-data-247-rb43">Montenegro</option>
                                                        <option value="MS" data-kt-select2-country="assets/media/flags/montserrat.svg" data-select2-id="select2-data-248-2h97">Montserrat</option>
                                                        <option value="MA" data-kt-select2-country="assets/media/flags/morocco.svg" data-select2-id="select2-data-249-gvxw">Morocco</option>
                                                        <option value="MZ" data-kt-select2-country="assets/media/flags/mozambique.svg" data-select2-id="select2-data-250-2dl3">Mozambique</option>
                                                        <option value="MM" data-kt-select2-country="assets/media/flags/myanmar.svg" data-select2-id="select2-data-251-r7lg">Myanmar</option>
                                                        <option value="NA" data-kt-select2-country="assets/media/flags/namibia.svg" data-select2-id="select2-data-252-jp4l">Namibia</option>
                                                        <option value="NR" data-kt-select2-country="assets/media/flags/nauru.svg" data-select2-id="select2-data-253-u23z">Nauru</option>
                                                        <option value="NP" data-kt-select2-country="assets/media/flags/nepal.svg" data-select2-id="select2-data-254-6ex4">Nepal</option>
                                                        <option value="NL" data-kt-select2-country="assets/media/flags/netherlands.svg" data-select2-id="select2-data-255-8t8v">Netherlands</option>
                                                        <option value="NZ" data-kt-select2-country="assets/media/flags/new-zealand.svg" data-select2-id="select2-data-256-8xpi">New Zealand</option>
                                                        <option value="NI" data-kt-select2-country="assets/media/flags/nicaragua.svg" data-select2-id="select2-data-257-v3sh">Nicaragua</option>
                                                        <option value="NE" data-kt-select2-country="assets/media/flags/niger.svg" data-select2-id="select2-data-258-p9gm">Niger</option>
                                                        <option value="NG" data-kt-select2-country="assets/media/flags/nigeria.svg" data-select2-id="select2-data-259-inzo">Nigeria</option>
                                                        <option value="NU" data-kt-select2-country="assets/media/flags/niue.svg" data-select2-id="select2-data-260-rznx">Niue</option>
                                                        <option value="NF" data-kt-select2-country="assets/media/flags/norfolk-island.svg" data-select2-id="select2-data-261-8w1u">Norfolk Island</option>
                                                        <option value="MP" data-kt-select2-country="assets/media/flags/northern-mariana-islands.svg" data-select2-id="select2-data-262-rk3d">Northern Mariana Islands</option>
                                                        <option value="NO" data-kt-select2-country="assets/media/flags/norway.svg" data-select2-id="select2-data-263-n5j5">Norway</option>
                                                        <option value="OM" data-kt-select2-country="assets/media/flags/oman.svg" data-select2-id="select2-data-264-olh8">Oman</option>
                                                        <option value="PK" data-kt-select2-country="assets/media/flags/pakistan.svg" data-select2-id="select2-data-265-sa6n">Pakistan</option>
                                                        <option value="PW" data-kt-select2-country="assets/media/flags/palau.svg" data-select2-id="select2-data-266-s7t5">Palau</option>
                                                        <option value="PS" data-kt-select2-country="assets/media/flags/palestine.svg" data-select2-id="select2-data-267-f2sx">Palestinian Territory, Occupied</option>
                                                        <option value="PA" data-kt-select2-country="assets/media/flags/panama.svg" data-select2-id="select2-data-268-n9mq">Panama</option>
                                                        <option value="PG" data-kt-select2-country="assets/media/flags/papua-new-guinea.svg" data-select2-id="select2-data-269-vixx">Papua New Guinea</option>
                                                        <option value="PY" data-kt-select2-country="assets/media/flags/paraguay.svg" data-select2-id="select2-data-270-ouff">Paraguay</option>
                                                        <option value="PE" data-kt-select2-country="assets/media/flags/peru.svg" data-select2-id="select2-data-271-wmxs">Peru</option>
                                                        <option value="PH" data-kt-select2-country="assets/media/flags/philippines.svg" data-select2-id="select2-data-272-810e">Philippines</option>
                                                        <option value="PL" data-kt-select2-country="assets/media/flags/poland.svg" data-select2-id="select2-data-273-e1f8">Poland</option>
                                                        <option value="PT" data-kt-select2-country="assets/media/flags/portugal.svg" data-select2-id="select2-data-274-w5e5">Portugal</option>
                                                        <option value="PR" data-kt-select2-country="assets/media/flags/puerto-rico.svg" data-select2-id="select2-data-275-9q40">Puerto Rico</option>
                                                        <option value="QA" data-kt-select2-country="assets/media/flags/qatar.svg" data-select2-id="select2-data-276-hbd7">Qatar</option>
                                                        <option value="RO" data-kt-select2-country="assets/media/flags/romania.svg" data-select2-id="select2-data-277-htm1">Romania</option>
                                                        <option value="RU" data-kt-select2-country="assets/media/flags/russia.svg" data-select2-id="select2-data-278-3qg8">Russian Federation</option>
                                                        <option value="RW" data-kt-select2-country="assets/media/flags/rwanda.svg" data-select2-id="select2-data-279-pnkv">Rwanda</option>
                                                        <option value="BL" data-kt-select2-country="assets/media/flags/st-barts.svg" data-select2-id="select2-data-280-d1nj">Saint Barthélemy</option>
                                                        <option value="KN" data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.svg" data-select2-id="select2-data-281-s12x">Saint Kitts and Nevis</option>
                                                        <option value="LC" data-kt-select2-country="assets/media/flags/st-lucia.svg" data-select2-id="select2-data-282-65lr">Saint Lucia</option>
                                                        <option value="MF" data-kt-select2-country="assets/media/flags/sint-maarten.svg" data-select2-id="select2-data-283-8gck">Saint Martin (French part)</option>
                                                        <option value="VC" data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.svg" data-select2-id="select2-data-284-bwiu">Saint Vincent and the Grenadines</option>
                                                        <option value="WS" data-kt-select2-country="assets/media/flags/samoa.svg" data-select2-id="select2-data-285-84l6">Samoa</option>
                                                        <option value="SM" data-kt-select2-country="assets/media/flags/san-marino.svg" data-select2-id="select2-data-286-mn6q">San Marino</option>
                                                        <option value="ST" data-kt-select2-country="assets/media/flags/sao-tome-and-prince.svg" data-select2-id="select2-data-287-f5y4">Sao Tome and Principe</option>
                                                        <option value="SA" data-kt-select2-country="assets/media/flags/saudi-arabia.svg" data-select2-id="select2-data-288-m21w">Saudi Arabia</option>
                                                        <option value="SN" data-kt-select2-country="assets/media/flags/senegal.svg" data-select2-id="select2-data-289-x0cv">Senegal</option>
                                                        <option value="RS" data-kt-select2-country="assets/media/flags/serbia.svg" data-select2-id="select2-data-290-mtz7">Serbia</option>
                                                        <option value="SC" data-kt-select2-country="assets/media/flags/seychelles.svg" data-select2-id="select2-data-291-5jkt">Seychelles</option>
                                                        <option value="SL" data-kt-select2-country="assets/media/flags/sierra-leone.svg" data-select2-id="select2-data-292-n5oz">Sierra Leone</option>
                                                        <option value="SG" data-kt-select2-country="assets/media/flags/singapore.svg" data-select2-id="select2-data-293-mucr">Singapore</option>
                                                        <option value="SX" data-kt-select2-country="assets/media/flags/sint-maarten.svg" data-select2-id="select2-data-294-xtff">Sint Maarten (Dutch part)</option>
                                                        <option value="SK" data-kt-select2-country="assets/media/flags/slovakia.svg" data-select2-id="select2-data-295-zeum">Slovakia</option>
                                                        <option value="SI" data-kt-select2-country="assets/media/flags/slovenia.svg" data-select2-id="select2-data-296-cm9a">Slovenia</option>
                                                        <option value="SB" data-kt-select2-country="assets/media/flags/solomon-islands.svg" data-select2-id="select2-data-297-eznv">Solomon Islands</option>
                                                        <option value="SO" data-kt-select2-country="assets/media/flags/somalia.svg" data-select2-id="select2-data-298-4jls">Somalia</option>
                                                        <option value="ZA" data-kt-select2-country="assets/media/flags/south-africa.svg" data-select2-id="select2-data-299-34d6">South Africa</option>
                                                        <option value="KR" data-kt-select2-country="assets/media/flags/south-korea.svg" data-select2-id="select2-data-300-98u8">South Korea</option>
                                                        <option value="SS" data-kt-select2-country="assets/media/flags/south-sudan.svg" data-select2-id="select2-data-301-jor0">South Sudan</option>
                                                        <option value="ES" data-kt-select2-country="assets/media/flags/spain.svg" data-select2-id="select2-data-302-bpuk">Spain</option>
                                                        <option value="LK" data-kt-select2-country="assets/media/flags/sri-lanka.svg" data-select2-id="select2-data-303-hrji">Sri Lanka</option>
                                                        <option value="SD" data-kt-select2-country="assets/media/flags/sudan.svg" data-select2-id="select2-data-304-wsy6">Sudan</option>
                                                        <option value="SR" data-kt-select2-country="assets/media/flags/suriname.svg" data-select2-id="select2-data-305-ubyo">Suriname</option>
                                                        <option value="SZ" data-kt-select2-country="assets/media/flags/swaziland.svg" data-select2-id="select2-data-306-c89s">Swaziland</option>
                                                        <option value="SE" data-kt-select2-country="assets/media/flags/sweden.svg" data-select2-id="select2-data-307-qegt">Sweden</option>
                                                        <option value="CH" data-kt-select2-country="assets/media/flags/switzerland.svg" data-select2-id="select2-data-308-wui2">Switzerland</option>
                                                        <option value="SY" data-kt-select2-country="assets/media/flags/syria.svg" data-select2-id="select2-data-309-9mrh">Syrian Arab Republic</option>
                                                        <option value="TW" data-kt-select2-country="assets/media/flags/taiwan.svg" data-select2-id="select2-data-310-ylu5">Taiwan, Province of China</option>
                                                        <option value="TJ" data-kt-select2-country="assets/media/flags/tajikistan.svg" data-select2-id="select2-data-311-dwrv">Tajikistan</option>
                                                        <option value="TZ" data-kt-select2-country="assets/media/flags/tanzania.svg" data-select2-id="select2-data-312-fm76">Tanzania, United Republic of</option>
                                                        <option value="TH" data-kt-select2-country="assets/media/flags/thailand.svg" data-select2-id="select2-data-313-f5pw">Thailand</option>
                                                        <option value="TG" data-kt-select2-country="assets/media/flags/togo.svg" data-select2-id="select2-data-314-jnwp">Togo</option>
                                                        <option value="TK" data-kt-select2-country="assets/media/flags/tokelau.svg" data-select2-id="select2-data-315-7vyh">Tokelau</option>
                                                        <option value="TO" data-kt-select2-country="assets/media/flags/tonga.svg" data-select2-id="select2-data-316-pa4x">Tonga</option>
                                                        <option value="TT" data-kt-select2-country="assets/media/flags/trinidad-and-tobago.svg" data-select2-id="select2-data-317-igxd">Trinidad and Tobago</option>
                                                        <option value="TN" data-kt-select2-country="assets/media/flags/tunisia.svg" data-select2-id="select2-data-318-stsi">Tunisia</option>
                                                        <option value="TR" data-kt-select2-country="assets/media/flags/turkey.svg" data-select2-id="select2-data-319-bywu">Turkey</option>
                                                        <option value="TM" data-kt-select2-country="assets/media/flags/turkmenistan.svg" data-select2-id="select2-data-320-o2p3">Turkmenistan</option>
                                                        <option value="TC" data-kt-select2-country="assets/media/flags/turks-and-caicos.svg" data-select2-id="select2-data-321-kg84">Turks and Caicos Islands</option>
                                                        <option value="TV" data-kt-select2-country="assets/media/flags/tuvalu.svg" data-select2-id="select2-data-322-3inw">Tuvalu</option>
                                                        <option value="UG" data-kt-select2-country="assets/media/flags/uganda.svg" data-select2-id="select2-data-323-s89k">Uganda</option>
                                                        <option value="UA" data-kt-select2-country="assets/media/flags/ukraine.svg" data-select2-id="select2-data-324-7vjp">Ukraine</option>
                                                        <option value="AE" data-kt-select2-country="assets/media/flags/united-arab-emirates.svg" data-select2-id="select2-data-325-e7oh">United Arab Emirates</option>
                                                        <option value="GB" data-kt-select2-country="assets/media/flags/united-kingdom.svg" data-select2-id="select2-data-326-vh8v">United Kingdom</option>
                                                        <option value="US" data-kt-select2-country="assets/media/flags/united-states.svg" data-select2-id="select2-data-327-s6ep">United States</option>
                                                        <option value="UY" data-kt-select2-country="assets/media/flags/uruguay.svg" data-select2-id="select2-data-328-ankp">Uruguay</option>
                                                        <option value="UZ" data-kt-select2-country="assets/media/flags/uzbekistan.svg" data-select2-id="select2-data-329-zegf">Uzbekistan</option>
                                                        <option value="VU" data-kt-select2-country="assets/media/flags/vanuatu.svg" data-select2-id="select2-data-330-tkem">Vanuatu</option>
                                                        <option value="VE" data-kt-select2-country="assets/media/flags/venezuela.svg" data-select2-id="select2-data-331-72sg">Venezuela, Bolivarian Republic of</option>
                                                        <option value="VN" data-kt-select2-country="assets/media/flags/vietnam.svg" data-select2-id="select2-data-332-p30t">Vietnam</option>
                                                        <option value="VI" data-kt-select2-country="assets/media/flags/virgin-islands.svg" data-select2-id="select2-data-333-ehqh">Virgin Islands</option>
                                                        <option value="YE" data-kt-select2-country="assets/media/flags/yemen.svg" data-select2-id="select2-data-334-8d8o">Yemen</option>
                                                        <option value="ZM" data-kt-select2-country="assets/media/flags/zambia.svg" data-select2-id="select2-data-335-ql64">Zambia</option>
                                                        <option value="ZW" data-kt-select2-country="assets/media/flags/zimbabwe.svg" data-select2-id="select2-data-336-r9mc">Zimbabwe</option>
                                                    </select><span class="select2 select2-container select2-container--bootstrap5 select2-container--above" dir="ltr" data-select2-id="select2-data-103-ydhj" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_ecommerce_select2_country-container" aria-controls="select2-kt_ecommerce_select2_country-container"><span class="select2-selection__rendered" id="select2-kt_ecommerce_select2_country-container" role="textbox" aria-readonly="true" title="Select a country"><span class="select2-selection__placeholder">Select a country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <!--end::Select2-->
                                                </div>
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span>Notes</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Enter any additional notes about the contact (optional)." data-bs-original-title="Enter any additional notes about the contact (optional)." data-kt-initialized="1">
                                                <i class="ki-outline ki-information fs-7"></i>
                                            </span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea class="form-control form-control-solid" name="notes"></textarea>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Separator-->
                                    <div class="separator mb-6"></div>
                                    <!--end::Separator-->
                                    <!--begin::Action buttons-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Button-->
                                        <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                            <span class="indicator-label">Save</span>
                                            <span class="indicator-progress">Please wait... 
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Contacts-->
                    </div>
// END add contact


// Submit ajax complete

 var form_data = $('#kt_modal_add_role_form').serialize();
                                $.ajax({
                                    type: "POST",
                                    url: "/role/add",
                                    data: form_data, // serializes the form's elements.
                                    success: function(response) {
                                        Swal.fire({
                                            title: "Wooohooo!",
                                            text: "Role successfull added",
                                            icon: "success",
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                        submitButton.removeAttribute('data-kt-indicator');
                                        submitButton.disabled = false;
                                        modal.hide();
                                        form.reset();
                                    },
                                    
                                    error: function(xhr, status, error) {
                                        var responseJson = JSON.parse(xhr.responseText);
                                        // Access the message property from the response
                                        var errorMessage = responseJson.message;
                                        // Display error message
                                        // alert('Error: ' + errorMessage);
                                        const Toast = Swal.mixin({
                                            toast: true,
                                            position: "top-end",
                                            showConfirmButton: false,
                                            timer: 3000,
                                            timerProgressBar: true,
                                            didOpen: (toast) => {
                                                toast.onmouseenter = Swal
                                                    .stopTimer;
                                                toast.onmouseleave = Swal
                                                    .resumeTimer;
                                            }
                                        });
                                        Toast.fire({
                                            icon: "error",
                                            title: "Erro: " + errorMessage
                                        });
                                    },

                                });