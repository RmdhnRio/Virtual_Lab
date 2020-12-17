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



                    <div class="pt-32pt">
                        <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                            <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
        
                                <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                    <h2 class="mb-0">Dashboard</h2>
        
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
        
                                        <li class="breadcrumb-item active">
        
                                            Dashboard
        
                                        </li>
        
                                    </ol>
        
                                </div>
                            </div>
        
        
                        </div>
                    </div>
        
        
        
                    <div class="container page__container page-section">
        
                        <div class="page-separator">
                            <div class="page-separator__text">Informasi Umum</div>
                        </div>
        
                        <div class="row mb-lg-8pt">
                            <div class="col-lg-4 col-md-6">
        
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">3</div>
                                        <div class="flex">
                                            <p class="card-title">Lab Dibuat</p>
                                        </div>
                                        <a href="fixed-student-path.html" class="ml-4pt btn btn-sm btn-link text-secondary">Lihat</a>
                                    </div>
                                </div>
        
                            </div>
                            <div class="col-lg-4 col-md-6">
        
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">1</div>
                                        <div class="flex">
                                            <p class="card-title">Lab Dikembangkan</p>
                                        </div>
                                        <a href="fixed-student-path.html" class="ml-4pt btn btn-sm btn-link text-secondary">Lihat</a>
                                    </div>
                                </div>
        
                            </div>
                            <div class="col-lg-4 col-md-6">
        
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">1</div>
                                        <div class="flex">
                                            <p class="card-title">Riset Dijalankan</p>
                                        </div>
                                        <a href="fixed-student-path.html" class="ml-4pt btn btn-sm btn-link text-secondary">Lihat</a>
                                    </div>
                                </div>
        
                            </div>
                            <div class="col-lg-4 col-md-6">
        
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">2</div>
                                        <div class="flex">
                                            <p class="card-title">Riset Terselesaikan</p>
                                        </div>
                                        <a href="fixed-student-path.html" class="ml-4pt btn btn-sm btn-link text-secondary">Lihat</a>
                                    </div>
                                </div>
        
                            </div>
                            <div class="col-lg-4 col-md-6">
        
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">245</div>
                                        <div class="flex">
                                            <p class="card-title">Peserta Lab</p>
                                        </div>
                                        <a href="fixed-student-path.html" class="ml-4pt btn btn-sm btn-link text-secondary">Lihat</a>
                                    </div>
                                </div>
        
                            </div>
                            <div class="col-lg-4 col-md-6">
        
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">18</div>
                                        <div class="flex">
                                            <p class="card-title">Rekan Riset</p>
                                        </div>
                                        <a href="fixed-student-path.html" class="ml-4pt btn btn-sm btn-link text-secondary">Lihat</a>
                                    </div>
                                </div>
        
                            </div>
                        </div>
        
                        <div class="page-separator">
                            <div class="page-separator__text">Pengguna Aktif Harian</div>
                        </div>
                        <div class="card card-body mb-32pt">
                            <div id="legend" class="chart-legend mt-0 mb-24pt justify-content-start"></div>
                            <div class="chart" style="height: 320px;">
                                <canvas id="earningsChart" class="chart-canvas js-update-chart-bar" data-chart-legend="#legend" data-chart-line-background-color="gradient:primary,gray" data-chart-prefix="$" data-chart-suffix="k"></canvas>
                            </div>
                        </div>
        
                        <div class="row mb-8pt">
                            <div class="col-lg-6">
        
                                <div class="page-separator">
                                    <div class="page-separator__text">Laboratorium Aktif</div>
                                </div>
                                <div class="card">
                                    <div data-toggle="lists" data-lists-values='[
                                    "js-lists-values-course", 
                                    "js-lists-values-document",
                                    "js-lists-values-amount",
                                    "js-lists-values-date"
                                    ]' data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" class="table-responsive">
                                        <table class="table table-flush table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-course">Nama</a>
                                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Tanggal Pembuatan</a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
        
        
        
        
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-nowrap align-items-center">
                                                            <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                                <img src="assets/images/paths/angular_routing_200x168.png" alt="course" class="avatar-img rounded">
                                                                <span class="overlay__content"></span>
                                                            </a>
                                                            <div class="flex">
                                                                <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Angular Routing In-Depth</a>
                                                                <small class="text-muted mr-1">
                                                                    73 Peserta Lab
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <small class="text-muted text-uppercase js-lists-values-date">12 Nov 2018</small>
                                                    </td>
                                                </tr>
        
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-nowrap align-items-center">
                                                            <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                                <img src="assets/images/paths/angular_testing_200x168.png" alt="course" class="avatar-img rounded">
                                                                <span class="overlay__content"></span>
                                                            </a>
                                                            <div class="flex">
                                                                <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Angular Unit Testing</a>
                                                                <small class="text-muted mr-1">
                                                                    80 Peserta Lab
                                                                
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <small class="text-muted text-uppercase js-lists-values-date">13 Nov 2018</small>
                                                    </td>
                                                </tr>
        
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-nowrap align-items-center">
                                                            <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                                <img src="assets/images/paths/typescript_200x168.png" alt="course" class="avatar-img rounded">
                                                                <span class="overlay__content"></span>
                                                            </a>
                                                            <div class="flex">
                                                                <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Introduction to TypeScript</a>
                                                                <small class="text-muted mr-1">
                                                                    48 Peserta Lab
                                                                    
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <small class="text-muted text-uppercase js-lists-values-date">14 Nov 2018</small>
                                                    </td>
                                                </tr>
        
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-nowrap align-items-center">
                                                            <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                                <img src="assets/images/paths/angular_200x168.png" alt="course" class="avatar-img rounded">
                                                                <span class="overlay__content"></span>
                                                            </a>
                                                            <div class="flex">
                                                                <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Learn Angular Fundamentals</a>
                                                                <small class="text-muted mr-1">
                                                                    44 Peserta Lab
                                                                    
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <small class="text-muted text-uppercase js-lists-values-date">15 Nov 2018</small>
                                                    </td>
                                                </tr>
        
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
        
                            </div>
                            <div class="col-lg-6">
        
                                <div class="page-separator">
                                    <div class="page-separator__text">Riset Dijalankan</div>
                                </div>
            
                                <div class="card">
            
                                    <div class="list-group list-group-flush">
            
                                        <div class="list-group-item p-3">
                                            <div class="row align-items-start">
                                                
                                                <div class="col-md-3 mb-8pt mb-md-0">
                                                    <div class="media align-items-center">
                                                    
                                                        <div class="d-flex flex-column media-body media-middle">
                                                            <a href="" class="card-title">Judul Riset</a>
                                                            <small class="text-muted">Nama Ketua Riset</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-8pt mb-md-0">
                                                    <p class="mb-8pt"><a href="fixed-discussion.html" class="text-body"><strong>Tahapan yang sedang dilakukan</strong></a></p>
            
            
                                                    <a href="fixed-discussion.html" class="chip chip-outline-secondary">Link list to-do pada tahapan riset</a>
            
            
                                                </div>
                                                <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                                    <a href="#lab-swift.html" class="btn btn-primary mr-auto ">Lihat</a>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="list-group-item p-3">
                                            <div class="row align-items-start">
                                                
                                                <div class="col-md-3 mb-8pt mb-md-0">
                                                    <div class="media align-items-center">
                                                    
                                                        <div class="d-flex flex-column media-body media-middle">
                                                            <a href="" class="card-title">Judul Riset</a>
                                                            <small class="text-muted">Nama Ketua Riset</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mb-8pt mb-md-0">
                                                    <p class="mb-8pt"><a href="fixed-discussion.html" class="text-body"><strong>Tahapan yang sedang dilakukan</strong></a></p>
            
            
                                                    <a href="fixed-discussion.html" class="chip chip-outline-secondary">Link list to-do pada tahapan riset</a>
            
            
                                                </div>
                                                <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                                    <a href="#lab-swift.html" class="btn mr-auto btn-primary">Lihat</a>
                                                </div>
                                            </div>
                                        </div>
            
            
            
                                    </div>
            
                                    <div class="card-footer p-8pt">
            
            
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
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- // END drawer-layout__content -->

@endsection











