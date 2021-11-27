<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <section class="w-full h-screen">
        <div class="sidebar float-left" id="col1">
            <div class="min-h-screen flex flex-row bg-gray-100 w-60">
                <div class="flex flex-col w-full bg-white rounded-r-3xl overflow-hidden">
                    <ul class="flex flex-col py-4">
                        <li>
                            <a href="#"
                                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                        class="bx bx-home"></i></span>
                                <span class="text-sm font-medium">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                        class="bx bx-user"></i></span>
                                <span class="text-sm font-medium">Management Guru</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                        class="bx bx-user"></i></span>
                                <span class="text-sm font-medium">Management Murid</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                        class="bx bx-user"></i></span>
                                <span class="text-sm font-medium">Management Jurusan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                        class="bx bx-log-out"></i></span>
                                <span class="text-sm font-medium">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content px-10 pt-10 float-left" style="width: 82.2%">
            <div class="button w-full flex justify-end">
                <button class="bg-green-300 px-10 py-3 text-xl font-bold text-black rounded-full shadow-lg">Tambah Data</button>
            </div>

            <div class="text-gray-900 pt-10">
                <div class="px-3 py-4 flex justify-center">
                    <table class="w-full text-md bg-white shadow-md rounded-xl mb-4">
                        <tbody>
                            <tr class="border-b">
                                <th class="text-left p-3 px-5">NIP</th>
                                <th class="text-left p-3 px-5">Name</th>
                                <th class="text-left p-3 px-5">Jurusan</th>
                                <th class="text-left p-3 px-5">Mapel</th>
                                <th></th>
                            </tr>
                            <tr class="border-b hover:bg-orange-100">
                                <td class="p-3"><input type="text" value="192010198" class="bg-transparent border-0"></td>
                                <td class="p-3"><input type="text" value="Muhammad Ikhsan Bintang" class="bg-transparent border-0"></td>
                                <td class="p-3">
                                    <select name="jurusan" class="bg-transparent border-0">
                                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                                        <option value="APH">Administrasi Perhotelan</option>
                                    </select>
                                </td>
                                <td class="p-3">
                                    <select value="user.role" class="bg-transparent border-0">
                                        <option value="PW">Pemrograman Web</option>
                                        <option value="BD">Basis Data</option>
                                    </select>
                                </td>
                                <td class="p-3 px-5 flex justify-end items-center pt-5"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </section>

</x-app-layout>
