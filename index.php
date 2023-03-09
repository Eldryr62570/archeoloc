<?php
    session_start();
    if (isset($_SESSION['connected'])){
        header("location: home.php");
    }
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArchéoPlan - Index</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Abel&display=swap" rel="stylesheet">
    <link href="asset/style/gallery.css" rel="stylesheet">
</head>
<body>
    <div class="bg-gradient-to-b from-[#DA9D56] to-white mb-12 flex flex-col items-center justify-center w-full h-screen">
        <div class="py-10 flex flex-row space-x-2 items-center">
            <img src="asset/img/logo.png" alt="">
            <h1 class='text-3xl font-semibold font-["ABeeZee"]'>ArchéoPlan</h1>
        </div>
        <div class="mb-32">
            <h2 class="text-xl font-semibold">Explorez l’Histoire qui vous entoure</h2>
        </div>

        <div class="pt-5 flex flex-col space-y-5">
            <a href="inscription.php" class="bg-[#76470F] rounded py-1 px-12 text-white text-center">Inscription</a>
            <a href="connexion.php" class="bg-white rounded py-1 px-12 text-[#76470F] border border-[#76470F] text-center">Connexion</a>
        </div>
    </div>
</body>
</html>