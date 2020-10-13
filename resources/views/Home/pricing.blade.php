@extends('Home.home_layout.registerpage')



@section('register_content')


    <style>

        * {
            box-sizing: border-box;
        }

        /* Create three columns of equal width */
        .columns {
            float: left;
            width: 33.3%;
            padding: 8px;
            background-color: #fff;
        }

        /* Style the list */
        .price {
            list-style-type: none;
            border: 1px solid #eee;
            margin: 0;
            padding: 0;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            background-color: #fff;
        }

        /* Add shadows on hover */
        .price:hover {
            box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
        }

        /* Pricing header */
        .price .header {
            background-color: #111;
            color: white;
            font-size: 25px;
        }

        /* List items */
        .price li {
            border-bottom: 1px solid #fff;
            padding: 20px;
            text-align: center;
        }

        /* Grey list item */
        .price .grey {
            background-color: #eee;
            font-size: 20px;
        }

        /* The "Sign Up" button */
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
        }

        /* Change the width of the three columns to 100%
        (to stack horizontally on small screens) */
        @media only screen and (max-width: 600px) {
            .columns {
                width: 100%;
            }
        }


    </style>

    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset($account_info !=NULL ? $account_info->application_logo:'assets_home/images/logo/logo.png')}}">
            </a>
            <a href="{{route('store_register')}}" class="btn btn-neutral btn-icon">

                <span class="nav-link-inner--text">Register</span>
            </a>

        </div>
    </nav>
    <!-- Main content -->


    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Choose the best plan for your business</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">

                @foreach($subscription as $data)


                <div class="col-lg-4">
                    <div class="pricing card-group flex-column flex-md-row mb-3">
                        <div class="card card-pricing border-0 text-center mb-4">
                            <div class="card-header bg-transparent">
                                <h4 class="text-uppercase ls-1 text-primary py-3 mb-0">{{$data->name}}</h4>
                            </div>
                            <div class="card-body px-lg-7">
                                <div class="display-2">{{$account_info != NULL ?$account_info->currency_symbol:"₹"}}{{preg_replace('~\.0+$~','',$data->price)}}</div>
                                <span class="text-danger">{{$data->days}} Days</span>
                                <ul class="list-unstyled my-4">
                                    <li>
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <span>{{$data->description}}</span>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                                <a href="{{route('store_register')}}" class="btn btn-primary mb-3">Start with {{$data->name}}</a>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('store_register')}}" class="text-light">Request a demo</a>
                            </div>
                        </div>

                    </div>




                </div>

                @endforeach



            </div>

    </div>









@endsection
