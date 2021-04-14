<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Blog\Post;
use App\Category;
use App\Contact;
use App\Order;
use Illuminate\Http\Request;

class BackEndController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }


    public function order()
    {
        $orders = Order::all();
        return view('admin.orders', compact('orders'));
    }

    public function contactUs()
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'));
    }

    public function blog(){
        $posts = Post::all();
        return view('admin.blog.daftar', compact('posts'));
    }

    public function categories(){
        $cat = Category::all();
        return view('admin.categories.index', compact('cat'));
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function categoriesUpdate($id)
    {
        $cat = Category::find($id);
        return view('admin.categories.edit', compact('cat'));
    }


    public function update(Request $request, $id)
    {
        Category::find($id)->update(array_merge($request->all(),['description' => $request->input('description')]));
        return redirect('admin/categories');
    }


    public function destroy($id)
    {
        //
    }
}
