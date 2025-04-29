<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed" data-theme-mode="light">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Chaakra Consulting IT</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/Tema/dist/assets/images/landing/chaakra-2.png') }}" type="image/x-icon">

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('/Tema/dist/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('/Tema/dist/assets/css/styles.css') }}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('/Tema/dist/assets/css/icons.css') }}" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="{{ asset('/Tema/dist/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet" >

    <!-- SwiperJS Css -->
    <link rel="stylesheet" href="{{ asset('/Tema/dist/assets/libs/swiper/swiper-bundle.min.css') }}">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('/Tema/dist/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/Tema/dist/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('/Tema/dist/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <script>
        if(localStorage.valexdarktheme){
            document.querySelector("html").setAttribute("data-theme-mode","dark")
        }
        if(localStorage.valexrtl){
            document.querySelector("html").setAttribute("dir","rtl")
            document.querySelector("#style")?.setAttribute("href", "../assets/libs/bootstrap/css/bootstrap.rtl.min.css");
        }
    </script>
    <style>
        .card.features.main-features {
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }
        .card.custom-card {
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }
        .frame img {
            border: 1.25px solid #ccc;
            border-radius: 10px;
            width: 60px;
            height: 60px;
            object-fit: cover;
        }

        .desc img {
            width: 490px;
            height: 435px;
            object-fit: cover;
        }
        .client-slider {
            width: 100%;
            height: 120px;
            overflow: hidden;
            position: relative;
            display: flex;
            justify-content: center;
            background-color: #fff;

            -webkit-mask-image: linear-gradient(to right, transparent 0%, black 20%, black 80%, transparent 100%);
            mask-image: linear-gradient(to right, transparent 0%, black 20%, black 80%, transparent 100%);
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat;
        }

        .client-slider-wrapper {
            display: flex;
            will-change: transform;
            transition: transform 1s ease-in-out;
        }

        .client-slider-slide {
            flex-shrink: 0;
            width: 200px; /* ukuran sesuai gambar */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .client-slider-slide img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .side-menu__item-2 {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            color: #000;
            text-decoration: none;
            position: relative;
            z-index: 1;
            pointer-events: auto;
        }

        .side-menu__item-2 .side-menu__label-2 {
            transition: color 0.2s, text-decoration 0.2s;
        }

        .side-menu__item-2:hover .side-menu__label-2 {
            color: #FF5538;
            text-decoration: underline;
        }

        .alert-wrapper {
            position: fixed;
            top: 100px;
            right: 20px;
            z-index: 1050; /* Biar di atas elemen lain */
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
            max-width: 250px;
        }
        
    </style>


</head>

<body class="landing-body">

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="">
                <p class="switcher-style-head">Theme Color Mode:</p>
                <div class="row switcher-style">
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-light-theme">
                                Light
                            </label>
                            <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                checked>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-dark-theme">
                                Dark
                            </label>
                            <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <p class="switcher-style-head">Directions:</p>
                <div class="row switcher-style">
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-ltr">
                                LTR
                            </label>
                            <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check switch-select">
                            <label class="form-check-label" for="switcher-rtl">
                                RTL
                            </label>
                            <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                        </div>
                    </div>
                </div>
            </div>
            <div class="theme-colors">
                <p class="switcher-style-head">Theme Primary:</p>
                <div class="d-flex align-items-center switcher-style">
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-1" type="radio"
                            name="theme-primary" id="switcher-primary">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-2" type="radio"
                            name="theme-primary" id="switcher-primary1">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                            id="switcher-primary2">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                            id="switcher-primary3">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                            id="switcher-primary4">
                    </div>
                    <div class="form-check switch-select me-3 ps-0 mt-1 color-primary-light">
                        <div class="theme-container-primary"></div>
                        <div class="pickr-container-primary"></div>
                    </div>
                </div>
            </div>
            <div>
                <p class="switcher-style-head">reset:</p>
                <div class="text-center">
                    <button id="reset-all" class="btn btn-danger mt-3">Reset</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <div class="landing-page-wrapper">

         <!-- app-header -->
        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                <img src="{{ asset('/Tema/dist/assets/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">
                                <img src="{{ asset('/Tema/dist/assets/images/brand-logos/toggle-white.png') }}" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
                            <span class="open-toggle">
                                <i class="ri-menu-3-line fs-20"></i>
                            </span>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element align-items-center">
                        <!-- Start::header-link|switcher-icon -->
                        <div class="btn-list d-lg-none d-block">
                            <a href="https://wa.me/6285745509992" class="btn btn-primary-light">
                                Free Konsultasi
                            </a>
                            <!-- <button class="btn btn-icon btn-primary" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                                <i class="fe fe-settings align-middle"></i>
                            </button> -->
                        </div>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->

        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <div class="container p-0">
                <!-- Start::main-sidebar -->
                <div class="main-sidebar">

                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills sub-open" style="height: 14vh;">
                        <div class="landing-logo-container">
                            <div class="horizontal-logo">
                                <a href="/" class="header-logo">
                                    <img src="{{ asset('/Tema/dist/assets/images/landing/chaakra.png') }}" alt="logo" class="desktop-logo">
                                    <img src="{{ asset('/Tema/dist/assets/images/landing/chaakra.png') }}" alt="logo" class="desktop-white">
                                </a>
                            </div>
                        </div>
                        <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg></div>
                        <ul class="main-menu">
                            <!-- Start::slide -->
                            <li class="slide">
                                <a class="side-menu__item-2" href="#home">
                                    <span class="side-menu__label-2">Home</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            
                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item-2">
                                    <span class="side-menu__label-2 me-2">Sistem</span>
                                    <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide">
                                        <a href="/sistem/odoo" class="side-menu__item-2">Odoo</a>
                                    </li>
                                    <li class="slide">
                                        <a href="/sistem/chaakra-custom" class="side-menu__item-2">Chaakra Consulting</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#layanan" class="side-menu__item-2">
                                    <span class="side-menu__label-2">Layanan</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#tentang-kami" class="side-menu__item-2">
                                    <span class="side-menu__label-2">Tentang Kami</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#testimoni" class="side-menu__item-2">
                                    <span class="side-menu__label-2">Testimoni</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#portfolio" class="side-menu__item-2">
                                    <span class="side-menu__label-2">Portfolio</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <span class="side-menu__label me-2">More</span>
                                    <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide">
                                        <a href="#statistics" class="side-menu__item">Statistics</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Level-2
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Level-2-1</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Level-2-2
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="javascript:void(0);" class="side-menu__item">Level-2-2-1</a>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Level-2-2-2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                        {{-- <div class="d-lg-flex d-none">
                            <div class="btn-list d-lg-flex d-none mt-lg-2 mt-xl-0 mt-0">
                                <a href="https://wa.me/6285745509992" class="btn btn-wave btn-primary btn-lg">
                                    Free Konsultasi
                                </a>
                                <!-- <button class="btn btn-wave btn-icon btn-light" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                                    <i class="fe fe-settings align-middle"></i>
                                </button> -->
                            </div>
                        </div> --}}
                        <div class="d-lg-flex d-none flex-column align-items-start">
                            <div class="btn-list d-lg-flex d-none flex-column mt-lg-2 mt-xl-0 mt-0">
                                <div class="text-black mb-1" style="font-weight: 500;">Ada pertanyaan?</div>
                                <a href="https://wa.me/6285745509992" class="btn btn-primary custom-button">
                                    <span class="custom-btn-icons"><i class="ri-whatsapp-line text-success"></i></span>
                                    Free Konsultasi
                                </a>
                            </div>
                        </div>    
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->
            </div>

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content landing-main">

            @yield('content')

            <!-- Start:: Section-4 -->
            <section class="section primary-gradient-top-center-bg" id="about">
                <div class="container text-center">
                    <div class="row justify-content-center align-items-center mx-0">
                        <div class="col-xxl-4 col-xl-5 col-lg-5 text-center text-lg-start">
                            <img src="{{ asset('/Tema/dist/assets/images/landing/icon1.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-xxl-8 col-xl-7 col-lg-7 pt-5 pb-0 px-lg-2 px-5 text-start">
                            {{-- <h4 class="text-black fw-medium mb-4 ms-4">
                                Segera hubungi tim kami untuk mendiskusikan kebutuhan IT untuk bisnis Anda. 
                                Kami akan menghubungi Anda segera.
                            </h4>
                            <div class="btn-list d-flex mt-lg-2 mt-xl-0 mt-0 ms-4">
                                <a href="https://wa.me/6285745509992" class="btn btn-wave btn-primary btn-lg">
                                    Free Konsultasi
                                </a>
                            </div> --}}
                            <div class="card-body">
                                <h3 class="text-center fw-bold">Kontak Kami</h3>
                                <div class="landing-title"></div>
                                <form class="row g-3 mt-0" method="POST" action="/kontak/store">
                                    @csrf
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" aria-label="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="No. Telepon" aria-label="No. Telepon">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="perusahaan" name="perusahaan" placeholder="Perusahaan" aria-label="Perusahaan">
                                    </div>
                                    <div class="col-md-6">
                                        <select id="perusahaan_jumlah" name="perusahaan_jumlah" class="form-select form-select-lg">
                                            <option selected>Kurang dari 10 Karyawan</option>
                                            <option>10-20 Karyawan</option>
                                            <option>21-100 Karyawan</option>
                                            <option>100+ Karyawan</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Subjek">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="pertanyaan" id="pertanyaan" placeholder="Pertanyaan Anda" class="form-control" rows="2"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!-- End:: Section-4 -->

            <!-- Start:: Section-10 -->
            <section class="section landing-footer text-fixed-black">
                <div class="container">
                    <div class="row d-flex align-items-start">
                        <!-- Kolom Tengah -->
                        <div class="col-xl-2 ms-auto me-auto">
                            <div class="px-4">
                                <h6 class="fw-semibold mb-3 text-fixed-black">Pages</h6>
                                <ul class="list-unstyled fw-normal landing-footer-list">
                                    <li><a href="#home" class="text-fixed-black op-8">Home</a></li>
                                    <li><a href="#layanan" class="text-fixed-black op-8">Layanan</a></li>
                                    <li><a href="#tentang-kami" class="text-fixed-black op-8">Tentang Kami</a></li>
                                    <li><a href="#testimoni" class="text-fixed-black op-8">Testimoni</a></li>
                                    <li><a href="#portfolio" class="text-fixed-black op-8">Portfolio</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Kolom Kiri -->
                        <div class="col-xl-4">
                            <div class="px-4">
                                <p class="fw-semibold mb-3">
                                    <a href="/" class="header-logo">
                                        <img src="{{ asset('/Tema/dist/assets/images/landing/chaakra.png') }}" alt="logo" class="desktop-logo w-50">
                                    </a>
                                </p>    
                                <p class="mb-3 op-8 fw-normal">
                                    Kami adalah tim profesional yang berdedikasi dalam menyediakan layanan pembuatan website 
                                    berkualitas tinggi untuk berbagai kebutuhan bisnis Anda. Dengan pengalaman bertahun-tahun 
                                    di industri ini, kami menawarkan solusi yang sesuai dengan kebutuhan Anda.                                
                                </p>
                            </div>
                        </div>
            
                        <!-- Kolom Kanan -->
                        <div class="col-xl-6 ms-auto">
                            <div class="px-4">
                                <div class="mb-3">
                                    <!-- <p class="mb-2 fw-semibold op-8">Terhubung dengan Kami</p> -->
                                    <h6 class="fw-semibold mb-3 text-fixed-black">Terhubung dengan Kami</h6>
                                    <div class="btn-list mb-3">
                                        <a href="https://wa.me/6285745509992" target="_blank" class="btn btn-primary btn-icon btn-whatsapp btn-wave"><i class="ri-whatsapp-line"></i></a>                                       
                                        <a href="https://www.facebook.com/chaakraconsulting/" target="_blank" class="btn btn-primary btn-icon btn-facebook btn-wave"><i class="ri-facebook-line fw-semibold"></i></a> 
                                        <a href="https://www.instagram.com/chaakra.consulting/" target="_blank" class="btn btn-primary btn-icon btn-google btn-wave"><i class="ri-instagram-line"></i></a>                                       
                                        <a href="https://www.linkedin.com/company/chaakra-consulting/" target="_blank" class="btn btn-primary btn-icon btn-facebook btn-wave"><i class="ri-linkedin-line fw-semibold"></i></a>
                                        <a href="mailto:adm@chaakraconsulting.com" target="_blank" class="btn btn-primary btn-icon btn-github btn-wave"><i class="ri-mail-line fw-semibold"></i></a>   
                                    </div>
                                </div>
                                <h6 class="fw-semibold text-fixed-black">Alamat</h6>
                                <ul class="list-unstyled fw-normal landing-footer-list">
                                    <li><a href="https://www.google.com/maps/place/Chaakra+Consulting/@-7.318613,112.717493,15z/data=!4m16!1m9!3m8!1s0x2dd7fd98babb7faf:0xa976e0d16f0799b3!2sChaakra+Consulting!8m2!3d-7.3186129!4d112.7174925!9m1!1b1!16s%2Fg%2F11krsy39b6!3m5!1s0x2dd7fd98babb7faf:0xa976e0d16f0799b3!8m2!3d-7.3186129!4d112.7174925!16s%2Fg%2F11krsy39b6?hl=en&entry=ttu&g_ep=EgoyMDI1MDQyMC4wIKXMDSoASAFQAw%3D%3D" class="text-fixed-black op-8"><i class="ri-home-4-line me-1 align-middle"></i>Jl. Karah Agung No.01 PIK A, Jambangan, Kec. Jambangan, Surabaya, Jawa Timur 60232</a></li>
                                    <!-- <li><a href="#" class="text-fixed-black op-8"><i class="ri-mail-line me-1 align-middle"></i> info@fmail.com</a></li>
                                    <li><a href="#" class="text-fixed-black op-8"><i class="ri-phone-line me-1 align-middle"></i> +(555)-1920 1831</a></li> -->
                                    <div style="max-width: 100%; width: 460px;">
                                        <iframe 
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3137666160596!2d112.71491757318596!3d-7.318607571961925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd98babb7faf%3A0xa976e0d16f0799b3!2sChaakra%20Consulting!5e0!3m2!1sen!2sid!4v1745228804777!5m2!1sen!2sid" 
                                            width="100%" 
                                            height="150" 
                                            style="border:0; border-radius: 7px;" 
                                            allowfullscreen="" 
                                            loading="lazy" 
                                            referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </div>                                    
                                </ul>
                            </div>
                        </div>                         
                    </div>
                </div>
            </section>            
            <!-- End:: Section-10 -->

            <div class="text-center landing-footer py-3">
                <span class="text-dark fs-15"> Copyright © <span id="year"></span> <a
                    href="https://chaakra-consulting.com" class="text-primary fw-semibold"><u>Chaakra Consulting</u></a>.
                </a> All rights reserved by IT Chaakra
                </span>
            </div>

        </div>
        <!-- End::app-content -->

    </div>
    <div class="alert-wrapper">
        @if (session('success'))
            <div class="alert alert-solid-success d-flex align-items-center mb-2" role="alert">
                <svg class="flex-shrink-0 me-2 svg-white" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
            </div>
        @endif
    
        @if (session('error'))
            <div class="alert alert-solid-danger d-flex align-items-center mb-2" role="alert">
                <svg class="flex-shrink-0 me-2 svg-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z"/><rect height="6" width="2" x="11" y="7"/><rect height="2" width="2" x="11" y="15"/></g></g></g></svg>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
            </div>
        @endif
    </div>    

    <a href="https://wa.me/6285745509992" class="btn btn-success sticky-button" id="whatsapp-button">
        <i class="ri-whatsapp-line"
           data-bs-toggle="popover" 
           data-bs-placement="left" 
           data-bs-content="Mau Order? Chat Sekarang">
        </i>
    </a>    
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButtons = document.querySelectorAll('[data-bs-toggle="collapse"]');
    
            toggleButtons.forEach((toggleBtn) => {
                const targetSelector = toggleBtn.getAttribute("data-bs-target");
                const collapseEl = document.querySelector(targetSelector);
    
                if (!collapseEl) return;
    
                const collapseOpen = toggleBtn.querySelector(".collapse-open");
                const collapseClose = toggleBtn.querySelector(".collapse-close");
    
                const updateToggleText = () => {
                    const isExpanded = toggleBtn.getAttribute("aria-expanded") === "true";
                    collapseOpen.style.display = isExpanded ? "none" : "inline";
                    collapseClose.style.display = isExpanded ? "inline" : "none";
                };
    
                // Inisialisasi tampilan saat load
                updateToggleText();
    
                // Event listener
                collapseEl.addEventListener("shown.bs.collapse", updateToggleText);
                collapseEl.addEventListener("hidden.bs.collapse", updateToggleText);
            });
        });
    </script>    
    
    <!-- Popper JS -->
    <script src="{{ asset('/Tema/dist/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('/Tema/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('/Tema/dist/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- Choices JS -->
    <script src="{{ asset('/Tema/dist/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Swiper JS -->
    <script src="{{ asset('/Tema/dist/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Defaultmenu JS -->
    <script src="{{ asset('/Tema/dist/assets/js/defaultmenu.min.js') }}"></script>

    <!-- Internal Landing JS -->
    <script src="{{ asset('/Tema/dist/assets/js/landing.js') }}"></script>

    <!-- Node Waves JS-->
    <script src="{{ asset('/Tema/dist/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Sticky JS -->
    <script src="{{ asset('/Tema/dist/assets/js/sticky.js') }}"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        setTimeout(function() {
            let alert = document.querySelector('.alert');
            if (alert){
                alert.remove();
            }
        }, 4000);

        document.addEventListener('DOMContentLoaded', function() {
            var popoverTarget = document.querySelector('#whatsapp-button i');
            var popover = new bootstrap.Popover(popoverTarget, {
                trigger: 'manual'
            });
            popover.show();

            // Update posisi saat scroll atau resize
            function updatePopover() {
                var popperInstance = bootstrap.Popover.getInstance(popoverTarget);
                if (popperInstance) {
                    popperInstance._popper.update(); // <- ini kuncinya
                }
            }

            window.addEventListener('scroll', updatePopover);
            window.addEventListener('resize', updatePopover);
        });

        document.addEventListener("DOMContentLoaded", function () {
          const sliderWrapper = document.querySelector('.client-slider-wrapper');
          const slideWidth = 200; // Sesuaikan dengan .client-slider-slide width
          let isAnimating = false;
        
          function moveSlides() {
            if (isAnimating) return;
            isAnimating = true;
        
            sliderWrapper.style.transition = 'transform 1s ease-in-out';
            sliderWrapper.style.transform = `translateX(-${slideWidth}px)`;
        
            setTimeout(() => {
              // Pindahkan slide pertama ke belakang
              const firstSlide = sliderWrapper.firstElementChild;
              sliderWrapper.appendChild(firstSlide);
        
              // Reset transform ke awal
              sliderWrapper.style.transition = 'none';
              sliderWrapper.style.transform = 'translateX(0)';
        
              // Re-enable animation
              setTimeout(() => {
                sliderWrapper.style.transition = 'transform 1s ease-in-out';
                isAnimating = false;
              }, 50);
            }, 1000); // waktu sama dengan transition
          }
        
          setInterval(moveSlides, 2000); // setiap 3 detik
        });
        </script>
        
      
      
</body>

</html>