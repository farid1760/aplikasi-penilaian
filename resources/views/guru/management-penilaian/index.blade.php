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
            <!-- component -->
            <table class="min-w-full border-collapse block md:table ">
                <thead class="block md:table-header-group">
                    <tr
                        class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            NO</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            NIS</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            NAMA SISWA</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            KELAS</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            JURUSAN</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            NILAI</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            </th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    @php
                        $i=1
                    @endphp
                    @forelse ($murids as $murid)
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            {{ $i }}
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            {{ $murid->nis }}
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            {{ $murid->nama }}
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            {{ $murid->kelas }}
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            {{ $murid->jurusan }}
                        </td>
                        <form action="{{ route('guru.management-penilaian.create-process') }}" method="post">
                            @php
                                $data_penilaian = DB::table('penilaians')->where('id_murid', $murid->id)->first();

                            @endphp
                            @csrf
                            <input type="hidden" value="{{ $murid->id }}" name="id_murid">
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                <input type="text" class="bg-transparent border-0 w-full" placeholder="Nilai" name="nilai" value="{{ $data_penilaian != null ? $data_penilaian->nilai : "" }}">
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                <button
                                type="submit" class="bg-blue-500 hover:bg-blue-700 text-white my-2 font-bold py-1 px-4 border border-blue-500 rounded">Beri Nilai</button>
                            </td>
                        </form>
                    </tr>
                    @php
                        $i++
                    @endphp
                    @empty
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td colspan="6" class="text-xl text-center font-bold py-5">Data Kelas Masih Kosong 😒😒</td>
                    </tr>
                    @endforelse

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
                {{-- <select name="id_kelas" id="kelas">
                    <option selected disabled>Pilih Kelas</option>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                    @endforeach
                </select> --}}
            </div>
            <div class="input-group grid grid-cols-1">
                <label class="pt-3 pb-1" for="mapel">MAPEL</label>
                {{-- <select name="id_mapel" id="mapel">
                    <option selected disabled>Pilih Mapel</option>
                    @foreach ($mapels as $mapel)
                        <option value="{{ $mapel->id }}">{{ $mapel->mapel }}</option>
                    @endforeach
                </select> --}}
            </div>
        </div>
    </x-modal>

</x-app-layout>
