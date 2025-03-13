<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Augmented Reality in Laravel 11</title>
    <script src="https://aframe.io/releases/1.4.0/aframe.min.js"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <model-viewer src="https://example.com/model.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls>
    </model-viewer>

</head>

<body>
    <a-scene>
        <!-- Tambahkan AR marker -->
        <a-marker-camera preset="hiro">
            <a-box position="0 0.5 0" material="color: red"></a-box>
        </a-marker-camera>
    </a-scene>

    <a-scene>
        <a-assets>
            <a-asset-item id="model3d" src="{{ asset('models/model3d.glb') }}"></a-asset-item>
        </a-assets>

        <a-marker-camera preset="hiro">
            <a-entity gltf-model="#model3d" scale="0.5 0.5 0.5"></a-entity>
        </a-marker-camera>
    </a-scene>

</body>

</html>