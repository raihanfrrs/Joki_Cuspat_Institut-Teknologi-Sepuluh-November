<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validateData = $request->validate([
                'username' => 'required|min:2|max:255|unique:users',
                'phone' => 'required|numeric|unique:customers',
                'email' => 'required|min:5|max:255|unique:customers|email:rfc,dns',
                'password' => ['required', Password::min(5)->mixedCase()->letters()->numbers()->symbols()->uncompromised()]
            ]);

            $validateData['level'] = 'customer';
            $validateData['password'] = bcrypt($validateData['password']);
            $user = User::create($validateData);

            $validateData['user_id'] = $user->id;

            if (Customer::create($validateData)) {
                return redirect()->intended('/')->with([
                    'case' => 'default',
                    'position' => 'center',
                    'type' => 'success',
                    'message' => 'Berhasil Didaftarkan!'
                ]);
            }
        } catch (\Illuminate\Validation\ValidationException $exception) {
            return redirect()->back()->withErrors($exception->errors())->with([
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Gagal Didaftarkan!'
            ]);
        }
    }
}
