<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VSG</title>
    <link rel="icon" href="{{asset('icons/favicon.png') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/styles.min.css')}}">
    <!-- Datepicker calendar -->
    <style>
        .ui-datepicker td.ui-state-disabled>span {
            background: #ff6633;
        }
        .ui-datepicker td.ui-state-disabled {
            opacity: 100;
        }
    </style>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

</head>

<body>
<div style="left: 0;top: 0;content: url({{asset('frontend/assets/img/background_key.jpg')}});position: fixed;width: 100%;height: 100%;z-index: -1;"></div>
<header>
    <p style="text-align: right;color: var(--bs-white);margin-right: 30px;padding-top: 20px;">
        <i class="fas fa-phone"></i>&nbsp;{{$profile->phone_1}}&nbsp;&nbsp;
        <a href="{{$profile->facebook}}"><i class="icon ion-social-facebook"></i></a>&nbsp;&nbsp;
        <a href="{{$profile->instagram}}"><i class="icon ion-social-instagram"></i></a>
    </p>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top">
        <div class="container-fluid"><a class="navbar-brand" href="{{url('/')}}" style="background: url({{asset('frontend/assets/img/background_key.jpg')}}) center / cover no-repeat;width: 150px;height: 70px;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{url('/aboutus')}}">За нас</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{url('/')}}">Настаняване</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/condition')}}" style="color: rgb(255,255,255);">Общи условия</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/shared')}}" style="color: rgb(255,255,255);">Споделено с нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}" style="color: rgb(255,255,255);">Контакти</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<hr>