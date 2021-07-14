<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){

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
        Account::create($request->all());
        return back()->with('success', 'Your form has been submitted.');
    }
    public function saveAccount(){

    }
}
