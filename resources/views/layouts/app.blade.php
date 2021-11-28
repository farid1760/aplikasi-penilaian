<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
            .animated {
                -webkit-animation-duration: 1s;
                animation-duration: 1s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }
        
            .animated.faster {
                -webkit-animation-duration: 500ms;
                animation-duration: 500ms;
            }
        
            .fadeIn {
                -webkit-animation-name: fadeIn;
                animation-name: fadeIn;
            }
        
            .fadeOut {
                -webkit-animation-name: fadeOut;
                animation-name: fadeOut;
            }
        
            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
        
                to {
                    opacity: 1;
                }
            }
        
            @keyframes fadeOut {
                from {
                    opacity: 1;
                }
        
                to {
                    opacity: 0;
                }
            }
        </style>

        <title>{{ config('app.name', 'Laravel') }}</title>


        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            {{-- <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @livewireScripts

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script>
            all_modals = ['main-modal']
            all_modals.forEach((modal)=>{
                const modalSelected = document.querySelector('.'+modal);
                modalSelected.classList.remove('fadeIn');
                modalSelected.classList.add('fadeOut');
                modalSelected.style.display = 'none';
            })
            const modalClose = (modal) => {
                const modalToClose = document.querySelector('.'+modal);
                modalToClose.classList.remove('fadeIn');
                modalToClose.classList.add('fadeOut');
                setTimeout(() => {
                    modalToClose.style.display = 'none';
                }, 500);
            }
        
            const openModal = (modal) => {
                const modalToOpen = document.querySelector('.'+modal);
                modalToOpen.classList.remove('fadeOut');
                modalToOpen.classList.add('fadeIn');
                modalToOpen.style.display = 'flex';
            }
        
        </script>
    </body>
</html>
