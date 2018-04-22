<nav class="navbar navbar-default  navbar-fixed-top" style="padding-left: 100px;padding-right: 50px;box-shadow:0px 1px 5px;   opacity: 0.9 ">
    <div >
        {{--导航条--}}
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav " >
                <li style="margin-right:30px"><a href="/home">Home <span class="glyphicon glyphicon-home"></span></a></li>
                <li  ><a href="/show_note">笔记本列表 <span class="glyphicon glyphicon-th-list"></span></a></li>
                <li ><a href="/new_notebook">新建笔记本<span class="glyphicon glyphicon-plus-sign"></span></a> </li>


            </ul>

            <form method="post" action="/post/search" class="navbar-form navbar-left">

                <div class="form-group">
                    <input name="search" type="text" value="" class="form-control"  placeholder="搜索笔记">
                    {{csrf_field()}}
                </div>
                <button class="btn btn-default"  type="submit" ><span class="glyphicon glyphicon-search"></span></button>
            </form>

            <ul class="nav navbar-nav navbar-right"  >
                <li ><a href="/create">新加笔记<span class="glyphicon glyphicon-pencil"></span></a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user">-</span>{{\Auth::user()->name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/chat">聊天室</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="/logout">登出</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>





