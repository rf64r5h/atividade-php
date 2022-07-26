<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RetornaJson extends Controller
{
    public function index()
    {
        $lista = User::all();
        return json_encode($lista);
    }
}
