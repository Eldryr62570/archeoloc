<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArchéoPlan - Photo</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-gradient-to-b from-[#DA9D56] to-white">
        <div class="contentarea">
            <div class="camera flex flex-col justify-center items-center">
                <video id="video" class="w-full h-[80vh]">Le flux vidéo n'est pas disponible.</video>
                <button id="startbutton">Prendre une photo</button>
            </div>
            <canvas id="canvas"> </canvas>
            <div class="output">
                <img id="photo" alt="L'image capturée apparaîtra ici.">
            </div>
            <p>
                Consultez l'article <a href="https://developer.mozilla.org/fr/docs/Web/API/WebRTC_API/Taking_still_photos">Prendre des photos avec <code>getUserMedia()</code></a> pour en savoir plus sur les technologies utilisées ici.
            </p>
        </div>
    </div>

    <script src="asset/js/photo.js"></script>
</body>
</html>
