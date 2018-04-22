<!--登录注册页面的导航条-->
<nav class="navbar navbar-default navbar-fixed-top" style="box-shadow:0px 1px 5px;   opacity: 0.9;">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand" style="padding:0;"> <img src="{{URL::asset('/img/4.png')}}" style="height: 53px"/></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="margin-top:0;">
                <li  role="presentation"><a href="/register"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                <li  role="presentation"><a href="/login" ><span class="glyphicon glyphicon-user"></span> 登录</a></li>
                <li  role="presentation"><a href="#introduce"><span class="glyphicon glyphicon-list"></span> 简介</a></li>
            </ul>
        </div>
    </div>
</nav>
