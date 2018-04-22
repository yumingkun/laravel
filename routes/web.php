<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//主页
Route::get('/home','PostController@home');

//创建笔记本名字
Route::get('/new_notebook','NoteController@new_notebook');
//将笔记本名字插入数据库
Route::post('/new_notebook_store','NoteController@new_notebook_store');
//展示笔记本名字列表
Route::get('/show_note','NoteController@show_note');
//展示编辑视图
Route::get('/note/{note}/edit','NoteController@edit');
//处理表单post过来的新笔记本名
Route::post('/note/{note}','NoteController@update');

//删除笔记本
Route::get('/note/delete/{note}','NoteController@delete');




//笔记本列表页
Route::get('/posts/{note?}','PostController@index');

//笔记详情页
Route::get('/posts/show/{post}','PostController@show');
//创建笔记
Route::get('/create','PostController@create');
Route::post('/posts','PostController@store') ;
//编辑笔记
Route::get('/posts/{post}/edit','PostController@edit');

Route::post('/posts/{post}','PostController@update');
//删除笔记
Route::get('/posts/{post}/delete','PostController@delete');

//搜索
Route::post('/post/search','PostController@search');

//回收站点开详情
Route::get('/trash','PostController@trash');
//恢复所有笔记
Route::get('/recover','PostController@recover');

//清空回收站
Route::get('/trash_all','PostController@trash_all');

//删除单个
Route::get('/delete_one/{id}','PostController@delete_one');
//恢复单个
Route::get('/recover_one/{id}','PostController@recover_one');

//文章分类页等等
Route::get('/posts/cate/{name}','PostController@cate');







//注册登录个人设置
//注册页面
Route::get('/register','RegisterController@index');
//注册行为
Route::post('/register','RegisterController@register');

//登录页面
Route::get('/login','LoginController@index');
//登录行为
Route::post('/login','LoginController@login');
//登出行为
Route::get('/logout','LoginController@logout');





//关于忘记密码的操作

//显示重置密码的邮箱发送页面
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//邮箱发送重设链接
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

//、、密码更新页面
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//执行密码更新操作
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');



Route::get('/', function () {
    return view('welcome');
});
