<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Gesture - Hand Tracking</title>
    <style>
        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.5; /* Buat semi transparan */
        }
        canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <video id="video" autoplay playsinline></video>
    <canvas id="canvas"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/@mediapipe/hands"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs-core"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs-converter"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs-backend-webgl"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/handpose"></script>

    <script>
        const video = document.getElementById("video");
        const canvas = document.getElementById("canvas");
        const ctx = canvas.getContext("2d");

        async function setupCamera() {
            const stream = await navigator.mediaDevices.getUserMedia({ video: true });
            video.srcObject = stream;
            return new Promise((resolve) => {
                video.onloadedmetadata = () => resolve(video);
            });
        }

        async function detectHands() {
            const model = await handpose.load();
            console.log("Model HandPose Loaded!");

            setInterval(async () => {
                const predictions = await model.estimateHands(video);
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                if (predictions.length > 0) {
                    const hand = predictions[0];

                    // Gambar garis antara sendi tangan
                    ctx.strokeStyle = "blue";
                    ctx.lineWidth = 3;

                    const landmarks = hand.landmarks;
                    for (let i = 0; i < landmarks.length - 1; i++) {
                        ctx.beginPath();
                        ctx.moveTo(landmarks[i][0], landmarks[i][1]);
                        ctx.lineTo(landmarks[i + 1][0], landmarks[i + 1][1]);
                        ctx.stroke();
                    }

                    // Deteksi Gesture:
                    const thumb = hand.annotations.thumb[3]; // Ujung jempol
                    const indexFinger = hand.annotations.indexFinger[3]; // Ujung jari telunjuk
                    const middleFinger = hand.annotations.middleFinger[3]; // Ujung jari tengah

                    // Gesture: Swipe Kanan
                    if (thumb[0] > indexFinger[0] + 50) {
                        console.log("Swipe Kanan");
                        window.location.href = "/testAR"; 
                    }

                    // Gesture: Swipe Kiri
                    if (thumb[0] < indexFinger[0] - 50) {
                        console.log("Swipe Kiri");
                        window.location.href = "/previous-page";
                    }

                    // Gesture: Klik (Jempol & Telunjuk Menyentuh)
                    let distance = Math.sqrt(
                        Math.pow(indexFinger[0] - thumb[0], 2) +
                        Math.pow(indexFinger[1] - thumb[1], 2)
                    );

                    if (distance < 30) {
                        console.log("Click!");
                        document.body.style.backgroundColor = "lightblue";
                    }
                }
            }, 100);
        }

        async function main() {
            await setupCamera();
            detectHands();
        }

        main();
    </script>
</body>
</html>
