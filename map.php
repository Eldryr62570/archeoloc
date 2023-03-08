<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ArchéoPlan - Map </title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="asset/style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div id="map"></div>
    <dialog id="mapDialog">
        <div class="overflow-hidden">
            <!-- dialog -->
            <div>
                <div class="flex justify-between items-center border-b p-2 text-xl">
                    <h6 class="text-xl font-bold">Mon fossile</h6>
                    <button type="button" id="cancelButton">✖</button>
                </div>
                <div class="p-2">
                    <h4 class="font-bold"></h4>
                    <aside class="max-w-lg mt-4 p-4 bg-yellow-100 border border-yellow-500">
                        <p class="flex flex-column">
                        <div>
                            Fossile trouvé le : 01/02/2023
                        </div>
                        <div>
                            A : Charleville-mézières
                        </div>
                        </p>
                    </aside>
                    <ul class="bg-gray-100 border m-8 px-4">
                        <li class="my-4" id="">Amonite : </li>
                        <img src="asset/img/amonite.jpg" alt="amonite" class="object-cover h-40">
                    </ul>
                </div>
            </div><!-- /dialog -->
        </div><!-- /overlay -->
    </dialog>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="asset/js/map.js"></script>
</body>

</html>