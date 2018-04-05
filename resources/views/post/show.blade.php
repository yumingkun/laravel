@extends('layout.main')

@section('content')

        <div class="col-sm-8 " >
            <div>
                {{--//笔记详情--}}
                <div class="page-header">
                    <h1 style="color: #b1b7ba">笔记详情 </h1>
                </div>


                {{--//显示--}}
                <div >
                    <p class="blog-post-meta">{{$post->created_at}} by <a href="#"> </a></p>
                    <h2>{{$post->title }}&nbsp; &nbsp;<a href="/posts/{{$post->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a> <a href="/posts/{{$post->id}}/delete"><span class="glyphicon glyphicon-remove"></span></a></h2>
                    <br/>
                    {!! $post->content !!}
                    <div>
                        <a href="/posts/{{$post->id}}/zan" type="button" class="btn btn-primary btn-lg">赞</a>
                    </div>
                </div>
            </div>

            <div class="page-header" style="height: 300px"></div>

        </div>

@endsection
