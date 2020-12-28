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

    <div class="pt-32pt">
        <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
            <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                    <h2 class="mb-0">Subscription</h2>


                </div>
            </div>
        </div>
    </div>

    <div class="row card-group-row mb-16pt mb-lg-40pt" style="padding: 60px;">
        <div class="col-lg-4 col-sm-6 card-group-row__col">

            <div class="card card-group-row__card text-center o-hidden card--raised border-0">

                <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">Start</span>

                <div class="card-body d-flex flex-column">
                    <div class="flex-grow mb-16pt">
                        <span class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt">
                            <i class="material-icons">person</i>
                        </span>
                        <h4 class="mb-8pt">Student</h4>
                        <p class="text-70 mb-0">Access to over 1.000 high quality courses. For individuals.</p>
                    </div>
                    <p class="d-flex justify-content-center align-items-center m-0">
                        <span class="h4 m-0 font-weight-normal">&dollar;</span>
                        <span class="h1 m-0 font-weight-normal">9</span>
                        <span class="h4 m-0 font-weight-normal">/ month</span>
                    </p>
                    <p class="lh-1 text-muted mb-0"><small>after the free trial ends</small></p>
                </div>
                <div class="card-footer">
                    <a href="signup.html" class="btn btn-accent">Get started</a>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-sm-6 card-group-row__col">

            <div class="card card-group-row__card text-center o-hidden border-0">

                <div class="card-body d-flex flex-column">
                    <div class="flex-grow mb-16pt">
                        <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                            <i class="material-icons">group</i>
                        </span>
                        <h4 class="mb-8pt">Team</h4>
                        <p class="text-70 mb-0">Starts with 3 accounts with more seats available.</p>
                    </div>
                    <p class="d-flex justify-content-center align-items-center m-0">
                        <span class="h4 m-0 font-weight-normal">&dollar;</span>
                        <span class="h1 m-0 font-weight-normal">19</span>
                        <span class="h4 m-0 font-weight-normal">/ month</span>
                    </p>
                    <p class="lh-1 text-muted mb-0"><small>after the free trial ends</small></p>
                </div>
                <div class="card-footer">
                    <a href="signup.html" class="btn btn-outline-secondary">Get started</a>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-sm-6 card-group-row__col">

            <div class="card card-group-row__card text-center o-hidden border-0">

                <div class="card-body d-flex flex-column">
                    <div class="flex-grow mb-16pt">
                        <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                            <i class="material-icons">business_center</i>
                        </span>
                        <h4 class="mb-8pt">Enterprise</h4>
                        <p class="text-70 mb-0">Build customized learning paths with content that aligns to your internal learning goals.</p>
                    </div>
                    <p class="d-flex justify-content-center align-items-center m-0">
                        <span class="h4 m-0 font-weight-normal">&dollar;</span>
                        <span class="h1 m-0 font-weight-normal">49</span>
                        <span class="h4 m-0 font-weight-normal">/ month</span>
                    </p>
                    <p class="lh-1 text-muted mb-0"><small>after the free trial ends</small></p>
                </div>
                <div class="card-footer">
                    <a href="signup.html" class="btn btn-outline-secondary">Get started</a>
                </div>
            </div>

        </div>
    </div>





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