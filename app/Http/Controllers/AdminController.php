<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\building;
use App\Post;
class AdminController extends Controller
{
  public function index(){
    $posts = Post::all();

    return view('admin.10',[
      'posts'=>$posts,
    ]);
  }
  public function store(Request $request){

    $post = new Post;
    $post->subject = $request->subject;
    $post->content = $request->content;
    $post->connection = $request->connection;
    $post->tid = $request->tid;
    $post->save();
    return redirect('home/'.$post->tid);

  }

  public function show($id){
    $post = Post::find($id);

    return view('show',[
      'post'=>$post,
    ]);
  }

  public function destroy($id)
  {
      $map = building::find($id);
      $post = Post::find($id);
      $post->delete();
      return redirect('home/'.$post->tid);
  }
  public function edit($id){
    $maps = Post::find($id);
    return view('admin.edit2',[
      'maps'=>$maps,
    ]);
  }

  public function update(Request $request,$id)
{
  $map = Post::find($id);
  $map->subject = $request->subject;
  $map->content= $request->content;
  $map->connection = $request->connection;
  $map->save();

    return redirect('home/'.$map->tid);
  }

}
