@extends('layout.mian_remove_sidebar')

@section('content')
    <div class="col-md-8 col-md-offset-2" style="margin-top: 100px">

        <div class="page-header">
            <h1 style="color: #b1b7ba">发送邮件</h1>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">重置密码</div>
            <div class="panel-body">

                @if (session('status'))
                    <div class="alert alert-success">
                        <p>成功发送，注意接收</p>
                    </div>
                @endif

                <form class="form-horizontal" method="post" action="{{ route('password.email') }}">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">邮箱地址：</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-default">
                                发送密码重置邮件
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection