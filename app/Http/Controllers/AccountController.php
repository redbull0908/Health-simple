<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPostRequest;
use App\Http\Requests\AuthPostRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    function register()
    {
        if(Auth::check()){
            return redirect()->route('main');
        }
        return view('Account.register');
    }

    public function save(RegisterPostRequest $request)
    {
        $user = new User();
        $full_name = $request->surname . ' ' . $request->name . ' ' . $request->second_name;
        $user->login = $request->login;
        $user->full_name = $full_name;
        $user->tel_number = $request->phone_number;
        $user->password = password_hash($request->Password, PASSWORD_DEFAULT);
        $user->birthday = $request->date;
        $user->sex = $request->sex;
        $user->id_role = 4;
        if($user->save()){
            Auth::login($user);
            return redirect()->route('main');
        }

        redirect()->route('register')->withErrors('error');
    }

    public function login()
    {
        if(Auth::check()){
            return redirect()->route('main');
        }
        return view('Account.login');
    }

    public function auth(AuthPostRequest $request): RedirectResponse
    {
        if(Auth::attempt(['login'=>$request->login,'password'=>$request->Password],$request->remember)){
            $request->session()->regenerate();
            return redirect()->route('main');
        }
        else{
            return back()->withErrors(
                ['login'=>'неверный пользователь или пароль.']
            );
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('main');
    }
}
