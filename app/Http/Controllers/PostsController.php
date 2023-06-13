<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{


// トップ画面
public function index()
{
$list = DB::table('posts')->get();
return view('posts.index',['lists'=>$list]);


}


public function search(Request $request)
{
$lists = DB::table('posts');


  $keyword = $request->input('keyword');
  // もしキーワードがあったら
  if(!empty($keyword)&&preg_match('/^[あ-んa-zA-Z0-9]+$/',$keyword))
  {
    $lists->where('post','Like', "%$keyword%");

  }
$list= $lists->get();
return view('posts.index',['lists'=>$list]);

}








public function __construct()
{
$this->middleware('auth');
}




// 更新フォーム表示
public function updateform($id)

{
$post = DB::table('posts')
->where('id', $id)
->first();
return view('posts.updateForm', ['post' => $post]);
}




// 更新処理
public function update(Request $request)

{


$request->validate(
    [
     'upPost' => 'max:100|regex:/^[あ-んa-zA-Z0-9]+$/',
    'name' =>'regex:/^[あ-んa-zA-Z0-9]+$/'
]
);

$id = $request->input('id');
$post = $request->input('upPost');
$name = $request->input('name');
DB::table('posts')
->where('id', $id)
->update(
['post' => $post,
'user_name' => $name
]
);

return redirect('/');
}






// 削除処理
public function delete($id)
{
DB::table('posts')
->where('id', $id)
->delete();

return redirect('/');
}




// 投稿フォーム表示
public function createForm()
{
return view('posts.createForm');
}






// 投稿
public function create(Request $request)
{

$request->validate(
    [
    'newPost' => 'max:100|regex:/^[あ-んa-zA-Z0-9]+$/',
    'name' =>'regex:/^[あ-んa-zA-Z0-9]+$/'
]
);
$post = $request->input('newPost');
$name = $request->input('name');

DB::table('posts')->insert([
'post' => $post,
'user_name' => $name
]);
return redirect('/');




}
















}
