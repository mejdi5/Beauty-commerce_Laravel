<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;
class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'lastName' => ['max:255'],
            'email' => ['required', 'email', 'max:255', ValidationRule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:255']
        ]);
        $attributes['password'] = bcrypt($attributes['password']);
        $user = User::create($attributes);
        $userCart = Cart::create([
            'user_id' => $user->id,
            'quantity' => 0,
            'total' => 0
        ]);
        $user->update([
            'cart_id' => $userCart->id
        ]);
        dd($user);
        auth()->login($user);
        return redirect('/')->with('success', 'Registered with success..');
    }
}
