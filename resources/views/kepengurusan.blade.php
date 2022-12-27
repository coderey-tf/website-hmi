@extends('layouts.main')
@section('title', 'Kepengurusan | Komjensud')
@section('content')
    @include('partials.hero-section', [
        'text' => 'Kepengurusan',
        'image' => asset('posts-hero.jpg'),
    ])

    <main class="container mx-auto min-h-screen py-12 px-4 md:px-10">

        <div class="accordion" id="accordionExample">
            <div class="accordion-item bg-white border border-gray-200">
                <div class="accordion-header mb-0" id="headingOne">
                    <button
                        class="
                  accordion-button
                  relative
                  flex
                  items-center
                  w-full
                  py-4
                  px-5
                  text-base text-gray-800 text-left
                  bg-white
                  border-0
                  rounded-none
                  transition
                  focus:outline-none
                "
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        <div>

                            @include('partials.section-title', [
                                'text' => 'Pengurus HMI Komisariat Jenderal Sudirman UPN 2021-2022',
                            ])
                        </div>
                    </button>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body py-4 px-5">
                        {{-- Bid Umum --}}
                        <div class=" content-center text-center mb-8">
                            <h2 class="text-gray-900 font-bold text-lg mb-2 md:text-2xl">Bidang Umum</h2>
                            <span class="block mx-auto w-80 h-1 bg-green-700 rounded-full mb-2"></span>
                        </div>
                        <div class="flex mx-auto justify-center mb-10">
                            @foreach ($structures as $structure)
                                @if ($structure->bidang == 'Bidang Umum')
                                    <div class="flex flex-col mr-10  mb-5">
                                        <div
                                            class="bg-gradient-to-br h-[490px] from-green-700 to-green-600 shadow-xl w-52 shadow-black rounded-lg max-w-sm ">
                                            <img src="{{ asset('image/' . $structure->image) }}"
                                                alt="{{ $structure->name }}" class="p-5 mx-auto h-72">

                                            <div class="px-5 pb-5 ]">
                                                <h3
                                                    class="text-gray-900 font-semibold h-[56px] text-lg tracking-tight dark:text-white">
                                                    {{ $structure->name }}
                                                </h3>
                                                <div class="mt-2.5 mb-5 h-[45px] text-white items-center">
                                                    {{ $structure->jurusan }} | {{ $structure->angkatan }}
                                                </div>
                                                <div class="justify-between">
                                                    <span
                                                        class="text-xl font-bold text-gray-900 dark:text-white">{{ $structure->jabatan }}</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        {{-- bid p3a --}}
                        <div class=" content-center text-center mb-8">
                            <h2 class="text-gray-900 font-bold text-lg mb-2 md:text-2xl">Bidang Penelitian, Pengembangan Dan
                                Pembinaan Anggota (P3A)</h2>
                            <span class="block mx-auto w-80 h-1 bg-green-700 rounded-full mb-2"></span>
                        </div>
                        <div class="flex mx-auto justify-center mb-10 ">
                            @foreach ($structures as $structure)
                                @if ($structure->bidang == 'P3A')
                                    <div class="flex flex-col mr-10 mb-5">
                                        <div
                                            class="bg-gradient-to-br h-[490px] from-green-700 to-green-600 shadow-xl w-52 shadow-black rounded-lg max-w-sm ">
                                            <img src="{{ asset('image/' . $structure->image) }}"
                                                alt="{{ $structure->name }}" class="p-5 mx-auto h-72">

                                            <div class="px-5 pb-5 ]">
                                                <h3
                                                    class="text-gray-900 font-semibold h-[56px] text-lg tracking-tight dark:text-white">
                                                    {{ $structure->name }}
                                                </h3>
                                                <div class="mt-2.5 mb-5 h-[45px] text-white items-center">
                                                    {{ $structure->jurusan }} | {{ $structure->angkatan }}
                                                </div>
                                                <div class="justify-between">
                                                    <span
                                                        class="text-xl font-bold text-gray-900 dark:text-white">{{ $structure->jabatan }}</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        {{-- bid ptkp --}}
                        <div class=" content-center text-center mb-8">
                            <h2 class="text-gray-900 font-bold text-lg mb-2 md:text-2xl">Bidang Perguruan Tinggi,
                                Kemahasiswaan Dan
                                Kepemudaan (PTKP)</h2>
                            <span class="block mx-auto w-80 h-1 bg-green-700 rounded-full mb-2"></span>
                        </div>
                        <div class="flex mx-auto justify-center mb-10">
                            @foreach ($structures as $structure)
                                @if ($structure->bidang == 'PTKP')
                                    <div class="flex flex-col mr-10 mb-5">
                                        <div
                                            class="bg-gradient-to-br h-[490px] from-green-700 to-green-600 shadow-xl w-52 shadow-black rounded-lg max-w-sm ">
                                            <img src="{{ asset('image/' . $structure->image) }}"
                                                alt="{{ $structure->name }}" class="p-5 mx-auto h-72">

                                            <div class="px-5 pb-5 ]">
                                                <h3
                                                    class="text-gray-900 font-semibold h-[56px] text-lg tracking-tight dark:text-white">
                                                    {{ $structure->name }}
                                                </h3>
                                                <div class="mt-2.5 mb-5 h-[45px] text-white items-center">
                                                    {{ $structure->jurusan }} | {{ $structure->angkatan }}
                                                </div>
                                                <div class="justify-between">
                                                    <span
                                                        class="text-xl font-bold text-gray-900 dark:text-white">{{ $structure->jabatan }}</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        {{-- bid kpp --}}
                        <div class=" content-center text-center mb-8">
                            <h2 class="text-gray-900 font-bold text-lg mb-2 md:text-2xl">Bidang Kewirausahaan dan
                                Pengembangan Profesi
                                (KPP)
                            </h2>
                            <span class="block mx-auto w-80 h-1 bg-green-700 rounded-full mb-2"></span>
                        </div>
                        <div class="flex mx-auto justify-center mb-10">
                            @foreach ($structures as $structure)
                                @if ($structure->bidang == 'KPP')
                                    <div class="flex flex-col mr-10 mb-5">
                                        <div
                                            class="bg-gradient-to-br h-[490px] from-green-700 to-green-600 shadow-xl w-52 shadow-black rounded-lg max-w-sm ">
                                            <img src="{{ asset('image/' . $structure->image) }}"
                                                alt="{{ $structure->name }}" class="p-5 mx-auto h-72">

                                            <div class="px-5 pb-5 ]">
                                                <h3
                                                    class="text-gray-900 font-semibold h-[56px] text-lg tracking-tight dark:text-white">
                                                    {{ $structure->name }}
                                                </h3>
                                                <div class="mt-2.5 mb-5 h-[45px] text-white items-center">
                                                    {{ $structure->jurusan }} | {{ $structure->angkatan }}
                                                </div>
                                                <div class="justify-between">
                                                    <span
                                                        class="text-xl font-bold text-gray-900 dark:text-white">{{ $structure->jabatan }}</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        {{-- bid pp --}}
                        <div class=" content-center text-center mb-8">
                            <h2 class="text-gray-900 font-bold text-lg mb-2 md:text-2xl">Bidang Pemberdayaan Perempuan (PP)
                            </h2>
                            <span class="block mx-auto w-80 h-1 bg-green-700 rounded-full mb-2"></span>
                        </div>
                        <div class="flex mx-auto justify-center mb-10">
                            @foreach ($structures as $structure)
                                @if ($structure->bidang == 'PP')
                                    <div class="flex flex-col mr-10 mb-5">
                                        <div
                                            class="bg-gradient-to-br h-[490px] from-green-700 to-green-600 shadow-xl w-52 shadow-black rounded-lg max-w-sm ">
                                            <img src="{{ asset('image/' . $structure->image) }}"
                                                alt="{{ $structure->name }}" class="p-5 mx-auto h-72">

                                            <div class="px-5 pb-5 ]">
                                                <h3
                                                    class="text-gray-900 font-semibold h-[56px] text-lg tracking-tight dark:text-white">
                                                    {{ $structure->name }}
                                                </h3>
                                                <div class="mt-2.5 mb-5 h-[45px] text-white items-center">
                                                    {{ $structure->jurusan }} | {{ $structure->angkatan }}
                                                </div>
                                                <div class="justify-between">
                                                    <span
                                                        class="text-xl font-bold text-gray-900 dark:text-white">{{ $structure->jabatan }}</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item bg-white border border-gray-200">
                <h2 class="accordion-header mb-0" id="headingTwo">
                    <button
                        class="
                  accordion-button
                  collapsed
                  relative
                  flex
                  items-center
                  w-full
                  py-4
                  px-5
                  text-base text-gray-800 text-left
                  bg-white
                  border-0
                  rounded-none
                  transition
                  focus:outline-none
                "
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <div>

                            @include('partials.section-title', [
                                'text' => 'Pengurus HMI Komisariat Jenderal Sudirman UPN 2020-2021',
                            ])
                        </div>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body py-4 px-5">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default,
                        until the collapse plugin adds the appropriate classes that we use to style each
                        element. These classes control the overall appearance, as well as the showing and
                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                        our default variables. It's also worth noting that just about any HTML can go within
                        the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item bg-white border border-gray-200">
                <h2 class="accordion-header mb-0" id="headingThree">
                    <button
                        class="
                  accordion-button
                  collapsed
                  relative
                  flex
                  items-center
                  w-full
                  py-4
                  px-5
                  text-base text-gray-800 text-left
                  bg-white
                  border-0
                  rounded-none
                  transition
                  focus:outline-none
                "
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        <div>

                            @include('partials.section-title', [
                                'text' => 'Pengurus HMI Komisariat Jenderal Sudirman UPN 2019-2020',
                            ])
                        </div>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body py-4 px-5">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default,
                        until the collapse plugin adds the appropriate classes that we use to style each
                        element. These classes control the overall appearance, as well as the showing and
                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                        our default variables. It's also worth noting that just about any HTML can go within
                        the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item bg-white border border-gray-200">
                <h2 class="accordion-header mb-0" id="headingFour">
                    <button
                        class="
                  accordion-button
                  collapsed
                  relative
                  flex
                  items-center
                  w-full
                  py-4
                  px-5
                  text-base text-gray-800 text-left
                  bg-white
                  border-0
                  rounded-none
                  transition
                  focus:outline-none
                "
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour">
                        <div>

                            @include('partials.section-title', [
                                'text' => 'Pengurus HMI Komisariat Jenderal Sudirman UPN 2018-2019',
                            ])
                        </div>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body py-4 px-5">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default,
                        until the collapse plugin adds the appropriate classes that we use to style each
                        element. These classes control the overall appearance, as well as the showing and
                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                        our default variables. It's also worth noting that just about any HTML can go within
                        the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item bg-white border border-gray-200">
                <h2 class="accordion-header mb-0" id="headingFive">
                    <button
                        class="
                  accordion-button
                  collapsed
                  relative
                  flex
                  items-center
                  w-full
                  py-4
                  px-5
                  text-base text-gray-800 text-left
                  bg-white
                  border-0
                  rounded-none
                  transition
                  focus:outline-none
                "
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                        aria-controls="collapseFive">
                        <div>

                            @include('partials.section-title', [
                                'text' => 'Pengurus HMI Komisariat Jenderal Sudirman UPN 2017-2018',
                            ])
                        </div>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body py-4 px-5">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default,
                        until the collapse plugin adds the appropriate classes that we use to style each
                        element. These classes control the overall appearance, as well as the showing and
                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                        our default variables. It's also worth noting that just about any HTML can go within
                        the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>

        {{-- <p class="md:space-x-1 space-y-1 md:space-y-0 mb-4">
            <button
                class="flex justify-between items-center px-6 py-2.5 bg-white w-full text-left text-white font-medium text-xs shadow-md leading-tight uppercase rounded hover:shadow-lg  focus:shadow-lg focus:outline-none focus:ring-0  transition duration-150 ease-in-out"
                type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                aria-controls="collapseExample">

                <div>
                    @include('partials.section-title', [
                        'text' => 'Pengurus HMI Komisariat Jenderal Sudirman UPN 2021-2022',
                    ])
                </div>


                <i class="fas fa-chevron-down text-lg text-black"></i>
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="block p-6 rounded-lg shadow-lg bg-white">
                <div class=" content-center text-center mb-8">
                    <h2 class="text-gray-900 font-bold text-lg mb-2 md:text-2xl">Bidang Umum</h2>
                    <span class="block mx-auto w-80 h-1 bg-green-700 rounded-full mb-2"></span>
                </div>
                <div class="flex mx-auto justify-center mb-10">
                    @foreach ($structures as $structure)
                        @if ($structure->bidang == 'Bidang Umum')
                            <div class="flex flex-col mr-10  mb-5">
                                <div
                                    class="bg-gradient-to-br h-[490px] from-green-700 to-green-600 shadow-xl w-52 shadow-black rounded-lg max-w-sm ">
                                    <img src="{{ asset('image/' . $structure->image) }}" alt="{{ $structure->name }}"
                                        class="p-5 mx-auto h-72">

                                    <div class="px-5 pb-5 ]">
                                        <h3
                                            class="text-gray-900 font-semibold h-[56px] text-lg tracking-tight dark:text-white">
                                            {{ $structure->name }}
                                        </h3>
                                        <div class="mt-2.5 mb-5 h-[45px] text-white items-center">
                                            {{ $structure->jurusan }} | {{ $structure->angkatan }}
                                        </div>
                                        <div class="justify-between">
                                            <span
                                                class="text-xl font-bold text-gray-900 dark:text-white">{{ $structure->jabatan }}</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div> --}}



    </main>


@endsection
