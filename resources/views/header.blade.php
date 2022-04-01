<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>119 Passover Celebration Seat Registration</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
      WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
      });
    </script>

    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!-- <link href="../../../assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="{{asset('css/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    
    <!-- <link href="../../../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" /> -->
    <link href="{{asset('css/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <!-- <link rel="shortcut icon" href="../../../assets/demo/default/media/img/logo/favicon.ico" /> -->
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon')}}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon')}}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon')}}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon')}}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon')}}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon')}}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon')}}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon')}}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon')}}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicon')}}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon')}}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon')}}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon')}}/favicon-16x16.png">
    <link rel="manifest" href="{{asset('favicon')}}/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('favicon')}}/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <style type="text/css">
        body, .form-control {
            font-family: "Barlow", Times, serif !important;
        }

        .m-login.m-login--5 .m-login__wrapper-2 {
            padding-top: 5%;
        }

        #submit-btn {
            background-color: #F36E23;
            border-color: #F36E23;
            font-family: "Barlow";
            font-weight: 600;
            padding: 0.7rem 2rem;
            border-radius: 0.7rem;
        }

        .m-login.m-login--5 .m-login__wrapper-2 .m-login__contanier .m-login__form .m-form__group .form-control {
            border-bottom: 2px solid #453939;
            padding: 1.1rem 0;
        }

        .form-control:focus {
            border-color: #F36E23 !important;
        }

        .m-login__form .form-control:focus::-webkit-input-placeholder {
            color: #F36E23 !important;
        }

        .m-login__form .form-control:focus:-moz-placeholder {
            color: #F36E23 !important;
        }

        /* Firefox > 19 */
        .m-login__form .form-control:focus::-moz-placeholder {
            color: #F36E23 !important;
        }

        /* Internet Explorer 10 */
        .m-login__form .form-control:focus:-ms-input-placeholder {
            color: #F36E23 !important;
        }

        ::placeholder {
            text-transform: uppercase;
        };
    </style>
</head>