<?php

namespace App\Http\Controllers;

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
        $myFile = public_path("1.pdf");
        $headers = ['Content-Type: application/pdf'];
        $newName = 'pricelist';

        return response()->download($myFile, $newName, $headers);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
