<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anniversary</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen text-gray-800 bg-pink-100">

    <!-- Navbar -->
    <nav class="p-4 text-white bg-pink-500 shadow-md">
        <div class="container flex justify-between mx-auto">
            <a href="/test" class="text-lg font-bold">💖 Anniversary</a>
            <div class="space-x-4">
                <a href="{{ url('/gallery') }}" class="hover:underline">Gallery</a>
                <a href="{{ url('/love-letter') }}" class="hover:underline">Love Letter</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container flex-grow p-6 mx-auto">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="p-4 mt-6 text-center text-white bg-pink-500">
        &copy; {{ date('Y') }} Anniversary Website ❤️
    </footer>

</body>

</html>