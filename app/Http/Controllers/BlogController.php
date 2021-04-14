<?php

namespace App\Http\Controllers;

use App\Blog;

use App\CategoryBlog;
use App\Blog\CategoryPost;
use App\Blog\Post;
use App\Blog\Tag;
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
        $post->tags()->attach($request->tags);
        return redirect('/admin/blog');
    }

    
    public function store(Request $request)
    {
        $fileName = '';
        if ($request->image->getClientOriginalName()) {
            $file = str_replace(' ', '', $request->image->getClientOriginalName());
            $fileName = date('mYdHs') . rand(1, 999) . '_' . $file;
            $request->image->move('img/blog', $fileName);
        }

        $slug = Str::slug($request->judul);
        $blogs =  Blog::create(array_merge($request->all(), [
            'slug' => $slug,
            'image' => $fileName,
            
        ]));
        // BlogTag::create([
        //     'blog_id' => $blogs->id,
        //     'tag_blog_id' => array_merge($request->tags)
        // ]);
        
        return redirect("admin/blog");
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
