<div class="contentarea">
  <p>
    Dans cet exemple, on illustre comment utiliser un flux média provenant de la webcam, en récupérer une image et créer un PNG à partir de celle-ci pour l'afficher sur la page.
  </p>
  <div class="camera">
    <video id="video">Le flux vidéo n'est pas disponible.</video>
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

<script src="asset/js/photo.js"></script>