<?php

namespace App\Http\Controllers;

use App\Models\ProvinsiModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MainController extends Controller
{
    public function index()
    {
        return view('index',[
            'user' => Auth::user()->name
        ]);
    }
}
