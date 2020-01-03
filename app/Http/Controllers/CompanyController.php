<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{

    /**
     * retorna a empresa do usuário logado
     */
    public function index()
    {
        return Auth::user()->company;
    }
}
