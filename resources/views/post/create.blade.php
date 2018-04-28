@extends("layout.mian_remove_sidebar_trash")

@section("content")

    <div class="col-md-8 col-md-offset-2 "  style="margin-top: 80px">


        <form action="/posts" method="POST">
            {{csrf_field()}}
            @if(Session::has('message2'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong> {{Session::get('message2')}}</strong>
                </div>
            @endif


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
                <input name="title" type="text" class="form-control" placeholder="这里是标题">
            </div>

            <div class="form-group">
                <label>标签</label>
                <select name="cate"  class="form-control">
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
                <textarea id="content"  style="height:500px;max-height:500px;" name="content" class="form-control" placeholder="这里是内容">

                </textarea>
            </div>


            {{--错误提示--}}
            @if(count($errors)>0)
                <div class="alert alert-danger " role="alert">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <button type="submit" class="btn btn-default">提交 <span class="glyphicon glyphicon-ok"></span></button>

        </form>


        <br/>
    </div>


@endsection