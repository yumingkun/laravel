<?php

namespace App\Http\Controllers;


use App\Note;
use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;
use TomLingham\Searchy\Facades\Searchy;
use UxWeb\SweetAlert\SweetAlert;

class PostController extends Controller
{
    public  function home(){

        $id=Auth::id();//门脸类获取当前用户id
        //回收站数量
        $nums = Post::onlyTrashed()->where('user_id','=',$id)->get();
        $num=$nums->count();

        //分类各个类的数
        $cate[]=Post::where('user_id', '=', $id)->where('cate', '=','科技')->orderBy('created_at','desc')->get()->count();
        $cate[]=Post::where('user_id', '=', $id)->where('cate', '=','文化')->orderBy('created_at','desc')->get()->count();
        $cate[]=Post::where('user_id', '=', $id)->where('cate', '=','旅游')->orderBy('created_at','desc')->get()->count();
        $cate[]=Post::where('user_id', '=', $id)->where('cate', '=','其它')->orderBy('created_at','desc')->get()->count();


        return view('note.home',compact('num','cate'));
    }

    //单个笔记列表
    public  function  index($note=null){

        $id=Auth::id();//门脸类获取当前用户id
        $posts=Post::where('user_id', '=', $id)->where('note','=',$note)->orderBy('created_at','desc')->paginate(6);
        //获取单个笔记的数量
        $num =Post::where('user_id', '=', $id)->where('note','=',$note)->orderBy('created_at','desc')->get()->count();

        return view('post/index',compact('posts','id','num','note') );
    }
    //笔记详情页‘
    public function  show(Post $post){

        return view('post/show',compact('post'));
    }
    //创建笔记
    public  function  create(){

        //获取所有的笔记本名字
        $id=Auth::id();
        $notes=Note::where('user_id','=',$id)->get();
        return view('post/create',compact('notes'));
    }

    //创建逻辑 接收创建笔记post过来的数据
    public function store(){

        //1验证
        $this->validate(request(),[
            'title'=>'required|string|max:100|min:3',
            'content'=>'required|string|min:20',
            'cate'=>'required|string',
            'note'=>'required|string'
        ]);
        //2逻辑
        //使用门脸类获取当前用户id
        $user_id=Auth::id();

        $params=array_merge(request(['title','cate','content','note']),compact('user_id'));
        Post::create($params);    //   以数组形式存入
        $note=\request('note');

        //3渲染
        return redirect('/posts/'.$note);
    }

    //编辑笔记的视图
    public function edit(Post $post){

        $id=Auth::id();
        $notes=Note::where('user_id','=',$id)->get();
        return view('post/edit',compact('post','notes'));
    }

    //编辑提交之后post的值
    public  function update(Post $post){
        //1验证
        $this->validate(request(),[
            'title'=>'required|string|max:100|min:3',
            'content'=>'required|string|min:10',
            'cate'=>'required|string',
            'note'=>'required|string',
        ]);
        //2逻辑
        $post->title=\request('title');
        $post->content=\request('content');
        $post->cate=\request('cate');
        $post->note=\request('note');
        $post->save();

        //3视图
        return redirect("/posts/show/{$post->id}");

    }

    //删除笔记
    public function delete(Post $post){
        $post->delete();

        //要确认指定的模型实例是否已经被软删除，可以使用 trashed 方法：　　
//        if($post->trashed()){
//            dd($post);
//        }

       return redirect("/home");
    }

    //搜索
    public function search(){
        $search=\request('search');
        $id=Auth::id();//门脸类获取当前用户id

        $posts=Post::where('user_id','=',$id)->where('title','like','%'.$search.'%')->get();
        $num=$posts->count();

        return view('post/search',compact('posts','num'));
    }

    //回收站详情页
    public function trash(){
        $id=Auth::id();//门脸类获取当前用户id

        $posts = Post::onlyTrashed()->where('user_id','=',$id)->orderBy('created_at','desc')->paginate(6);  //查看被软删除的模型

        $num=$posts->count();

       return view('post/trash',compact('posts','num'));
    }

    //恢复全部
    public  function  recover(){
        Post::withTrashed()->restore();
//
//
//        dd('yugaystyuags');
        return  redirect('/trash');
    }
    //彻底删除单个
    public  function delete_one($id){

        Post::onlyTrashed()->where('id','=',$id)->forceDelete();
        return redirect('/trash');
    }

    //恢复指定的笔记
    public  function recover_one($id){



   /*     dd( Post::find($id));*/
//         $student->restore();
//        $post = Post::find($id);
//        $post->restore();
        Post::withTrashed()->where('id','=',$id)->restore();

         return redirect('/trash');
    }
    //删除回收站全部
    public  function trash_all(){

       Post::onlyTrashed()->forceDelete();


        return  redirect('/trash');
    }


    //文章分类页
    public function cate($name){
        $id=Auth::id();//门脸类获取当前用户id
        $posts=Post::where('user_id', '=', $id)->where('cate', '=',$name)->orderBy('created_at','desc')->paginate(6);


        return view('post/cate',compact('posts','name'));
    }
}
