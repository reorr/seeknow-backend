<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;

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
        $this->username = $this->findUsername();
    }

    public function findUsername()
    {
        $login = request()->input('login');
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$fieldType => $login]);
        return $fieldType;
    }

    public function username()
    {
        return $this->username;
    }

    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function handleProviderCallback($driver)
    {
        try {
            $user = Socialite::driver($driver)->user();
            // $create = User::firstOrCreate([
            //     'email' => $user->getEmail()],
            //     ['name' => $user->getName(),
            //     'username' => $user->getNickname(),
            //     'photo' => $user->getAvatar(),
            //     'email_verified_at' => now(),]
            // );
            $authUser = $this->findOrCreateUser($user, $provider);

            auth()->login($authUser, true);
            return redirect($this->redirectPath());
        } catch (\Exception $e) {
            return ('reeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee');
            // return redirect()->route('login');
        }
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }
        else{
            $data = User::create([
                'name'     => $user->getName(),
                'email'    => !empty($user->getEmail())? $user->getEmail() : '' ,
                // 'name' => $user->getName(),
                'username' => $user->getNickname(),
                'photo' => $user->getAvatar(),
                'email_verified_at' => now(),
            ]);
            return $data;
        }
    }
}
