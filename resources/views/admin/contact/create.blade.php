@extends('admin.layouts.main')

@section('title', 'Tambah Data Kontak')

@section('content')
    <main class="h-full overflow-y-auto">
        <button type="button"
            class="border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 mb-4 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline">
            <a href="/admin/contacts" class="">
                <i class="far fa-arrow-alt-circle-left mr-2"></i>
                Kembali</a>
        </button>

        <!-- General elements -->
        <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="block text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Alamat</label>
                    <input
                        class="block w-full mt-1 text-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Alamat" name="alamat" />
                </div>
                @error('alamat')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="block text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Email</label>
                    <input
                        class="block w-full mt-1 text-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Email" name="email" />
                </div>
                @error('email')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="block text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Phone</label>
                    <input
                        class="block w-full mt-1 text-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Phone" name="phone" />
                </div>
                @error('phone')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="block text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Whatsapp</label>
                    <input
                        class="block w-full mt-1 text-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Whatsapp" name="whatsapp" />
                </div>
                @error('whatsapp')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="block mt-4 text-lg form-group">
                    <label for="" class="text-gray-700 dark:text-gray-400">Maps Embed</label>
                    <textarea
                        class="block w-full mt-1 text-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        rows="3" placeholder="Maps Embed" name="maps_embed"></textarea>
                </div>
                @error('maps_embed')
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
