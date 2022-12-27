@extends('admin.layouts.main')

@section('title', 'Edit Data Kategori')

@section('content')
    <main class="h-full overflow-y-auto">
        <button type="button"
            class="border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 mb-4 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline">
            <a href="/admin/categories" class="">
                <i class="far fa-arrow-alt-circle-left mr-2"></i>
                Kembali</a>
        </button>

        <!-- General elements -->
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="block mt-4 text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Nama Kategori</label>
                    <input
                        class="block w-full mt-1 text-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="nama_kategori" value="{{ $category->nama_kategori }}" />
                </div>
                <button type="submit"
                    class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 mt-4 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline w-full form-group">
                    Submit</a>
                </button>
            </div>
        </form>
    </main>



@endsection
