<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Session;

class SessionController extends Controller
{
    public function index(){
        return view("loginRegister.login");
    }
    public function login(Request $request){
        Session::flash('logemail', $request->logemail);
        $request->validate([
            'logemail'=>'required',
            'logpass'=>'required',
        ],[
            'logemail.required'=>'Email wajib diisi',
            'logpass.required'=>'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->logemail,
            'password' => $request->logpass,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/')->with(['success'=> 'Berhasil Login']);
        }else{
            return redirect('login')->withErrors(['wronginfo'=>'Username dan password yang dimasukkan tidak valid']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('login')->with(['success'=> 'Berhasil Logout']);
    }

    function register(){
        return view('loginRegister.register');
    }

    function create(Request $request){
        Session::flash('email', $request->email);
        Session::flash('regname', $request->regname);
        Session::flash('regphone', $request->regphone);
        Session::flash('regdob', $request->regdob);
        $request->validate([
            'regname'=>'required',
            'regphone'=>'required',
            'regdob'=>'required',
            'email'=>'required|unique:users',
            'regpass'=>'required_with:regconfpass|same:regconfpass',
        ],[
            'regname.required'=>'Username wajib diisi',
            'regphone.required'=>'No. telpon wajib diisi',
            'regdob.required'=>'Tanggal lahir wajib diisi',
            'email.required'=>'Email wajib diisi',
            'email.unique'=>'Email sudah terdaftar',
            'regpass.required_with'=>'Password wajib diisi',
            'regpass.same'=>'Password wajib diisi',
        ]);

        $data = [
            'name' => $request->regname,
            'dob' => date('Y/m/d', strtotime($request->regdob)),
            'phone' => $request->regphone,
            'email' => $request->email,
            'password' => \Hash::make($request->regpass)
        ];
        
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->regpass,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/')->with(['success'=> 'Berhasil Login']);
        }else{
            return redirect('register')->withErrors(['wronginfo'=>'Username dan password yang dimasukkan tidak valid']);
        }
    }
}
