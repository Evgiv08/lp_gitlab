<?php

namespace App\Http\Controllers\Auth;

use App\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRegisterRequest;
use Illuminate\Foundation\Auth\RegistersUsers;

class ClientRegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Initialize middleware.
     */
    public function __construct()
    {
        $this->middleware('guest:client');
    }

    /**
     * Show register form for creating new Client.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('site.pages.registration');
    }

    /**
     * Create a new Client instance after a valid registration.
     *
     * @param ClientRegisterRequest $request
     * @return \App\Client
     */
    protected function createClient(ClientRegisterRequest $request)
    {
        $client = Client::create([
            'name'     => $request['name'],
            'surname'  => $request['surname'],
            'email'    => $request['email'],
            'phone'    => $request['phone'],
            'password' => bcrypt($request['password']),
        ]);

        auth('client')->login($client);

        return redirect()->route('client.show', $client->id);
    }
}
