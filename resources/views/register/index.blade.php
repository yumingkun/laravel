@extends('layout.mian_remove_sidebar')

@section('content')
    <div class="col-md-offset-3 col-md-6" style="margin-top: 100px">
        <div class="page-header">
            <h1 style="color: #b1b7ba">注册</h1>
        </div>

        <div class="panel panel-default">

            <div class="panel-heading">
              <span class="glyphicon glyphicon-user"></span>
            </div>
            <div class="panel-body">
                <form method="post" action="/register">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">用户名：</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required   >
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}" required   >
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" name="password" class="form-control" value="" required   >
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码：</label>
                        <input type="password" name="password_confirmation" class="form-control" value="" required  >
                    </div>
                    @include('layout.error')
                    <button type="submit" class="btn btn-primary">注册</button>
                </form>
            </div>
        </div>
    </div>
@stop
