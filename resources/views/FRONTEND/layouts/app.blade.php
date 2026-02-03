<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistem Manajemen Ekstrakurikuler')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Tailwind Config (optional) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    container: {
                        center: true,
                        padding: '1rem',
                        screens: {
                            lg: '1140px',
                        }
                    }
                }
            }
        }
    </script>

    @yield('styles')
</head>

<body class="antialiased text-gray-800 overflow-x-hidden">

    {{-- Navbar --}}
    @include('FRONTEND.layouts.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('FRONTEND.layouts.footer')

    @yield('scripts')
</body>
</html>
