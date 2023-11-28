<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Image Viewer</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .animated-image {
      position: relative;
      animation: slideIn 2.5s ease-in-out;
    }

    @keyframes slideIn {
      0% {
        transform: translateY(100%);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <button id="startAnimation">Mulai Animasi</button>
  <button id="resetAnimation">Reset Animasi</button>

  <div class="animated-image-container">
    <img src="img/s1.png" alt="Gambar 1" class="animated-image">
    <img src="img/s2.png" alt="Gambar 2" class="animated-image">
    <img src="img/s3.png" alt="Gambar 3" class="animated-image">
    <img src="img/s4.png" alt="Gambar 4" class="animated-image">
    <img src="img/s5.png" alt="Gambar 5" class="animated-image">
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var isAnimationStarted = false;
      var imageElements = document.querySelectorAll('.animated-image');

      document.getElementById('startAnimation').addEventListener('click', function () {
        if (!isAnimationStarted) {
          startAnimation();
          isAnimationStarted = true;
        }
      });

      document.getElementById('resetAnimation').addEventListener('click', function () {
        resetAnimation();
      });

      function startAnimation() {
        imageElements.forEach(function (imageElement) {
          imageElement.style.animation = 'slideIn 2.5s ease-in-out';
        });
      }

      function resetAnimation() {
        imageElements.forEach(function (imageElement) {
          // Menghapus animasi dengan mengatur ulang nilai animasi
          imageElement.style.animation = 'none';
          // Menunda sebentar sebelum memulai animasi kembali
          setTimeout(function () {
            startAnimation();
          }, 10);
        });
      }
    });
  </script>
</body>
</html>
