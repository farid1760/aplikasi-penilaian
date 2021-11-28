<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <section class="w-full h-screen">
        <x-sidebar-admin></x-sidebar-admin>

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
                            NO</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            JURUSAN</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            SINGKATAN JURUSAN</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    @php
                        $i = 1
                    @endphp
                    @forelse ($jurusans as $jurusan)
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            {{ $i }}
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            <input name="jurusan" type="text" value="{{ $jurusan->jurusan }}" class="bg-transparent border-0 w-full">
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            <input name="singkatan_jurusan" type="text" value="{{ $jurusan->singkatan }}" class="bg-transparent border-0 w-full">
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">
                            <span class="inline-block w-1/3 md:hidden font-bold ">Actions</span>
                            <button
                               type="submit" class="bg-blue-500 hover:bg-blue-700 text-white my-2 font-bold py-1 px-4 border border-blue-500 rounded">Save</button>
                            <button
                            type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
                        </td>
                    </tr>
                    @php
                        $i++
                    @endphp
                    @empty
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td colspan="4" class="text-xl text-center font-bold py-5">Data Jurusan Masih Kosong 😒😒</td>
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
                <label class="pt-3 pb-1" for="jurusan">Jurusan</label>
                <input type="text" class="rounded-lg" name="jurusan" placeholder="Masukan Jurusan">
            </div>
            <div class="input-group grid grid-cols-1">
                <label class="pt-3 pb-1" for="mapel">Singkatan Jurusan</label>
                <input type="text" class="rounded-lg" name="singkatan" placeholder="Masukan Mapel">
            </div>
        </div>
    </x-modal>

</x-app-layout>
