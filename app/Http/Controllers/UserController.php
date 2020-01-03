<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * retorna todos os usuários
     */
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    /**
     * retorna um usuario
     */
    public function show(int $id)
    {
        $user = User::find($id);

        return response()->json($user);
    }

    public function usersCompany()
    {
        return Auth::user()->company->users;
    }
}
