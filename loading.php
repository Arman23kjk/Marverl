<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="img-container" id="loading">
        <img id="bnw" src="http://preview.ibb.co/kEMjQb/marvel.png" width="400">
        <img id="colored" src="http://preview.ibb.co/fhn2BG/marvel.jpg" width="400">

        <style>
            #bnw {
                position: absolute;
                top: 40vh;
                left: 35%;
                animation: 2s linear infinite bnw;
            }
            @keyframes bnw{
                0%{
                    transform: rotate(-1deg);
                }
                50%{
                    transform: rotate(1deg);
                }
                100%{
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
            
            @keyframes color{
                0%{
                    transform: rotate(-1deg);
                }
                50%{
                    transform: rotate(1deg);
                }
                100%{
                    transform: rotate(-1deg);
                }
            }

            .img-container {
                z-index: 9999999;
                position: relative;
                width: 100%;
                height: 800px;
                background-color: black;
                margin: 0px auto;
            }

        </style>
    </div>
    <!-- partial -->
    <script src="distt/script.js"></script>

    <script>
        setTimeout(() => {
            document.getElementById('loading').style.display = 'none'
        }, 3000);
    </script>
</body>

</html>