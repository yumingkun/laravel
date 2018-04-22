@extends('layout.mian_remove_sidebar')

@section('content')
    <div class="col-md-offset-3 col-md-6" style="margin-top: 100px">
        <div class="page-header">
            <h1 style="color: #b1b7ba">登录</h1>
        </div>

        <div class="panel panel-default">

            <div class="panel-heading">
                <span class="glyphicon glyphicon-user"></span>
            </div>
            <div class="panel-body">
                <form method="post" action="/login">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}" required   >
                    </div>


                    <div class="form-group">
                        <label for="password"  >密码：</label>
                        <input type="password" name="password" class="form-control" value="" required>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name="is_remember"> 记住我
                        </label>
                    </div>

                    @include('layout.error')
                    <button class="btn   btn-primary  " type="submit">登陆</button>
                    <a href="{{ route('password.request') }}" class="btn  btn-warning">找回密码</a>
                    <a href="/register" class="btn  btn-success" type="submit" style="float: right">注册<span class="glyphicon glyphicon-menu-right"></span></a>

                </form>
            </div>
        </div>
    </div>
@stop
