@extends('layout')
@section('content')
<div class="hero">
    <h1 id="typing-text"></h1>
    {{-- <p>Terima kasih telah menjadi bagian dari hidupku. Aku mencintaimu selamanya.</p> --}}
</div>

{{-- <!-- Parallax Section -->
<div class="parallax" style="background-image: url('https://via.placeholder.com/1500x800');">
    <h2 data-aos="fade-up">Kenangan Manis Kita</h2>
</div> --}}

<!-- Countdown -->
<div class="container mt-5">
    <h2 data-aos="fade-up">Hitung Mundur Anniversary</h2>
    <p id="countdown"></p>
    <p>Coming Soon !</p>
</div>


<script>
    // Efek Confetti saat halaman dibuka
    setTimeout(() => confetti(), 500);

    // Efek Mengetik untuk Hero Section
    const heroText = "Happy Anniversary, Sayang! ❤️";
    let heroIndex = 0;
    function typeHeroText() {
        if (heroIndex < heroText.length) {
            document.getElementById("typing-text").innerHTML += heroText.charAt(heroIndex);
            heroIndex++;
            setTimeout(typeHeroText, 100);
        }
    }
    setTimeout(typeHeroText, 500);

    // Countdown ke Anniversary Berikutnya
    function countdown() {
        const nextAnniv = new Date("April 16, 2025 00:00:00").getTime();
        const now = new Date().getTime();
        const difference = nextAnniv - now;
        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        document.getElementById("countdown").innerText = `${days} hari lagi menuju anniversary kita!`;
    }
    countdown();
</script>