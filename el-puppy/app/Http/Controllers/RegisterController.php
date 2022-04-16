<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('registerForm', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){

        //return $request() -> all();
        $invalidatedData = $request ->validate([
            'name' => 'required|max:255',
            // 'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        //dd('registrasi berhasil');
        $invalidatedData['password'] = Hash::make($invalidatedData['password']);
        User::create($invalidatedData);
        //$request->session()-> flash ('success', 'Registrasi Berhasil Silahkan Login!');
        return redirect('login')->with('success', 'Registrasi Berhasil Silahkan Login!');
    }


}
