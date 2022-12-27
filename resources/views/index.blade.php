@extends('layouts.main')

@section('title', 'Home | Komjensud')

@section('hero')
    <div class="relative w-full min-h-[70vh] md:min-h-screen flex justify-center items-center bg-cover bg-bottom"
        style="background-image: url({{ asset('loreng.png') }})">
        <div
            class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent bg-black/50 flex justify-center items-center flex-col">
            <img src="{{ asset('hmi.png') }}" alt="" class="w-20 lg:w-40 h-auto block mb-3">
            <h1 class="text-2xl lg:text-6xl font-bold text-white text-center mb-3">HIMPUNAN MAHASISWA ISLAM</h1>
            <span class="text-xl lg:text-4xl font-medium text-white text-center mb-3">Cabang Surabaya</span>
            <span class="text-xl lg:text-4xl font-medium text-white text-center mb-8">Komisariat Jenderal Sudirman
                UPN</span>
            <a href="{{ route('joinus') }}"
                class="bg-white rounded-full border-2 border-green-700 font-bold text-green-700 px-8 py-3 hover:-translate-y-1 hover:scale-110 hover:bg-green-700 mr-6 hover:text-white text-lg duration-300 ">
                Join Us
            </a>
        </div>
    </div>
@endsection

@section('content')
    <main>
        <div class="container mx-auto my-5">
            <div class="mb-10">
                @include('partials.section-title', ['text' => 'Artikel Terbaru'])
            </div>
            <div class="flex justify-center gap-4 ">
                @if ($articles->count())
                    <div class="rounded-lg shadow-xl bg-green-700 w-auto h-[520px] mb-5">
                        <a href="{{ route('detail-artikel', $articles[0]->slug) }}" data-mdb-ripple="true"
                            data-mdb-ripple-color="light">
                            <img class="rounded-t-lg h-[265px] w-full object-cover bg-black"
                                src="{{ asset('image/' . $articles[0]->gambar_artikel) }}" alt="" />
                        </a>
                        <div class="p-6">
                            <h5 class="text-white text-xl font-bold mb-2">{{ $articles[0]->judul }}</h5>
                            <p class="text-gray-300 text-base mb-4">
                                {!! $articles[0]->body !!}
                            </p>
                            <button type="button"
                                class="  px-6 py-2.5 bg-white text-green-700 font-medium text-xs leading-tight uppercase rounded shadow-md hover:text-white hover:bg-green-700 hover:shadow-lg hover:shadow-gray-700 focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out mt-5">Selengkapnya</button>
                        </div>
                    </div>
                @else
                @endif

            </div>
            <div class="flex justify-evenly gap-4 ">
                @foreach ($articles->skip(1) as $article)
                    <div class="rounded-lg flex flex-col justify-between shadow-lg bg-white max-w-sm ">
                        <a href="{{ route('detail-artikel', $article->slug) }}" data-mdb-ripple="true"
                            data-mdb-ripple-color="light">
                            <img class="rounded-t-lg w-[400px] h-[300px] object-cover bg-gray-400"
                                src="{{ asset('image/' . $article->gambar_artikel) }}" alt="" />
                        </a>
                        <div class="p-6 flex flex-col grow justify-start">
                            <h5 class="text-gray-900 text-xl font-medium mb-2  ">{{ $article->judul }}</h5>
                            {{-- chips tag --}}
                            <div class="flex flex-wrap justify-start max-h-[35px] my-2 space-x-2">
                                <span
                                    class="px-4 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-xs flex align-center w-max cursor-pointer active:bg-gray-300  transition duration-300 ease">
                                    {{ $article->category->nama_kategori }}
                                </span>
                            </div>
                            <div class="text-gray-700 text-base break-all overflow-hidden max-h-[140px] mb-4">
                                {!! $article->body !!}
                            </div>

                            <div class="bottom-0">
                                Author by {{ $article->users->name }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>




    </main>
@endsection
