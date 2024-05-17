<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminControllers extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function dashboard()
    {
        return view('dashboard');
    }


    public function home(){
        

        return view("index");
    }



    //Fonction de connexion admin
    public function do_login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Connexion réussie !');
        }

        return redirect()->route('login.admin')->with('error', 'Nom d\'utilisateur ou mot de passe invalide');
    }


    //Fonction de deconnexion
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Déconnexion réussie !');
    }


    public function form_user()
    {
        return View('Users.form_user');
    }

    public function liste_user()
    {
        return View('Users.liste_user');
    }
}
