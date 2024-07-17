<?php

namespace App\Http\Controllers;

use App\Models\ProvinsiModel;
use Exception;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function fetch_data()
    {
        //Data dari wilayah.id
        $data = [
            [
                "code" => "11",
                "name" => "Aceh",
                "coordinates" => [
                    "lat" => "4.695135",
                    "lng" => "96.7493993"
                ],
                "google_place_id" => "ChIJvcR8UN-bOTARYMogsoCdAwE"
            ],
            [
                "code" => "12",
                "name" => "Sumatera Utara",
                "coordinates" => [
                    "lat" => "2.1153547",
                    "lng" => "99.5450974"
                ],
                "google_place_id" => "ChIJhxxy61r51y8RC8vXCYE-p6w"
            ],
            [
                "code" => "13",
                "name" => "Sumatera Barat",
                "coordinates" => [
                    "lat" => "-0.7399397",
                    "lng" => "100.8000051"
                ],
                "google_place_id" => "ChIJRUJ08Ey51C8RVTvVdblRsXA"
            ],
            [
                "code" => "14",
                "name" => "Riau",
                "coordinates" => [
                    "lat" => "0.2933469",
                    "lng" => "101.7068294"
                ],
                "google_place_id" => "ChIJdz6xGVhXJy4Rsb21bJQCb4M"
            ],
            [
                "code" => "15",
                "name" => "Jambi",
                "coordinates" => [
                    "lat" => "-1.6101229",
                    "lng" => "103.6131203"
                ],
                "google_place_id" => "ChIJO83is5qIJS4RDdmyCseZWtE"
            ],
            [
                "code" => "16",
                "name" => "Sumatera Selatan",
                "coordinates" => [
                    "lat" => "-3.3194374",
                    "lng" => "103.914399"
                ],
                "google_place_id" => "ChIJLeo1PXWLEC4Rz8QB4gGB_Bg"
            ],
            [
                "code" => "17",
                "name" => "Bengkulu",
                "coordinates" => [
                    "lat" => "-3.7928451",
                    "lng" => "102.2607641"
                ],
                "google_place_id" => "ChIJeZLjNx6wNi4R6qaQ53a1eaA"
            ],
            [
                "code" => "18",
                "name" => "Lampung",
                "coordinates" => [
                    "lat" => "-4.5585849",
                    "lng" => "105.4068079"
                ],
                "google_place_id" => "ChIJpyKsUwF2Oy4RmrCJX8dYO48"
            ],
            [
                "code" => "19",
                "name" => "Kepulauan Bangka Belitung",
                "coordinates" => [
                    "lat" => "-2.7410513",
                    "lng" => "106.4405872"
                ],
                "google_place_id" => "ChIJizmlLUMWFy4RuSOEsf04fhI"
            ],
            [
                "code" => "21",
                "name" => "Kepulauan Riau",
                "coordinates" => [
                    "lat" => "3.9456514",
                    "lng" => "108.1428669"
                ],
                "google_place_id" => "ChIJAQuH1E1l2TERvCSFiXW1RnI"
            ],
            [
                "code" => "31",
                "name" => "DKI Jakarta",
                "coordinates" => [
                    "lat" => "-6.223592",
                    "lng" => "106.7317914"
                ],
                "google_place_id" => "ChIJxfRFTqzwaS4R9jhKTRFByAQ"
            ],
            [
                "code" => "32",
                "name" => "Jawa Barat",
                "coordinates" => [
                    "lat" => "-7.090911",
                    "lng" => "107.668887"
                ],
                "google_place_id" => "ChIJf0dSgjnmaC4Rfp2O_FSkGLw"
            ],
            [
                "code" => "33",
                "name" => "Jawa Tengah",
                "coordinates" => [
                    "lat" => "-7.150975",
                    "lng" => "110.1402594"
                ],
                "google_place_id" => "ChIJ3RjVnJt1ZS4RRrztj53Rd8M"
            ],
            [
                "code" => "34",
                "name" => "Daerah Istimewa Yogyakarta",
                "coordinates" => [
                    "lat" => "-7.8753849",
                    "lng" => "110.4262088"
                ],
                "google_place_id" => "ChIJxWtbvYdXei4R8LPIyrKSG20"
            ],
            [
                "code" => "35",
                "name" => "Jawa Timur",
                "coordinates" => [
                    "lat" => "-7.5360639",
                    "lng" => "112.2384017"
                ],
                "google_place_id" => "ChIJxbXun_eToy0RULh8yvsLAwE"
            ],
            [
                "code" => "36",
                "name" => "Banten",
                "coordinates" => [
                    "lat" => "-6.4058172",
                    "lng" => "106.0640179"
                ],
                "google_place_id" => "ChIJmbkNxNaKQS4R6bMai6ua074"
            ],
            [
                "code" => "51",
                "name" => "Bali",
                "coordinates" => [
                    "lat" => "-8.4095178",
                    "lng" => "115.188916"
                ],
                "google_place_id" => "ChIJoQ8Q6NNB0S0RkOYkS7EPkSQ"
            ],
            [
                "code" => "52",
                "name" => "Nusa Tenggara Barat",
                "coordinates" => [
                    "lat" => "-8.6529334",
                    "lng" => "117.3616476"
                ],
                "google_place_id" => "ChIJIe0SGpQNuC0RxXX30MzCZ2k"
            ],
            [
                "code" => "53",
                "name" => "Nusa Tenggara Timur",
                "coordinates" => [
                    "lat" => "-8.6573819",
                    "lng" => "121.0793705"
                ],
                "google_place_id" => "ChIJlzbpqE3yUiwR4Br3yvsLAwE"
            ],
            [
                "code" => "61",
                "name" => "Kalimantan Barat",
                "coordinates" => [
                    "lat" => "-0.2787808",
                    "lng" => "111.4752851"
                ],
                "google_place_id" => "ChIJu_7rjBcYBS4RoEghTO3sXM0"
            ],
            [
                "code" => "62",
                "name" => "Kalimantan Tengah",
                "coordinates" => [
                    "lat" => "-1.6814878",
                    "lng" => "113.3823545"
                ],
                "google_place_id" => "ChIJP5a8hrK_4i0Rrmv1g2fV288"
            ],
            [
                "code" => "63",
                "name" => "Kalimantan Selatan",
                "coordinates" => [
                    "lat" => "-3.0926415",
                    "lng" => "115.2837585"
                ],
                "google_place_id" => "ChIJRbTSvTm33S0RE8GXt1C2fhQ"
            ],
            [
                "code" => "64",
                "name" => "Kalimantan Timur",
                "coordinates" => [
                    "lat" => "0.5386586",
                    "lng" => "116.419389"
                ],
                "google_place_id" => "ChIJkZxNlhBH8S0R13bjLx2wq8Q"
            ],
            [
                "code" => "65",
                "name" => "Kalimantan Utara",
                "coordinates" => [
                    "lat" => "3.0730929",
                    "lng" => "116.0413889"
                ],
                "google_place_id" => "ChIJ9wvfNH0GDzIRiLlGaN3wERk"
            ],
            [
                "code" => "71",
                "name" => "Sulawesi Utara",
                "coordinates" => [
                    "lat" => "0.6246932",
                    "lng" => "123.9750018"
                ],
                "google_place_id" => "ChIJMZ4GcEJ1hzIRNbgMmBcWiUU"
            ],
            [
                "code" => "72",
                "name" => "Sulawesi Tengah",
                "coordinates" => [
                    "lat" => "-1.4300254",
                    "lng" => "121.4456179"
                ],
                "google_place_id" => "ChIJPS2aZckJiC0RmWLbjP0zbkM"
            ],
            [
                "code" => "73",
                "name" => "Sulawesi Selatan",
                "coordinates" => [
                    "lat" => "-3.6687994",
                    "lng" => "119.9740534"
                ],
                "google_place_id" => "ChIJi75r_YD6DC0R8Br3yvsLAwE"
            ],
            [
                "code" => "74",
                "name" => "Sulawesi Tenggara",
                "coordinates" => [
                    "lat" => "-1.8479",
                    "lng" => "120.5279"
                ],
                "google_place_id" => "ChIJMSoBqds3hS0RQnf0aNFRmrw"
            ],
            [
                "code" => "75",
                "name" => "Gorontalo",
                "coordinates" => [
                    "lat" => "0.5435442",
                    "lng" => "123.0567693"
                ],
                "google_place_id" => "ChIJXeflmUcreTIRZ1kVIwlNzG0"
            ],
            [
                "code" => "76",
                "name" => "Sulawesi Barat",
                "coordinates" => [
                    "lat" => "-2.8441371",
                    "lng" => "119.2320784"
                ],
                "google_place_id" => "ChIJCUS7VCTaki0R8nAzLyC_XOo"
            ],
            [
                "code" => "81",
                "name" => "Maluku",
                "coordinates" => [
                    "lat" => "-3.2384616",
                    "lng" => "130.1452734"
                ],
                "google_place_id" => "ChIJ36EccLq8ES0RUZpkBNvoMF4"
            ],
            [
                "code" => "82",
                "name" => "Maluku Utara",
                "coordinates" => [
                    "lat" => "1.5709993",
                    "lng" => "127.8087693"
                ],
                "google_place_id" => "ChIJszIkro6uni0RwBr3yvsLAwE"
            ],
            [
                "code" => "91",
                "name" => "Papua",
                "coordinates" => [
                    "lat" => "-4.269928",
                    "lng" => "138.0803529"
                ],
                "google_place_id" => "ChIJc5L_qgQsO2gRc-bvXpxOqes"
            ],
            [
                "code" => "92",
                "name" => "Papua Barat",
                "coordinates" => [
                    "lat" => "-1.3361154",
                    "lng" => "133.1747162"
                ],
                "google_place_id" => "ChIJLQviub0KVC0RYsvHxfjBSVM"
            ],
            [
                "code" => "93",
                "name" => "Papua Selatan",
                "coordinates" => [
                    "lat" => "-4.269928",
                    "lng" => "138.0803529"
                ],
                "google_place_id" => "ChIJc5L_qgQsO2gRc-bvXpxOqes"
            ],
            [
                "code" => "94",
                "name" => "Papua Tengah",
                "coordinates" => [
                    "lat" => "-4.269928",
                    "lng" => "138.0803529"
                ],
                "google_place_id" => "ChIJc5L_qgQsO2gRc-bvXpxOqes"
            ],
            [
                "code" => "95",
                "name" => "Papua Pegunungan",
                "coordinates" => [
                    "lat" => "-4.269928",
                    "lng" => "138.0803529"
                ],
                "google_place_id" => "ChIJc5L_qgQsO2gRc-bvXpxOqes"
            ]
        ];

        //Memasukan data ke dalam database
        foreach ($data as $k) {
            unset($set_data);
            $set_data['code'] = $k['code'];
            $set_data['name'] = $k['name'];
            $set_data['coordinate_x'] = $k['coordinates']['lat'];
            $set_data['coordinate_y'] = $k['coordinates']['lng'];
            $set_data['google_place_id'] = $k['google_place_id'];

            ProvinsiModel::create($set_data);
        }
        return response()->json("Data Masuk", 200);
    }


    // Pengambilan data
    public function get_data($id = null)
    {
        try {
            //Mengambil semua data yang ada di database
            $data = ProvinsiModel::all();

            // Melakukan pengecekan apakah yang dikirim memiliki /{id} atau tidak
            if ($id) {
                // Jika memiliki maka tampilkan data berdasarkan id
                $data = ProvinsiModel::findOrFail($id);
            } else {
                // Jika tidak maka tampilkan semua data
                $data = $data;
            }
            //Kembalikan data ke bentuk json
            return response()->json($data, 200);
        } catch (Exception $e) {
            return response()->json(['error'=> $e->getMessage()],500);
        }
    }


    // Pengupdate an data
    public function update_data($id, Request $request)
    {
        try{
            $post = $request->all();

            // Mengambil data berdasarkan id yang dikirim
            $data = ProvinsiModel::where('id', $id)->first();

            // Melakukan perubahan dalam validasi jika code yang dikirim itu code yang sama dengan sebelumnya, hanya mengganti nama saja
            if ($request->code == $data->code) {
                // Jika tidak merubah code , dan hanya name maka codenya tidak unique
                $code = 'required';
            } else {
                // Jika merubah code maka code baru harus unique
                $code = 'unique:table_provinsi';
            }

            // Melakukan validasi
            $validated = $request->validate([
                'name' => 'string',
                'code' => $code,
                'coordinate_x' => 'string',
                'coordinate_y' => 'string',
                'google_place_id' => 'string'
            ]);

            // Melakukan update
            $data->update($validated);

            return response()->json($data, 200);
        }catch (Exception $e)
        {
            return response()->json(['error'=> $e->getMessage()],500);
        }

    }

    // Penambahan Data
    public function store_data(Request $request)
    {
        // Melakukan validasi
        $validated = $request->validate([
            'name' => 'string',
            'code' => 'unique:table_provinsi',
            'coordinate_x' => 'string',
            'coordinate_y' => 'string',
            'google_place_id' => 'string'
        ]);

        // Menambahkan data ke table
        ProvinsiModel::create($validated);


        // Menampilkan data yang sudah ditambahkan tadi
        $data = ProvinsiModel::latest()->first();
        return response()->json($data, 200);
    }

    // Penghapusan data
    public function delete_data($id)
    {
        try {
            // Mencari data berdasarkan id
            $exist = ProvinsiModel::find($id);


            // Jika data ada maka lakukan hapus data
            if ($exist) {
                ProvinsiModel::destroy($id);
                return response()->json("Data Berhasil di Hapus", 200);
            }
            // Jika data tidak ada maka tidak melakukan penghapusan
            // else {
            //     return response()->json("Data Tidak ada", 400);
            // }
        } catch (Exception $e) {
            return response()->json(['error'=> $e->getMessage()],500);
        }

    }
}
