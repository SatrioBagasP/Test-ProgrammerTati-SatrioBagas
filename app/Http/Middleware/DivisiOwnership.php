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


        // Ambil ID divisi dari Log yang diakses
        $divisiformlog = $log->user->divisi_id;

        // Ambil log statusnya
        $statusBidang = $log->isAccBidang;
        $statusDinas = $log->issAccDinas;

        if (Auth::user()->role_id == 3) {

            // Jika Log status bidangnya accept maka ketua divisi bisa mengakses
            if ($statusBidang == 2) {
                return $next($request);
            } else {
                // Jika log status bidangnya pending atau pun reject, maka divisi masih belum bisa mengakses
                return redirect('/logharian')->with('gagal', 'Anda tidak memiliki izin untuk mengakses data ini.');
            }
        }
        // Jika divisi yang sedang login tidak sama dengan divisi yang berhak mengakses Log
        if ($divisi != $divisiformlog) {
            // Redirect ke halaman lain atau tampilkan pesan error
            return redirect('/logharian')->with('gagal', 'Anda tidak memiliki izin untuk mengakses data ini.');
        }


        return $next($request);
    }
}
