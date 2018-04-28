@extends("layout.mian_remove_sidebar_trash")

@section('content')
    <div class="col-md-8 col-md-offset-2 " style="margin-top: 80px">

        <div class="page-header">
            <h1 style="color: #b1b7ba">自定义笔记本名</h1>
        </div>

        {{--错误提示--}}
        @if(count($errors)>0)
            <div class="alert alert-danger " role="alert">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif

        <form action="/new_notebook_store" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>笔记本名</label>
                <br/>
                <input name="note" type="text" class="form-control" placeholder="笔记本">
            </div>
            <button type="submit" class="btn btn-success">提交 <span class="glyphicon glyphicon-ok"></span></button>
        </form>

        <div class="page-header" style="height: 340px"> </div>

    </div>
@endsection
