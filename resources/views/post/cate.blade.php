@extends('layout.mian_remove_sidebar_trash')
{{--主页 回收站 分类--}}

@section('trash')


<div class="col-md-8  col-md-offset-2 " style="margin-top: 80px">

        {{--分类列表--}}
        <div class="page-header">
            <h1 style="color: #b1b7ba"><span class="glyphicon glyphicon-tags"></span>  -{{$name}}</h1>
        </div>

        @foreach($posts as $post)

            <div class="panel panel-warning" >
                <div class="panel-heading">
                    <p>  <h4><a href="/posts/show/{{$post->id}}" >{{$post->title}} </a></h4> </p>

                    <p  >{{$post->created_at}} <span class="glyphicon glyphicon-user"></span>  {{$post->user->name}}&nbsp;&nbsp;<a href="/posts/{{$post->note}}"><span class="glyphicon glyphicon-book"></span> {{$post->note}}</a> <span class="glyphicon glyphicon-tags" style="float: right" > {{ $post->cate ? $post->cate : '其它' }}</span> </p>
                </div>
                <div class="panel-body">
                    <?php echo strip_tags(str_limit($post->content,'200','...')); ?>
                </div>
            </div>

        @endforeach
        {{--分页--}}
        {{$posts->links()}}



</div>


@endsection
