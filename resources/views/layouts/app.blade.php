<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">


        <!-- Styles -->
        @vite('resources/sass/app.scss')

        @livewireStyles

        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>
    <body class="font-sans antialiased bg-light">
        <x-jet-banner />
        @livewire('navigation-menu')

        <!-- Page Heading -->
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{-- {{ $header }} --}}
            </div>
        </header>

        <!-- Page Content -->
        <main class="container my-5">
            {{ $slot }}
        </main>

        @stack('modals')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @livewireScripts

        @stack('scripts')

        <script>
            Livewire.on('done', (e)=>{
                console.log(e)
            })
        </script>
            <script>
                window.addEventListener('success', function(e) {
                    Swal.fire({
                        icon: e.detail.icon,
                        title: e.detail.title,
                        text: e.detail.text,
                        position: 'top-end',
                        toast: true,
                        showConfirmButton: false,
                        timer: 5000
                    });
                });
            </script>
    </body>
</html>
