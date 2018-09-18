<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function socialLogin($social) {
        return Socialite::driver($social)->redirect();
    }

    public function handleProviderCallback($social){
        $userSocial = Socialite::driver($social)->user();
        $user = User::where(['email' => $userSocial->getEmail()])->first();

        if ($user) {
            // usuário já  cadastrado, porém não possui avatar! Dar um updade campo avatar!
            if ($user[0]['avatar']=="") {
                $user = User::select('avatar','id')->where('users.email',$userSocial->email)->get();
                if (User::find($user[0]['id']))
                $user = User::find($user[0]['id']);
                $user->avatar = $userSocial->getAvatar();
                $user->save();
            }
            Auth::login($user);
            return redirect()->route('home')->with('success',"Login realizado com sucesso, Seja Bem-Vindo!");
            // se não possuir cadastro retorna a mensagem
        } else {
            return redirect()->route('login')->with('error',"Seus dados, não confere aos nossos registros");
        }
    }
}
