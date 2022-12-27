<aside class="z-20 hidden w-64 h-full fixed bg-green-700 md:block  flex-shrink-0">
    <div class="py-4 text-white font-bold ">
        <ul class="relative text-center pb-[24px] border-b-2 text-lg font-bold border-white text-decoration-none">
            <span class="">Admin Komjensud</span>
        </ul>
        {{-- <a class="ml-6 text-lg font-bold text-white border-b-4 border-white " href="#">
            Admin Komjensud
        </a> --}}
        {{-- <ul class="mt-6">
            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-bold text-white transition-colors duration-150 hover:text-gray-200 "
                    href="/admin/dashboard">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul> --}}

        <ul>
            <li class="relative px-6 py-3 mt-5">
                <span
                    class="{{ Request::routeIs('dashboard') ? 'active absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg' : '' }}"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="/admin/dashboard">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                        </path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>

        </ul>

        <ul>
            <li class="relative px-6 py-3 border-b text-lg font-bold border-white">
                <span class="">Artikel</span>
            </li>

            {{-- <ul class="relative px-6 py-3"> --}}
            <li class="relative pl-6 pt-4 ">
                <span
                    class="{{ Request::routeIs('categories.index') ? 'active absolute h-[50px] inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg' : '' }}"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="{{ route('categories.index') }}">

                    <i class="far fa-folder"></i>
                    <span class="ml-4">Kategori</span>
                </a>
            </li>
            <li class="relative pl-6 pt-4 pb-3 ">
                <span
                    class="{{ Request::routeIs('articles.index') ? 'active absolute h-[50px] inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg' : '' }}"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="{{ route('articles.index') }}">

                    <i class="far fa-folder"></i>
                    <span class="ml-4">Artikel</span>
                </a>
            </li>
            {{-- </ul> --}}
        </ul>

        <ul>
            <li class="relative px-6 py-3 border-b border-white">
                <span class="">Data Master</span>
            </li>

            {{-- <ul class="relative px-6 py-3"> --}}
            <li class="relative pl-6 pt-4 ">
                <span
                    class="{{ Request::routeIs('sliders.index') ? 'active absolute h-[50px] inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg' : '' }}"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="{{ route('sliders.index') }}">

                    <i class="far fa-folder"></i>
                    <span class="ml-4">Data Slider</span>
                </a>
            </li>
            <li class="relative pl-6 pt-4 ">
                <span
                    class="{{ Request::routeIs('structures.index') ? 'active absolute h-[50px] inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg' : '' }}"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="{{ route('structures.index') }}">

                    <i class="far fa-folder"></i>
                    <span class="ml-4">Data Pengurus</span>
                </a>
            </li>
            <li class="pl-6 pt-4 ">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="{{ route('abouts.index') }}">

                    <i class="far fa-folder"></i>
                    <span class="ml-4">Data Galeri</span>
                </a>
            </li>
            <li class="pl-6 pt-4 ">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="{{ route('abouts.index') }}">

                    <i class="far fa-folder"></i>
                    <span class="ml-4">Data Dokumen</span>
                </a>
            </li>
            <li class="pl-6 pt-4 ">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="{{ route('abouts.index') }}">

                    <i class="far fa-folder"></i>
                    <span class="ml-4">Data Kader</span>
                </a>
            </li>
            <li class="pl-6 pt-4 ">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="{{ route('abouts.index') }}">

                    <i class="far fa-folder"></i>
                    <span class="ml-4">Data Cakader</span>
                </a>
            </li>
            <li class="pl-6 pt-4 pb-3 ">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="{{ route('abouts.index') }}">

                    <i class="far fa-folder"></i>
                    <span class="ml-4">Data Alumni</span>
                </a>
            </li>
            {{-- </ul> --}}



        </ul>
        <ul>
            <li class="relative px-6 py-3">
                <span
                    class="{{ Request::routeIs('abouts.index') ? 'active absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg' : '' }}"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="{{ route('abouts.index') }}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                        </path>
                    </svg>
                    <span class="ml-4">About</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <span
                    class="{{ Request::routeIs('contacts.index') ? 'active absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg' : '' }}"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-300 "
                    href="{{ route('contacts.index') }}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                        </path>
                    </svg>
                    <span class="ml-4">Kontak</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
