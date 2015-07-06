<?php

namespace App\Http\Controllers\Login;

use Illuminate\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

/**
 * Class AuthController
 * @package App\Http\Controllers\Login
 */
class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers;

    /**
     * This controller middleware
     */
    function __construct(Guard $auth)
    {
        $this->auth = $auth;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * getLoıgin Action
     *
     * @return \Illuminate\View\View
     */
    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * @param Requests\LoginRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function postLogin(Requests\LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember')))
            return redirect()->intended($this->redirectPath());

        if ($this->auth->viaRemember())
            return redirect()->intended($this->redirectPath());

        return redirect('auth/login')
                ->withInput($request->only('email'))
                ->withErrors([
                    'email' => 'These credentials do not match our records,',
                    'password' => 'or wrong password.',
                ]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getLogout()
    {
        if ($this->auth->check())
            $this->auth->logout();

        return redirect($this->redirectPath());
    }
}
