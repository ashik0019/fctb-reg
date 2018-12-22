<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    <title>@yield('title') | {{config('app.name', 'FCTV - The Foundation of Chartered Taxation of Bangladesh ') }}</title>
    <meta name="description" content="CPAA - The British accounting association for Certified Public Accountants &amp; Practicing Accountants in public practice &amp; corporate financial management." />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="canonical" href="index.html"/>
    <link href='https://fonts.googleapis.com/css?family=Cabin:700,400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}">
    {{--<link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">--}}
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.fileupload.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.fileupload-ui.css')}}">
    {{--<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    {{--toastr js--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    @yield('css')
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":"/cookie-policy","theme":"light-bottom"};
    </script>
    <script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->
    <style>

    </style>
</head>
<body onunload="deleteAuthCookie()" style="font-size:1.6rem;">
@include('frontend.partial.header')
<div id="maincontent">
    @yield('content')
</div>
@include('frontend.partial.footer')
<script type="text/javascript">
    var UNITED_KINGDOM = "1183";
    var PRACTISING = "44";
    var NON_PRACTISING = "45";
    var FELLOWS = "47";
    var ASSOCIATE = "48";
    var NO_QUALIFICATION = "1241";
</script>
<script src="{{asset('frontend/js/scripts.js')}}"></script>
<fieldset>

    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquey.min.js')}}"></script>
    <script src="{{asset('frontend/js/select2.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- toastr js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script>
        @if($errors->any())
        @foreach($errors->all() as $error )
        toastr.error('{{$error}}','Error',{
            closeButton:true,
            progressBar:true
        });
        @endforeach
        @endif
    </script>

    @yield('js')
</fieldset>
</body>
<!-- Mirrored from www.acpa.org.uk/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Nov 2018 04:33:13 GMT -->
</html>
