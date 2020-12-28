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









    <div class="container page__container page__container page-section">
        <div class="page-section bg-body border-bottom-2">
            <div class="container page__container">

                <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start flex mb-16pt text-center text-md-left">
                    <div class="avatar overlay overlay--primary mb-16pt mb-md-0 mr-md-16pt">
                        <img src="assets/images/paths/sketch_40x40@2x.png" class="avatar-img rounded" alt="lesson">
                        <div class="overlay__content"></div>
                    </div>
                    <div class="flex">
                        <h1 class="h2 measure-lead-max mb-16pt">Dicoding Developer Coaching #15: Android | Belajar Membuat Service Pertamamu di Aplikasi Android</h1>
                        <div class="d-flex align-items-center">
                            <a href="teacher-profile.html" class="avatar avatar-sm mr-12pt">
                                <img src="assets/images/people/50/guy-6.jpg" alt="author" class="avatar-img rounded-circle">
                            </a>
                            <div class="mr-16pt">
                                <a href="teacher-profile.html" class="card-title">Eddie Bryan</a>
                                <div class="d-flex align-items-center">
                                    <small class="text-50 mr-2">3 days ago</small>
                                    <small class="text-50 mr-2">2 min read</small>
                                    <a href="" class="text-50"><small>Liked</small></a>
                                </div>
                            </div>
                            <div>
                                <a href="" class="text-50 d-flex align-items-center text-decoration-0"><i class="material-icons icon--left">favorite_border</i> 3</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="page-section border-bottom-2">
        <div class="container page__container">

            <div class="mb-24pt">
                <a href="" class="chip chip-outline-secondary">Design</a>
                <a href="" class="chip chip-outline-secondary">Sketch</a>
            </div>

            <div class="d-flex flex-column flex-md-row align-items-md-center mb-16pt">
                <div class="mb-16pt mb-md-0 mr-md-16pt">
                    <div class="rounded p-relative o-hidden overlay overlay--primary">
                        <img class="img-fluid rounded" src="assets/images/assistance.png" alt="image">
                        <div class="overlay__content"></div>
                    </div>
                </div>
                <!-- <div class="flex">
                    <p class="lead measure-paragraph-max">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus culpa deserunt distinctio, eos expedita inventore labore laborum libero magnam nisi recusandae sapiente sunt unde, voluptatibus? Accusantium distinctio laborum nihil, nostrum possimus quos rem repellendus tenetur voluptatem! A, ad adipisci commodi doloribus id maxime provident quo suscipit. Itaque, recusandae ut.</p>
                </div> -->
            </div>

            <blockquote class="blockquote blockquote--reverse pl-0">
                <p class="text-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque debitis distinctio earum et fugiat id itaque officia provident quasi! Dolorem, fuga modi molestias natus non nulla optio porro praesentium provident quaerat.</p>
                <footer class="blockquote-footer">Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer>
            </blockquote>

            <p class="text-50 measure-paragraph-max mb-24pt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dignissimos eaque facilis inventore ipsa modi natus, optio quisquam quod quos, ratione sed, ullam veritatis. Delectus dolorem doloremque, doloribus explicabo facere fugiat, incidunt ipsam maiores minima modi molestias natus quia quis recusandae rem reprehenderit saepe sint sunt tenetur velit voluptate voluptatum!</p>

            <h4>Labore nemo nisi recusandae</h4>

            <div class="d-flex flex-column flex-md-row mb-32pt">
                <div class="flex mb-16pt mb-md-0 mr-md-16pt">
                    <p class="lead text-70 measure-paragraph-max">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus culpa deserunt distinctio, eos expedita inventore labore laborum libero magnam nisi recusandae sapiente sunt unde, voluptatibus? Accusantium distinctio laborum nihil, nostrum possimus quos rem repellendus tenetur voluptatem! A, ad adipisci commodi doloribus id maxime provident quo suscipit. Itaque, recusandae ut.</p>

                    <blockquote class="blockquote">
                        <p class="text-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque debitis distinctio earum et fugiat id itaque officia provident quasi! Dolorem, fuga modi molestias natus non nulla optio porro praesentium provident quaerat.</p>
                        <footer class="blockquote-footer">Someone famous in
                            <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div>
                <div>
                    <div class="rounded p-relative o-hidden overlay overlay--primary">
                        <img class="img-fluid rounded" src="assets/images/paths/invision_200x168.png" alt="image">
                        <div class="overlay__content"></div>
                    </div>
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