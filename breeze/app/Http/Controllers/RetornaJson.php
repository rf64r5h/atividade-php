<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RetornaJson extends Controller
{
    public function index()
    {
        //return 'ok, users controller';
        $lista = User::all();
        return json_encode($lista);
    }
}
