
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О Нас</title>
</head>
<body>
<div class="img-container" id="loading">
        <img id="bnw" src="http://preview.ibb.co/kEMjQb/marvel.png" width="400">
        <img id="colored" src="http://preview.ibb.co/fhn2BG/marvel.jpg" width="400">
    </div>

    <style>
        #bnw {
            position: absolute;
            top: 40vh;
            left: 35%;

            animation: 2s linear infinite bnw;
        }

        @keyframes bnw {
            0% {
                transform: rotate(-1deg);
            }

            50% {
                transform: rotate(1deg);
            }

            100% {
                transform: rotate(-1deg);
            }
        }

        #colored {
            position: absolute;
            top: 40vh;
            left: 35%;
            clip-path: polygon(0 0, 0.01% 0, 0.01% 100%, 0 100%);
            animation: 2s linear infinite color;
        }

        @keyframes color {
            0% {
                transform: rotate(-1deg);
            }

            50% {
                transform: rotate(1deg);
            }

            100% {
                transform: rotate(-1deg);
            }
        }

        .img-container {
            top: 0;
            z-index: 9999999999;
            position: fixed;
            width: 100%;
            height: 800px;
            background-color: black;
            margin: 0px auto;
        }
    </style>
    <script>
        var color = document.getElementById('colored');
        var x;
        window.addEventListener('load', function() {
            setTimeout(function() {
                doFirst(0);
            }, 500)
        }, false);

        function doFirst(x) {
            if (x == 0) {
                color.style.clipPath = "polygon(0 0,100% 0,100% 100%,0 100%)";
                color.style.transition = "clip-path .8s";
                setTimeout(function() {
                    color.style.clipPath = "polygon(99.99% 0,100% 0,100% 100%,99.99% 100%)";
                    color.style.transition = "clip-path .8s";
                }, 900);
                x = 99.99;
            } else {
                color.style.clipPath = "polygon(0 0,100% 0,100% 100%,0 100%)";
                color.style.transition = "clip-path .8s";
                setTimeout(function() {
                    color.style.clipPath = "polygon(0 0,0.01% 0,0.01% 100%,0 100%)";
                    color.style.transition = "clip-path .8s";
                }, 900);
                x = 0;
            }


            setTimeout(function() {
                doFirst(x);
            }, 1900);
        }
    </script>
    <script>
        setTimeout(() => {
            document.getElementById('loading').style.display = 'none'
        }, 3000);
    </script>
</body>
</html>



<?php
include 'menu.php';
?>
