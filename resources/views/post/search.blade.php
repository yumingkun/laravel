@extends("layout.mian_remove_sidebar_trash")

@section('content')
    <div class="col-md-8 col-md-offset-2 " style="margin-top: 80px">


    {{--//搜索列表 --}}
        <div class="page-header">
            <h1 style="color: #b1b7ba">搜索结果共：{{$num}}条</h1>
        </div>



        {{--文章面板列表--}}
        <div>
            @foreach($posts as $post)
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <h4><a href="/posts/show/{{$post->id}}" >{{$post->title}} </a></h4>
                            <p  >{{$post->created_at}} <span class="glyphicon glyphicon-user"></span> {{$post->user->name}} &nbsp;&nbsp;<a href="/posts/{{$post->note}}"><span class="glyphicon glyphicon-book"></span> {{$post->note}}</a> <span class="glyphicon glyphicon-tags" style="float: right" > {{ $post->cate ? $post->cate : '其它' }}</span></p>
                        </div>
                        <div class="panel-body">
                            <?php echo strip_tags(str_limit($post->content,'200','...')); ?>
                        </div>
                    </div>

            @endforeach
        </div>

             {{--搜索结果分页失败--}}
        {{--{{$posts->links()}}--}}

        {{--顶部横杆--}}
        <div class="page-header">

        </div>
    </div>
@endsection
