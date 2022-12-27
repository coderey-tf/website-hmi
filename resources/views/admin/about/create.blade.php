@extends('admin.layouts.main')

@section('title', 'Tambah Data Sejarah')

@section('content')
    <main class="h-full overflow-y-auto">
        <button type="button"
            class="border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 mb-4 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline">
            <a href="/admin/abouts" class="">
                <i class="far fa-arrow-alt-circle-left mr-2"></i>
                Kembali</a>
        </button>

        <!-- General elements -->
        <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="block text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Tanggal Edit</label>
                    <input
                        class="block w-full mt-1 text-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="date" name="date" />
                </div>
                @error('date')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="block mt-4 text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Sejarah Komisariat</label>
                    <textarea
                        class="block w-full mt-1 text-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        rows="3" placeholder="Tuliskan Sejarah Komisariat" name="sejarah"></textarea>
                </div>
                @error('sejarah')
                    <small style="color:red">{{ $message }}</small>
                @enderror



                <button type="submit"
                    class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 mt-4 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline w-full form-group">
                    Submit</a>
                </button>
            </div>
        </form>
    </main>



@endsection
