<!--END-->
<!--END--><!DOCTYPE html><!--[if IE 7]>
<html class="ie7" lang="ru">
<![endif]-->
<!--[if IE 8]>
<html class="ie8" lang="ru">
<![endif]-->
<!--[if IE 9]>
<html class="ie9" lang="ru">
<![endif]-->
<!--[if IE 10]>
<html class="ie10" lang="ru">
<![endif]-->
<!--[if IE 11]>
<html class="ie11" lang="ru">
<![endif]-->
<!--[if gt IE 11]><!-->
<html lang="ru"> <!--<![endif]-->
<head>
    <title>{{$title ?? 'Товарный агрегатор Megano'}})</title>
    <meta name="description" content="Товарный агрегатор Megano">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link href="favicon.ico" rel="shortcut icon">
    @vite('resources/css/app.css')
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="Site">
<!--if lt IE 8
p.error-browser
    | Ваш браузер&nbsp;
    em устарел!&nbsp;
    a(href="http://browsehappy.com/") Выберите новую версию
        +s
        | браузера здесь&nbsp;
    | для правильного отображения сайта.
-->
<x-header>
{{$header ?? ''}}
@include('components.header')
</x-header>

@yield('content')

<x-footer>
    @include('components.footer')
</x-footer>
<script src="{{asset('js/plg/jQuery/jquery-3.5.0.slim.min.js')}}"></script>
<script src="{{asset('js/plg/form/jquery.form.js')}}"></script>
<script src="{{asset('js/plg/form/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('js/plg/range/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('js/plg/Slider/slick.min.js')}}"></script>
@vite('resources/js/app.js')
</body>
</html>
