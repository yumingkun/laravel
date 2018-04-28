@extends('layout.mian_remove_sidebar_trash')
{{--home 回收站 分类--}}

@section('trash')

    <div id="sidebar" class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-lg-offset-1" style="margin-top: 80px">

        {{--回收站--}}
        @if(Session::has('message8'))
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong> {{Session::get('message8')}}</strong>
            </div>
        @endif
        <div class="list-group">
            <a href="#" class="list-group-item disabled" style="height: 40px;background-color: #ce8483">
                <span class="glyphicon  glyphicon-pushpin" style="float: right;"></span>
            </a>
            <a href="/trash" class="list-group-item"><h2 style="color: #843534"><span class="glyphicon glyphicon-trash"></span><span  style="float: right" >{{$num}} </span></h2></a>

        </div>





        {{--//分类侧边栏--}}

        <div class="list-group"  >
            <a href="#" class="list-group-item disabled" style="height: 40px;background-color: #fcf8e3">
                <span class="glyphicon  glyphicon-pushpin" style="float: right;"></span>
            </a>
            {{--<a href="/posts/cate/科技" class="list-group-item"><label>科技</label>  <span class="glyphicon glyphicon-tag" style="float: right"> </span> </a>--}}
            {{--<a href="/posts/cate/文化" class="list-group-item"><label>文化</label>  <span class="glyphicon glyphicon-tag" style="float: right"> </span></a>--}}
            {{--<a href="/posts/cate/旅游" class="list-group-item"><label>旅游</label>  <span class="glyphicon glyphicon-tag" style="float: right"> </span></a>--}}
            {{--<a href="/posts/cate/其它" class="list-group-item"><label>其它</label>  <span class="glyphicon glyphicon-tag" style="float: right"> </span></a>--}}
            @foreach($cate as $cate)
                <p  class="list-group-item"><a href="/posts/cate/{{$cate->cate}}"><label>{{$cate->cate}}</label>  <span class="badge"  style="margin-left: 10px; ">{{$cate->num}}</span></a> <a href="/posts/cate_delete/{{$cate->cate}}"  ><span class="glyphicon glyphicon-minus"  style="float: right"></span></a></p>
            @endforeach

            {{--@foreach($cates as $cate)--}}
                {{--<a href="/posts/cate/{{$cate->name}}" class="list-group-item"><label>{{$cate->name}}</label>  <span class="badge" ></span></a>--}}
            {{--@endforeach--}}

            <a href="/posts/cate_s/create" class="list-group-item"><label>新建</label>  <span class="glyphicon glyphicon-plus" style="float: right"></span></a>

            @if(Session::has('message3'))
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong> {{Session::get('message3')}}</strong>
                </div>
            @endif
        </div>

    </div>



@endsection


@section('content')
    <div class="col-md-8 " style="margin-top: 80px">
        <div>
            <div id="carousel-example" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example" data-slide-to="1"></li>
                    <li data-target="#carousel-example" data-slide-to="2"></li>
                </ol><!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{URL::asset('/img/1.jpg')}}"/>
                        <div class="carousel-caption">...</div>
                    </div>
                    <div class="item">
                        <img src="{{URL::asset('/img/2.jpg')}}"/>
                        <div class="carousel-caption">...</div>
                    </div>
                    <div class="item">
                        <img src="{{URL::asset('/img/3.jpg')}}"/>
                        <div class="carousel-caption">...</div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <div style="height:200px;"></div>


    </div>
@endsection
