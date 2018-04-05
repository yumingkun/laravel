@extends("layout.main")

@section("content")

    <div class="col-sm-8  ">
        <form action="/posts/{{$post->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>标题</label>
                <input name="title" type="text" class="form-control" placeholder="标题" value="{{$post->title}}">

            </div>
            <div class="form-group">
                <label>内容</label>
                <textarea id="content" name="content" class="form-control" style="height:400px;max-height:500px;"  placeholder="这里是内容">
                    {{$post->content}}
                </textarea>
            </div>
            @include('layout.error')
            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>

    </div>


@endsection