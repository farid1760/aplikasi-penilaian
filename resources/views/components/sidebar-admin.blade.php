<div class="sidebar float-left" id="col1">
    <div class="min-h-screen flex flex-row bg-gray-100 w-60">
        <div class="flex flex-col w-full bg-white rounded-r-3xl overflow-hidden">
            <ul class="flex flex-col py-4">
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex flex-row items-center h-12 transform {{ Request::routeIs('admin.dashboard') ? "translate-x-2" : "" }} hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.management-guru') }}"
                        class="flex flex-row items-center h-12 transform {{ Request::routeIs('admin.management-guru') ? "translate-x-2" : "" }} hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-user"></i></span>
                        <span class="text-sm font-medium">Management Guru</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.management-murid') }}"
                        class="flex flex-row items-center h-12 transform {{ Request::routeIs('admin.management-murid') ? "translate-x-2" : "" }} hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-user"></i></span>
                        <span class="text-sm font-medium">Management Murid</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.management-jurusan') }}"
                        class="flex flex-row items-center h-12 transform {{ Request::routeIs('admin.management-jurusan') ? "translate-x-2" : "" }} hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-user"></i></span>
                        <span class="text-sm font-medium">Management Jurusan</span>
                    </a>
                </li>
                </li>
                <li>
                    <a href="{{ route('admin.management-mapel') }}"
                        class="flex flex-row items-center h-12 transform {{ Request::routeIs('admin.management-mapel') ? "translate-x-2" : "" }} hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="bx bx-user"></i></span>
                        <span class="text-sm font-medium">Management Mapel</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.management-kelas') }}"
                        class="flex flex-row items-center h-12 transform {{ Request::routeIs('admin.management-kelas') ? "translate-x-2" : "" }} hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                            class="bx bx-user"></i></span>
                        <span class="text-sm font-medium">Management Kelas</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
