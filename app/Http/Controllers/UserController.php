<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Authenticate Users
     */

    public function authenticate(Request $request)
    {
        $params = ['core_id' => $request->core_id, 'password' => $request->password];
        $ch = curl_init("http://localhost:8000/api/users/authenticate/"); //returns curl handle
        $defaults = array(
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $params,
        );
        $curlResponse = curl_exec($ch);
        curl_close($ch);
        echo $curlResponse;
        if ($curlResponse == 1) {
            session()->put('core_id', $request->core_id);
            return redirect('/dashboard');
        } else
            return redirect('/welcome');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
