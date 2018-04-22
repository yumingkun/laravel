@extends("layout.mian_remove_sidebar_trash")

@section('content')
    <div class="col-md-8 col-md-offset-2 " style="margin-top: 80px">

        <div class="page-header">
            <h1 style="color: #b1b7ba">回收站列表</h1>
        </div>

        {{--具体操作--}}
    <!-- Single button -->
        <div class="btn-group btn-group-justified" role="group"  style="margin-bottom: 20px;">
            <div class="btn-group" role="group">
               <a href="/recover"><button type="button" class="btn btn-success" >恢复全部</button></a>
            </div>
            <div class="btn-group" role="group">
               {{--<a href="#"> <button type="button" class="btn btn-default">恢复最新删除</button></a>--}}
            </div>
            <div class="btn-group" role="group">
               <a href="/trash_all"><button type="button" class="btn btn-danger"  >彻底删除</button></a>
            </div>
        </div>
        {{--删除列表--}}
        <div>
            @foreach($posts as $post)

                <div class="panel panel-danger" >
                    <div class="panel-heading">
                        <h4>{{$post->title}}  <a href="/delete_one/{{$post->id}}"><button class="btn btn-danger btn-xs" style="float: right">删除</button></a> </span>  <a href="/recover_one/{{$post->id}}" > <button class="btn btn-success btn-xs"  style="float: right"> 还原</button> </a>   </h4>
                        <p  >{{$post->created_at}} <span class="glyphicon glyphicon-user"></span>  {{$post->user->name}}  &nbsp;&nbsp;<a href="/posts/{{$post->note}}"><span class="glyphicon glyphicon-book"></span> {{$post->note}}</a> <span class="glyphicon glyphicon-tags" style="float: right" > {{ $post->cate ? $post->cate : '其它' }}</span> </p>
                    </div>
                    <div class="panel-body">
                        <?php echo strip_tags(str_limit($post->content,'200','...')); ?>
                    </div>
                </div>
            @endforeach
        </div>


        {{--分页--}}
        {{$posts->links()}}
        <div class="page-header" style="margin-top: 100px"></div>

    </div>
@endsection
