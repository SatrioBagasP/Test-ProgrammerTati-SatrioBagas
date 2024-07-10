<?php

namespace App\Http\Middleware;

use App\Models\LogModel;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class DivisiOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ambil divisi id role yang sedang login
        $divisi = Auth::user()->divisi_id;

        // Ambil ID yang sedang diakses dari routes
        $id = $request->route('id');

        // Ambil Log berdasarkan id
        $log = LogModel::where('id', $id)->first();


        // Ambil ID dosen dari KRS yang diakses
        $divisiformlog = $log->user->divisi_id;

        if (Auth::user()->role_id == 3) {
            return $next($request);
        }
        // Jika divisi yang sedang login tidak sama dengan divisi yang berhak mengakses Log
        if ($divisi != $divisiformlog) {
            // Redirect ke halaman lain atau tampilkan pesan error
            return redirect('/logharian')->with('gagal', 'Anda tidak memiliki izin untuk mengakses data ini.');
        }


        return $next($request);
    }
}
