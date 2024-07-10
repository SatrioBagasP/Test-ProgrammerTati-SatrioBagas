@extends('layout.main')

@section('isi')
    <div class="container mt-10">
        <h1
            class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            {{ $log->judul }}
        </h1>
        <div class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
            {!! $log->desc !!}
        </div>
    </div>
    @can('KepalaDivisi')
        <form class="mt-10" action="/updatelog/{{ $log->id }}" method="post">
            @csrf
            <input type="hidden" name="isAccBidang" id="action_value" value="">
            <button type="submit" onclick="document.getElementById('action_value').value='2';"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Accept
            </button>
            <button type="submit" onclick="document.getElementById('action_value').value='3';"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Reject</button>
        </form>
    @endcan
    @can('KepalaDinas')
        <form class="mt-10" action="/updatelog/{{ $log->id }}" method="post">
            @csrf
            <input type="hidden" name="isAccDinas" id="action_value" value="">
            <button type="submit" onclick="document.getElementById('action_value').value='2';"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Accept
            </button>
            <button type="submit" onclick="document.getElementById('action_value').value='3';"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Reject</button>
        </form>
    @endcan
@endsection
