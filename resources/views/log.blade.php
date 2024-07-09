@extends('layout.main')
@section('isi')
<center>
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Log Harian</h1>
</center>


<a href="/createlog"><button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Tambah Log Harian</button></a>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-900 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Judul
                </th>
                <th scope="col" class="px-6 py-3">
                    Desc
                </th>
                <th scope="col" class="px-6 py-3">
                    Status Kepala Bidang
                </th>
                <th scope="col" class="px-6 py-3">
                    Status Kepala Dinas
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($log as $data )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$data->judul}}
                </th>
                <td class="px-6 py-4">
                    {!! Str::limit($data->desc, 50); !!}
                </td>
                <td class="px-6 py-4">
                    {{$data->statusbidang->status}}
                </td>
                <td class="px-6 py-4">
                    @if ($data->statusbidang->status != 'Accepted')
                        ----
                    @else
                      {{$data->statusdinas->status}}
                    @endif
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>


@endsection
