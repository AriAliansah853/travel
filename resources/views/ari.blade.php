<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Anniversary!</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex items-center justify-center min-h-screen text-gray-800 bg-pink-100">

    <div class="max-w-3xl p-6 mx-auto text-center bg-white rounded-lg shadow-xl">
        <h1 class="text-4xl font-bold text-pink-600">💖 Happy Anniversary Sayang! 💖</h1>
        <p class="mt-4 text-lg">Hari ini adalah hari spesial kita! Terima kasih sudah menjadi bagian dari hidupku. Aku sangat mencintaimu! ❤️</p>

        <div class="mt-6">
            <img src="https://source.unsplash.com/600x400/?love,romantic" class="w-full rounded-lg shadow-md" alt="Love Image">
        </div>

        <div class="flex flex-col justify-center gap-4 mt-6 md:flex-row">
            <a href="{{ url('/gallery') }}" class="px-6 py-3 text-white bg-pink-500 rounded-lg shadow-md hover:bg-pink-600">📸 Lihat Kenangan</a>
            <a href="{{ url('/love-letter') }}" class="px-6 py-3 text-white bg-blue-500 rounded-lg shadow-md hover:bg-blue-600">💌 Buka Surat Cinta</a>
        </div>
    </div>

</body>
</html>
