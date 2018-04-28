@extends("layout.mian_remove_sidebar_trash")

@section('content')
    <div class="col-md-8 col-md-offset-2 " style="margin-top: 80px">

        <div class="page-header">
            <h1 style="color: #b1b7ba">修改密码</h1>
        </div>



        <form action="/change/password" method="POST">
            {{csrf_field()}}
            @include('layout.error')
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong> {{Session::get('message')}}</strong>
                </div>
            @endif
            <div class="form-group">
                <label for="oldpassword">旧密码：</label>
                <input type="password" name="oldpassword" class="form-control" value="" required   >
            </div>
            <div class="form-group">
                <label for="newpassword">新密码：</label>
                <input type="password" name="newpassword" class="form-control" value="" required   >
            </div>

            <button type="submit" class="btn btn-warning">修改</button>
        </form>

        <div class="page-header" style="height: 260px"> </div>

    </div>
@endsection
