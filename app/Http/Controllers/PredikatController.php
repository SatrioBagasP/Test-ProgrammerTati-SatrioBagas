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

            // Mendifinisikan Matriks
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

            //Mengambil request dari form
            $validated = $request->validate([
                'perilaku' => 'required',
                'hasil_kerja' => 'required',
            ]);


            // Menggabungkan hasil kerja dan perilaku
            $hasil = $validated['hasil_kerja'].$validated['perilaku'];

            // Mengecek apakah variabel hasil ada pada array nilai
            if (array_key_exists($hasil, $nilai)) {

                // Jika ada maka variabel hasil yang baru nilainya diambil dari array dengan index variable hasil penggabungan inputan form
                $hasil = $nilai[$hasil];
            }
        }

        // Jika variable hasil ada maka tampilkan hasil
        if($hasil != null)
        {
            $hasil;
        }
        // Jika tidak ada maka null
        else
        {
            $hasil = '';
        }
        return view('predikat',[
            'hasil' => $hasil,
        ]);
    }
}
