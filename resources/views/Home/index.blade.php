@extends('Home.index_layout.layout')



@section('content')



    <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img
                    src="{{asset($account_info !=NULL ? $account_info->application_logo:'assets_home/images/logo/logo.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="#">
                                <img
                                    src="{{asset($account_info !=NULL ? $account_info->application_logo:'assets_home/images/logo/logo.png')}}">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="nav-link-inner--text">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">
                            <span class="nav-link-inner--text">About</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#service" class="nav-link">
                            <span class="nav-link-inner--text">Service</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('store_pricing')}}" class="nav-link">
                            <span class="nav-link-inner--text">Pricing</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/store/auth/login" class="nav-link">
                            <span class="nav-link-inner--text">Login</span>
                        </a>
                    </li>
                </ul>
                <hr class="d-lg-none"/>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">


                    <li class="nav-item d-none d-lg-block ml-lg-4">
                        <a href="{{route('store_register')}}" class="btn btn-neutral btn-icon">
               <span class="btn-inner--icon">
                 <i class="fas fa-shopping-cart mr-2"></i>
               </span>
                            <span class="nav-link-inner--text">Register</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-primary pt-5 pb-7">
            <div class="container">
                <div class="header-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="pr-5">
                                <h1 class="display-2 text-white font-weight-bold mb-0">Re-open your restaurants</h1>
                                <h2 class="display-4 text-white font-weight-light">With a
                                    contactless {{$account_info !=NULL ? $account_info->application_name:'CHEF MENU'}}
                                    Menu.</h2>
                                <p class="text-white mt-4">Make your restaurant a safe place to eat or grab-and-go by
                                    deploying a touch-free QR Code menu.</p>
                                <div class="mt-5">
                                    <a href="/store/auth/login" class="btn btn-neutral my-2">Login Now</a>
                                    <a href="{{route('store_register')}}" class="btn btn-default my-2">Register now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row pt-5">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-4">
                                                <i class="ni ni-active-40"></i>
                                            </div>
                                            <h5 class="h3">Safety First</h5>
                                            <p>Limiting the use of physical menus and promoting touchless QR Code menus
                                                reduces the risk of virus transmission, and keeps your customers and
                                                employees safe.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="icon icon-shape bg-gradient-info text-white rounded-circle shadow mb-4">
                                                <i class="ni ni-active-40"></i>
                                            </div>
                                            <h5 class="h3">Easy to build & update</h5>
                                            <p>Create contactless menu QR Codes under 3 minutes. Later, upload & save a
                                                new menu to the same QR Code.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-lg-5 pt-4">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div
                                                class="icon icon-shape bg-gradient-success text-white rounded-circle shadow mb-4">
                                                <i class="ni ni-active-40"></i>
                                            </div>
                                            <h5 class="h3">No app download required</h5>
                                            <p>Your diners can scan the QR Code using their phone's camera</p>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div
                                                class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow mb-4">
                                                <i class="ni ni-active-40"></i>
                                            </div>
                                            <h5 class="h3">Inspires the confidence to step out</h5>
                                            <p>Re-align your restaurant functioning with contactless at the core. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                     xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="py-6 pb-9 bg-default" id="service">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <h2 class="display-3 text-white">Why contactless menu?</h2>
                    <p class="lead text-white">
                        Safer, cost-effective, and always up-to-date, contactless menus are the right decision for your
                        customers and your budget to help you grow your business.
                    </p>
                </div>
            </div>
        </section>
        <section class="section section-lg pt-lg-0 mt--7">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle mb-4">
                                            <i class="ni ni-check-bold"></i>
                                        </div>
                                        <h4 class="h3 text-primary text-uppercase">Safer for Everyone</h4>
                                        <p class="description mt-3">Reduce the risk of virus transmission, keeping your
                                            customers and employees safe.</p>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape bg-gradient-success text-white rounded-circle mb-4">
                                            <i class="ni ni-istanbul"></i>
                                        </div>
                                        <h4 class="h3 text-success text-uppercase">Easier to Update</h4>
                                        <p class="description mt-3">Update your prices and specials instantly, with the
                                            push of a button. No printing required.</p>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape bg-gradient-warning text-white rounded-circle mb-4">
                                            <i class="ni ni-planet"></i>
                                        </div>
                                        <h4 class="h3 text-warning text-uppercase">A Better Experience</h4>
                                        <p class="description mt-3">Designed with small screens in mind, your new menu
                                            will always be easily viewable.
                                        </p>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-6">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-md-6 order-md-2">
                        <img src="{{asset('assets_home/images/img1.png')}}" class="img-fluid">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="pr-md-5">
                            <h1>Contactless Menu</h1>
                            <p>A Contactless Menu, a complete digital menu of your restaurant available to the customers
                                via a QR code placed on each table/counter.</p>
                            <ul class="list-unstyled mt-5">
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-settings-gear-65"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-0">Search option</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-html5"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-0">Recommended items</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-0">User friendly</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-6">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-md-6">
                        <img src="{{asset('assets_home/images/img2.png')}}" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <div class="pr-md-5">
                            <h1>Contactless Order</h1>
                            <p>A Contactless Order, customers place an order by choosing a dish directly from the
                                digital menu.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-7" id="about">
            <div class="container">
                <div class="row row-grid justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="display-3">ABOUT US<span class="text-success">Dedicated to make you safe.</span>
                        </h2>
                        <p class="lead">Our mission is to make contactless restaurant menus the de facto standard for
                            the dine-in experience. We’re reinventing the traditional menu making it safer, interactive,
                            instantly changeable and more cost effective.
                            <br>
                            <br>
                            The traditional menu reinvented for the dine-in experience.</p>


                    </div>
                </div>
            </div>
        </section>
    </div>


    <section>
    <div class="card col-sm-8" style="margin: 0 auto;">
        <!-- Card header -->
        <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Contact us</h5>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
                <div class="timeline-block">
                  <span class="timeline-step badge-success">
                    <i class="ni ni-mobile-button"></i>
                  </span>
                    <div class="timeline-content">
                        <div class="d-flex justify-content-between pt-1">
                            <div>
                                <span class="text-muted text-sm font-weight-bold">Phone Number:</span>
                            </div>
                            <div class="text-right">

                            </div>
                        </div>
                        <h6 class="text-sm mt-1 mb-0">  {{$account_info !=NULL ? $account_info->contact_no:'987654321'}}</h6>
                    </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step badge-danger">
                    <i class="ni ni-map-big"></i>
                  </span>
                    <div class="timeline-content">
                        <div class="d-flex justify-content-between pt-1">
                            <div>
                                <span class="text-muted text-sm font-weight-bold">Address</span>
                            </div>
                            <div class="text-right">
                                <small class="text-muted"></small>
                            </div>
                        </div>
                        <h6 class="text-sm mt-1 mb-0">  {{$account_info !=NULL ? $account_info->Address:'AAA BBBB CCCC'}}</h6>
                    </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step badge-info">
                    <i class="ni ni-email-83"></i>
                  </span>
                    <div class="timeline-content">
                        <div class="d-flex justify-content-between pt-1">
                            <div>
                                <span class="text-muted text-sm font-weight-bold">Email</span>
                            </div>
                            <div class="text-right">
                                <small class="text-muted"></small>
                            </div>
                        </div>
                        <h6 class="text-sm mt-1 mb-0">{{$account_info !=NULL ? $account_info->application_email:'a@b.com'}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- Footer -->


    <footer class="py-5" id="footer-main" >
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6" >
                    <div class="copyright text-center text-xl-left text-muted">
                        Crafted with <i class="fa fa-heart text-danger"></i> by {{$account_info !=NULL ? $account_info->application_name:'CHEF MENU'}}.
                    </div>
                </div>

            </div>
        </div>
    </footer>

@endsection
