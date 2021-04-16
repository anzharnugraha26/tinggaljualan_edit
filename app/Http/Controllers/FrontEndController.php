<?php

namespace App\Http\Controllers;

use App\Blog\CategoryPost;
use App\Blog\ComentBlog;
use App\Blog\Post;
use App\Blog\Tag;
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
        $categories = CategoryPost::all();
        $tags = Tag::all();
        if (request()->has('category')) {
            $posts = Post::where('category_id', request('category'))->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $posts = Post::orderBy('created_at', 'desc')->paginate(2);
        }
        return view('front-end.blog')->with('posts', $posts)->with('tags', $tags)->with('categories', $categories);
    }

    public function contactUs()
    {
        return view('front-end.contact-us');
    }

    public function detailBlog($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $cat = CategoryPost::all();
        $coment = ComentBlog::where('blog_id', $post->id)->get();
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');
        return view('front-end.detail-blog', compact('coment', 'cat'))->with('post', $post)
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
        $bannerCat = Category::where('id', $id)->first();
        return view('front-end.services-detail', compact('categories', 'bannerCat'));
    }

    public function saveOrder(Request $request)
    {
        if (Auth::check()) {
            Order::create($request->all());
            return redirect()->back()->with("success", "aaaa");
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

    public function sendComent(Request $request)
    {
        if (Auth::check()) {

            $jmlcoment = Post::where('id', $request->blog_id)->first();
            $currentTotal = $jmlcoment->coment + 1; 

            ComentBlog::create($request->all());
            Post::where('id', $request->blog_id)->update(array('coment' => $currentTotal));
            return redirect()->back();
        }
        return redirect('/login')->with("belum_login", "aaaaa");
    }

    public function destroy($id)
    {
        //
    }
}
