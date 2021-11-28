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
                            <a href="{{ route('guru.dashboard') }}"
                                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                        class="bx bx-home"></i></span>
                                <span class="text-sm font-medium">Dashboard</span>
                            </a>
                        </li>

                        </li>
                        <li>
                            <a href="{{ route('guru.management-pengajaran') }}"
                                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                        class="bx bx-user"></i></span>
                                <span class="text-sm font-medium">Management Pengajaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('guru.management-penilaian') }}"
                                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                        class="bx bx-user"></i></span>
                                <span class="text-sm font-medium">Management Nilai</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content px-10 pt-10 float-left" style="width: 82.2%">
            <div class="button w-full pb-10 flex justify-end">
                <button onclick="openModal('main-modal')" class="bg-green-300 px-10 py-3 text-xl font-bold text-black rounded-full shadow-lg">Tambah
                    Data</button>
            </div>

            <!-- component -->
            <table class="min-w-full border-collapse block md:table ">
                <thead class="block md:table-header-group">
                    <tr
                        class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            KELAS</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            MAPEL</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    @foreach ($pengajarans as $pengajaran)
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            <select name="id_kelas" id="kelas" class="bg-transparent border-0 w-full">
                                <option selected disabled>Pilih Kelas</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}" {{ $k->id == $pengajaran->id_kelas ? "selected" : "" }}>{{ $k->kelas }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            <select name="id_mapel" id="mapel" class="bg-transparent border-0 w-full">
                                <option selected disabled>Pilih Mapel</option>
                                @foreach ($mapels as $mapel)
                                    <option value="{{ $mapel->id }}" {{ $mapel->id == $pengajaran->id_mapel ? "selected" : "" }}>{{ $mapel->mapel }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">
                            <span class="inline-block w-1/3 md:hidden font-bold ">Actions</span>
                            <button
                                type="submit" class="bg-blue-500 hover:bg-blue-700 text-white my-2 font-bold py-1 px-4 border border-blue-500 rounded">Save</button>
                            <button
                                type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </section>

    <x-modal>
        <x-slot name="action">
            {{ $action }}
        </x-slot>
        <div class="grid grid-cols-1 w-full">
            <div class="input-group grid grid-cols-1">
                <label class="pt-3 pb-1" for="kelas">KELAS</label>
                <select name="id_kelas" id="kelas">
                    <option selected disabled>Pilih Kelas</option>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group grid grid-cols-1">
                <label class="pt-3 pb-1" for="mapel">MAPEL</label>
                <select name="id_mapel" id="mapel">
                    <option selected disabled>Pilih Mapel</option>
                    @foreach ($mapels as $mapel)
                        <option value="{{ $mapel->id }}">{{ $mapel->mapel }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </x-modal>

</x-app-layout>
