<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function downloadPDF()
    {
        $pdf = PDF::loadView('front-end.print');
        return $pdf->download('pricelist.pdf');
    }
    
    public function download()
    {
        return response()->download(public_path("pricelist.pdf"));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function test()
    {
        return view('test');
    }

    public function timeZone($location)
    {
        return date_default_timezone_set($location);
    }

    public function save(Request $request)
    {
        $serverDate = date("Y-m-d H:i");
        $this->timeZone('Asia/Jakarta');
         User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'email_verified_at' =>  $serverDate
       ]);
    }


    public function testRegis(){
        return view('test-regis');
    }

    public function testLogin(){
        return view('test-login');
    }

}
