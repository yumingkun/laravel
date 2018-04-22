<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>笔记</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <script src="/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/wangEditor.min.css">





{{--富文本框--}}
<!-- 注意， 只需要引用 JS，无需引用任何 CSS ！！！-->


</head>

<body  style="color: #8c8c8c">

@include('layout.nav_index')

<div class="container">


    <div class="row">

        @yield('content')

        {{--@include('layout.sidebar')--}}


    </div>

</div>
{{--简介--}}
@include('layout.intro')

@include('layout.footer')

<script type="text/javascript" src="/js/wangEditor.min.js"></script>
<script type="text/javascript"  src="/js/ylaravel.js"></script>


</body>
</html>
