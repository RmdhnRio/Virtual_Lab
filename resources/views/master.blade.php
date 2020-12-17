<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Virtual Lab | @yield('title')</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{asset('assets/vendor/perfect-scrollbar.css')}}" rel="stylesheet">

    <!-- Fix Footer CSS -->
    <link type="text/css" href="{{asset('assets/vendor/fix-footer.css')}}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{asset('assets/css/material-icons.css')}}" rel="stylesheet">


    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet">


    <!-- Preloader -->
    <link type="text/css" href="{{asset('assets/css/preloader.css')}}" rel="stylesheet">


    <!-- App CSS -->
    <link type="text/css" href="{{asset('assets/css/app.css')}}" rel="stylesheet">






</head>

<body class="layout-sticky layout-sticky-subnav ">

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>


    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header mb-0" data-fixed>
            <div class="mdk-header__content">





                <div class="navbar navbar-expand pr-0 navbar-light bg-white navbar-shadow" id="default-navbar" data-primary>
                    <!-- Navbar toggler -->
                    <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
                        <span class="material-icons">short_text</span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="sticky-index.html" class="navbar-brand mr-16pt">

                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                            <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/student/128/white.svg" alt="logo" class="img-fluid" /></span>

                        </span>

                        <span class="d-none d-lg-block">Virtual Lab</span>
                    </a>










                    {{-- <form class="search-form navbar-search d-none d-md-flex mr-16pt" action="sticky-index.html">
                        <button class="btn" type="submit"><i class="material-icons">search</i></button>
                        <input type="text" class="form-control" placeholder="Search ...">
                    </form> --}}


                    <div class="flex"></div>



                    <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">


                        <!-- Notifications dropdown -->
                        <div class="nav-item dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-title="Messages" data-placement="bottom" data-boundary="window">
                            <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-caret="false">
                                <i class="material-icons icon-24pt">mail_outline</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar class="position-relative">
                                    <div class="dropdown-header"><strong>Messages</strong></div>
                                    <div class="list-group list-group-flush mb-0">

                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 minutes ago</small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <img src="assets/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">Michelle</strong>
                                                    <span class="text-black-70">Clients loved the new design.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 minutes ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <img src="assets/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">Michelle</strong>
                                                    <span class="text-black-70">🔥 Superb job..</span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // END Notifications dropdown -->


                        <!-- Notifications dropdown -->
                        <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-title="Notifications" data-placement="bottom" data-boundary="window">
                            <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-caret="false">
                                <i class="material-icons">notifications_none</i>
                                <span class="badge badge-notifications badge-accent">2</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar class="position-relative">
                                    <div class="dropdown-header"><strong>System notifications</strong></div>
                                    <div class="list-group list-group-flush mb-0">

                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">3 minutes ago</small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 hours ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-primary">group_add</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">Adrian. D</strong>
                                                    <span class="text-black-70">Wants to join your private group.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">1 day ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-warning">storage</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your deploy was successful.</span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // END Notifications dropdown -->


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" data-caret="false">

                                <span class="avatar avatar-sm mr-8pt2">

                                    <span class="avatar-title rounded-circle bg-primary"><i class="material-icons">account_box</i></span>

                                </span>

                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header"><strong>Account</strong></div>
                                <a class="dropdown-item" href="sticky-edit-account.html">Edit Account</a>
                                <a class="dropdown-item" href="sticky-billing.html">Billing</a>
                                <a class="dropdown-item" href="sticky-billing-history.html">Payments</a>
                                <a class="dropdown-item" href="sticky-login.html">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <!-- Drawer Layout -->
            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">



                @yield('content')


                <!-- drawer -->
                <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
                    <div class="mdk-drawer__content top-navbar">
                        <div class="sidebar sidebar-dark-dodger-blue sidebar-left sidebar-p-t" data-perfect-scrollbar>

            
                            <ul class="sidebar-menu">
            
            
                                <li class="sidebar-menu-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                                    <a class="sidebar-menu-button" href="{{'/dashboard'}}">
                                        <svg width="24px" height="24px" viewBox="0 0 16 16" class="bi bi-pie-chart-fill sidebar-menu-icon sidebar-menu-icon--left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5zM8.5.015V7.5h7.485A8.001 8.001 0 0 0 8.5.015z"/>
                                        </svg>
                                        <span class="sidebar-menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item {{ (request()->is('laboratory')) ? 'active' : '' }}">
                                    <a class="sidebar-menu-button" href="{{'/laboratory'}}">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                        <span class="sidebar-menu-text">Laboratory</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item {{ (request()->is('research')) ? 'active' : '' }}">
                                    <a class="sidebar-menu-button" href="{{'/research'}}">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                                        <span class="sidebar-menu-text">Research</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item {{ (request()->is('event')) ? 'active' : '' }}">
                                    <a class="sidebar-menu-button" href="{{'/event'}}">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                                        <span class="sidebar-menu-text">Event</span>
                                    </a>
                                <li class="sidebar-menu-item {{ (request()->is('profile')) ? 'active' : '' }}">
                                    <a class="sidebar-menu-button" href="{{'/profile'}}">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                        <span class="sidebar-menu-text">My Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item {{ (request()->is('certificate')) ? 'active' : '' }}">
                                    <a class="sidebar-menu-button" href="{{'/certificate'}}">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assignment_turned_in</span>
                                        <span class="sidebar-menu-text">My Certificate</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item {{ (request()->is('subscription')) ? 'active' : '' }}">
                                    <a class="sidebar-menu-button" href="{{'/subscription'}}">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                                        <span class="sidebar-menu-text">Subscription</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item {{ (request()->is('about')) ? 'active' : '' }}">
                                    <a class="sidebar-menu-button" href="{{'/about'}}">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">help</span>
                                        <span class="sidebar-menu-text">About Us</span>
                                    </a>
                        </div>
                    </div>
                </div>
                <!-- // END drawer -->

                <!-- filter drawer -->
                <div class="mdk-drawer js-mdk-drawer " id="library-drawer" data-align="end">
                    <div class="mdk-drawer__content top-navbar">
                        <div class="sidebar sidebar-light sidebar-right py-16pt" data-perfect-scrollbar data-perfect-scrollbar-wheel-propagation="true">

                            <div class="d-flex align-items-center mb-24pt  d-lg-none">
                                <form action="index.html" class="search-form search-form--light mx-16pt pr-0 pl-16pt">
                                    <input type="text" class="form-control pl-0" placeholder="Search">
                                    <button class="btn" type="submit"><i class="material-icons">search</i></button>
                                </form>
                            </div>

                            <div class="sidebar-heading">Category</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item active">
                                    <a href="" class="sidebar-menu-button">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">code</span>
                                        <span class="sidebar-menu-text">Web Development</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a href="" class="sidebar-menu-button">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">brush</span>
                                        <span class="sidebar-menu-text">Design</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a href="" class="sidebar-menu-button">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">settings_cell</span>
                                        <span class="sidebar-menu-text">iOS &amp; Swift</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a href="" class="sidebar-menu-button">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">android</span>
                                        <span class="sidebar-menu-text">Android</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a href="" class="sidebar-menu-button">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">business_center</span>
                                        <span class="sidebar-menu-text">Business</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a href="" class="sidebar-menu-button">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">crop_original</span>
                                        <span class="sidebar-menu-text">Photography</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a href="" class="sidebar-menu-button">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">payment</span>
                                        <span class="sidebar-menu-text">Marketing</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a href="" class="sidebar-menu-button">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">store</span>
                                        <span class="sidebar-menu-text">eCommerce</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a href="" class="sidebar-menu-button">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">redeem</span>
                                        <span class="sidebar-menu-text">Health &amp; Fitness</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a href="" class="sidebar-menu-button">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">music_note</span>
                                        <span class="sidebar-menu-text">Music</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="sidebar-heading">Platform</div>
                            <div class="sidebar-block">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck01" checked="">
                                        <label class="custom-control-label" for="filtersCheck01">All</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck02">
                                        <label class="custom-control-label" for="filtersCheck02">Archive</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck06">
                                        <label class="custom-control-label" for="filtersCheck06">Unity</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck03">
                                        <label class="custom-control-label" for="filtersCheck03">Web</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck04">
                                        <label class="custom-control-label" for="filtersCheck04">iOS &amp; Swift</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck05">
                                        <label class="custom-control-label" for="filtersCheck05">Android</label>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-heading">Subscription</div>
                            <div class="sidebar-block">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck07" checked="">
                                        <label class="custom-control-label" for="filtersCheck07">All</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck08">
                                        <label class="custom-control-label" for="filtersCheck08">Free</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck09">
                                        <label class="custom-control-label" for="filtersCheck09">Beginner</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck10">
                                        <label class="custom-control-label" for="filtersCheck10">Advanced</label>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-heading">Content type</div>
                            <div class="sidebar-block">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck11" checked="">
                                        <label class="custom-control-label" for="filtersCheck11">All</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck12">
                                        <label class="custom-control-label" for="filtersCheck12">Episode</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck13">
                                        <label class="custom-control-label" for="filtersCheck13">Video</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck14">
                                        <label class="custom-control-label" for="filtersCheck14">Article</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck15">
                                        <label class="custom-control-label" for="filtersCheck15">Book</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="filtersCheck16">
                                        <label class="custom-control-label" for="filtersCheck16">Screencast</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- // END drawer -->

                

            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END Header Layout Content -->

    </div>
    <!-- // END Header Layout -->



    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Fix Footer -->
    <script src="assets/vendor/fix-footer.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>


    <!-- Global Settings -->
    <script src="assets/js/settings.js"></script>

    <!-- Moment.js -->
    <script src="assets/vendor/moment.min.js"></script>
    <script src="assets/vendor/moment-range.min.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- UI Charts Page JS -->
    <script src="assets/js/chartjs-rounded-bar.js"></script>
    <script src="assets/js/chartjs.js"></script>

    <!-- Chart.js Samples -->
    <script src="assets/js/page.instructor-dashboard.js"></script>

    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>


    <!-- App Settings (safe to remove) -->
    {{-- <script src="{{asset('assets/js/app-settings.js')}}"></script> --}}
</body>

</html>