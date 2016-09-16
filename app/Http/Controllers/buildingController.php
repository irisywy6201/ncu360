<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Post;
use App\building;
class buildingController extends Controller
{
  public function index(){
    $maps = building::all();

    return view('home',[
      'maps'=>$maps,
    ]);
  }
  public function store(Request $request){

    $map = new building;

    $map->tname = $request->tname;
    $map->kid = $request->kid;
    $map->picture = $request->picture;
    $map->save();
    return redirect('home/');

  }

  public function show($id){
    $map = building::find($id);
    $post=Post::find($id);
    $posts = Post::all();
    // $posts = DB::table('posts')
    //               ->join('buildings','posts.tid','=','buildings.id')
    //               ->select('posts.*')
    //               ->get();
    return view('admin.10',[
      'map'=>$map,
      'posts'=>$posts,

    ]);
  }

  public function destroy($id)
  {

      $map = building::find($id);
      $map->delete();
      return redirect('/home');
  }

  public function edit($id){
    $maps = building::find($id);
    return view('admin.edit',[
      'maps'=>$maps,
    ]);
  }

  public function update(Request $request,$id)
{
  $map = building::find($id);
  $map->tname = $request->tname;
  $map->kid= $request->kid;
  $map->picture = $request->picture;
  $map->save();

    return redirect('/home');
  }
}
