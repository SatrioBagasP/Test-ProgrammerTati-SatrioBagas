@extends('layout.main')
@section('isi')
    <center>
        <h1
            class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Log Harian</h1>
    </center>

    @can('StaffDivisi')
        <a href="/createlog">
            <button type="button"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Tambah
                Log Harian
            </button>
        </a>
    @endcanany
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
                    @can('KepalaDivisi')
                        <th scope="col" class="px-6 py-3">
                            Nama Staff
                        </th>
                    @endcan
                    @can('KepalaDinas')
                        <th scope="col" class="px-6 py-3">
                            Nama Divisi
                        </th>
                    @endcan
                    <th scope="col" class="px-6 py-3">
                        Status Kepala Bidang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status Kepala Dinas
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($log as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->judul }}
                        </th>
                        <td class="px-6 py-4">
                            {!! Str::limit($data->desc, 50) !!}
                        </td>
                        @can('KepalaDivisi')
                            <td class="px-6 py-4">
                                {{ $data->user->name }}
                            </td>
                        @endcan
                        @can('KepalaDinas')
                            <td class="px-6 py-4">
                                {{ $data->user->divisi->divisi }}
                            </td>
                        @endcan
                        <td class="px-6 py-4">
                            {{ $data->statusbidang->status }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($data->statusbidang->status != 'Accepted')
                                ----
                            @else
                                {{ $data->statusdinas->status }}
                            @endif
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if ($data->statusbidang->status == 'Rejected' || $data->statusdinas->status == 'Accepted')
                                --
                            @endif
                            @if ($data->statusbidang->status == 'Pending' && $data->statusdinas->status == 'Pending')
                                || ($data->statusbidang->statuss == 'Accepted')
                                <a href="/logharian/{{ $data->id }}">
                                    <button type="button"
                                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </a>
                            @endif

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
