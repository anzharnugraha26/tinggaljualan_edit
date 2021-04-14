<?php

namespace App\Http\Controllers;

use App\Blog\Post;
use App\Category;
use App\Contact;
use App\Order;
use App\Subscribe;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    public function index()
    {
        $categories = Category::all();
        return view('front-end.index', compact('categories'));
    }

    public function about()
    {
        return view('front-end.about');
    }


    public function service()
    {
        $categories = Category::all();
        return view('front-end.service', compact('categories'));
    }

    public function blog()
    {
        if (request()->has('category')) {
            $posts = Post::where('category_id', request('category'))->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        }
        return view('front-end.blog')->with('posts', $posts);
    }

    public function contactUs()
    {
        return view('front-end.contact-us');
    }

    public function detailBlog($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');
        return view('front-end.detail-blog')->with('post', $post)
        ->with('next', Post::find($next_id))
        ->with('prev', Post::find($prev_id));
    }

    public function portfolio()
    {
        return view('front-end.porto');
    }


    public function serviceDetail($id)
    {
        $categories = Category::find($id);
        return view('front-end.services-detail', compact('categories'));
    }


    // public function downloadPDF()
    // {
    //     $pdf = PDF::loadView('front-end.print');
    //     return $pdf->download('pricelist.pdf');
    // }


    public function saveOrder(Request $request)
    {
        if (Auth::check()) {
            Order::create($request->all());
            return redirect()->back();
        }
        return redirect('/login')->with("belum_login", "aaaaa");
    }

    public function sendContact(Request $request)
    {
        Contact::create($request->all());
        return redirect('/')->with("message", "aaaa");
    }

    public function saveSubs(Request $request)
    {
        Subscribe::create($request->all());
        return redirect('/services')->with("services", "aaaaa");
    }

    public function saveSubsIndex(Request $request)
    {
        Subscribe::create($request->all());
        return redirect('/')->with("services", "aaaaa");
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
