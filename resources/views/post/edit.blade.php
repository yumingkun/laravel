@extends("layout.mian_remove_sidebar_trash")

@section("content")

    <div class="col-md-8 col-md-offset-2 " style="margin-top: 80px">

    <form action="/posts/{{$post->id}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label >所属笔记本</label>
                <select name="note"  class="form-control">
                    @foreach($notes as $note)
                        <option value="{{$note->note}}" class="form-control">{{$note->note}}</option><br/>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>标题</label>
                <input name="title" type="text" class="form-control" placeholder="标题" value="{{$post->title}}">

            </div>


            <div class="form-group">
                <laber >分类</laber>
                <select name="cate"  class="form-control">
                    <option value="{{$post->cate}}" class="form-control">{{$post->cate}}</option>
                    <option value="科技" class="form-control">科技</option>
                    <option value="文化" class="form-control">文化</option>
                    <option value="旅游" class="form-control">旅游</option>
                    @foreach($cates as $cate)
                        <option value="{{$cate->name}}" class="form-control">{{$cate->name}}</option>
                    @endforeach
                    <option value="其它" class="form-control">其它</option>
                </select>
            </div>

            <div class="form-group">
                <label>内容</label>
                <textarea id="content" name="content" class="form-control" style="height:500px;max-height:500px;"  placeholder="这里是内容">
                    {{$post->content}}
                </textarea>
            </div>
            @include('layout.error')
            <button type="submit" class="btn btn-default">提交 <span class="glyphicon glyphicon-ok"></span></button>
        </form>
        <br>
        <div class="page-header" ></div>

    </div>


@endsection