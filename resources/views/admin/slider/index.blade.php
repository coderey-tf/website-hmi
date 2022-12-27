@extends('admin.layouts.main')

@section('title', 'Data Slider')

@section('content')
    <main class="h-full overflow-y-auto">
        <button type="button"
            class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 mb-4 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
            <a href="/admin/sliders/create" class="">Tambah Data</a>
        </button>
        @if ($message = Session::get('message'))
            <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div>
                    <span class="font-medium">
                        <strong>Berhasil!!!</strong>
                    </span>
                    <p>{{ $message }}</p>
                </div>
            </div>
        @endif
        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full table-auto border-separate whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <th class="px-4 py-3 w-5">No.</th>
                            <th class="px-4 py-3">Judul</th>
                            <th class="px-4 py-3">Deskripsi</th>
                            <th class="px-4 py-3">Gambar</th>
                            <th class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @php
                            $i = 1;
                        @endphp

                        @foreach ($sliders as $slider)
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <td class="px-4 py-3 text-center ">{{ $i++ }}</td>
                                <td class="px-4 py-3">{{ $slider->title }}</td>
                                <td class="px-4 py-3">{{ $slider->description }}</td>
                                <td class="px-4 py-3">
                                    <img src="{{ asset('image/' . $slider->image) }}" alt=""
                                        class="img-fluid mx-auto" width="150px">
                                </td>
                                <td class="px-4 py-3  flex justify-center ">
                                    <button type="button"
                                        class="border border-yellow-500 bg-yellow-500 text-white rounded-md px-4 py-2 mb-4 transition duration-500 ease select-none hover:bg-yellow-600 focus:outline-none focus:shadow-outline mr-2 content-center">
                                        <a href="{{ route('sliders.edit', $slider->id) }}">Edit</a>
                                    </button>

                                    <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 mb-4 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline ml-2 content-center">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </main>
@endsection
