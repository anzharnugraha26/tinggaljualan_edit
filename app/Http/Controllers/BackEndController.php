<?php

namespace App\Http\Controllers;

use App\Blog;
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
        $blog = Blog::all();
        return view('admin.blog.daftar', compact('blog'));
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
