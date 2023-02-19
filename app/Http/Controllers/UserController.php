<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */

    public function index(): View
    {
        $allUsers = User::all();
        return view('users_crud', ['users' => $allUsers]);
    }

    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        try {
            $userData = [
                'name' => $request->name,
                'email' => $request->email,
                'email_verified_at' => Carbon::now(),
                'password' => $request->password,
                'remember_token' => null,
            ];

            User::create($userData);

            return redirect()->route("users.list")->with('success', 'Usuario creado exitosamente');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error: El usuario ya existe en la base de datos');
        }
    }

    public function storeRedirect(): View
    {
        return view('store');
    }
}
