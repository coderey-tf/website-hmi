<header class="fixed w-full z-10">
    <nav class="h-16 bg-white flex justify-between items-center shadow-lg">
        <a href="{{ route('home') }}" class="h-full hidden lg:flex justify-center">
            <div class="h-full bg-white py-2 pl-4 lg:pl-8 flex justify-center items-center gap-3">
                <img src="{{ asset('komjensud.png') }}" alt="Logo" class="h-full" />

            </div>

        </a>

        <a href="{{ route('home') }}" class="h-full py-2 pl-4 lg:pl-8 lg:hidden flex justify-center items-center gap-3">
            <img src="{{ asset('komjensud.png') }}" alt="Logo" class="h-full" />
        </a>

        <ul class=" hidden justify-between uppercase text-sm font-[600] pr-12 w-1/2 lg:flex h-full items-center">
            <li class=" ">
                <a href="{{ route('home') }}"
                    class="{{ Request::routeIs('home') ? 'active pb-2 border-b-2 border-green-700 text-green-700' : '' }} hover:text-green-700 cursor-pointer hover:border-b-2 hover:border-green-700 pb-2">Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}"
                    class="{{ Request::routeIs('about') ? 'active pb-2 border-b-2 border-green-700 text-green-700' : '' }} hover:text-green-700 cursor-pointer hover:border-b-2 hover:border-green-700 pb-2">About</a>
            </li>
            <li>
                <a href="{{ route('kepengurusan') }}"
                    class="{{ Request::routeIs('kepengurusan') ? 'active pb-2 border-b-2 border-green-700 text-green-700' : '' }} hover:text-green-700 cursor-pointer hover:border-b-2 hover:border-green-700 pb-2">Kepengurusan</a>
            </li>
            <li>
                <a href="{{ route('artikel') }}"
                    class="{{ Request::routeIs('artikel') ? 'active pb-2 border-b-2 border-green-700 text-green-700' : '' }} hover:text-green-700 cursor-pointer hover:border-b-2 hover:border-green-700 pb-2">Artikel</a>
            </li>
            <li class="relative group h-full  flex justify-center items-center">
                <button class="hover:text-green-700 uppercase ">
                    <span class="font-[600]">Info</span>
                    <i class="fas fa-angle-down ml-1"></i>
                </button>
                <div
                    class="hidden group-hover:block -left-6 top-16 absolute w-52 bg-green-600/90 rounded-br-lg rounded-bl-lg shadow-lg py-4 z-30 text-white">
                    <a href="{{ route('opini') }}" class="block px-4 py-4 hover:bg-green-700 hover:text-white">Opini
                        Kader
                    </a>
                    <a href="{{ route('kegiatan') }}" class="block px-4 py-4 hover:bg-green-700 hover:text-white">
                        Kegiatan
                    </a>
                    <a href="{{ route('galeri') }}" class="block px-4 py-4 hover:bg-green-700 hover:text-white">
                        Galeri Foto
                    </a>
                    <a href="{{ route('dokumen') }}" class="block px-4 py-4 hover:bg-green-700 hover:text-white">
                        Dokumen Penting
                    </a>

                </div>
            </li>
            <li>
                <a href="{{ route('kontak') }}"
                    class="{{ Request::routeIs('kontak') ? 'active pb-2 border-b-2 border-green-700 text-green-700' : '' }} hover:text-green-700 cursor-pointer hover:border-b-2 hover:border-green-700 pb-2">Kontak</a>
            </li>
            <li>
                <a href="{{ route('joinus') }}"
                    class="bg-white rounded-full border-2 border-green-700 font-bold text-green-700 px-4 py-1 transition duration-300 ease-in-out hover:bg-green-700 mr-6 hover:text-white ">
                    Join Us
                </a>

            </li>
        </ul>

        <button onclick="togleNavbar()" class="text-4xl pr-4 lg:hidden">
            <i class="fas fa-bars"></i>
        </button>
    </nav>
    <div class="mobile-menu bg-white py-2 hidden">
        <a href="{{ route('home') }}" class="flex items-center py-4 px-8 hover:bg-gray-400">
            <i class="fas fa-newspaper mr-3"></i> Berita & Pengumuman
        </a>
        <a href="{{ route('kepengurusan') }}" class="flex items-center py-4 px-8 hover:bg-gray-400">
            <i class="fas fa-sitemap mr-3"></i> Struktur Organisasi
        </a>
        <a href="{{ route('galeri') }}" class="flex items-center py-4 px-8 hover:bg-gray-400">
            <i class="fas fa-images mr-3"></i> Galeri Foto
        </a>
        <a href="{{ route('dokumen') }}" class="flex items-center py-4 px-8 hover:bg-gray-400">
            <i class="fas fa-file-alt mr-3"></i> Dokumen Penting
        </a>
    </div>
</header>
