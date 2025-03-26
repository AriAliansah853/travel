<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Booth</title>
    
    <!-- Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        #save-photo{
            margin-left: 240px;
        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
        }

        p {
            font-size: 1.1rem;
            color: #555;
        }

        #my_camera, #results {
            width: 100%;
            max-width: 400px;
            height: auto;
            border: 4px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }

        .btn {
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
    </style>
    
    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    <script src="{{ asset('assets/js/webcam.js') }}"></script>
</head>
<body>
    <div class="container">
        <h1>📸 Photo Booth</h1>
        <p>Ambil foto langsung dari kamera!</p>

        <div id="my_camera"></div>
        <button class="btn btn-primary mt-3" onclick="takeSnapshot()">Ambil Foto</button>

        <h2 class="mt-4">Hasil Foto</h2>
        <div id="results"></div>

        <button class="btn btn-success mt-3" id="save-photo" style="display: none;">Simpan Foto</button>
    </div>


    <script>
        Webcam.set({
            width: 400,
            height: 300,
            image_format: 'png',
            jpeg_quality: 90
        });
        Webcam.attach('#my_camera');

        function takeSnapshot() {
            Webcam.snap(function(data_uri) {
                document.getElementById('results').innerHTML = 
                    '<img src="'+data_uri+'" class="img-fluid rounded shadow">';
                document.getElementById('save-photo').style.display = 'block';
                document.getElementById('save-photo').setAttribute('data-uri', data_uri);
            });
        }

        document.getElementById('save-photo').addEventListener('click', function() {
            let dataUri = this.getAttribute('data-uri');
            fetch("{{ route('capture') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ image: dataUri })
            })
            .then(response => response.json())
            .then(data => {
                alert('Foto berhasil disimpan!');
            });
        });
    </script>
</body>
</html>