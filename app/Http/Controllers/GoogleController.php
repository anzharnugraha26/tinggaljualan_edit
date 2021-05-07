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
        $find = User::where('google_id', $user->getId())->first();
        $date = User::get();
        
        if ($find = $date->email) {
            return redirect('/');
        }
        if ($find) {
            Auth::login($find);
            return redirect('/')->with('with','aa');
        } else{
             $new = User::create([
                     'name' => $user->name,
                     'email' => $user->email,
                     'google_id' => $user->id,
                     'password' => bcrypt('${1:my-secret-password')
            ]);
            Auth::login($new);
            return redirect('/')->with('with','aa');
        }
        // try{
        //     $user = Socialite::driver('google')->user();
        //     // dd($user);
        //     $finduser = User::where('google_id', $user->getId())->first();
        //     if ($finduser) {
        //         Auth::login($finduser);
        //         return redirect('/');
        //     }
        //     else{
        //         $newuser = User::create([
        //             'name' => $user->name,
        //             'email' => $user->email,
        //             'google_id' => $user->id,
        //             'password' => bcrypt('${1:my-secret-password')
        //         ]);
        //         Auth::login($newuser);
        //         return redirect('/');
        //     }
          
        //     } catch(\Throwable $th){

        //     }
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