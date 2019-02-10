<?php

namespace App\Http\Controllers\Auth;

use App\Client;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ClientRegisterController extends Controller
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

    protected $client;

    protected function guard()
    {
        return Auth::guard('client');
    }

    /**
     * Create a new controller instance.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->middleware('guest');
        $this->client = $client;
    }

    //Show registration page
    public function index()
    {
        return view('site.pages.registration');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => ['nullable', 'string', 'max:255'],
            'surname'  => ['nullable', 'string', 'max:255'],
            'email'    => ['required', 'unique:clients', 'string', 'email', 'max:255'],
            'phone'    => ['nullable', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
//            'img_path' => ['nullable', 'image'],
            'confirm'  => ['accepted'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     *
     * @return \App\User
     */
    protected function createClient(Request $request)
    {
        $this->validator($request->all())->validate();

        $client = Client::create([
            'name'     => $request['name'],
            'surname'  => $request['surname'],
            'email'    => $request['email'],
            'phone'    => $request['phone'],
            'password' => Hash::make($request['password']),
//            'img_path' => $request->file('avatar'),
        ]);

        $this->guard()->login($client);

        return redirect()->intended(route('client.show', $client->id));
    }
}
