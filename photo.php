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
        <div class="contentarea space-y-5">
            <div class="camera flex flex-col justify-center items-center">
                <video id="video" class="w-full h-[70vh]">Le flux vidéo n'est pas disponible.</video>
                <button id="startbutton" class="rounded-full bg-white w-16 h-16 border-2 border-[#76470F] mt-5"></button>
            </div>
            <canvas id="canvas" class="hidden"> </canvas>
            <div class="output">
                <!-- <img id="photo" alt="L'image capturée apparaîtra ici."> -->
                <form action="asset/php/photo.php" method="post">
                    <input type="image" id="photo">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>

    <script src="asset/js/photo.js"></script>
</body>
</html>
