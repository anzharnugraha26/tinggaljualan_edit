<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTag;
use App\CategoryBlog;
use App\TagBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    
    public function saveCat(Request $request)
    {
        $slug = Str::slug($request->name);
        CategoryBlog::create(array_merge($request->all(),[
            'slug' => $slug
        ]));
        return redirect()->back();
    }


    public function create()
    {
        $tags = TagBlog::all();
        $categories = CategoryBlog::all();
        return view('admin.blog.index', compact('categories','tags'));
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
