<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <title>Anouncer - No excuses for not letting know</title>
    <meta charset="utf-8" />
    <meta name="description" content="Notify in various ways" />
    <meta name="keywords" content="We will reach everyone, Email, Telegram, Text Message and more" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Anouncer - No excuses for not letting know" />
    <meta property="og:url" content="https://dimensiondata.com" />
    <meta property="og:site_name" content="Tsokotsa" />
    <link rel="canonical" href="http://authentication/layouts/overlay/sign-in.html" />
    <!-- Main ico -->
    <link rel="shortcut icon" href="assets/media/logos/dd-fav.ico"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('assets/media/auth/bg10.jpeg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg10-dark.jpeg');
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <!--begin::Image-->
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                        src="assets/media/auth/colab1.png" alt="" />

                    <!--end::Image-->
                    <!--begin::Title-->
                    <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="text-gray-600 fs-base text-center fw-semibold">" The single biggest,
                        <a href="#" class="opacity-75-hover text-primary me-1">problem</a>in communication is the
                        ilusion
                        <br />that it has taken place. "
                        <a href="#" class="opacity-75-hover text-primary me-1"></br>
                            <br />
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                <!--begin::Wrapper-->
                <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                            <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}" data-kt-redirect-url="/land">
                                @csrf
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                                        src="assets/media/auth/logo-dd-is.png" alt="DD Logo" />
                                    <!--begin::Subtitle-->
                                    <div class="text-gray-500 fw-semibold fs-6">Communication is key!</div>
                                    <!--end::Subtitle=-->
                                </div>
                                <!--begin::Heading-->
                                <!--begin::Login options-->
                                <div class="row g-3 mb-9">

                                </div>
                                <!--end::Login options-->
                                <!--begin::Separator-->
                                <div class="separator separator-content my-14">
                                    <span class="w-125px text-gray-500 fw-semibold fs-7">Login</span>
                                </div>
                                <!--end::Separator-->
                                <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Username-->
                                    <input type="text" placeholder="email" name="email" autocomplete="off"
                                        class="form-control bg-transparent" />
                                    <!--end::Username-->
                                </div>
                                <!--end::Input group=-->
                                <div class="fv-row mb-3">
                                    <!--begin::Password-->
                                    <input type="password" placeholder="Password" name="password" autocomplete="off"
                                        class="form-control bg-transparent" />
                                    <!--end::Password-->
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                    <div></div>
                                    <!--begin::Link-->
                                    <a href="/forgotpass" class="link-primary">Forgot Password ?</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Submit button-->
                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Sign In</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </button>
                                </div>
                                <!--end::Submit button-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Footer-->
                        <div class="d-flex flex-stack">
                            <!--begin::Languages-->
                            <div class="me-10">
                                <!--begin::Toggle-->
                                <button
                                    class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                    data-kt-menu-offset="0px, 0px">
                                    <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3"
                                        src="assets/media/flags/united-states.svg" alt="" />
                                    <span data-kt-element="current-lang-name" class="me-1">English</span>
                                    <i class="ki-outline ki-down fs-5 text-muted rotate-180 m-0"></i>
                                </button>
                                <!--end::Toggle-->
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7"
                                    data-kt-menu="true" id="kt_auth_lang_menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
                                                    src="assets/media/flags/united-states.svg" alt="" />
                                            </span>
                                            <span data-kt-element="lang-name">English</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
                                                    src="assets/media/flags/spain.svg" alt="" />
                                            </span>
                                            <span data-kt-element="lang-name">Spanish</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
                                                    src="assets/media/flags/germany.svg" alt="" />
                                            </span>
                                            <span data-kt-element="lang-name">German</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
                                                    src="assets/media/flags/japan.svg" alt="" />
                                            </span>
                                            <span data-kt-element="lang-name">Japanese</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
                                                    src="assets/media/flags/france.svg" alt="" />
                                            </span>
                                            <span data-kt-element="lang-name">French</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Languages-->
                            <!--begin::Links-->
                            <div class="d-flex fw-semibold text-primary fs-base gap-5">
                                <a href="#" target="_blank">Terms</a>
                                <a href="#" target="_blank">Plans</a>
                                <a href="https://dimensiondata.com" target="_blank">Contact Us</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
