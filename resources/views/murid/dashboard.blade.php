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
                            <a href="{{ route('murid.dashboard') }}"
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

        <!-- component -->
        <section class="text-gray-600 body-font">
            <div class="container px-7 py-20 mx-auto">
            <div class="flex flex-wrap w-80 mb-8">
                <div class="w-full mb-6 px-8 lg:mb-0">
                <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-gray-900">Statistic</h1>
                <div class="h-1 w-32  bg-indigo-500 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 sm:w-1/4 w-1/2">
                <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">2.7K</h2>
                    <p class="leading-relaxed text-gray-100 font-bold">Users</p>
                </div>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">1.8K</h2>
                    <p class="leading-relaxed text-gray-100 font-bold">Subscribes</p>
                </div>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">35</h2>
                    <p class="leading-relaxed text-gray-100 font-bold">Downloads</p>
                </div>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">4</h2>
                    <p class="leading-relaxed text-gray-100 font-bold">Products</p>
                </div>
                </div>
            </div>
            </div>
        </section>
    </section>

</x-app-layout>
