<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // public function index(){
    //     return view('index');
    // }
    public function login(){
        return view('guestevent.login');
    }
    public function signup(){
        return view('guestevent.signup');
    }

    public function loginProses(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username wajib di isi.',
            'password.required' => 'Password wajib di isi.'
        ]);

        $infoLogin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($infoLogin)) {
            return redirect('enterevent');
        }else {
            return redirect('login')->withErrors('Username atau Password tidak sesuai.')->withInput();
        }
    }

    public function registrasi(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors()->first()); // Passing the first error message as a string
        }
        $data = [
            'username' => $request->username,
            'password' => bcrypt($request->password)
            
        ];

        User::create($data);

        // Redirect with a success message
        return redirect()->route('login')->with('success', 'Anggota successfully added!');
    }

    public function logout(){
        Auth::logout();
        return redirect('');
    }
}
