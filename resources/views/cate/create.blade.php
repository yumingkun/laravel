@extends("layout.mian_remove_sidebar_trash")

@section('content')
    <div class="col-md-8 col-md-offset-2 " style="margin-top: 80px">

        <div class="page-header">
            <h1 style="color: #b1b7ba">新建类别</h1>
        </div>

        {{--错误提示--}}
        @if(count($errors)>0)
            <div class="alert alert-danger " role="alert">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif

        <form action="/posts/cate_s/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>类名</label>
                <br/>
                <input name="name" type="text" class="form-control" placeholder="类名">
            </div>
            <button type="submit" class="btn btn-success">提交 <span class="glyphicon glyphicon-ok"></span></button>
        </form>

        <div class="page-header" style="height: 340px"> </div>

    </div>
@endsection
