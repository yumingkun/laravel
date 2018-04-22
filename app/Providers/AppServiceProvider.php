<?php

namespace App\Providers;

use App\Http\Controllers\PostController;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot( )
    {
        Schema::defaultStringlength(191);
//
//        //设置视图共享数据
//        $id=Auth::id();//门脸类获取当前用户id
//        //查看被软删除的模型
////        $posts = Post::onlyTrashed()->where('user_id','=',$id)->get();
//////        dd($posts);
////        $num=$posts->count();
////        dd($num);获取软删除个数
////       视图共享数据
//
//        view()->share('num',$id);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
