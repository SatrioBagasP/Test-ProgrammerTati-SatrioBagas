<?php

namespace App\Http\Controllers;

use App\Models\ProvinsiModel;
use App\Models\LogModel;
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
    public function log_harian()
    {
        return view('log',[
            'user' => Auth::user()->name,
            'log' => LogModel::all()
        ]);
    }
    public function log()
    {
        return view('createlog',[
            'user' => Auth::user()->name

        ]);
    }
    public function store_log(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'desc' => 'required'
        ]);

        // Menambahkan user id kedalam validasi
        $validated['user_id'] = Auth::user()->id;
        $validated['isAccBidang'] = 1;
        $validated['isAccDinas'] = 1;


        LogModel::create($validated);
        return redirect('/logharian')->with('datachange','Log Harian berhasil terkirim');
    }
}
