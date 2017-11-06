<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\StoreClientPost;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends WebController
{
    /*
    |--------------------------------------------------------------------------
    | Client Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the CRUD Client ops
    |
    */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\Models\User
     */
    protected function createPost(StoreClientPost $request)
    {
        $client = Client::createOne($request->name, $request->gender, $request->phone, $request->email, $request->address, $request->nationality, $request->dateOfBirth, $request->educationBackground, $request->preferredModeOfContact);
        $client->saveToCSV();
        return redirect()->route('clients');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\Models\User
     */
    protected function createGet()
    {
        return view('client.create');
    }

    /**
     * List all clients.
     *
     * @param  Request $request containing the page index
     * @return \App\Models\Client
     */
    protected function index(Request $request)
    {
        $page = $request->input("page", 0);
        return view('client.index', ['clients' => Client::getFromCSV($page)->getRecords()]);
    }
}
