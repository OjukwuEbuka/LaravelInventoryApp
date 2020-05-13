<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', "Welcome to TST School CMS")</title>

    <!-- Fonts -->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet"> -->

    <!-- Materialize Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/material-icons.css') }}">

    <!-- Materialize Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}" media="screen,projection" />

       
        <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    

    
    <style>

        .verticalTableHeader {
            /* text-align:center; */
            max-width:10px;
            font-size:12px;
            /* white-space:nowrap; */
            /* transform-origin:50% 50%; */
            transform: rotate(90deg);
            /* vertical-align:baseline; */
            /* padding-left:0 !important;
            padding-right:10px !important; */
        }

        .subjectsDiv {
            /*-ms-transform: rotate(-90deg); /* IE 9 */
            /*-webkit-transform: rotate(-90deg); /* Chrome, Safari, Opera */
            transform: rotate(-90deg);
            width:100px;
            height:100%;
            text-align:left;
            padding:0px;
            /* background:#FFF; */
            
        }
        .subjectsDivTd {
        
            max-width:30px;
            min-width:30px;
            border:1px solid;
            overflow:hidden;
            margin:0px;
            padding:0px;
            background:#000;
        }

        .numInput{
            width:50px !important;
            background-color:#ddd !important;
            border-radius:5px !important;
        }
            
        #video {
        border: 1px solid black;
        /* box-shadow: 2px 2px 3px black; */
        width:180px;
        height:140px;
        }

        .colCode{
            background-color: {{ $school->themeColor ?: 'blue'}}
        }

        .colCode:hover{
            background-color: {{ $school->themeColor ?: 'blue'}}
        }

        .colCode:after{
            background-color: {{ $school->themeColor ?: 'blue'}}
        }

        #photo {
        border: 1px solid black;
        /* box-shadow: 2px 2px 3px black; */
        width:180px;
        height:140px;
        }

        #canvas {
        display:none;
        }

        /* .camera {
        width: 180px;
        display:inline-block;
        } */

        .output {
        width: 180px;
        display:inline-block;
        }

        .borderRound{
            border:0.1rem solid {{$school->themeColor}};
        }

        .borderBot{
            border-bottom:0.1rem solid {{$school->themeColor}};
        }
    </style>

</head>
