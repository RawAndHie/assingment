<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('account');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'identityNumber' => 'required|min:10|string',
                'firstName' => 'required|string',
                'lastName' => 'required|string',
                'phone' => 'required|string'

            ],
            [
                'identityNumber.required' => 'Must be 10 character',
                'firstName.required' => 'Required',
                'lastName.required' => 'Required',
                'phone.required' => 'Required'
            ]
        );
        return $validated;

    }
}
