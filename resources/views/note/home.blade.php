@extends('layout.mian_remove_sidebar_trash')
{{--home 回收站 分类--}}

@section('trash')

    <div id="sidebar" class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-lg-offset-1" style="margin-top: 80px">

        {{--回收站--}}
        <div class="list-group">
            <a href="#" class="list-group-item disabled" style="height: 40px;background-color: #ce8483">
                <span class="glyphicon  glyphicon-pushpin" style="float: right;"></span>
            </a>
            <a href="/trash" class="list-group-item"><h2 style="color: #843534"><span class="glyphicon glyphicon-trash"></span><span  style="float: right" >{{$num}} </span></h2></a>
        </div>





        {{--//分类侧边栏--}}

        <div class="list-group"  style="margin-top: 70px">
            <a href="#" class="list-group-item disabled" style="height: 40px;background-color: #fcf8e3">
                <span class="glyphicon  glyphicon-pushpin" style="float: right;"></span>
            </a>
            <a href="/posts/cate/科技" class="list-group-item"><label>科技</label>  <span class="badge">{{$cate[0]}}</span> </a>
            <a href="/posts/cate/文化" class="list-group-item"><label>文化</label>  <span class="badge">{{$cate[1]}}</span></a>
            <a href="/posts/cate/旅游" class="list-group-item"><label>旅游</label>  <span class="badge">{{$cate[2]}}</span></a>
            <a href="/posts/cate/其它" class="list-group-item"><label>其它</label>  <span class="badge">{{$cate[3]}}</span></a>
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
        <div style="height:130px;"></div>


    </div>
@endsection
