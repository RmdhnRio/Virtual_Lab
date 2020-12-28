<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Dashboard')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')



<!-- Drawer Layout Content -->

<div class="mdk-drawer-layout__content page-content">

    <!-- Header -->










    <!-- // END Header -->


    <div class="about-section paddingTB60 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6 mt-20">
                    <div class="about-title clearfix">
                        <h1>About <span>Virtual Lab</span></h1>
                        <h3>Lorem ipsum dolor sit amet </h3>
                        <p class="about-paddingB">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor congue non sit amet dolor. Proin pretium purus a lorem ornare </p>
                        <p>sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros mauris, convallis et sem tempus, viverra hendrerit sapien</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="contact" class="">
        <div class=" container" style="margin-top: 50px;">
            <h3 class="text-let text-uppercase">contact us</h3>
            <p class="m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales. Morbi leo nulla, pharetra vel felis nec, ullamcorper condimentum quam.</p>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 my-5">
                    <div class="card border-0">
                        <div class="card-body text-center">
                            <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                            <h4 class="text-uppercase mb-5">call us</h4>
                            <p>+628563904657</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 my-5">
                    <div class="card border-0">
                        <div class="card-body text-center">
                            <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                            <h4 class="text-uppercase mb-5">office loaction</h4>
                            <address>Jl. Kedoya Raya, RT.11/RW.6, Kb. Jeruk, Jakarta Barat</address>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 my-5">
                    <div class="card border-0">
                        <div class="card-body text-center">
                            <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                            <h4 class="text-uppercase mb-5">email</h4>
                            <p>virtuallab1416@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


























    <div class="js-fix-footer2 bg-white border-top-2">
        <div class="container page__container page-section d-flex flex-column">
            <p class="text-70 brand mb-24pt">
                <img class="brand-icon" src="assets/images/logo/black-70@2x.png" width="30" alt="Luma"> Luma
            </p>
            <p class="measure-lead-max text-50 small mr-8pt">Luma is a beautifully crafted user interface for modern Education Platforms, including Courses & Tutorials, Video Lessons, Student and Teacher Dashboard, Curriculum Management, Earnings and Reporting, ERP, HR, CMS, Tasks, Projects, eCommerce and more.</p>
            <p class="mb-8pt d-flex">
                <a href="" class="text-70 text-underline mr-8pt small">Terms</a>
                <a href="" class="text-70 text-underline small">Privacy policy</a>
            </p>
            <p class="text-50 small mt-n1 mb-0">Copyright 2019 &copy; All rights reserved.</p>
        </div>
    </div>


</div>


@endsection