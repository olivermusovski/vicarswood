<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

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

    protected function authenticated(Request $request, $user)
    {
        // add items from session to user cart
        $items = \Cart::getContent();

        foreach($items as $item) {
            \Cart::session($user->id)->add(
                $item->id,
                $item->name,
                $item->price,
                $item->quantity,
                $item->attributes,
                $item->conditions
            );
        }

        // return user back to the page they were on before
        return redirect(session('link'));

    }

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
        //$this->redirectTo = url()->previous();
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        session(['link' => url()->previous()]);
        return view('auth.login');
    }
}
