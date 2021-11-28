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
                            <a href="{{ route('murid.nilai') }}"
                                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                        class="bx bx-user"></i></span>
                                <span class="text-sm font-medium"> Nilai</span>
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
                            class=" bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            NILAI</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            GURU</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            MAPEL</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    @foreach ($penilaians as $nilai)
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            {{ $nilai->nilai }}
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            {{ $nilai->nama }}
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                             {{ $nilai->mapel }}
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </section>

</x-app-layout>
