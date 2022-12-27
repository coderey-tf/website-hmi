@extends('admin.layouts.main')

@section('title', 'Tambah Artikel')

@section('content')
    <main class="h-full overflow-y-auto">
        <button type="button"
            class="border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 mb-4 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline">
            <a href="/admin/articles" class="">
                <i class="far fa-arrow-alt-circle-left mr-2"></i>
                Kembali</a>
        </button>

        <!-- General elements -->
        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="block mt-4 text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Judul Artikel</label>
                    <input
                        class="block w-full mt-1 text-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Judul" name="judul" />
                </div>
                @error('judul')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="block mt-4 text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Body Artikel</label>
                    <textarea
                        class="block w-full mt-1 text-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        rows="3" id="editor" name="body"></textarea>
                </div>
                @error('body')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="block mt-4 text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Kategori</label>
                    <select
                        class="block w-full mt-1 text-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-control p-2"
                        name="kategori_id">
                        @foreach ($categories as $category)
                            <option class="p-1" value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                        @endforeach

                    </select>
                </div>
                @error('kategori_id')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class=" block mt-4 text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Gambar Artikel</label>
                    <div class="mt-4 ">
                        <input type="file" class="form-control bg-slate-200 rounded-md w-auto" name="gambar_artikel">
                    </div>
                </div>
                @error('gambar_artikel')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="block mt-4 text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Status</label>
                    <select
                        class="block w-full mt-1 text-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-control p-2"
                        name="is_active">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                    </select>
                </div>

                <button type="submit"
                    class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 mt-4 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline w-full form-group">
                    Submit</a>
                </button>
            </div>
        </form>
    </main>



@endsection
