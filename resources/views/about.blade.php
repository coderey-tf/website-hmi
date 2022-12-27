@extends('layouts.main')
@section('title', 'About | Komjensud')
@section('content')
    @include('partials.hero-section', [
        'text' => 'Tentang HMI',
        'image' => asset('posts-hero.jpg'),
    ])

    <main class="container mx-auto  py-12 px-4 md:px-10">
        <div class="mb-10">
            @include('partials.section-title', ['text' => 'Tentang HMI'])
        </div>

        <div class="flex justify-between gap-8 ">
            <div class="w-1/2 flex flex-col items-center justify-center">
                <img src="{{ asset('hmi.png') }}" alt="" class="w-40 lg:w-36 h-auto mb-3 block">
                <span class="pb-2 text-2xl">Himpunan Mahasiswa Islam</span>
                <span class="block w-32 h-1 bg-green-700 rounded-full mb-2"></span>
            </div>

            <div class="w-1/2 flex flex-col justify-start items-center ">
                <div class="flex flex-col gap-5">
                    <div class="flex items-center">
                        <span class="text-4xl text-green-700 block w-32 pl-10 text-center"><i
                                class="fas fa-users"></i></span>
                        <div class="w-2/3">
                            <p class="text-base font-bold ">Pemrakarsa</p>
                            <p class="text-base text-black font-normal">Lafran Pane beserta 14 orang mahasiswa Sekolah
                                Tinggi
                                Islam
                                (sekarang
                                Universitas Islam
                                Indonesia).</p>
                        </div>
                    </div>

                    <div class="flex items-center ">
                        <span class="text-4xl text-green-700 block w-32 pl-10 text-center"><i
                                class="fas fa-calendar"></i></span>
                        <div>
                            <p class="text-base font-bold">Tanggal Pembentukan</p>
                            <p class="text-base text-black font-normal">5 Februari 1947 / 14 Rabiul Awal 1366 H</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <span class="text-4xl text-green-700 block w-32 text-center"><i
                                class="fas fa-chalkboard-teacher"></i></span>
                        <div>
                            <p class="text-base font-bold">Jenis</p>
                            <p class="text-base text-black font-normal">Organisasi Kemahasiswaan, Perkaderan dan Perjuangan.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center ">
                        <span class="text-4xl text-green-700 block w-32 text-center"><i
                                class="fas fa-quote-left"></i></span>
                        <div class="w-2/3">
                            <p class="text-base font-bold">Slogan</p>
                            <p class="text-base text-black font-normal">Lafran Pane beserta 14 orang mahasiswa Sekolah
                                Tinggi Islam (sekarang
                                Universitas Islam
                                Indonesia).</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <span class="text-4xl text-green-700 block w-32 text-center"><i
                                class="fab fa-font-awesome-flag"></i></span>
                        <div class="w-2/3">
                            <p class="text-base font-bold">Tujuan</p>
                            <p class="text-base text-black font-normal">Terbinanya insan akademis, pencipta, pengabdi yang
                                bernafaskan islam
                                dan bertanggung jawab atas terwujudnya masyarakat adil makmur yang diridhoi Allah SWT.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-between gap-8 ">
            <div class="w-1/2 ">
                <h2 class="text-xl font-semibold mb-6 mt-12">Sejarah Singkat Berdirinya HMI</h2>
                @foreach ($abouts as $about)
                    <p class="indent-5 text-justify mb-3">{{ $about->sejarah }}</p>
                @endforeach


            </div>

            <div class="w-1/2">
                <img src="" alt="">
            </div>
        </div>
        <div class="mb-10 mt-12">
            @include('partials.section-title', [
                'text' => 'Tentang Komisariat Jenderal Sudirman UPN',
            ])
            <p class="indent-5 text-justify mb-3 mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                quisquam. Sed maxime, temporibus ab ut nam obcaecati minus explicabo ipsam, laboriosam nostrum adipisci rem
                quas ipsa quia eligendi quibusdam nobis? Repudiandae placeat nesciunt quae tenetur aut omnis, provident
                nihil. Quo rerum, laborum a consequuntur tempore minima repellat blanditiis cupiditate ad qui, nihil hic
                magni ea? Corporis quibusdam placeat, repellat nemo quod deleniti fugiat corrupti? Quibusdam, perferendis
                exercitationem omnis voluptatibus odio molestias voluptatem placeat repellendus enim eligendi quidem? Odit
                molestiae debitis fuga aliquid optio iste suscipit similique praesentium natus distinctio mollitia ad eius
                magni doloribus recusandae possimus, quisquam nemo voluptas. Et, laudantium itaque inventore incidunt
                deserunt quidem optio aperiam rem omnis hic obcaecati voluptatum iusto repellat unde ex, quod, sapiente
                labore. Debitis optio labore sapiente sint voluptate obcaecati laboriosam neque, vero harum rem iusto!
                Expedita earum tempora officia et quis harum incidunt totam libero natus necessitatibus. Possimus
                reiciendis, tempora odit ipsam dolores nemo corrupti! Hic, quasi? Veritatis commodi architecto distinctio
                dolores itaque blanditiis assumenda magni hic explicabo tempora, exercitationem minus. Aperiam autem
                architecto, distinctio eaque pariatur illo nulla officia minus reiciendis molestiae, nobis maxime aut
                adipisci qui! Ut, consequatur mollitia cumque esse harum dolores veritatis quibusdam, aperiam aspernatur
                saepe inventore beatae?</p>
            <p class="indent-5 text-justify mb-3 mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                quisquam. Sed maxime, temporibus ab ut nam obcaecati minus explicabo ipsam, laboriosam nostrum adipisci rem
                quas ipsa quia eligendi quibusdam nobis? Repudiandae placeat nesciunt quae tenetur aut omnis, provident
                nihil. Quo rerum, laborum a consequuntur tempore minima repellat blanditiis cupiditate ad qui, nihil hic
                magni ea? Corporis quibusdam placeat, repellat nemo quod deleniti fugiat corrupti? Quibusdam, perferendis
                exercitationem omnis voluptatibus odio molestias voluptatem placeat repellendus enim eligendi quidem? Odit
                molestiae debitis fuga aliquid optio iste suscipit similique praesentium natus distinctio mollitia ad eius
                magni doloribus recusandae possimus, quisquam nemo voluptas. Et, laudantium itaque inventore incidunt
                deserunt quidem optio aperiam rem omnis hic obcaecati voluptatum iusto repellat unde ex, quod, sapiente
                labore. Debitis optio labore sapiente sint voluptate obcaecati laboriosam neque, vero harum rem iusto!
                Expedita earum tempora officia et quis harum incidunt totam libero natus necessitatibus. Possimus
                reiciendis, tempora odit ipsam dolores nemo corrupti! Hic, quasi? Veritatis commodi architecto distinctio
                dolores itaque blanditiis assumenda magni hic explicabo tempora, exercitationem minus. Aperiam autem
                architecto, distinctio eaque pariatur illo nulla officia minus reiciendis molestiae, nobis maxime aut
                adipisci qui! Ut, consequatur mollitia cumque esse harum dolores veritatis quibusdam, aperiam aspernatur
                saepe inventore beatae?</p>
        </div>

    </main>
@endsection
