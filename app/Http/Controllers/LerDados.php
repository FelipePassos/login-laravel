<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LerDados extends Controller
{
    public  function index()
    {
        $usersData = UserLogin::query()->orderBy('nome')->get();

        return view('visualizar', ['usersData' => $usersData]);
    }
}
