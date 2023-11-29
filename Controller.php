<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;


use App\Models\User;
use App\Models\product;
use App\Models\quoteUser;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function index()
    {

        $client = new Client();
        $response = $client->get('https://api.kanye.rest');
        $quote = json_decode($response->getBody(), true);

        return view("index", compact("quote"));
    }

    function loginVerify(Request $request)
    {
        $email = $request->email;
        try {
            $user = quoteUser::where("email", $email)->first();
            if (isset($user)) {

                if (hash::check($request->password, $user->password)) {

                    session(['id'=>$user->id]);

                    
                    return redirect()->route('index')->with("success", "You Successfully logged in");
                } else {
                    return redirect()->route("login")->with("error", "credentials didn't match, Please try again");
                }
            } 
        } catch (\Exception $e) {
            return redirect()->route("login")->with("error", "Something went wrong, PLease try again");
        }
    }

    function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            
            'name'=>'required|max:30',
            'email' => 'required|email|unique:quoteusers|max:100',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')->with("error","Please fill form carefully");
        }

        try {

            $userData = [
                'email' => $request->email,
                'name' => $request->name ?? '',
                'password' => Hash::make($request->password),
            ];

            $quoteUser = quoteUser::create($userData);

            if ($quoteUser) {
                $token = $quoteUser->createToken('api-token')->plainTextToken;

                return redirect()->route('login')->with('success', 'You sucessfully registered, Now log in');

            } else {
                return redirect()->route('register')->with("error", "Not registered, Try again");
            }
        } catch (\Exception $e) {
            return redirect()->route('register')->with("error","Something went wrong, Try again");
        }

    }

    function register()
    {

        return view("register");
    }

    function login()
    {

        return view("login");
    }

    function logout()
    {
        Session::flush();

        return redirect()->route('login')->with('success', 'You have been logged out.');
    }



}
