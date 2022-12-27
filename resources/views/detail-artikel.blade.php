@extends('layouts.main')
@section('title', 'Artikel | Komjensud')
@section('content')
    <main>

        <div class="mb-5 flex flex-col-reverse gap-2 ">
            <h3>@include('partials.section-title', [
                'text' => 'Artikel',
            ])</h3>
        </div>
        <div class=" grid grid-cols-5 gap-4 mx-auto">
            <div class="content col-span-4 shadow-2xl rounded-lg bg-white">

                <div class="flex flex-col p-14">
                    <h1 class="uppercase text-5xl text-center font-semibold pb-2">{{ $articles->judul }}</h1>
                    <small class="mx-auto pb-4">
                        <i class="far fa-clock mr-1"></i>
                        {{ $articles->created_at->format('d-m-Y') }}
                    </small>
                    <img src="{{ asset('image/' . $articles->gambar_artikel) }}"
                        class="w-full h-[500px] object-cover bg-gray-400" alt="">
                    <div class="detailbadge text-sm py-3">

                        <a href=""
                            class="inline-block py-1.5 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-600 text-white rounded">{{ $articles->category->nama_kategori }}</a>
                        <a href=""
                            class="inline-block py-1.5 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-600 text-white rounded">
                            <i class="fas fa-user mr-1"></i>
                            {{ $articles->users->name }}</a>
                    </div>
                    <div>
                        {!! $articles->body !!}
                    </div>
                </div>


            </div>
            <div class="sidebar col-span-1 p-5 rounded-lg shadow-2xl bg-white">
                <div class="flex justify-center ">
                    <div class="mb-1 xl:w-96">
                        <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 rounded">
                            <input type="search"
                                class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                            <span
                                class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded"
                                id="basic-addon2">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                                    class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="pt-1 ml-1">
                    <h4 class="font-bold text-lg border-b-4 border-green-700"> Kategori </h4>
                    <ul>
                        <li class="flex justify-between px-1 py-2">
                            <p> Kategori 1</p>

                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-yellow-500 text-white rounded">0</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </main>


@endsection
