<?php

namespace App\Http\Controllers;


use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //笔记列表
    public  function  index(){

//        $posts=Post::orderBy('created_at','desc')->get();
        $posts=Post::orderBy('created_at','desc')->paginate(6);
        return view('post/index',compact('posts') );
    }
    //笔记详情页‘
    public function  show(Post $post){

        return view('post/show',compact('post'));
    }
    //创建笔记
    public  function  create(){

        return view('post/create');
    }
    //创建笔记处理post过来的数据
    public function store(){
        //1验证
        $this->validate(request(),[
            'title'=>'required|string|max:100|min:3',
            'content'=>'required|string|min:10',
        ]);

//        dd(\request()->all());测试是否传过来所有数据
        $arr=\request(['title','content']);
//        dd($arr);
        Post::create($arr);
       return redirect('/posts');
    }

    //编辑笔记
    public function edit(Post $post){
        return view('post/edit',compact('post'));
    }

    //编辑提交之后post的值
    public  function update(Post $post){
        //1验证
        $this->validate(request(),[
            'title'=>'required|string|max:100|min:3',
            'content'=>'required|string|min:10',
        ]);
        //2逻辑
        $post->title=\request('title');
        $post->content=\request('content');
        $post->save();

        //
        return redirect("/posts/{$post->id}");

    }
    //删除笔记
    public function delete(Post $post){
        $post->delete();
        return redirect("/posts");
    }

}
