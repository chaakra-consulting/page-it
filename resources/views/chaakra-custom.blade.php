@extends('layouts.main-2')

@section('content')

            <!-- Start:: Section-1 -->
            <div class="landing-banner" id="home">
                <section class="section">
                    <div class="container main-banner-container">
                        <div class="row">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 fw-semibold fs-5"> <!-- fs-5 = ~18px -->
                                    <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/">Sistem</a></li>
                                    <li class="breadcrumb-item active text-fixed-dark" aria-current="page">Chaakra Custom</li>
                                </ol>
                            </nav>                            
                        </div>
                    </div>
                </section>
            </div>
            <!-- End:: Section-1 -->


            <div class="container about-container">
                <!-- Start::row-1 -->
                <div class="row about-main mb-5">
                    <div class="col-lg-8 col-md-8 col-sm-12 text-center">
                        <h1 class="mb-1 fw-semibold fs-46 mt-5">Chaakra Custom</h1>
                    </div>
                </div>
                <!--End::row-1 -->


                 <!-- Start::row-2 -->
                 <div class="row rounded-5">
                    <p>
                        <img src="{{ asset('/Tema/dist/assets/images/landing/chaakra-custom.png') }}"  class="rounded-2 w-100" style="max-height: 400px; object-fit: cover;" alt="image">
                    </p>
                </div>                
                <!--End::row-2 -->

                 <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mt-7">
                            <div class="card-body p-0 p-lg-5 text-dark">
                                <div class="statistics-info p-4">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="">
                                                <h2 class="fw-bold mb-4 text-dark">Apa yang dimaksud Chaakra Custom?</h2>
                                                <h5 class="leading-normal fw-normal mb-4 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                    Sed euismod, nisl in bibendum tincidunt, justo nulla vestibulum eros, sit amet varius lacus elit sed nisl. 
                                                    Integer eget nisl non erat dignissim bibendum. Suspendisse potenti. Curabitur vel diam ut lectus tincidunt 
                                                    luctus eget id leo.                                                    
                                                    </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="text-center">
                                                <img src="{{ asset('/Tema/dist/assets/images/landing/custom.jpg') }}" alt="" class="rounded-2 w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-3 -->

                 <!-- Start::row-5 -->
                <!--End::row-5 -->
            </div>

@endsection