<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;

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
    protected $redirectTo = '/user/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('adminlte::auth.login');
    }

    /**
     * Como o caminho de redirecionamento precisa de lógica
     * de geração personalizada, pode-se definir um
     * método redirectTo em vez de uma propriedade redirectTo:
     *
     * O método redirectTo terá precedência sobre o atributo redirectTo.
     *
     * @return mixed|string
     */
    protected function redirectTo()
    {
        //dd(Session::get('oldURL'));
        //se for inteceptado uma url que precise logar
        //ao autenticar será redirecionado para onde
        //surgiu a necessidde de logar
        if (Session::has('oldURL')) {
            $oldURL = Session::get('oldURL');
            Session::forget('oldURL');

            //return redirect()->intended('checkout');
            //return redirect()->to($oldURL);
            //return redirect()->route('checkout');
            return $oldURL;
        }

        return '/user/home';
    }

}
