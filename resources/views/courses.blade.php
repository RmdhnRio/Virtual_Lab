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


                    <div class="container page__container page-section">
                        <div class="container page__container">






                            <div class="d-flex flex-column flex-sm-row align-items-sm-center mb-24pt" style="white-space: nowrap;">
                                <small class="flex text-muted text-headings text-uppercase mr-3 mb-2 mb-sm-0">Displaying 4 out of 10 courses</small>
                                <div class="w-auto ml-sm-auto table d-flex align-items-center mb-2 mb-sm-0">
                                    <small class="text-muted text-headings text-uppercase mr-3 d-none d-sm-block">Sort by</small>

                                    <a href="#" class="sort desc small text-headings text-uppercase">Newest</a>

                                    <a href="#" class="sort small text-headings text-uppercase ml-2">Popularity</a>

                                </div>

                                <a href="#" data-target="#library-drawer" data-toggle="sidebar" class="btn btn-sm btn-white ml-sm-16pt">
                                    <i class="material-icons icon--left">tune</i> Filters
                                </a>

                            </div>


                            <div class="page-separator">
                                <div class="page-separator__text">Materi Tersedia</div>
                            </div>



                            <div class="row card-group-row">

                                <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card" data-overlay-onload-show data-popover-onload-show data-force-reveal data-partial-height="44" data-toggle="popover" data-trigger="click">


                                        <a href="fixed-student-course.html" class="js-image" data-position="">
                                            <img src="assets/images/python.png" alt="course">
                                            <span class="overlay__content align-items-start justify-content-start">
                                                <span class="overlay__action card-body d-flex align-items-center">
                                                    <i class="material-icons mr-4pt">play_circle_outline</i>
                                                    <span class="card-title text-white">Preview</span>
                                                </span>
                                            </span>
                                        </a>

                                        <div class="mdk-reveal__content">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title" href="fixed-student-course.html">Python</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Ita Sulistiani</small>
                                                    </div>
                                                    <a href="fixed-student-course.html" data-toggle="tooltip" data-title="Remove Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="rating flex">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                    <small class="text-50">6 hours</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popoverContainer d-none">
                                        <div class="media">
                                            <div class="media-left mr-12pt">
                                                <img src="assets/images/python-40.png" width="40" height="40" alt="Angular" class="rounded">
                                            </div>
                                            <div class="media-body">
                                                <div class="card-title mb-0">Python</div>
                                                <p class="lh-1 mb-0">
                                                    <span class="text-black-50 small">with</span>
                                                    <span class="text-black-50 small font-weight-bold">Ita Sulistiani</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Python and how to create basic applications.</p>

                                        <div class="mb-16pt">
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Python</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Python applications</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Python Interpreter</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding OOP with Python</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Python</small></p>
                                            </div>
                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                                </div>
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <a href="fixed-student-course.html" class="btn btn-primary">Watch trailer</a>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card" data-partial-height="44" data-toggle="popover" data-trigger="click">


                                        <a href="fixed-student-course.html" class="js-image" data-position="">
                                            <img src="assets/images/data-science.png" alt="course">
                                            <span class="overlay__content align-items-start justify-content-start">
                                                <span class="overlay__action card-body d-flex align-items-center">
                                                    <i class="material-icons mr-4pt">play_circle_outline</i>
                                                    <span class="card-title text-white">Preview</span>
                                                </span>
                                            </span>
                                        </a>

                                        <div class="mdk-reveal__content">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title" href="fixed-student-course.html">Data Science</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Irma Permatasari</small>
                                                    </div>
                                                    <a href="fixed-student-course.html" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="rating flex">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                    <small class="text-50">10 hours</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popoverContainer d-none">
                                        <div class="media">
                                            <div class="media-left mr-12pt">
                                                <img src="assets/images/datascience-40.png" width="40" height="40" alt="Angular" class="rounded">
                                            </div>
                                            <div class="media-body">
                                                <div class="card-title mb-0">Data Science</div>
                                                <p class="lh-1 mb-0">
                                                    <span class="text-black-50 small">with</span>
                                                    <span class="text-black-50 small font-weight-bold">Irma Permatasari</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="my-16pt text-black-70">Learn the fundamentals of Data Science and how to create intermediate analysis.</p>

                                        <div class="mb-16pt">
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of Data Science and Analysis</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Data Science applications</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Google Collab for Data Science</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding basic analysis using Data Science</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Data Science</small></p>
                                            </div>
                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>10 hours</small></p>
                                                </div>
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <a href="fixed-student-course.html" class="btn btn-primary">Watch trailer</a>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card" data-partial-height="44" data-toggle="popover" data-trigger="click">


                                        <a href="fixed-student-course.html" class="js-image" data-position="">
                                            <img src="assets/images/php.png" alt="course">
                                            <span class="overlay__content align-items-start justify-content-start">
                                                <span class="overlay__action card-body d-flex align-items-center">
                                                    <i class="material-icons mr-4pt">play_circle_outline</i>
                                                    <span class="card-title text-white">Preview</span>
                                                </span>
                                            </span>
                                        </a>

                                        <div class="mdk-reveal__content">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title" href="fixed-student-course.html">PHP</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Rio Ramadhan</small>
                                                    </div>
                                                    <a href="fixed-student-course.html" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="rating flex">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                    <small class="text-50">8 hours</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popoverContainer d-none">
                                        <div class="media">
                                            <div class="media-left mr-12pt">
                                                <img src="assets/images/php-40.png" width="40" height="40" alt="Angular" class="rounded">
                                            </div>
                                            <div class="media-body">
                                                <div class="card-title mb-0">PHP</div>
                                                <p class="lh-1 mb-0">
                                                    <span class="text-black-50 small">with</span>
                                                    <span class="text-black-50 small font-weight-bold">Rio Ramadhan</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="my-16pt text-black-70">Learn the fundamentals of working with PHP and how to create basic applications.</p>

                                        <div class="mb-16pt">
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with PHP</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete PHP applications</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the PHP Server</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Testing with PHP</small></p>
                                            </div>
                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>8 hours</small></p>
                                                </div>
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>10 lessons</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <a href="fixed-student-course.html" class="btn btn-primary">Watch trailer</a>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card" data-partial-height="44" data-toggle="popover" data-trigger="click">


                                        <a href="fixed-student-course.html" class="js-image" data-position="">
                                            <img src="assets/images/nlp.png" alt="course">
                                            <span class="overlay__content align-items-start justify-content-start">
                                                <span class="overlay__action card-body d-flex align-items-center">
                                                    <i class="material-icons mr-4pt">play_circle_outline</i>
                                                    <span class="card-title text-white">Preview</span>
                                                </span>
                                            </span>
                                        </a>

                                        <div class="mdk-reveal__content">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title" href="fixed-student-course.html">NLP</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">M Adiyatma Andhika and M Firmansyah</small>
                                                    </div>
                                                    <a href="fixed-student-course.html" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="rating flex">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                    <small class="text-50">6 hours</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popoverContainer d-none">
                                        <div class="media">
                                            <div class="media-left mr-12pt">
                                                <img src="assets/images/paths/craft_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                            </div>
                                            <div class="media-body">
                                                <div class="card-title mb-0">Natural Language Processing</div>
                                                <p class="lh-1 mb-0">
                                                    <span class="text-black-50 small">with</span>
                                                    <span class="text-black-50 small font-weight-bold">M Adiyatma Andhika and M Firmansyah</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="my-16pt text-black-70">Learn the fundamentals of working with NLP and how to create basic applications.</p>

                                        <div class="mb-16pt">
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with NLP</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete NLP applications</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the NLP Cloud</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Testing with NLP</small></p>
                                            </div>
                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                                </div>
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <a href="fixed-student-course.html" class="btn btn-primary">Watch trailer</a>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>

                            <div class="mb-32pt">

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

                            <div class="page-separator">
                                <div class="page-separator__text">Level</div>
                            </div>



                            <div class="row card-group-row">

                                <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click">


                                        <a href="fixed-student-course.html" class="card-img-top js-image" data-position="" data-height="210">
                                            <img src="assets/images/beginner.png" alt="course">
                                            <span class="overlay__content">
                                                <span class="overlay__action d-flex flex-column text-center">
                                                    <i class="material-icons icon-32pt">play_circle_outline</i>
                                                    <span class="card-title text-white">Preview</span>
                                                </span>
                                            </span>
                                        </a>

                                        <div class="card-body flex">
                                            <div class="d-flex">
                                                <div class="flex">
                                                    <a class="card-title" href="fixed-student-course.html">Beginner</a>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="rating flex">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                </div>
                                                <!-- <small class="text-50">6 hours</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popoverContainer d-none">
                                        <div class="media">
                                            <div class="media-left mr-12pt">
                                                <img src="assets/images/datascience-40.png" width="40" height="40" alt="Angular" class="rounded">
                                            </div>
                                            <div class="media-body">
                                                <div class="card-title mb-0">Data Science</div>
                                                <p class="lh-1 mb-0">
                                                    <span class="text-black-50 small">with</span>
                                                    <span class="text-black-50 small font-weight-bold">Irma Permatasari</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="my-16pt text-black-70">Learn the Intermediate Level of Data Science and how to create basic analysis.</p>

                                        <div class="mb-16pt">
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of Data Science and Analysis</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Data Science applications</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Google Collab for Data Science</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding basic analysis using Data Science</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Data Science</small></p>
                                            </div>
                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>10 hours</small></p>
                                                </div>
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <a href="fixed-student-course.html" class="btn btn-primary">Watch trailer</a>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click">


                                        <a href="fixed-student-course.html" class="card-img-top js-image" data-position="" data-height="210">
                                            <img src="assets/images/intermediate.png" alt="course">
                                            <span class="overlay__content">
                                                <span class="overlay__action d-flex flex-column text-center">
                                                    <i class="material-icons icon-32pt">play_circle_outline</i>
                                                    <span class="card-title text-white">Preview</span>
                                                </span>
                                            </span>
                                        </a>

                                        <div class="card-body flex">
                                            <div class="d-flex">
                                                <div class="flex">
                                                    <a class="card-title" href="fixed-student-course.html">Intermediate</a>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="rating flex">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                </div>
                                                <!-- <small class="text-50">6 hours</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popoverContainer d-none">
                                        <div class="media">
                                            <div class="media-left mr-12pt">
                                                <img src="assets/images/datascience-40.png" width="40" height="40" alt="Angular" class="rounded">
                                            </div>
                                            <div class="media-body">
                                                <div class="card-title mb-0">Data Science</div>
                                                <p class="lh-1 mb-0">
                                                    <span class="text-black-50 small">with</span>
                                                    <span class="text-black-50 small font-weight-bold">Irma Permatasari</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="my-16pt text-black-70">Learn the fundamentals of Data Science and how to create intermediate analysis.</p>

                                        <div class="mb-16pt">
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Data Science applications Part 2</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Google Collab for Intermediate Level Data Science</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding intermediate analysis using Data Science</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Data Science Part 2</small></p>
                                            </div>
                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>10 hours</small></p>
                                                </div>
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Intermediate</small></p>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <a href="fixed-student-course.html" class="btn btn-primary">Watch trailer</a>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click">


                                        <a href="fixed-student-course.html" class="card-img-top js-image" data-position="" data-height="210">
                                            <img src="assets/images/advanced.png" alt="course">
                                            <span class="overlay__content">
                                                <span class="overlay__action d-flex flex-column text-center">
                                                    <i class="material-icons icon-32pt">play_circle_outline</i>
                                                    <span class="card-title text-white">Preview</span>
                                                </span>
                                            </span>
                                        </a>

                                        <div class="card-body flex">
                                            <div class="d-flex">
                                                <div class="flex">
                                                    <a class="card-title" href="fixed-student-course.html">Advanced</a>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="rating flex">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                </div>
                                                <!-- <small class="text-50">6 hours</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popoverContainer d-none">
                                        <div class="media">
                                            <div class="media-left mr-12pt">
                                                <img src="assets/images/datascience-40.png" width="40" height="40" alt="Angular" class="rounded">
                                            </div>
                                            <div class="media-body">
                                                <div class="card-title mb-0">Data Science</div>
                                                <p class="lh-1 mb-0">
                                                    <span class="text-black-50 small">with</span>
                                                    <span class="text-black-50 small font-weight-bold">Irma Permatasari</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="my-16pt text-black-70">Learn the Advanced Level of Data Science and how to create advanced analysis.</p>

                                        <div class="mb-16pt">
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Data Science applications Part 3</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Google Collab for Advanced Level Data Science</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding advanced analysis using Data Science</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Data Science Part 3</small></p>
                                            </div>
                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>10 hours</small></p>
                                                </div>
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Advanced</small></p>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <a href="fixed-student-course.html" class="btn btn-primary">Watch trailer</a>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>

                            <div class="mb-32pt">

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

                            <div class="page-separator">
                                <div class="page-separator__text">Instructors</div>
                            </div>



                            <div class="row card-group-row">

                                <div class="col-md-6 col-lg-4 col-xl-4 card-group-row__col">

                                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click">


                                        <a href="fixed-student-course.html" class="card-img-top js-image" data-position="" data-height="140">
                                            <img src="assets/images/ita_430x168.png " alt="course">
                                            <span class="overlay__content">
                                                <span class="overlay__action d-flex flex-column text-center">
                                                    <i class="material-icons icon-32pt">play_circle_outline</i>
                                                    <span class="card-title text-white">Preview</span>
                                                </span>
                                            </span>
                                        </a>

                                        <div class="card-body flex">
                                            <div class="d-flex">
                                                <div class="flex">
                                                    <a class="card-title" href="fixed-student-course.html">Ita Sulistiani</a>
                                                    <small class="text-50 font-weight-bold mb-4pt">Senior Programmer</small>
                                                </div>
                                                <a href="fixed-student-course.html" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                            </div>
                                            <div class="d-flex">
                                                <div class="rating flex">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                </div>
                                                <!-- <small class="text-50">6 hours</small> -->
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row justify-content-between">
                                                <div class="col-auto d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>5 Courses</small></p>
                                                </div>
                                                <div class="col-auto d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Advance Class</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popoverContainer d-none">
                                        <div class="media">
                                            <div class="media-left mr-12pt">
                                                <img src="assets/images/256_joao-silas-636453-unsplash.jpg" width="40" height="40" alt="Angular" class="rounded">
                                            </div>
                                            <div class="media-body">
                                                <div class="card-title mb-0">Ita Sulistiani</div>
                                                <p class="lh-1 mb-0">
                                                    <span class="text-black-50 small font-weight-bold">Google, Inc.</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="my-16pt text-black-70">Learn with Ita Sulistiani, Senior Programmer at Google, Inc.</p>

                                        <div class="mb-16pt">
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Python</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Java</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Machine Learning</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>AI for Business</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Big Data</small></p>
                                            </div>
                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>5 Courses</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Advance Class Instructor</small></p>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <a href="fixed-student-course.html" class="btn btn-primary">Watch trailer</a>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-4 col-xl-4 card-group-row__col">

                                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click">


                                        <a href="fixed-student-course.html" class="card-img-top js-image" data-position="" data-height="140">
                                            <img src="assets/images/irma_430x168.png" alt="course">
                                            <span class="overlay__content">
                                                <span class="overlay__action d-flex flex-column text-center">
                                                    <i class="material-icons icon-32pt">play_circle_outline</i>
                                                    <span class="card-title text-white">Preview</span>
                                                </span>
                                            </span>
                                        </a>

                                        <div class="card-body flex">
                                            <div class="d-flex">
                                                <div class="flex">
                                                    <a class="card-title" href="fixed-student-course.html">Irma Permatasari</a>
                                                    <small class="text-50 font-weight-bold mb-4pt">Professor</small>
                                                </div>
                                                <a href="fixed-student-course.html" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                            </div>
                                            <div class="d-flex">
                                                <div class="rating flex">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                </div>
                                                <!-- <small class="text-50">6 hours</small> -->
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row justify-content-between">
                                                <div class="col-auto d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>4 courses</small></p>
                                                </div>
                                                <div class="col-auto d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Advance Class</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popoverContainer d-none">
                                        <div class="media">
                                            <div class="media-left mr-12pt">
                                                <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" width="40" height="40" alt="Angular" class="rounded">
                                            </div>
                                            <div class="media-body">
                                                <div class="card-title mb-0">Irma Permatasari</div>
                                                <p class="lh-1 mb-0">
                                                    <span class="text-black-50 small font-weight-bold">Universitas Negeri Jakarta</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="my-16pt text-black-70">Learn with Irma Permatasari, Professor at Universitas Negeri Jakarta</p>

                                        <div class="mb-16pt">
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Data Science and Analysis</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Web Programming</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Object Oriented Programming</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Database</small></p>
                                            </div>
                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>4 Courses</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Advance Class Instructor</small></p>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <a href="fixed-student-course.html" class="btn btn-primary">Watch trailer</a>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-4 col-xl-4 card-group-row__col">

                                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click">


                                        <a href="fixed-student-course.html" class="card-img-top js-image" data-position="" data-height="140">
                                            <img src="assets/images/rio_430x168.png" alt="course">
                                            <span class="overlay__content">
                                                <span class="overlay__action d-flex flex-column text-center">
                                                    <i class="material-icons icon-32pt">play_circle_outline</i>
                                                    <span class="card-title text-white">Preview</span>
                                                </span>
                                            </span>
                                        </a>

                                        <div class="card-body flex">
                                            <div class="d-flex">
                                                <div class="flex">
                                                    <a class="card-title" href="fixed-student-course.html">Rio Ramadhan</a>
                                                    <small class="text-50 font-weight-bold mb-4pt">Senior Programmer</small>
                                                </div>
                                                <a href="fixed-student-course.html" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                            </div>
                                            <div class="d-flex">
                                                <div class="rating flex">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                </div>
                                                <!-- <small class="text-50">6 hours</small> -->
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row justify-content-between">
                                                <div class="col-auto d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>5 Courses</small></p>
                                                </div>
                                                <div class="col-auto d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Advance Class</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popoverContainer d-none">
                                        <div class="media">
                                            <div class="media-left mr-12pt">
                                                <img src="assets/images/256_rsz_clem-onojeghuo-150467-unsplash.jpg" width="40" height="40" alt="Angular" class="rounded">
                                            </div>
                                            <div class="media-body">
                                                <div class="card-title mb-0">Rio Ramadhan</div>
                                                <p class="lh-1 mb-0">
                                                    <span class="text-black-50 small font-weight-bold">Facebook, Inc</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="my-16pt text-black-70">Learn with Rio Ramadhan, a Senior Programmer at Facebook, Inc.</p>

                                        <div class="mb-16pt">
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Native PHP</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Laravel</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Ruby</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Code Igniter</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                                <p class="flex text-black-50 lh-1 mb-0"><small>Javascript</small></p>
                                            </div>
                                        </div>


                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="d-flex align-items-center mb-4pt">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>5 Courses</small></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small>Advance Class Instructor</small></p>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <a href="fixed-student-course.html" class="btn btn-primary">Watch trailer</a>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>


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

                


@endsection