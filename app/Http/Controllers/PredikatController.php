<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PredikatController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->isMethod('post'))
        {
            $nilai = [
                '1a' => 'Sangat Kurang',
                '2a' => 'Kurang / Missconduct',
                '3a' => 'Kurang / Missconduct',
                '1b' => 'Butuh Perbaikan',
                '2b' => 'Baik',
                '3b' => 'Baik',
                '1c' => 'Butuh Perbaikan',
                '2c' => 'Baik',
                '3c' => 'Sangat Baik'
            ];

            $validated = $request->validate([
                'perilaku' => 'required',
                'hasil_kerja' => 'required',
            ]);

            $hasil = $validated['hasil_kerja'].$validated['perilaku'];
            if (array_key_exists($hasil, $nilai)) {
                $hasil = $nilai[$hasil];
            }
        }

        return view('predikat',[
            'hasil' => $hasil,
        ]);
    }
}
