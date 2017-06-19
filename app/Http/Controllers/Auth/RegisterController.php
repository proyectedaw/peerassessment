<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|string|max:255|min:3',
            'apellido_1' => 'required|string|max:255|min:3',
            'apellido_2' => 'required|string|max:255|min:3',
            'dni' => 'required|string|max:9|nif',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'pseudonimo' => 'required|string|max:255',
        ]);
        }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
         'nombre' => $data['nombre'],
         'apellido_1' => $data['apellido_1'],
         'apellido_2' => $data['apellido_2'],
         'dni' => $data['dni'],
         'email' => $data['email'],
         'password' => bcrypt($data['password']),
         'pseudonimo' => $data['pseudonimo'],
         //'admin' => $data['admin'],
         ]);
    }
}
