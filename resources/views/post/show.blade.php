@extends("layout.mian_remove_sidebar_trash")

@section('content')

    <div class="col-md-8 col-md-offset-2 "  style="margin-top: 80px">

            <div>
                {{--//笔记详情--}}
                <div class="page-header">
                    <h1 style="color: #b1b7ba">笔记详情 </h1>
                </div>


                {{--//显示--}}
                <div >
                    <p >{{$post->created_at}}  <span class="glyphicon glyphicon-user"></span> {{$post->user->name}} &nbsp;&nbsp;<a href="/posts/{{$post->note}}"><span class="glyphicon glyphicon-book"></span> {{$post->note}}</a> </a> <span class="glyphicon glyphicon-tags" style="float: right">  {{ $post->cate ? $post->cate : '其它' }}</span></p>
                    <h2>{{$post->title }}&nbsp; &nbsp;</h2>
                    <br/>
                    <p>{!! $post->content !!}</p>
                    <div>
                        {{--<a href="/posts/{{$post->id}}/zan" type="button" class="btn btn-primary btn-lg">赞</a>--}}
                    </div>
                </div>
            </div>

            <div class="page-header" style="padding-top: 200px;">
                <h1>
                    <a href="/posts/{{$post->id}}/edit"><span class="glyphicon glyphicon-edit" style="color: #4cae4c"></span></a>


                    <a href="/posts/{{$post->id}}/delete"><span class="glyphicon glyphicon-trash" style="float: right;color: #bf5329"></span></a>
                </h1>
            </div>


        </div>

@endsection
