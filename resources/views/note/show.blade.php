@extends('layout.mian_remove_sidebar_trash')
{{--主页 回收站 分类--}}

@section('content')
    <div class="col-md-8 col-md-offset-2" style="margin-top: 120px">

        @if(Session::has('message1'))
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong> {{Session::get('message1')}}</strong>
            </div>
        @endif

        <div>


        @foreach($notes as $note)

                    <div class="col-sm-3 col-md-4">
                        <div class="thumbnail">
                            <img src="{{URL::asset('/img/biji.jpg')}}"
                                 alt="通用的占位符缩略图">
                            <div class="caption">
                                <a href="/posts/{{$note->note}}"><h3>{{$note->note}}</h3></a>
                                <p><span class="glyphicon glyphicon-time"> </span>  </sapn>{{$note->created_at}}</p>
                                <p>
                                    <a href="/note/delete/{{$note->id}}" class="btn btn-danger" role="button">
                                        直接删除
                                    </a>
                                    {{--{{$num}}--}}
                                    <a href="/note/{{$note->id}}/edit" class="btn btn-warning" role="button" style="float: right">
                                        更名改姓
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>


            @endforeach

        </div>

    </div>
@endsection





