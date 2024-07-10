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
        return view('index', [
            'user' => Auth::user()->name
        ]);
    }
    public function log_harian($id = null)
    {
        // Jika ada paramater yang dikirim maka tampilkan detailnya
        if ($id) {
            return view('logdetail', [
                'user' => Auth::user()->name,
                'log' => LogModel::where('id', $id)->first()
            ]);
        }
        // Mengecek apakah yang login user atau kepala bidang atau kepala dinas
        if (Auth::user()->role_id == 1) {
            // Jika user maka tampilkan log yang pernah dia kirim
            $log = LogModel::where('user_id', Auth::user()->id)->get();
        }
        if (Auth::user()->role_id == 2) {

            // Jika Ketua divisi maka cek divisi yang sama dengan staff nya, agar secara otomatis ketua perdivisi hanya ditampilkan anggota divisinya saja
            $log = LogModel::whereHas('user', function ($query) {
                $query->where('divisi_id', Auth::user()->divisi_id);
            })
                ->with('user')
                ->get();
        }
        if (Auth::user()->role_id == 3) {
            // Jika Ketua, hanya menampilkan log harian yang sudah diacc sama kepala divisinya
            $log = LogModel::where('isAccBidang', 2)->with(['user', 'user.divisi'])->get();
        }
        return view('log', [
            'user' => Auth::user()->name,
            'log' => $log
        ]);
    }
    public function log()
    {
        return view('createlog', [
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
        return redirect('/logharian')->with('datachange', 'Log Harian berhasil terkirim');
    }
    public function update_log($id, Request $request)
    {
        $post = $request->all();

        $data = LogModel::find($id);

        // Mengecek apakah yang dikirm itu acc bidang atau dinas
        if ($request->isAccBidang) {
            $set_data['isAccBidang'] = $request['isAccBidang'];
        }
        if ($request->isAccDinas) {
            $set_data['isAccDinas'] = $request['isAccDinas'];
        }
        $data->update($set_data);
        return redirect('/logharian')->with('datachange', 'Data Log Telah Dirubah');
    }
}
