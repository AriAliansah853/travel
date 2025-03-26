<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Anniversary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.0.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
    <style>
        body { background: linear-gradient(270deg, #ff758c, #ff7eb3); background-size: 400% 400%; animation: gradientBG 10s ease infinite; color: white; text-align: center; overflow: hidden; }
        @keyframes gradientBG { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
        .hero { padding: 100px 20px; opacity: 0; transform: scale(0.8); animation: zoomIn 1.5s ease-in-out forwards; }
        @keyframes zoomIn { from { opacity: 0; transform: scale(0.8); } to { opacity: 1; transform: scale(1); } }
        .parallax { background-attachment: fixed; background-size: cover; padding: 100px 20px; }
        .popup { 
            position: fixed;
            top: 50%; 
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            color: black;
            padding: 20px;
            border-radius: 10px;
            display: none; z-index: 999;
            margin-top:200px }
    </style>
</head>
<body>
    <div id="particles-js"></div>
    <div class="container">
        @yield('content')
    </div>
    <div id="popup" class="popup"><h2>I LOVE YOU ❤️</h2></div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
        setTimeout(() => { document.getElementById("popup").style.display = "block"; }, 5000);
        particlesJS("particles-js", { particles: { number: { value: 50 }, shape: { type: "heart" }, size: { value: 5 }, move: { speed: 2 } } });
    </script>
</body>
</html>