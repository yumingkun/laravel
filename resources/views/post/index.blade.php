@extends('layout.main')

@section('content')
        <div class="col-sm-8 blog-main">
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
            </div>        <div style="height: 20px;">
            </div>
            {{--文章面板列表--}}
            <div>
                @foreach($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4><a href="/posts/{{$post->id}}" >{{$post->title}}<button class="btn btn-default btn-xs" style="float: right">详情</button></a></h4>
                        <p  >{{$post->created_at}} <span class="glyphicon glyphicon-user"></span><a href="/user/5"></a></p>
                    </div>
                    <div class="panel-footer"><?php echo strip_tags(str_limit($post->content,'150','...')); ?></div>
                </div>
                @endforeach

            </div>
            {{--分页--}}
            {{$posts->links()}}
        </div>
@endsection
