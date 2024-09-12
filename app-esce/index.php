<!--
=========================================================
* Material Kit 2 PRO - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit-pro 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php include './includes.php' ?>
<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= $ico ?>"><!-- ./assets/img/favicon.png -->
    <title>
        ESCE | Inicio
    </title>

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <link id="pagestyle" href="./assets/css/material-kit-pro.min.css?v=3.0.4" rel="stylesheet" />

    <link rel="stylesheet" href="./assets/css/style.css" />

    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>

    <script defer data-site="demos.creative-tim.com" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="case-study bg-gray-200">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav
                    class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <img src="<?= $logo ?>" class="w-10" alt="ESCE Logo">
                        <a class="navbar-brand font-weight-bolder ms-sm-3  d-none d-md-block" href="./" rel="tooltip"
                            title="Designed and Coded by Creative Tim" data-placement="bottom"
                            target="_blank"><!-- https://demos.creative-tim.com/material-kit-pro/index -->
                            <!--<h5>ESCE</h5>-->
                        </a>
                        <a class="navbar-brand font-weight-bolder ms-sm-3  d-block d-md-none" href="javascript:;"
                            rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom"
                            target="_blank">
                            Escuela de Ciencias Empresariales y Gestión Pública
                        </a>
                        <!--<a href="https://www.creative-tim.com/product/material-kit-pro#pricingCard" class="btn btn-sm  bg-gradient-primary  mb-0 ms-auto d-lg-none d-block">Buy Now</a>-->
                        <button class="navbar-toggler shadow-none ms-md-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-auto">
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a role="button" href="./"
                                        class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a role="button" href="./"
                                        class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                                        Nosotros
                                    </a>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a role="button" href="./"
                                        class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                                        Cursos
                                    </a>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                                        Pages
                                        <img src=" ./assets/img/down-arrow-dark.svg  " alt="down-arrow"
                                            class="arrow ms-2 d-lg-block d-none">
                                        <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow"
                                            class="arrow ms-1 d-lg-none d-block ms-auto">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-xl p-3 border-radius-xl mt-0 mt-lg-3"
                                        aria-labelledby="dropdownMenuPages">
                                        <div class="row d-none d-lg-block">
                                            <div class="col-12 px-4 py-2">
                                                <div class="row">
                                                    <div class="col-4 position-relative">
                                                        <div
                                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                            Landing Pages
                                                        </div>
                                                        <a href="./pages/coworking.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Coworking</span>
                                                        </a>
                                                        <a href="./pages/rental.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Rental</span>
                                                        </a>
                                                        <a href="./pages/case-study.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Case Study</span>
                                                        </a>
                                                        <div
                                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                                            Company
                                                        </div>
                                                        <a href="./pages/about-us.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>About Us</span>
                                                        </a>
                                                        <a href="./pages/pricing.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Pricing</span>
                                                        </a>
                                                        <a href="./pages/career.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Career</span>
                                                        </a>
                                                        <a href="./pages/work-with-us.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Work with us</span>
                                                        </a>
                                                        <a href="./pages/terms.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Terms & Conditions</span>
                                                        </a>
                                                        <hr class="vertical dark">
                                                    </div>
                                                    <div class="col-4 position-relative">
                                                        <div
                                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                            Support
                                                        </div>
                                                        <a href="./pages/help-center.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Help Center</span>
                                                        </a>
                                                        <a href="./pages/help-center-basic.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Help Center Basic</span>
                                                        </a>
                                                        <a href="./pages/contact-us.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Contact Us</span>
                                                        </a>
                                                        <a href="./pages/contact-us-simple.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Contact Us Basic</span>
                                                        </a>
                                                        <a href="./pages/faq.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>FAQ</span>
                                                        </a>
                                                        <a href="./pages/privacy.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Privacy</span>
                                                        </a>
                                                        <div
                                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-1">
                                                            Apps
                                                        </div>
                                                        <a href="./pages/mobile-app.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Mobile App</span>
                                                        </a>
                                                        <a href="./pages/desktop-app.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Desktop App</span>
                                                        </a>
                                                        <hr class="vertical dark">
                                                    </div>
                                                    <div class="col-4">
                                                        <div
                                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                            Blogs
                                                        </div>
                                                        <a href="./pages/blog/single-article.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Single Article</span>
                                                        </a>
                                                        <a href="./pages/blog/blog-posts.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Blog Posts</span>
                                                        </a>
                                                        <a href="./pages/blog/categories.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Categories</span>
                                                        </a>
                                                        <a href="./pages/blog/author.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Author</span>
                                                        </a>
                                                        <div
                                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-1">
                                                            Extra
                                                        </div>
                                                        <a href="./pages/automotive.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Automotive</span>
                                                        </a>
                                                        <a href="./pages/virtual-reality.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Virtual Reality</span>
                                                        </a>
                                                        <a href="./pages/smart-home.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Smart Home</span>
                                                        </a>
                                                        <a href="./pages/chat.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Chat</span>
                                                        </a>
                                                        <a href="./pages/product-page.html"
                                                            class="dropdown-item border-radius-md">
                                                            <span>Product Page</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-lg-none">
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                Landing Pages
                                            </div>
                                            <a href="./pages/coworking.html" class="dropdown-item border-radius-md">
                                                Coworking
                                            </a>
                                            <a href="./pages/rental.html" class="dropdown-item border-radius-md">
                                                Rental
                                            </a>
                                            <a href="./pages/case-study.html" class="dropdown-item border-radius-md">
                                                Case Study
                                            </a>
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                                Company
                                            </div>
                                            <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
                                                About Us
                                            </a>
                                            <a href="./pages/pricing.html" class="dropdown-item border-radius-md">
                                                Pricing
                                            </a>
                                            <a href="./pages/career.html" class="dropdown-item border-radius-md">
                                                Career
                                            </a>
                                            <a href="./pages/work-with-us.html" class="dropdown-item border-radius-md">
                                                Work with us
                                            </a>
                                            <a href="./pages/terms.html" class="dropdown-item border-radius-md">
                                                Terms & Conditions
                                            </a>
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                                Support
                                            </div>
                                            <a href="./pages/help-center.html" class="dropdown-item border-radius-md">
                                                Help Center
                                            </a>
                                            <a href="./pages/help-center-basic.html"
                                                class="dropdown-item border-radius-md">
                                                Help Center Basic
                                            </a>
                                            <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                                                Contact Us
                                            </a>
                                            <a href="./pages/contact-us-simple.html"
                                                class="dropdown-item border-radius-md">
                                                Contact Us Basic
                                            </a>
                                            <a href="./pages/faq.html" class="dropdown-item border-radius-md">
                                                FAQ
                                            </a>
                                            <a href="./pages/privacy.html" class="dropdown-item border-radius-md">
                                                Privacy
                                            </a>
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                Apps
                                            </div>
                                            <a href="./pages/mobile-app.html" class="dropdown-item border-radius-md">
                                                Mobile App
                                            </a>
                                            <a href="./pages/desktop-app.html" class="dropdown-item border-radius-md">
                                                Desktop App
                                            </a>
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                Blogs
                                            </div>
                                            <a href="./pages/blog/single-article.html"
                                                class="dropdown-item border-radius-md">
                                                Single Article
                                            </a>
                                            <a href="./pages/blog/blog-posts.html"
                                                class="dropdown-item border-radius-md">
                                                Blog Posts
                                            </a>
                                            <a href="./pages/blog/categories.html"
                                                class="dropdown-item border-radius-md">
                                                Categories
                                            </a>
                                            <a href="./pages/blog/author.html" class="dropdown-item border-radius-md">
                                                Author
                                            </a>
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                Extra
                                            </div>
                                            <a href="./pages/automotive.html" class="dropdown-item border-radius-md">
                                                Automotive
                                            </a>
                                            <a href="./pages/virtual-reality.html"
                                                class="dropdown-item border-radius-md">
                                                Virtual Reality
                                            </a>
                                            <a href="./pages/smart-home.html" class="dropdown-item border-radius-md">
                                                Smart Home
                                            </a>
                                            <a href="./pages/chat.html" class="dropdown-item border-radius-md">
                                                Chat
                                            </a>
                                            <a href="./pages/product-page.html" class="dropdown-item border-radius-md">
                                                Product Page
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">contacts</i>
                                        Account
                                        <img src=" ./assets/img/down-arrow-dark.svg  " alt="down-arrow"
                                            class="arrow ms-2 d-lg-block d-none">
                                        <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow"
                                            class="arrow ms-1 d-lg-none d-block ms-auto">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation dropdown-md border-radius-xl p-3 mt-0 mt-lg-3"
                                        aria-labelledby="dropdownMenuAccount">
                                        <div class="d-none d-lg-flex">
                                            <ul class="list-group w-100">
                                                <li
                                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1"
                                                        id="dropdownSignIn">
                                                        <span>Sign In</span>
                                                        <img src="./assets/img/down-arrow.svg" alt="down-arrow"
                                                            class="arrow ms-auto">
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2"
                                                        aria-labelledby="dropdownSignIn">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/sign-in/sign-in-cover.html">
                                                            <span>Cover</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/sign-in/sign-in-illustration.html">
                                                            <span>Illustration</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/sign-in/sign-in-basic.html">
                                                            <span>Basic</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md"
                                                            href="./pages/sign-in/sign-in-simple.html">
                                                            <span>Simple</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li
                                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1"
                                                        id="dropdownSignUp">
                                                        <span>Sign Up</span>
                                                        <img src="./assets/img/down-arrow.svg" alt="down-arrow"
                                                            class="arrow ms-auto">
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2"
                                                        aria-labelledby="dropdownSignUp">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/sign-up/sign-up-cover.html">
                                                            <span>Cover</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/sign-up/sign-up-illustration.html">
                                                            <span>Illustration</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/sign-up/sign-up-basic.html">
                                                            <span>Basic</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/sign-up/sign-up-simple.html">
                                                            <span>Simple</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li
                                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1"
                                                        id="dropdownPasswordReset">
                                                        <span>Password Reset</span>
                                                        <img src="./assets/img/down-arrow.svg" alt="down-arrow"
                                                            class="arrow ms-auto">
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2"
                                                        aria-labelledby="dropdownPasswordReset">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/reset/reset-cover.html">
                                                            <span>Cover</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/reset/reset-illustration.html">
                                                            <span>Illustration</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/reset/reset-basic.html">
                                                            <span>Basic</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li
                                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1"
                                                        id="dropdownError">
                                                        <span>Error Pages</span>
                                                        <img src="./assets/img/down-arrow.svg" alt="down-arrow"
                                                            class="arrow ms-auto">
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2"
                                                        aria-labelledby="dropdownError">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/error-404.html">
                                                            <span>404</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="./pages/error-500.html">
                                                            <span>500</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a href="./pages/coming-soon.html"
                                                        class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1">
                                                        <span>Coming Soon</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a href="./pages/2fa-security.html"
                                                        class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1">
                                                        <span>2FA Security</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="row d-lg-none">
                                            <div class="col-12 d-flex justify-content-center flex-column">
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center px-0">
                                                    Sign In
                                                </h6>
                                                <a href="./pages/sign-in/sign-in-cover.html"
                                                    class="dropdown-item border-radius-md">
                                                    Cover
                                                </a>
                                                <a href="./pages/sign-in/sign-in-illustration.html"
                                                    class="dropdown-item border-radius-md">
                                                    Illustration
                                                </a>
                                                <a href="./pages/sign-in/sign-in-basic.html"
                                                    class="dropdown-item border-radius-md">
                                                    Basic
                                                </a>
                                                <a href="./pages/sign-in/sign-in-simple.html"
                                                    class="dropdown-item border-radius-md">
                                                    Simple
                                                </a>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center mt-3 px-0">
                                                    Sign Up
                                                </h6>
                                                <a href="./pages/sign-up/sign-up-cover.html"
                                                    class="dropdown-item border-radius-md">
                                                    Cover
                                                </a>
                                                <a href="./pages/sign-up/sign-up-illustration.html"
                                                    class="dropdown-item border-radius-md">
                                                    Illustration
                                                </a>
                                                <a href="./pages/sign-up/sign-up-basic.html"
                                                    class="dropdown-item border-radius-md">
                                                    Basic
                                                </a>
                                                <a href="./pages/sign-up/sign-up-simple.html"
                                                    class="dropdown-item border-radius-md">
                                                    Simple
                                                </a>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center mt-3 px-0">
                                                    Password Reset
                                                </h6>
                                                <a href="./pages/reset/reset-cover.html"
                                                    class="dropdown-item border-radius-md">
                                                    Cover
                                                </a>
                                                <a href="./pages/reset/reset-illustration.html"
                                                    class="dropdown-item border-radius-md">
                                                    Illustration
                                                </a>
                                                <a href="./pages/reset/reset-basic.html"
                                                    class="dropdown-item border-radius-md">
                                                    Basic
                                                </a>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center mt-3 px-0">
                                                    Error Pages
                                                </h6>
                                                <a href="./pages/error-404.html" class="dropdown-item border-radius-md">
                                                    404
                                                </a>
                                                <a href="./pages/error-500.html" class="dropdown-item border-radius-md">
                                                    500
                                                </a>
                                                <hr class="horizontal dark">
                                                <a href="./pages/coming-soon.html"
                                                    class="dropdown-item border-radius-md">
                                                    Coming Soon
                                                </a>
                                                <a href="./pages/2fa-security.html"
                                                    class="dropdown-item border-radius-md">
                                                    2FA Security
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                                        Sections
                                        <img src=" ./assets/img/down-arrow-dark.svg  " alt="down-arrow"
                                            class="arrow ms-2 d-lg-block d-none">
                                        <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow"
                                            class="arrow ms-1 d-lg-none d-block ms-auto">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                                        aria-labelledby="dropdownMenuBlocks">
                                        <div class="d-none d-lg-block">
                                            <ul class="list-group">
                                                <li
                                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href="../index.html">
                                                        <div class="d-flex">
                                                            <div
                                                                class="w-100 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Page Sections</h6>
                                                                    <span class="text-sm">See all 109 sections</span>
                                                                </div>
                                                                <img src="./assets/img/down-arrow.svg" alt="down-arrow"
                                                                    class="arrow">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/hero-sections.html">
                                                            Page Headers
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/features.html">
                                                            Features
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/pricing.html">
                                                            Pricing
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/faq.html">
                                                            FAQ
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/blog-posts.html">
                                                            Blog Posts
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/testimonials.html">
                                                            Testimonials
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/teams.html">
                                                            Teams
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/stats.html">
                                                            Stats
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/call-to-actions.html">
                                                            Call to Actions
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/applications.html">
                                                            Applications
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/logo-areas.html">
                                                            Logo Areas
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/footers.html">
                                                            Footers
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/general-cards.html">
                                                            General Cards
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/page-sections/content-sections.html">
                                                            Content Sections
                                                        </a>
                                                    </div>
                                                </li>
                                                <li
                                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href="../index.html">
                                                        <div class="d-flex">
                                                            <div
                                                                class="w-100 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Navigation</h6>
                                                                    <span class="text-sm">See all 9 navigations</span>
                                                                </div>
                                                                <img src="./assets/img/down-arrow.svg" alt="down-arrow"
                                                                    class="arrow">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/navigation/navbars.html">
                                                            Navbars
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/navigation/nav-tabs.html">
                                                            Nav Tabs
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/navigation/pagination.html">
                                                            Pagination
                                                        </a>
                                                    </div>
                                                </li>
                                                <li
                                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href="../index.html">
                                                        <div class="d-flex">
                                                            <div
                                                                class="w-100 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Input Areas</h6>
                                                                    <span class="text-sm">See all 19 input areas</span>
                                                                </div>
                                                                <img src="./assets/img/down-arrow.svg" alt="down-arrow"
                                                                    class="arrow">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/input-areas/newsletters.html">
                                                            Newsletter
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/input-areas/contact-sections.html">
                                                            Contact Sections
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/input-areas/inputs.html">
                                                            Inputs
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/input-areas/forms.html">
                                                            Forms
                                                        </a>
                                                    </div>
                                                </li>
                                                <li
                                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href="../index.html">
                                                        <div class="d-flex">
                                                            <div
                                                                class="w-100 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Attention Catchers</h6>
                                                                    <span class="text-sm">See all 14 examples</span>
                                                                </div>
                                                                <img src="./assets/img/down-arrow.svg" alt="down-arrow"
                                                                    class="arrow">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/attention-catchers/alerts.html">
                                                            Alerts
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/attention-catchers/notifications.html">
                                                            Notifications
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/attention-catchers/modals.html">
                                                            Modals
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/attention-catchers/tooltips-popovers.html">
                                                            Tooltips & Popovers
                                                        </a>
                                                    </div>
                                                </li>
                                                <li
                                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href="../index.html">
                                                        <div class="d-flex">
                                                            <div
                                                                class="w-100 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Elements</h6>
                                                                    <span class="text-sm">See all 32 elements</span>
                                                                </div>
                                                                <img src="./assets/img/down-arrow.svg" alt="down-arrow"
                                                                    class="arrow">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/elements/avatars.html">
                                                            Avatars
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/elements/badges.html">
                                                            Badges
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/elements/breadcrumbs.html">
                                                            Breadcrumbs
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/elements/buttons.html">
                                                            Buttons
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/elements/button-groups.html">
                                                            Button Groups
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/elements/dropdowns.html">
                                                            Dropdowns
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/elements/progress-bars.html">
                                                            Progress Bars
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/elements/social-buttons.html">
                                                            Social Buttons
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/elements/tables.html">
                                                            Tables
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/elements/toggles.html">
                                                            Toggles
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                            href="../sections/elements/typography.html">
                                                            Typography
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="row d-lg-none">
                                            <div class="col-md-12">
                                                <div class="d-flex mb-2">
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Page Sections</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/hero-sections.html">
                                                    Page Headers
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/features.html">
                                                    Features
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/pricing.html">
                                                    Pricing
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/faq.html">
                                                    FAQ
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/blog-posts.html">
                                                    Blog Posts
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/testimonials.html">
                                                    Testimonials
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/teams.html">
                                                    Teams
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/stats.html">
                                                    Stats
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/call-to-actions.html">
                                                    Call to Actions
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/applications.html">
                                                    Applications
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/logo-areas.html">
                                                    Logo Areas
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/footers.html">
                                                    Footers
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/general-cards.html">
                                                    General Cards
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/page-sections/content-sections.html">
                                                    Content Sections
                                                </a>
                                                <div class="d-flex mb-2 mt-3">
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Navigation</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/navigation/navbars.html">
                                                    Navbars
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/navigation/nav-tabs.html">
                                                    Nav Tabs
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/navigation/pagination.html">
                                                    Pagination
                                                </a>
                                                <div class="d-flex mb-2 mt-3">
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Input Areas</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/input-areas/newsletters.html">
                                                    Newsletter
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/input-areas/contact-sections.html">
                                                    Contact Sections
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/input-areas/inputs.html">
                                                    Inputs
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/input-areas/forms.html">
                                                    Forms
                                                </a>
                                                <div class="d-flex mb-2 mt-3">
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Attention Catchers</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/attention-catchers/alerts.html">
                                                    Alerts
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/attention-catchers/notifications.html">
                                                    Notifications
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/attention-catchers/modals.html">
                                                    Modals
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/attention-catchers/tooltips-popovers.html">
                                                    Tooltips & Popovers
                                                </a>
                                                <div class="d-flex mb-2 mt-3">
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Elements</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/elements/avatars.html">
                                                    Avatars
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/elements/badges.html">
                                                    Badges
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/elements/breadcrumbs.html">
                                                    Breadcrumbs
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/elements/buttons.html">
                                                    Buttons
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/elements/button-groups.html">
                                                    Button Groups
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/elements/dropdowns.html">
                                                    Dropdowns
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/elements/progress-bars.html">
                                                    Progress Bars
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/elements/social-buttons.html">
                                                    Social Buttons
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/elements/tables.html">
                                                    Tables
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/elements/toggles.html">
                                                    Toggles
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="../sections/elements/typography.html">
                                                    Typography
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons opacity-6 me-2 text-md">article</i>
                                        Docs
                                        <img src=" ./assets/img/down-arrow-dark.svg  " alt="down-arrow"
                                            class="arrow ms-2 d-lg-block d-none">
                                        <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow"
                                            class="arrow ms-1 d-lg-none d-block ms-auto">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md mt-0 mt-lg-3 p-3 border-radius-lg"
                                        aria-labelledby="dropdownMenuDocs">
                                        <div class="d-none d-lg-block">
                                            <ul class="list-group">
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href=" https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit ">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Getting Started</h6>
                                                        <span class="text-sm">All about overview, quick start, license
                                                            and contents</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href=" https://www.creative-tim.com/learning-lab/bootstrap/colors/material-kit ">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Foundation</h6>
                                                        <span class="text-sm">See our colors, icons and
                                                            typography</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href=" https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-kit ">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Components</h6>
                                                        <span class="text-sm">Explore our collection of fully designed
                                                            components</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href=" https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit ">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Plugins</h6>
                                                        <span class="text-sm">Check how you can integrate our
                                                            plugins</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href=" https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit ">
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Utility Classes</h6>
                                                        <span class="text-sm">For those who want flexibility, use our
                                                            utility classes</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="row d-lg-none">
                                            <div class="col-md-12 g-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Getting Started</h6>
                                                    <span class="text-sm">All about overview, quick start, license and
                                                        contents</span>
                                                </a>
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Foundation</h6>
                                                    <span class="text-sm">See our colors, icons and typography</span>
                                                </a>
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Components</h6>
                                                    <span class="text-sm">Explore our collection of fully designed
                                                        components</span>
                                                </a>
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Plugins</h6>
                                                    <span class="text-sm">Check how you can integrate our plugins</span>
                                                </a>
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="./pages/about-us.html">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Utility Classes</h6>
                                                    <span class="text-sm">For those who want flexibility, use our
                                                        utility classes</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="#pricing-material-kit" class="btn btn-sm  bg-gradient-primary  mb-0"
                                        onclick="smoothToPricing('pricing-soft-ui')">Log in</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <header>
        <div class="page-header min-vh-85">
            <div>
                <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0"
                    src="<?= $img_hero_05 ?>" alt="image" loading="lazy">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 d-flex">
                        <div class="card card-body blur text-md-start text-center px-sm-5 shadow-lg mt-sm-5 py-sm-5">
                            <h1 class="text-secondary mb-0 hero-title">ESCE</h1>
                            <h2 class="text-dark mb-4">Escuela de Ciencias Empresariales y Gestión Pública</h2>
                            <!--<p class="lead text-dark pe-md-5 me-md-5">
                                Find the story of Creative Tim&#39;s most complex design system and
                                all the work that make this design available.
                            </p>-->
                            <div class="buttons">
                                <button type="button"
                                    class="btn btn-rounded bg-gradient-primary mt-4">Contáctanos</button>
                                <button type="button" class="btn btn-rounded btn-outline-secondary mt-4 ms-2">Leer
                                    Mas</button>
                            </div>
                            <!--<div class="row mt-2">
                                <div class="col-md-3 col-6 p-0">
                                    <img class="w-100" src="./assets/img/logos/gray-logos/logo-pinterest.svg"
                                        alt="logo">
                                </div>
                                <div class="col-md-3 col-6 p-0">
                                    <img class="w-100" src="./assets/img/logos/gray-logos/logo-netflix.svg" alt="logo">
                                </div>
                                <div class="col-md-3 col-6 p-0">
                                    <img class="w-100" src="./assets/img/logos/gray-logos/logo-coinbase.svg" alt="logo">
                                </div>
                                <div class="col-md-3 col-6 p-0">
                                    <img class="w-100" src="./assets/img/logos/gray-logos/logo-nasa.svg" alt="logo">
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!--<section class="py-md-7 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="info">
                        <div
                            class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                            <i class="material-icons opacity-10">grid_view</i>
                        </div>
                        <h5 class="mt-3">Components</h5>
                        <p>Choose the best design system for your next product.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info">
                        <div
                            class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                            <i class="material-icons opacity-10">brush</i>
                        </div>
                        <h5 class="mt-3">Design</h5>
                        <p>Get the latest design ideas and turn it into reality.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info">
                        <div
                            class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                            <i class="material-icons opacity-10">code</i>
                        </div>
                        <h5 class="mt-3">Less Code</h5>
                        <p>Make your code easier to maintain using variables.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info">
                        <div
                            class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                            <i class="material-icons opacity-10">devices</i>
                        </div>
                        <h5 class="mt-3">Fully Responsive</h5>
                        <p>This design system is fully supported on any device.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <section class="py-md-7 pb-5">
        <div class="container">
            <div class="row mt-5">
                <!--<div class="col-md-6 position-relative">
                    <div class="position-relative ms-md-5 me-md-n5">
                        <div class="blur-shadow-image">
                            <img class="image-left border-radius-lg img-fluid position-relative top-0 end-0 bg-cover"
                                src="https://images.unsplash.com/photo-1576425955345-f48eae74fc44?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2378&q=80"
                                alt="image" loading="lazy">
                        </div>
                    </div>
                    <p
                        class="blockquote border border-primary rounded w-50 p-3 text-sm text-primary float-md-end mt-4 me-md-n2 mx-auto">
                        "Over the span of the satellite record, Arctic sea ice has been declining significantly, while
                        sea ice in
                        the Antarctichas increased very slightly"
                        <br>
                        <br>
                        <small>-NOAA</small>
                    </p>

                    <div class="position-absolute bottom-0 mb-5 ms-n2 me-3 start-0 end-2 d-md-block d-none">
                        <div class="blur-shadow-image">
                            <img class="image-container border-radius-lg img-fluid position-relative bg-cover"
                                src="https://images.unsplash.com/photo-1474039369477-5e74ff1f0e57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80"
                                alt="image" loading="lazy">
                        </div>
                    </div>
                </div>-->
                <div class="col-md-12">

                    <!--<div class="position-relative ms-n4 mb-5 mt-8 d-md-block d-none">
                        <div class="blur-shadow-image">
                            <img class="image-right border-radius-lg img-fluid position-relative bg-cover"
                                src="https://images.unsplash.com/photo-1474039208682-b72b9e7bbe6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80"
                                alt="image" loading="lazy">
                        </div>
                    </div>-->
                    <h2 class="mb-4">NUESTRO PROPÓSITO, MISIÓN y VALORES</h2>
                    <p class="text-dark">
                        Somos una organización enfocada en la educación superior centrada en valores que reflejan
                        nuestra aspiración de formar, no sólo egresados de éxito, sino además personas que sean
                        valiosas, efectivas y éticas para sus comunidades. Estos valores guían nuestras aspiraciones de
                        desarrollo institucional de largo plazo, y son la base que orienta nuestra actividad para servir
                        a la sociedad y a nuestros alumnos.
                        Diseñamos experiencias formativas para personas que necesitan trabajar para financiar sus
                        estudios en administración o gestión pública. Además, fomentamos el crecimiento empresarial a
                        través de dinámicas de innovación, de investigación y de cambio tecnológico, que permitan a las
                        empresas crecer, explorar nuevos mercados o fortalecer los ya existentes.
                    </p>
                    <p class="mb-4 text-dark">
                        Particularmente nos interesa apoyar a las micro y pequeñas empresas que tanto necesitan soportes
                        de conocimiento para seguir progresando. Dotar de herramientas para mejorar la productividad y
                        la eficiencia de quienes trabajan en el sector público, a cualquier nivel, en nuestro país.
                    </p>

                    <h2 class="mb-4">Nuestro Propósito</h2>
                    <p class="mb-4 text-dark">
                        Ser una institución que promueve el desarrollo económico y social descentralizado a través de la
                        formación de profesionales y la re-capacitación de personas que ya trabajan en todo el país.
                    </p>

                    <h2 class="mb-4">Nuestra Misión</h2>
                    <p class="mb-4 text-dark">
                        Formar alumnos con creatividad, pensamiento crítico, comunicación efectiva y conciencia ética,
                        que les permita mejorar sus oportunidades de empleo en la empresa privada, construir la empresa
                        que siempre aspiraron tener, o contribuir en la administración pública con un servicio honesto y
                        de impacto positivo, tanto a nivel, local, regional como nacional.
                    </p>

                    <div class="row">
                        <h2 class="mb-5">Nuestros Valores</h2>
                        <!--<div class="p-3 info-horizontal d-flex d-none">
                            <div>
                                <h5>1. Listen to Social Conversations</h5>
                                <p>
                                    Gain access to the demographics, psychographics, and location of unique people who are
                                    interested and
                                    talk about your brand.
                                </p>
                            </div>
                        </div>-->
                        <!--<div class="col-lg-3">
                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                            loading="lazy">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="font-weight-normal">Integridad</h5>
                                    <p>Actuar con honestidad, coherencia y responsabilidad es esencial para construir
                                        confianza y credibilidad en todas nuestras relaciones.
                                    </p>
                                    <button class="btn btn-outline-dark btn-sm mb-0" type="button" name="button">Find
                                        more</button>
                                </div>
                            </div>
                        </div>-->

                        <div class="col-lg-3 mb-5">
                            <div class="card-container">
                                <div class="card-flip">
                                    <div class="card-front" style="background-image: url('https://img.freepik.com/foto-gratis/colegas-tiro-medio-trabajando-equipo_23-2149622864.jpg') !important;">
                                        <h3 class="p-3 main-bg-color-secondary rounded rounded-15 text-color-white">Integridad</h3>
                                    </div>
                                    <div class="card-back">
                                        <p class="text-white opacity-8">
                                            <strong class="h3 text-white">Integridad</strong><br>
                                            Actuar con honestidad, coherencia y responsabilidad es esencial para
                                            construir
                                            confianza y credibilidad en todas nuestras relaciones.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <div class="card-container">
                                <div class="card-flip">
                                    <div class="card-front">
                                        <h3 class="text-white">Solidaridad</h3>
                                    </div>
                                    <div class="card-back">
                                        <p class="text-white opacity-8">
                                            <strong class="h3 text-white">Solidaridad</strong><br>
                                            Más allá de la empatía, buscamos apoyar a quienes lo necesitan con un deseo
                                            genuino de impactar positivamente la vida de los demás.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <div class="card-container">
                                <div class="card-flip">
                                    <div class="card-front">
                                        <h3 class="text-white">Resiliencia</h3>
                                    </div>
                                    <div class="card-back">
                                        <p class="text-white opacity-8">
                                            <strong class="h3 text-white">Resiliencia</strong><br>
                                            Mantenemos el esfuerzo y la determinación frente a los desafíos, trabajando
                                            con constancia hacia nuestros objetivos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <div class="card-container">
                                <div class="card-flip">
                                    <div class="card-front text-center">
                                        <h3 class="text-white text-center">Respeto por la Naturaleza</h3>
                                    </div>
                                    <div class="card-back">
                                        <p class="text-white opacity-8">
                                            <strong class="h3 text-white">Respeto por la Naturaleza</strong><br>
                                            Valoramos y protegemos el medio ambiente, promoviendo una conducta
                                            sostenible y un compromiso con la conservación.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <div class="card-container shadow-lg">
                                <div class="card-flip">
                                    <div class="card-front text-center">
                                        <h3 class="text-white">Sentido de pertenencia por el país</h3>
                                    </div>
                                    <div class="card-back">
                                        <p class="text-white opacity-8">
                                            <strong class="h3 text-white">Sentido de pertenencia por el
                                                país</strong><br>
                                            Nos sentimos orgullosos de nuestra nación, contribuyendo a su desarrollo y
                                            bienestar con compromiso y patriotismo
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 card-container">
                            <div class="card bg-gradient-dark card-flip">
                                <div class="card-front card-header bg-transparent mx-4 p-3 text-center">
                                    <div
                                        class="icon icon-shape icon-lg bg-gradient-primary text-center border-radius-lg mx-auto">
                                        <i class="material-icons opacity-10">
                                            integration_instructions
                                        </i>
                                    </div>
                                </div>
                                <div class="card-back card-body pt-0 p-3 text-center">
                                    <h5 class="mb-2 text-white">Developer First</h5>
                                    <p class="mb-0 text-white">
                                        Material Dashboard is a "Developer First" product, with a lot of variables for
                                        colors, fonts, sizes and other elements.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner mb-4">
                                    <div class="carousel-item">
                                        <div class="page-header min-vh-75 m-3 border-radius-xl"
                                            style="background-image: url('https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-3-min.jpg');">
                                            <span class="mask bg-gradient-dark"></span>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 my-auto">
                                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Pricing Plans
                                                        </h4>
                                                        <h1 class="text-white fadeIn2 fadeInBottom">Work with the
                                                            rockets</h1>
                                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth
                                                            creation is an evolutionarily recent positive-sum game.
                                                            Status is an old zero-sum game. Those attacking wealth
                                                            creation are often just seeking status.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="page-header min-vh-75 m-3 border-radius-xl"
                                            style="background-image: url('https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg');">
                                            <span class="mask bg-gradient-dark"></span>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 my-auto">
                                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Our Team</h4>
                                                        <h1 class="text-white fadeIn2 fadeInBottom">Work with the best
                                                        </h1>
                                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Free
                                                            people make free choices. Free choices mean you get unequal
                                                            outcomes. You can have freedom, or you can have equal
                                                            outcomes. You can’t have both.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item active">
                                        <div class="page-header min-vh-75 m-3 border-radius-xl"
                                            style="background-image: url('https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-2-min.jpg');">
                                            <span class="mask bg-gradient-dark"></span>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 my-auto">
                                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Office Places
                                                        </h4>
                                                        <h1 class="text-white fadeIn2 fadeInBottom">Work from home</h1>
                                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">You’re
                                                            spending time to save money when you should be spending
                                                            money to save time.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-vh-75 position-absolute w-100 top-0">
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon position-absolute bottom-50"
                                            aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon position-absolute bottom-50"
                                            aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--<section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ms-auto me-auto text-center">
                    <h2>From nothing to something</h2>
                    <p>
                        The highest status people in human history are those that asked for nothing and gave everything
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 position-relative">
                    <div class="position-relative ms-md-5 me-md-n5">
                        <div class="blur-shadow-image">
                            <img class="image-left border-radius-lg img-fluid position-relative top-0 end-0 bg-cover"
                                src="https://images.unsplash.com/photo-1576425955345-f48eae74fc44?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2378&q=80"
                                alt="image" loading="lazy">
                        </div>
                    </div>
                    <p
                        class="blockquote border border-primary rounded w-50 p-3 text-sm text-primary float-md-end mt-4 me-md-n2 mx-auto">
                        "Over the span of the satellite record, Arctic sea ice has been declining significantly, while
                        sea ice in
                        the Antarctichas increased very slightly"
                        <br>
                        <br>
                        <small>-NOAA</small>
                    </p>

                    <div class="position-absolute bottom-0 mb-5 ms-n2 me-3 start-0 end-2 d-md-block d-none">
                        <div class="blur-shadow-image">
                            <img class="image-container border-radius-lg img-fluid position-relative bg-cover"
                                src="https://images.unsplash.com/photo-1474039369477-5e74ff1f0e57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80"
                                alt="image" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">

                    <div class="position-relative ms-n4 mb-5 mt-8 d-md-block d-none">
                        <div class="blur-shadow-image">
                            <img class="image-right border-radius-lg img-fluid position-relative bg-cover"
                                src="https://images.unsplash.com/photo-1474039208682-b72b9e7bbe6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80"
                                alt="image" loading="lazy">
                        </div>
                    </div>
                    <h3 class="mb-4">So what does the new record for the lowest level of winter ice actually mean</h3>
                    <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that
                        process
                        will continue whatever happens with climate change. Even if the Arctic continues to be one of
                        the
                        fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark
                        every winter.
                        And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the
                        ice.
                    </p>
                    <p>
                        For a start, it does not automatically follow that a record amount of ice will melt this summer.
                        More
                        important for determining the size of the annual thaw is the state of the weather as the
                        midnight sun
                        approaches and temperatures rise. But over the more than 30 years of satellite records,
                        scientists have
                        observed a clear pattern of decline, decade-by-decade.
                    </p>
                    <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that
                        process
                        will continue whatever happens with climate change. Even if the Arctic continues to be one of
                        the
                        fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark
                        every winter.
                        And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the
                        ice.
                    </p>
                </div>
            </div>
        </div>
    </section>-->

    <!--<section class="bg-gradient-dark position-relative overflow-hidden mt-5">
        <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute opacity-1 w-100">
        <div class="container py-lg-4 py-2">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center flex-column">
                    <div id="carouselExampleIndicator" class="carousel slide py-7" data-bs-ride="carousel">
                        <div class="carousel-indicators justify-content-start ms-0">
                            <a href="javascript:;">
                                <img src="./assets/img/team-4.jpg" alt="..."
                                    class="avatar avatar-sm avatar-scale-up border-radius-lg shadow border-0 active"
                                    data-bs-target="#carouselExampleIndicator" data-bs-slide-to="0">
                                <span class="text-white mx-2">&#124;</span>
                            </a>
                            <a href="javascript:;">
                                <img src="./assets/img/team-3.jpg" alt="..."
                                    class="avatar avatar-sm avatar-scale-up border-radius-lg shadow border-0"
                                    data-bs-target="#carouselExampleIndicator" data-bs-slide-to="1">
                                <span class="text-white mx-2">&#124;</span>
                            </a>
                            <a href="javascript:;">
                                <img src="./assets/img/team-2.jpg" alt="..."
                                    class="avatar avatar-sm avatar-scale-up border-radius-lg shadow border-0"
                                    data-bs-target="#carouselExampleIndicator" data-bs-slide-to="2">
                            </a>
                        </div>
                        <div class="carousel-inner">
                            <h2 class="text-white mb-0">Work with us</h2>
                            <p class="text-white opacity-8 mb-1">Whatever your qualification is - we got you!</p>
                            <hr class="text-white horizontal opacity-6 mb-4 mt-2 w-25 text-start">
                            <div class="carousel-item active">
                                <h6 class="text-white opacity-8 pe-5">"Take up one idea. Make that one idea your life -
                                    think of it,
                                    dream of it, live on that idea.
                                    Let the brain, muscles, nerves, every part of your body, be full of that idea, and
                                    just leave every
                                    other idea alone.
                                    This is the way to success. A single rose can be my garden... a single friend, my
                                    world."</h6>
                                <div class="author mt-4">
                                    <div class="name">
                                        <span class="text-white">Ludwig Siato</span>
                                        <div class="stats">
                                            <small class="text-white opacity-6">Project manager, Apple</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <h6 class="text-white opacity-8 pe-5">"Take up one idea. Make that one idea your life -
                                    think of it,
                                    dream of it, live on that idea.
                                    Let the brain, muscles, nerves, every part of your body, be full of that idea, and
                                    just leave every
                                    other idea alone.
                                    This is the way to success. A single rose can be my garden... a single friend, my
                                    world."</h6>
                                <div class="author mt-4">
                                    <div class="name">
                                        <span class="text-white">John Down</span>
                                        <div class="stats">
                                            <small class="text-white opacity-6">CFO, Google</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <h6 class="text-white opacity-8 pe-5">"Take up one idea. Make that one idea your life -
                                    think of it,
                                    dream of it, live on that idea.
                                    Let the brain, muscles, nerves, every part of your body, be full of that idea, and
                                    just leave every
                                    other idea alone.
                                    This is the way to success. A single rose can be my garden... a single friend, my
                                    world."</h6>
                                <div class="author mt-4">
                                    <div class="name">
                                        <span class="text-white">Mark Jojansen</span>
                                        <div class="stats">
                                            <small class="text-white opacity-6">Fullstack Developer, Atlassian</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 justify-content-center flex-column d-sm-none d-md-none d-lg-flex d-xl-flex">
                    <div class="row justify-content-center d-none d-md-flex">
                        <div class="col-3 mb-4">
                            <div
                                class="d-block bg-white avatar avatar-lg border-radius-lg p-3 mt-n4 ms-8 fadeIn2 fadeInBottom">
                                <img src="./assets/img/logos/small-logos/logo-zoom.svg" alt="Logo Image">
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div
                                class="d-block bg-white avatar avatar-lg border-radius-lg p-3 ms-8 mt-n6 fadeIn1 fadeInBottom">
                                <img src="./assets/img/logos/small-logos/logo-google-cloud.svg" alt="Logo Image">
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div
                                class="d-block bg-white avatar avatar-lg border-radius-lg p-3 ms-6 mt-2 fadeIn3 fadeInBottom">
                                <img src="./assets/img/logos/small-logos/logo-github.svg" alt="Logo Image">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end d-none d-md-flex">
                        <div class="col-4 my-4">
                            <div
                                class="d-block bg-white avatar avatar-lg border-radius-lg p-3 ms-4 fadeIn1 fadeInBottom">
                                <img class="avatar-img" src="./assets/img/logos/small-logos/logo-amazon.svg"
                                    alt="Logo Image">
                            </div>
                        </div>
                        <div class="col-3 my-4">
                            <div
                                class="d-block bg-white avatar avatar-lg border-radius-lg p-3 me-auto fadeIn1 fadeInBottom">
                                <img class="avatar-img" src="./assets/img/logos/small-logos/logo-apple.svg"
                                    alt="Logo Image">
                            </div>
                        </div>
                        <div class="col-3 my-4">
                            <div
                                class="d-block bg-white avatar avatar-lg border-radius-lg p-3 fadeIn3 fadeInBottom ms-3 mt-3">
                                <img class="avatar-img" src="./assets/img/logos/small-logos/logo-twitter.svg"
                                    alt="Logo Image">
                            </div>
                        </div>
                    </div>
                    <div class="row d-none d-md-flex">
                        <div class="col-6">

                            <div
                                class="d-block bg-white avatar avatar-lg border-radius-lg p-3 ms-auto mt-5 fadeIn2 fadeInBottom">
                                <img class="avatar-img" src="./assets/img/logos/small-logos/logo-youtube.svg"
                                    alt="Logo Image">
                            </div>

                        </div>
                        <div class="col-6 mt-6">

                            <div
                                class="d-block bg-white avatar avatar-lg border-radius-lg p-3 mx-auto mt-n3 fadeIn3 fadeInBottom">
                                <img class="avatar-img" src="./assets/img/logos/small-logos/logo-dribbble.svg"
                                    alt="Logo Image">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!--<section class="py-7">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ms-auto me-auto text-center">
                    <div
                        class="icon icon-md icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4">
                        <i class="material-icons opacity-10">engineering</i>
                    </div>
                    <h3 class="text-dark mb-0 mt-3">How To Handle The Components</h3>
                    <p>We’re constantly trying to express ourselves and actualize our dreams. Don't stop.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 ms-auto my-auto">
                    <div class="cursor-pointer">
                        <div class="card card-background">
                            <div class="full-background"
                                style="background-image: url('https://images.unsplash.com/photo-1507207611509-ec012433ff52?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80')">
                            </div>
                            <div class="card-body pt-7 text-center">
                                <p class="text-white text-uppercase">Search and Discover!</p>
                                <h3 class="text-white up mb-0">The Most Important New Technology</h3>
                                <p class="text-white opacity-8">We’re constantly trying to express ourselves and
                                    actualize our dreams.
                                    If you have the opportunity to play this game of life you need to appreciate every
                                    moment.</p>
                                <button type="button" class="btn btn-white btn-sm mt-3">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 me-auto my-auto ms-md-5">
                    <div class="p-3 info-horizontal d-flex">
                        <div>
                            <h5>1. Listen to Social Conversations</h5>
                            <p>
                                Gain access to the demographics, psychographics, and location of unique people who are
                                interested and
                                talk about your brand.
                            </p>
                        </div>
                    </div>
                    <div class="p-3 info-horizontal d-flex">
                        <div>
                            <h5>2. Performance Analyze</h5>
                            <p>
                                Unify data from Facebook, Instagram, Twitter, LinkedIn, and Youtube to gain rich
                                insights from
                                easy-to-use reports.
                            </p>
                        </div>
                    </div>
                    <div class="p-3 info-horizontal d-flex">
                        <div>
                            <h5>3. Social Conversions</h5>
                            <p>
                                Track actions taken on your website that originated from social, and understand the
                                impact on your
                                bottom line.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="dark my-md-6 mt-2 mx-7">
            <div class="row">
                <div class="col-md-5 ms-auto my-auto">
                    <div class="p-3 info-horizontal d-flex">
                        <div>
                            <h5>1. Always In Sync</h5>
                            <p>
                                No matter where you are, Trello stays in sync across all of your devices.
                            </p>
                        </div>
                    </div>
                    <div class="p-3 info-horizontal d-flex">
                        <div>
                            <h5>2. Work With Any Team</h5>
                            <p>
                                Whether it’s for work or even the next family vacation, Trello helps your team.
                            </p>
                        </div>
                    </div>
                    <div class="p-3 info-horizontal d-flex">
                        <div>
                            <h5>3. A Productivity Platform</h5>
                            <p>
                                Integrate the apps your team already uses directly into your workflow.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 me-auto my-auto ms-md-5">
                    <div class="cursor-pointer">
                        <div class="card card-background">
                            <div class="full-background"
                                style="background-image: url('https://images.unsplash.com/photo-1587614203976-365c74645e83?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=934&q=80')">
                            </div>
                            <div class="card-body pt-7 text-center">
                                <p class="text-white text-uppercase">Meet and Chat!</p>
                                <h3 class="text-white mb-0">How do Social Media Make the World Bigger</h3>
                                <p class="text-white opacity-8">That’s what I do. That’s what I’m here for. Don’t be
                                    afraid to be wrong
                                    because you can’t learn anything from a compliment.</p>
                                <button type="button" class="btn btn-white btn-sm mt-3">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <footer class="footer py-5 bg-gradient-dark position-relative overflow-hidden">
        <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines"
            class="position-absolute start-0 top-0 w-100 opacity-1" loading="lazy">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-4 me-auto my-auto text-lg-start text-center">
                    <h6 class="text-white font-weight-bold text-uppercase mb-2">Material Design</h6>
                    <p class="text-white">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Material Design by Creative Tim.
                    </p>
                </div>
                <div class="col-lg-2 col-sm-4 col-12 ms-md-auto text-lg-start text-center mb-sm-0 mb-4">
                    <div>
                        <h6 class="text-white text-sm mb-1">Company</h6>
                        <ul class="flex-column ms-lg-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-8 text-sm pb-0" href="javascript:;"
                                    target="_blank">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-8 text-sm pb-0" href="javascript:;"
                                    target="_blank">
                                    Careers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-8 text-sm pb-0" href="javascript:;"
                                    target="_blank">
                                    Press
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-12 text-lg-start text-center mb-sm-0 mb-4">
                    <div>
                        <h6 class="text-white text-sm mb-1">Pages</h6>
                        <ul class="flex-column ms-lg-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-8 text-sm pb-0" href="javascript:;"
                                    target="_blank">
                                    Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-8 text-sm pb-0" href="javascript:;"
                                    target="_blank">
                                    Register
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-8 text-sm pb-0" href="javascript:;"
                                    target="_blank">
                                    About
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-12 text-lg-start text-center mb-sm-0 mb-4">
                    <div>
                        <h6 class="text-white text-sm mb-1">Products</h6>
                        <ul class="flex-column ms-lg-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-8 text-sm pb-0" href="javascript:;"
                                    target="_blank">
                                    Free
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-8 text-sm pb-0" href="javascript:;"
                                    target="_blank">
                                    PRO
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-8 text-sm pb-0" href="javascript:;"
                                    target="_blank">
                                    Latest
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>

    <script src="./assets/js/plugins/typedjs.js"></script>

    <script src="./assets/js/plugins/parallax.min.js"></script>

    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

    <script src="./assets/js/plugins/anime.min.js" type="text/javascript"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="./assets/js/material-kit-pro.min.js?v=3.0.4" type="text/javascript"></script>
    <script>
    </script>
    <script src="./assets/js/plugins/tilt.min.js"></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8afab8831cbbc848","serverTiming":{"name":{"cfL4":true}},"version":"2024.7.0","token":"1b7cbb72744b40c580f8633c6b62637e"}'
        crossorigin="anonymous"></script>
</body>

</html>