<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $duplicate = User::where('email', $user->email)->first();
        $find = User::where('google_id', $user->getId())->first();
        if ($duplicate) {
            Auth::login($duplicate);
            return redirect('/')->with('login', 'zz');
        } else {
            if ($find) {
                Auth::login($find);
                return redirect('/')->with('with', 'aa');
            } else {
                $new = User::create([
                     'name' => $user->name,
                     'email' => $user->email,
                     'google_id' => $user->id,
                     'password' => bcrypt('${1:my-secret-password')
            ]);
                Auth::login($new);
                return redirect('/')->with('with', 'aa');
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
