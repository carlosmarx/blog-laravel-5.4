<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
      return view('registration.create');
    }

    public function store(User $user)
    {
      # Validate the form
      $this->validate(request(), [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed'
      ]);

      $user = User::create(request(['name', 'email', 'password']));
      auth()->login($user);
      return redirect()->home();
    }
}
