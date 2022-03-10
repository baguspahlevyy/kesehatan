<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Human Resouce Development') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

 

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetlogin/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetlogin/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetlogin/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetlogin/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetlogin/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetlogin/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetlogin/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetlogin/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetlogin/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/preloader.css') }}">
<!--===============================================================================================-->

    <style type="text/css">
        .spinner3 .dot1,.spinner3 .dot2,.spinner6 div,.spinner7>div{background-color:#fff;display:inline-block}.fakeLoader{position:fixed;width:100%;height:100%;left:0;top:0;z-index:9999999999}.spinner1{position:fixed;width:50px;height:50px;top:calc(50% - 50px/2);left:calc(50% - 50px/2)}.spinner1 .double-bounce1,.spinner1 .double-bounce2{width:100%;height:100%;border-radius:50%;background-color:#fff;opacity:.6;position:absolute;top:0;left:0;-webkit-animation:bounce 2s infinite ease-in-out;animation:bounce 2s infinite ease-in-out}.spinner1 .double-bounce2{-webkit-animation-delay:-1s;animation-delay:-1s}@-webkit-keyframes bounce{0%,100%{transform:scale(0);-webkit-transform:scale(0)}50%{transform:scale(1);-webkit-transform:scale(1)}}@keyframes bounce{0%,100%{transform:scale(0);-webkit-transform:scale(0)}50%{transform:scale(1);-webkit-transform:scale(1)}}.spinner2{position:fixed;width:40px;height:40px;top:calc(50% - 40px/2);left:calc(50% - 40px/2)}.spinner2 .spinner-container{position:absolute;width:100%;height:100%}.spinner2 .spinner-container.container2{-webkit-transform:rotateZ(45deg);transform:rotateZ(45deg)}.spinner2 .spinner-container.container3{-webkit-transform:rotateZ(90deg);transform:rotateZ(90deg)}.spinner2 .spinner-container .circle1{top:0;left:0}.spinner2 .spinner-container .circle2{top:0;right:0}.spinner2 .spinner-container .circle3{right:0;bottom:0}.spinner2 .spinner-container .circle4{left:0;bottom:0}.spinner2 .container1 div,.spinner2 .container2 div,.spinner2 .container3 div{width:6px;height:6px;background-color:#fff;border-radius:100%;position:absolute;-webkit-animation:bouncedelay 1.2s infinite ease-in-out;animation:bouncedelay 1.2s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner2 .container1 .circle2{-webkit-animation-delay:-.9s;animation-delay:-.9s}.spinner2 .container1 .circle3{-webkit-animation-delay:-.6s;animation-delay:-.6s}.spinner2 .container1 .circle4{-webkit-animation-delay:-.3s;animation-delay:-.3s}.spinner2 .container2 .circle1{-webkit-animation-delay:-1.1s;animation-delay:-1.1s}.spinner2 .container2 .circle2{-webkit-animation-delay:-.8s;animation-delay:-.8s}.spinner2 .container2 .circle3{-webkit-animation-delay:-.5s;animation-delay:-.5s}.spinner2 .container2 .circle4{-webkit-animation-delay:-.2s;animation-delay:-.2s}.spinner2 .container3 .circle1{-webkit-animation-delay:-1s;animation-delay:-1s}.spinner2 .container3 .circle2{-webkit-animation-delay:-.7s;animation-delay:-.7s}.spinner2 .container3 .circle3{-webkit-animation-delay:-.4s;animation-delay:-.4s}.spinner2 .container3 .circle4{-webkit-animation-delay:-.1s;animation-delay:-.1s}@-webkit-keyframes bouncedelay{0%,100%,80%{transform:scale(0);-webkit-transform:scale(0)}40%{transform:scale(1);-webkit-transform:scale(1)}}@keyframes bouncedelay{0%,100%,80%{transform:scale(0);-webkit-transform:scale(0)}40%{transform:scale(1);-webkit-transform:scale(1)}}.spinner3{position:fixed;width:50px;height:50px;top:calc(50% - 50px/2);left:calc(50% - 50px/2);-webkit-animation:rotate 2s infinite linear;animation:rotate 2s infinite linear}.spinner3 .dot1,.spinner3 .dot2{width:60%;height:60%;position:absolute;top:0;border-radius:100%;-webkit-animation:bounce 2s infinite ease-in-out;animation:bounce 2s infinite ease-in-out}.spinner3 .dot2{top:auto;bottom:0;-webkit-animation-delay:-1s;animation-delay:-1s}@-webkit-keyframes rotate{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes rotate{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes bounce{0%,100%{-webkit-transform:scale(0);transform:scale(0)}50%{-webkit-transform:scale(1);transform:scale(1)}}.spinner4{position:fixed;width:35px;height:35px;top:calc(50% - 35px/2);left:calc(50% - 35px/2);background-color:#fff;-webkit-animation:rotateplane 1.2s infinite ease-in-out;animation:rotateplane 1.2s infinite ease-in-out}@-webkit-keyframes rotateplane{0%{-webkit-transform:perspective(120px) rotateX(0) rotateY(0);transform:perspective(120px) rotateX(0) rotateY(0)}50%{-webkit-transform:perspective(120px) rotateX(-180.1deg) rotateY(0);transform:perspective(120px) rotateX(-180.1deg) rotateY(0)}100%{-webkit-transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg);transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg)}}@keyframes rotateplane{0%{-webkit-transform:perspective(120px) rotateX(0) rotateY(0);transform:perspective(120px) rotateX(0) rotateY(0)}50%{-webkit-transform:perspective(120px) rotateX(-180.1deg) rotateY(0);transform:perspective(120px) rotateX(-180.1deg) rotateY(0)}100%{-webkit-transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg);transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg)}}.spinner5{position:fixed;width:50px;height:50px;top:calc(50% - 50px/2);left:calc(50% - 50px/2)}.spinner5 .cube1,.spinner5 .cube2{background-color:#fff;width:15px;height:15px;position:absolute;top:0;left:0;-webkit-animation:cubemove 1.8s infinite ease-in-out;animation:cubemove 1.8s infinite ease-in-out}.spinner5 .cube2{-webkit-animation-delay:-.9s;animation-delay:-.9s}@-webkit-keyframes cubemove{25%{-webkit-transform:translateX(42px) rotate(-90deg) scale(.5);transform:translateX(42px) rotate(-90deg) scale(.5)}50%{-webkit-transform:translateX(42px) translateY(42px) rotate(-179deg);transform:translateX(42px) translateY(42px) rotate(-179deg)}50.1%{-webkit-transform:translateX(42px) translateY(42px) rotate(-180deg);transform:translateX(42px) translateY(42px) rotate(-180deg)}75%{-webkit-transform:translateX(0) translateY(42px) rotate(-270deg) scale(.5);transform:translateX(0) translateY(42px) rotate(-270deg) scale(.5)}100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}}@keyframes cubemove{25%{-webkit-transform:translateX(42px) rotate(-90deg) scale(.5);transform:translateX(42px) rotate(-90deg) scale(.5)}50%{-webkit-transform:translateX(42px) translateY(42px) rotate(-179deg);transform:translateX(42px) translateY(42px) rotate(-179deg)}50.1%{-webkit-transform:translateX(42px) translateY(42px) rotate(-180deg);transform:translateX(42px) translateY(42px) rotate(-180deg)}75%{-webkit-transform:translateX(0) translateY(42px) rotate(-270deg) scale(.5);transform:translateX(0) translateY(42px) rotate(-270deg) scale(.5)}100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}}.spinner6{position:fixed;width:50px;height:35px;top:calc(50% - 35px/2);left:calc(50% - 50px/2)}.spinner6 div{height:100%;width:5px;margin-left:2px;-webkit-animation:stretchdelay 1.2s infinite ease-in-out;animation:stretchdelay 1.2s infinite ease-in-out}.spinner6 .rect2{-webkit-animation-delay:-1.1s;animation-delay:-1.1s}.spinner6 .rect3{-webkit-animation-delay:-1s;animation-delay:-1s}.spinner6 .rect4{-webkit-animation-delay:-.9s;animation-delay:-.9s}.spinner6 .rect5{-webkit-animation-delay:-.8s;animation-delay:-.8s}@keyframes stretchdelay{0%,100%,40%{-webkit-transform:scaleY(.4);transform:scaleY(.4)}20%{-webkit-transform:scaleY(1);transform:scaleY(1)}}.spinner7{position:fixed;width:90px;height:30px;text-align:center;top:calc(50% - 30px/2);left:calc(50% - 90px/2)}.spinner7>div{height:15px;width:15px;margin-left:3px;border-radius:50%;-webkit-animation:stretchdelay .7s infinite ease-in-out;animation:stretchdelay .7s infinite ease-in-out}.spinner7 .circ2{-webkit-animation-delay:-.6s;animation-delay:-.6s}.spinner7 .circ3{-webkit-animation-delay:-.5s;animation-delay:-.5s}.spinner7 .circ4{-webkit-animation-delay:-.4s;animation-delay:-.4s}.spinner7 .circ5{-webkit-animation-delay:-.3s;animation-delay:-.3s}@-webkit-keyframes stretchdelay{0%,100%,40%{-webkit-transform:translateY(-10px)}20%{-webkit-transform:translateY(-20px)}}@keyframes stretchdelay{0%,100%,40%{transform:translateY(-10px);-webkit-transform:translateY(-10px)}20%{transform:translateY(-20px);-webkit-transform:translateY(-20px)}}
    </style>
</head>
<body >
<div class="fakeloader"></div>
    <div class="limiter">

        <div class="container-login100" style="background-image: url('assetlogin/images/bg-01.jpg');">
            
                      
            <div class="wrap-login100">


                
                @yield('content')

            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="{{ asset('assetlogin/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('assetlogin/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('assetlogin/vendor/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assetlogin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('assetlogin/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('assetlogin/vendor/daterangepicker/moment.min.js') }}"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
    <script src="{{ asset('assetlogin/js/main.js') }}"></script>
    <script src="{{ asset('js/preloader.js') }}"></script>

</body>
</html>

