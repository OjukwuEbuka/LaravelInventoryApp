<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', "")</title>

    <!-- Fonts -->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet"> -->

    <!-- Materialize Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/material-icons.css') }}">

    <!-- Materialize Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}" media="screen,projection" />

    <script src="{{ asset('assets/js/jquery/jquery-3.4.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/materialize.min.js') }}"></script>

        <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    
    <style>
        
        .borderRound{
            border:0.1rem solid {{$school->themeColor}};
        }

        .borderBot{
            border-bottom:0.1rem solid {{$school->themeColor}};
        }
    </style>

</head>


    <body class="grey lighten-5">

        <!-- Includes the HEADER section of the body -->
        {{--@include('schools.inc.school')--}}

        <!-- Site Header -->
        <header>

        <!-- Nav Bar -->
        <div class="navbar-fixed">
            <nav style="background-color: {{ $school->themeColor }}">
                <div class="nav-wrapper">
                    <!-- Nav Bar Logo -->
                    <a href="/schools/{{ $school->id }}" class="">
                    <img src="/storage/images/photo/school/{{$school->logo}}" id="schoolBadge" alt="logoImage" class="responsive-img circle" width="55px" height="55px" />
                    </a>
                    <a href="/schools/{{ $school->id }}" style="padding-left:60px" id="schoolName" class="brand-logo hide-on-med-and-down">{{ $school->name }}</a>

                    <!-- Side nav Trigger -->
                    <a data-target="mobile-demo" href="#" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>

                    <!-- Items on the nav bar -->
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="/logout">Logout</a>
                        </li>

                        <!-- <li>
                            <a href="/about">About Us</a>
                        </li>

                        <li>
                            <a href="/contact">Contact Us</a>
                        </li> -->
                    </ul>

                </div>
            </nav>
        </div>

        <!-- Side Nav -->
        <ul class="sidenav" id="mobile-demo">
            <li>
                <a href="/logout">Logout</a>
            </li>

            <!-- <li>
                <a href="/about">About Us</a>
            </li>

            <li>
                <a href="/contact">Contact Us</a>
            </li> -->
        </ul>
        </header>

        <div class="container">

            @yield('content')
        </div>
        <!-- Includes the FOOTER section of the body -->
        @include('includes.layout.body_footer')

    </body>
</html>