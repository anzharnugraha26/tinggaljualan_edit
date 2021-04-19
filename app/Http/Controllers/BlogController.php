<?php

namespace App\Http\Controllers;

use App\Blog;

use App\CategoryBlog;
use App\Blog\CategoryPost;
use App\Blog\Post;
use App\Blog\Tag;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function saveCat(Request $request)
    {
        CategoryPost::create($request->all());
        return redirect()->back();
    }

    public function saveTag(Request $request)
    {
        Tag::create($request->all());
        return redirect()->back();
    }

    public function create()
    {
        $categories = CategoryPost::all();
        $tags = Tag::all();
        return view('admin.blog.index', compact('categories', 'tags'));
    }

    public function savePost(Request $request)
    {
        $jmlCategory = CategoryPost::where('id', $request->category_id)->first();
        $currentTotal = $jmlCategory->jumlah + 1 ;

        $fileName = '';
        if ($request->image->getClientOriginalName()) {
            $file = str_replace(' ', '', $request->image->getClientOriginalName());
            $fileName = date('mYdHs') . rand(1, 999) . '_' . $file;
            $request->image->move('img/blog', $fileName);
        }
        $slug = Str::slug($request->title);
        $post = Post::create(array_merge($request->all(), [
            'slug' => $slug,
            'image' => $fileName, 
        ])); 
        CategoryPost::where('id', $request->category_id)->update(array('jumlah' => $currentTotal));
        $post->tags()->attach($request->tags);
        return redirect('/admin/blog');
    }
   
    public function findbyCategoryID($id)
    {
        $categories = Post::where('category_id', $id)->get();
        $catName = Post::where('category_id', $id)->first();
        $cat = CategoryPost::all();
        return view('front-end.blogcategory', compact('categories', 'cat', 'catName'));  
    }

    
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        
    }

  
    public function destroy($id)
    {
        $post = Post::where(['id' => $id])->first();
        $post->delete();
        $categories =  CategoryPost::where('id', $post->category_id)->first();
        $currentTotal = $categories->jumlah - 1 ;
        $categories->update(array('jumlah' => $currentTotal));
        return redirect()->back();
    }
}
