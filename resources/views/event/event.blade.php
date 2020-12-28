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
                    <h2 class="mb-0">Events</h2>

                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                        <li class="breadcrumb-item">

                            <a href="">CMS</a>

                        </li>

                        <li class="breadcrumb-item active">

                            Posts

                        </li>

                    </ol>

                </div>
            </div>


            <div class="row" role="tablist">
                <div class="col-auto">
                    <a href="" class="btn btn-outline-secondary">New Event</a>
                </div>
            </div>

        </div>
    </div>




















    <div class="container page__container page__container page-section">
        <div class="container page__container page__container">



            <div class="page-separator">
                <div class="page-separator__text">Recent Posts</div>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="card posts-card-popular">
                        <img src="assets/images/paths/sketch_200x168.png" alt="" class="card-img">
                        <div class="posts-card-popular__content">
                            <div class="card-body d-flex align-items-center">
                                <div class="avatar-group flex">
                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                        <a href=""><img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                    </div>
                                </div>
                                <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                            </div>
                            <div class="posts-card-popular__title card-body">
                                <small class="text-muted text-uppercase">Android development</small>
                                <h4 class="card-title m-0"><a href="">Cara menjadi Android Developer</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card posts-card-popular">
                        <img src="assets/images/paths/invision_200x168.png" alt="" class="card-img">
                        <div class="posts-card-popular__content">
                            <div class="card-body d-flex align-items-center">
                                <div class="avatar-group flex">
                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                        <a href=""><img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                    </div>
                                </div>
                                <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                            </div>
                            <div class="posts-card-popular__title card-body">
                                <small class="text-muted text-uppercase">Web development</small>
                                <h4 class="card-title m-0"><a href="">Belajar Dasar Pemrograman Web</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card posts-card-popular">
                        <img src="assets/images/paths/photoshop_200x168.png" alt="" class="card-img">
                        <div class="posts-card-popular__content">
                            <div class="card-body d-flex align-items-center">
                                <div class="avatar-group flex">
                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                        <a href=""><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                    </div>
                                </div>
                                <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                            </div>
                            <div class="posts-card-popular__title card-body">
                                <small class="text-muted text-uppercase">Tips & Trick</small>
                                <h4 class="card-title m-0"><a href="">Tips Menulis Kode yang Konsisten di PHP</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- <div class="page-separator">
            <div class="page-separator__text">Popular</div>
        </div> -->

        <div class="container page__container page__container">



            <div class="page-separator">
                <div class="page-separator__text">Popular Posts</div>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="card posts-card-popular">
                        <img src="assets/images/paths/sketch_200x168.png" alt="" class="card-img">
                        <div class="posts-card-popular__content">
                            <div class="card-body d-flex align-items-center">
                                <div class="avatar-group flex">
                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                        <a href=""><img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                    </div>
                                </div>
                                <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                            </div>
                            <div class="posts-card-popular__title card-body">
                                <small class="text-muted text-uppercase">Android development</small>
                                <h4 class="card-title m-0"><a href="">Cara menjadi Android Developer</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card posts-card-popular">
                        <img src="assets/images/paths/invision_200x168.png" alt="" class="card-img">
                        <div class="posts-card-popular__content">
                            <div class="card-body d-flex align-items-center">
                                <div class="avatar-group flex">
                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                        <a href=""><img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                    </div>
                                </div>
                                <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                            </div>
                            <div class="posts-card-popular__title card-body">
                                <small class="text-muted text-uppercase">Web development</small>
                                <h4 class="card-title m-0"><a href="">Belajar Dasar Pemrograman Web</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card posts-card-popular">
                        <img src="assets/images/paths/photoshop_200x168.png" alt="" class="card-img">
                        <div class="posts-card-popular__content">
                            <div class="card-body d-flex align-items-center">
                                <div class="avatar-group flex">
                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                        <a href=""><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                    </div>
                                </div>
                                <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                            </div>
                            <div class="posts-card-popular__title card-body">
                                <small class="text-muted text-uppercase">Tips & Trick</small>
                                <h4 class="card-title m-0"><a href="">Tips Menulis Kode yang Konsisten di PHP</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card p-8pt mb-0 d-inline-block">

            <ul class="pagination justify-content-start pagination-xsm m-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true" class="material-icons">chevron_left</span>
                        <span>Prev</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Page 1">
                        <span>1</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Page 2">
                        <span>2</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span>Next</span>
                        <span aria-hidden="true" class="material-icons">chevron_right</span>
                    </a>
                </li>
            </ul>

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