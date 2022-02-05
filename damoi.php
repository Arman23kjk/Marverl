
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дамой</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>

    <div class="welcome" id="welcome">
        <video width="125%" loop autoplay muted>
            <source src="marvel.mp4">
        </video>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="2.jpg" width="100%" alt="First slide">
                <div class="carousel-caption ">
                    <h2>Добро Пожаловать MARVEL</h2>
                    <p>Смотрите и наслаждайтесь</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="3.jpg" width="100%" alt="Second slide">
                <div class="carousel-caption ">
                    <h1>Прочтите</h1>
                    <p>Есть много интересного</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="4.jpg" width="100%" alt="Third slide">
                <div class="carousel-caption ">
                    <h1>Красивые Арты</h1>
                    <p>В нашей Галерии</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="marvel">
        <h2>История</h2>
        <div class="text">
            <p> Marvel Studios, LLC[1] (первоначально известная как Marvel Films с 1993 до 1996 года) — американская киностудия,
                располагающаяся в The Walt Disney Studios, Бербанк, штат Калифорния. Является дочерней компанией Walt Disney Studios,
                которая принадлежит медиаконгломерату The Walt Disney Company. Президентом киностудии является кинопродюсер Кевин Файги[2].
                Ранее студия была дочерним предприятием Marvel Entertainment,
                пока The Walt Disney Company не реорганизовала компании в августе 2015 года.
            </p>
        </div>
        <div class="img1"></div>
    </div>

    <div class="div1">
        <a href="2.jpg" data-lightbox="mygallery" class="a1"></a>
        <a href="3.jpg" data-lightbox="mygallery" class="a2"></a>
        <a href="4.jpg" data-lightbox="mygallery" class="a3"></a>
        <a href="5.jpg" data-lightbox="mygallery" class="a4"></a>
    </div>
    <div class="div2">
        <a href="6.jpg" data-lightbox="mygallery" class="a5"></a>
        <a href="7.jpg" data-lightbox="mygallery" class="a6"></a>
        <a href="8.jpg" data-lightbox="mygallery" class="a7"></a>
        <a href="9.jpg" data-lightbox="mygallery" class="a8"></a>
    </div>

    


    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: rgb(24, 24, 24);

        }

        .welcome {
            display: flex;
            justify-content: center;
            top: 0;
            background-color: black;
            width: 100%;
            height: 100%;
            position: fixed;
            overflow: hidden;
            z-index: 9999999;
        }

        .fon {
            width: 100%;
            height: 400px;
            background-image: url(fon.jpg);
            background-position: center;
            background-size: cover;
        }

        .carousel {
            width: 95%;
            height: 400px;
            margin: 3% auto;
            box-shadow: 5px 5px 10px black;
            overflow: hidden;
            border-radius: 20px;
        }

        .carousel-item {
            position: relative;
            width: 100%;
            height: 400px;
            margin: auto;
        }

        .carousel-caption {
            color: orange;
            text-shadow: 5px 5px 10px red;
            text-align: center;
            box-sizing: border-box;
            padding: 140px;
            font-size: 50px;
            position: absolute;
            width: 100%;
            height: 400px;
            background-color: rgba(12, 12, 12, 0.75);
            left: 0;
            top: 0;
        }

        .marvel {
            width: 100%;
            height: 400px;
            box-shadow: 5px 5px 10px black;
            position: relative;
            margin-top: 2%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .marvel>div {
            margin: 10px;
            width: 40%;
            height: 300px;
            /* background-color: red; */
        }

        .marvel>h2 {
            position: absolute;
            top: 0;
            width: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            color: whitesmoke;
            text-shadow: 5px 5px 10px black;
        }

        .text>p {
            text-align: center;
            width: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: whitesmoke;
            text-shadow: 5px 5px 5px black;
            font-size: 20px;
            box-sizing: border-box;
            padding: 20px;
        }

        .img1 {
            border-radius: 5px;
            background-image: url(marvel.webp);
            background-position: center;
            background-size: cover;
            box-shadow: 5px 5px 15px black;

        }

        .div1 {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 2% auto;
            /* background-color: red; */
            width: 95%;
            height: 400px;
            box-shadow: 5px 5px 10px black;
        }

        .div1>a {
            width: 30%;
            height: 350px;
            background-color: red;
            box-shadow: 5px 5px 10px black;
            margin: 10px;
            transition: 0.2s;
            border-radius: 10px;
        }

        .a1 {
            background-image: url(2.jpg);
            background-position: center;
            background-size: cover;
        }

        .a2 {
            background-image: url(3.jpg);
            background-position: center;
            background-size: cover;
        }

        .a3 {
            background-image: url(4.jpg);
            background-position: center;
            background-size: cover;
        }

        .a4 {
            background-image: url(5.jpg);
            background-position: center;
            background-size: cover;
        }

        .a5 {
            background-image: url(6.jpg);
            background-position: center;
            background-size: cover;
        }

        .a6 {
            background-image: url(7.jpg);
            background-position: center;
            background-size: cover;
        }

        .a7 {
            background-image: url(8.jpg);
            background-position: center;
            background-size: cover;
        }

        .a8 {
            background-image: url(9.jpg);
            background-position: center;
            background-size: cover;
        }

        .div1>a:hover {
            margin-top: -0.5px;
            -webkit-box-shadow: 0px 7px 23px 20px rgba(94, 94, 94, 0.19);
            -moz-box-shadow: 0px 7px 23px 20px rgba(94, 94, 94, 0.19);
            box-shadow: 0px 7px 23px 20px rgba(94, 94, 94, 0.19);
        }

        .div2 {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 2% auto;
            /* background-color: red; */
            width: 95%;
            height: 400px;
            box-shadow: 5px 5px 10px black;
        }

        .div2>a {
            width: 30%;
            height: 350px;
            background-color: red;
            box-shadow: 5px 5px 10px black;
            margin: 10px;
            transition: 0.2s;
            border-radius: 10px;
        }

        .div2>a:hover {
            margin-top: -0.5px;
            -webkit-box-shadow: 0px 7px 23px 20px rgba(94, 94, 94, 0.19);
            -moz-box-shadow: 0px 7px 23px 20px rgba(94, 94, 94, 0.19);
            box-shadow: 0px 7px 23px 20px rgba(94, 94, 94, 0.19);
        }
    </style>

    <script>
        setTimeout(() => {
            document.getElementById('welcome').style.display = 'none';
        }, 13000);
    </script>


     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dist3/css/lightbox.min.css">
    <script src="dist3/js/lightbox-plus-jquery.min.js"></script>

</body>

</html>

