<?php
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/', function () {
    //return Post::find("my-second-post");
;    return view('posts',['posts'=>Post::latest()->get(),'categories'=>Category::all()]);

   
});

Route::get('posts/{post:slug}',function(Post $post){

return view('post',[ 'post'=>$post]); });
//find a post by its slug and pass it to a view called "post"
// $path=__DIR__."/../resources/posts/{$slug}.html";



//     if(!file_exists($path)){
//         return redirect('/');
//     }

//     $post=cache()->remember("posts.{$slug}",5,fn()=>file_get_contents($path));
Route::get('categories/{category:slug}',function(Category $category){

    $posts=$category->posts;
    return view('posts',[ 'posts'=>$posts, 'categories' => Category::all(), 'category'=>$category]); 

});
    
Route::get('authors/{author:username}',function(User $author){

    $posts=$author->posts;
    return view('posts',[ 'posts'=>$posts, 'categories' => Category::all()]); 

});