@extends('layouts.main')

@section('content')

            <!-- Start:: Section-1 -->
            <div class="landing-banner" id="home">
                <section class="section">
                    <div class="container main-banner-container">
                        <div class="row">
                            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8">
                                <div class="py-5 pb-lg-0">
                                    <!-- <div class="mb-3">
                                        <h5 class="fw-semibold text-fixed-white op-9">Manage Your Business</h5>
                                    </div> -->
                                    <p class="landing-banner-heading fw-bolder mb-3">
                                        <span class="navy-text">Kembangkan Bisnis Anda bersama</span> 
                                        <span class="orange-text">Chaakra Consulting.</span>
                                    </p>
                                    <div class="fs-22 mb-3 text-fixed-black op-7"> Ingin Meningkatkan Efektifitas Bisnis Menggunakan Teknologi IT ? Hubungi Kami Sekarang Untuk Konsultasi Gratis.</div>
                                    <a href="https://wa.me/6285745509992" class="btn btn-wave btn-primary btn-lg">
                                        Hubungi Kami
                                    </a>
                                    <!-- <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="m-1 btn btn-primary">
                                        Discover More
                                        <i class="fe fe-eye ms-2 align-middle"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End:: Section-1 -->

            <!-- Start:: Section-4 -->
            <section class="section primary-gradient-bg" id="choice">
                <div class="container text-center">
                    <h2 class="fw-bold mb-4"> Pengembangan Sistem menggunakan apa yang anda inginkan? </h2>
                    <div class="row g-2 justify-content-center">
                        <div class="col-xl-12">
                            <div class="row justify-content-evenly">
                                <div class="col-lg-5 col-md-12">
                                    <div class="card custom-card collapse-card">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <div class="card-body">
                                                <div class="bg-img mb-2 frame">
                                                    <img src="{{ asset('/Tema/dist/assets/images/landing/odoo.svg') }}" alt="Odoo SVG">
                                                </div>                                                
                                                <div> 
                                                    <h5 class="fw-bold">Odoo</h5> 
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl in bibendum tincidunt, justo nulla vestibulum eros</p>
                                                </div> 
                                                <a href="/sistem/odoo" class="btn btn-wave btn-outline-primary mt-3 fw-medium">
                                                    Pelajari Lebih Lanjut
                                                </a>                                                 
                                            </div>
                                        </div>                                                                     
                                    </div>
                                </div>
                                <div class="col-auto text-center my-auto">
                                    <strong>atau</strong>
                                </div>   
                                <div class="col-lg-5 col-md-12">
                                    <div class="card custom-card collapse-card">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <div class="card-body">
                                                <div class="bg-img mb-2 frame">
                                                    <img src="{{ asset('/Tema/dist/assets/images/landing/system.png') }}" alt="Sistem Custom">
                                                </div>                                                
                                                <div> 
                                                    <h5 class="fw-bold">Chaakra Custom</h5> 
                                                    <p class="mb-0">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl in bibendum tincidunt, justo nulla vestibulum eros</p>
                                                </div> 
                                                <a href="/sistem/chaakra-custom" class="btn btn-wave btn-outline-primary mt-3 fw-medium">
                                                    Pelajari Lebih Lanjut
                                                </a> 
                                            </div>
                                        </div>                                                                        
                                    </div>
                                </div>                                                        
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-4 -->

            <!-- Start:: Section-2 -->
            <section class="section " id="layanan">
                <div class="container text-center position-relative">
                    <h1 class="fw-bold mb-3">Layanan IT Kami</h1>
                    <div class="row g-2 justify-content-center">
                        <div class="col-xl-12">
                            <div class="row justify-content-evenly">
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card features main-features main-features-4 p-4 active" data-wow-delay="0.1s"> 
                                        <div class="bg-img mb-2 frame">
                                            <img src="{{ asset('/Tema/dist/assets/images/landing/implementasi-odoo.png') }}" alt="Implementasi Odoo">
                                        </div>   
                                        <div> 
                                            <h5 class="fw-bold">Implementasi Odoo</h5> 
                                            <p class="mb-0">Melakukan dan Konfigurasi Odoo sesuai kebutuhan bisnis. </p>
                                            <a href="/layanan" class="btn btn-wave btn-outline-primary mt-3 fw-medium">
                                                Pelajari Lebih Lanjut
                                            </a>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card features main-features main-features-2 wow p-4"> 
                                        <div class="bg-img mb-2 frame">
                                            <img src="{{ asset('/Tema/dist/assets/images/landing/kustomisasi-odoo.png') }}" alt="Customisasi Odoo">
                                        </div>   
                                        <div> 
                                            <h5 class="fw-bold">Kustomisasi Odoo</h5> 
                                            <p class="mb-0"> Penyesuaian fitur Odoo agar sesuai dengan workflow bisnis.</p>
                                            <a href="/layanan" class="btn btn-wave btn-outline-primary mt-3 fw-medium">
                                                Pelajari Lebih Lanjut
                                            </a>
                                        </div> 
                                    </div> 
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card features main-features main-features-3 wow p-4"> 
                                        <div class="bg-img mb-2 frame">
                                            <img src="{{ asset('/Tema/dist/assets/images/landing/migrasi-odoo.png') }}" alt="Migrasi Odoo">
                                        </div>   
                                        <div> 
                                            <h5 class="fw-bold">Migrasi Odoo</h5> 
                                            <p class="mb-0"> Memindahkan sistem anda sebelumnya ke Odoo.</p>
                                            <a href="/layanan" class="btn btn-wave btn-outline-primary mt-3 fw-medium">
                                                Pelajari Lebih Lanjut
                                            </a>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card features main-features main-features-4 p-4 active" data-wow-delay="0.1s"> 
                                        <div class="bg-img mb-2 frame">
                                            <img src="{{ asset('/Tema/dist/assets/images/landing/implementasi.png') }}" alt="Development">
                                        </div> 
                                        <div> 
                                            <h5 class="fw-bold">Pembuatan Website</h5> 
                                            <p class="mb-0">Pembuatan aplikasi berbasis web  sesuai kebutuhan bisnis anda. </p>
                                            <a href="/layanan" class="btn btn-wave btn-outline-primary mt-3 fw-medium">
                                                Pelajari Lebih Lanjut
                                            </a>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card features main-features main-features-2 wow p-4"> 
                                        <div class="bg-img mb-2 frame">
                                            <img src="{{ asset('/Tema/dist/assets/images/landing/kustomisasi.png') }}" alt="Customisasi">
                                        </div> 
                                        <div> 
                                            <h5 class="fw-bold">Kustomisasi Website</h5> 
                                            <p class="mb-0"> Pengembangan aplikasi berbasis web sesuai kebutuhan bisnis anda.</p>
                                            <a href="/layanan" class="btn btn-wave btn-outline-primary mt-3 fw-medium">
                                                Pelajari Lebih Lanjut
                                            </a>
                                        </div> 
                                    </div> 
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card features main-features main-features-3 wow p-4"> 
                                        <div class="bg-img mb-2 frame">
                                            <img src="{{ asset('/Tema/dist/assets/images/landing/erp.png') }}" alt="ERP">
                                        </div> 
                                        <div> 
                                            <h5 class="fw-bold">ERP Development</h5> 
                                            <p class="mb-0"> Pembuatan aplikasi ERP berbasis web. </p>
                                            <a href="/layanan" class="btn btn-wave btn-outline-primary mt-3 fw-medium">
                                                Pelajari Lebih Lanjut
                                            </a>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-2 -->

            <!-- Start:: Section-3 -->
            <section class="section landing-Features" id="tentang-kami">
                <div class="container position-relative">
                    <h1 class="fw-bold mb-0">Tentang Kami</h1>
                    <div class="text-start">
                        <div class="justify-content-center">
                            <div class="card-body">
                                <dl class="row mb-0">
                                    <dt class="col-sm-3 text-fixed-white my-auto">
                                        <img src="{{ asset('/Tema/dist/assets/images/landing/chaakra.png') }}" alt="logo" class="desktop-logo" width="165" height="80">
                                    </dt>
                                    <dd class="col-sm-9 mb-0 text-fixed-black">
                                        <dl class="row mb-0">
                                            <dt class="col-sm-6 my-auto fw-normal">Chaakra Consulting merupakan perusahaan konsultansi  bisnis dan teknologi yang berasal dari perpaduan kelompok akademisi dan praktisi yang sangat berpengalaman dalam menyelesaikan masalah dalam dunia bisnis.</dt>
                                            <dd class="col-sm-6 my-auto mb-0">
                                                <strong>Visi</strong>
                                                <br>
                                                Perusahaan konsultan manajemen paling disukai di Indonesia, terkenal dengan hasil pekerjaan dan pelayanannya yang excellent.
                                                <br><br>
                                                <strong>Misi</strong>
                                                <br>
                                                Menjadi mitra strategis bagi klien dalam memberikan jasa konsultasi terintegratif untuk kemajuan usaha sekaligus menjawab tantangan bisnis kedepan yang semakin dinamis.
                                            </dd>                                            
                                        </dl>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="swiper-pagination mt-4"></div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-3 -->

            <!-- Start:: Section-8 -->
            <section class="section primary-gradient-top-right-bg" id="mengapa-kami">
                <div class="container">
                    <h1 class="fw-bold mb-4">Mengapa Kami?</h1>
                    <div class="row text-start">
                        <div class="col-xl-12">
                            <div class="row gy-2">
                                <div class="col-xl-7">
                                    <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate" id="accordionFAQ1">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1One">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsecustomicon1One" aria-expanded="true"
                                                    aria-controls="collapsecustomicon1One">
                                                     Where can I subscribe to your newsletter?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1One" class="accordion-collapse collapse show"
                                                aria-labelledby="headingcustomicon1One"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1Two">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Two">
                                                    Where can in edit my address?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Two" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Two"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1Three">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Three">
                                                    What are your opening hours?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Three" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Three"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1Four">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Four">
                                                    Do I have the right to return an item?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Four" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Four"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1Five">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Five"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Five">
                                                    General Terms & Conditions (GTC)
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Five" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Five"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1Six">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Six"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Six">
                                                    Do I need to create an account to make an order?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Six" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Six"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="bg-img mb-2 desc">
                                        <img src="{{ asset('/Tema/dist/assets/images/landing/mengapa-kami.png') }}" alt="Sistem Custom">
                                    </div>   
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-8 -->

            <!-- Start:: Section-5 -->
            <section class="section statistics-section" id="statistics">
                <div class="container text-center">
                    <div class="row  g-2 justify-content-center">
                        <div class="col-xl-12">
                            <div class="row justify-content-evenly">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="p-3 text-center rounded-2 bg-transparent">
                                        <span class="mb-3 avatar avatar-lg rounded-2 bg-primary-transparent">
                                            <i class='fs-20 fe fe-grid'></i>
                                          </span>
                                          <h3 class="fw-bold mb-0 text-dark">120+</h3>
                                        <p class="mb-1 fs-14 op-7 text-primary fw-semibold">
                                            Projects
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="p-3 text-center rounded-2 bg-transparent">
                                        <span class="mb-3 avatar avatar-lg rounded-2 bg-primary-transparent">
                                            <i class='fs-20 fe fe-user-plus' ></i>
                                          </span>
                                          <h3 class="fw-bold mb-0 text-dark">20K+</h3>
                                        <p class="mb-1 fs-14 op-7 text-primary fw-semibold">
                                            Clients
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="p-3 text-center rounded-2 bg-transparent">
                                        <span class="mb-3 avatar avatar-lg rounded-2 bg-primary-transparent">
                                            <i class='fs-20 fe fe-users' ></i>
                                          </span>
                                          <h3 class="fw-bold mb-0 text-dark">854</h3>
                                        <p class="mb-1 fs-14 op-7 text-primary fw-semibold">
                                            Employees
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="p-3 text-center rounded-2 bg-transparent">
                                        <span class="mb-3 avatar avatar-lg rounded-2 bg-primary-transparent">
                                            <i class='fs-20 fe fe-calendar' ></i>
                                          </span>
                                          <h3 class="fw-bold mb-0 text-dark">5+</h3>
                                        <p class="mb-1 fs-14 op-7 text-primary fw-semibold">
                                            Years of Experience
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-5 -->

            <!-- Start:: Section-7 -->
            <section class="section landing-testimonials primary-gradient-bottom-left-bg" id="testimoni">
                <div class="container text-center">
                    <h2 class="fw-bold mb-2">Testimoni</h2>
                    <div class="landing-title"></div>
                    <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <p class="text-dark fs-15 mb-5 fw-medium">
                                Apa kata mereka soal <span class="text-primary">Chaakra Consulting</span>?
                            </p>
                        </div>
                    </div>                    
                    <div class="swiper pagination-dynamic text-start">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card custom-card testimonial-card shadow-none">
                                    <div class="card-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl mb-1">
                                                <img src="{{ asset('/Tema/dist/assets/images/landing/tukuklik.png') }}" alt="">
                                            </span>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Kami sangat puas dengan layanan tim IT Chaakra! 
                                                Mereka benar-benar memahami kebutuhan bisnis kami 
                                                dan memberikan solusi yang tepat dengan hasil yang 
                                                melebihi ekspektasi. Prosesnya cepat, komunikatif, 
                                                dan sangat profesional.
                                            </p>
                                            <p class="mb-0 fw-semibold fs-16">Bu Lorem Ipsum</p>
                                            <p class="mb-0 fs-11 text-muted">Owner TukuKlik</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card testimonial-card shadow-none">
                                    <div class="card-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl mb-1">
                                                <img src="{{ asset('/Tema/dist/assets/images/landing/cra.png') }}" alt="">
                                            </span>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quod eos id
                                                officiis hic tenetur quae quaerat
                                                ad velit ab. Lorem ipsum dolor sit amet.
                                            </p>
                                            <p class="mb-0 fw-semibold fs-16">Json Taylor</p>
                                            <p class="mb-0 fs-11 text-muted">Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card testimonial-card shadow-none">
                                    <div class="card-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl mb-1">
                                                <img src="{{ asset('/Tema/dist/assets/images/landing/tukuklik.png') }}" alt="">
                                            </span>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quod eos id
                                                officiis hic tenetur quae quaerat
                                                ad velit ab. Lorem ipsum dolor sit amet.
                                            </p>
                                            <p class="mb-0 fw-semibold fs-16">Json Taylor</p>
                                            <p class="mb-0 fs-11 text-muted">Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card testimonial-card shadow-none">
                                    <div class="card-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl mb-1">
                                                <img src="{{ asset('/Tema/dist/assets/images/landing/cra.png') }}" alt="">
                                            </span>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quod eos id
                                                officiis hic tenetur quae quaerat
                                                ad velit ab. Lorem ipsum dolor sit amet.
                                            </p>
                                            <p class="mb-0 fw-semibold fs-16">Json Taylor</p>
                                            <p class="mb-0 fs-11 text-muted">Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination mt-4"></div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-7 -->

            <!-- Start:: Section-5 -->
            <section class="section" id="client">
                <div class="container text-center">
                    <h2 class="fw-bold mb-2">Klien Kami</h2>
                    <div class="landing-title"></div>
                    <div class="client-slider">
                        <div class="client-slider-wrapper">
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/tukuklik.png') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/cra.png') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/bank-bjb.png') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/ormed.jpg') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/logo1.webp') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/logo2.webp') }}" alt="" class="img-fluid" />
                            </div>
                            <!-- Duplikat gambar untuk efek seamless -->
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/tukuklik.png') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/cra.png') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/bank-bjb.png') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/ormed.jpg') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/logo1.webp') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="client-slider-slide">
                                <img src="{{ asset('/Tema/dist/assets/images/landing/logo2.webp') }}" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>                                                                                          
                </div>
            </section>            
            <!-- End:: Section-5 -->

            <!-- Start:: Section-2 -->
            <section class="section " id="portfolio">
                <div class="container text-center position-relative">
                    <h2 class="fw-bold mb-2">Portfolio</h2>
                    <div class="landing-title"></div>
                    <div class="row g-2 justify-content-center">
                        <div class="col-xl-12">
                            <div class="row justify-content-evenly">
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card custom-card">
                                        <img src="{{ asset('/Tema/dist/assets/images/landing/tukuklik2.png') }}"class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="fw-bold">Tukuklik</h5> 
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card custom-card">
                                        <img src="{{ asset('/Tema/dist/assets/images/landing/tukuklik2.png') }}"class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="fw-bold">Tukuklik</h5> 
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card custom-card">
                                        <img src="{{ asset('/Tema/dist/assets/images/landing/tukuklik2.png') }}"class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="fw-bold">Tukuklik</h5> 
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-2 -->

@endsection