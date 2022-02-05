<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

</head>

<body>
    <div class="menu">
        <div class="div"></div>
        <div class="hrefs">
            <a class="custom-btn btn-7" href="filmi.php"><span>Фильмы</span></a>
            <a class="custom-btn btn-7" href="seriali.php"><span>Сериалы</span></a>
            <a class="custom-btn btn-7" href="multseriali.php"><span>Мультфильмы</span></a>
            <a class="custom-btn btn-7" href="damoi.php"><span>домой</span></a>
            <a class="custom-btn btn-7" href="onas.php"><span>О нас</span></a>
            <input type="search" class="search">
            <button id="search">Поиск</button>
        </div>
    </div>
    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            z-index: 9999999;
        }

        body {
            background-color: rgb(24, 24, 24);
        }

        .menu {
            position: relative;
            width: 100%;
            height: 500px;
            background-color: gray;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            background-image: url(1.jpg);
            background-size: cover;
            z-index: 1;
        }

        .div {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.45);
        }

        .hrefs {
            position: absolute;
            width: 95%;
            height: 80px;
            background-color: rgba(0, 0, 0, 0.45);
            display: flex;
            align-items: center;
            justify-content: flex-start;
            border-radius: 40px;
        }

        .btn-7 {
            padding: 12px;
            transition: 0.5s;
            margin: 10px;
            box-sizing: border-box;
            text-decoration: none;
            box-shadow: 5px 5px 10px black;
            font-size: 18px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            color: whitesmoke;
            border-radius: 5px;
            position: relative;
            width: 12%;
            height: 50px;
            background-color: dimgrey;
            line-height: 42px;
            padding: 0;
            border: none;
        }

        .btn-7 span {
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
        }

        .btn-7:before,
        .btn-7:after {
            border-radius: 30px;
            position: absolute;
            content: "";
            right: 0;
            bottom: 0;
            background: rgba(251, 75, 2, 1);
            box-shadow:
                -7px -7px 20px 0px rgba(255, 255, 255, .9),
                -4px -4px 5px 0px rgba(255, 255, 255, .9),
                7px 7px 20px 0px rgba(0, 0, 0, .2),
                4px 4px 5px 0px rgba(0, 0, 0, .3);
            transition: all 0.3s ease;
        }

        .btn-7:before {
            height: 0%;
            width: 2px;
        }

        .btn-7:after {
            width: 0%;
            height: 2px;
        }

        .btn-7:hover {
            color: whitesmoke;
            background: transparent;
        }

        .btn-7:hover:before {
            height: 100%;
        }

        .btn-7:hover:after {
            width: 100%;
        }

        .btn-7 span:before,
        .btn-7 span:after {
            border-radius: 30px;
            position: absolute;
            content: "";
            left: 0;
            top: 0;
            background: rgba(251, 75, 2, 1);
            box-shadow:
                -7px -7px 20px 0px rgba(255, 255, 255, .9),
                -4px -4px 5px 0px rgba(255, 255, 255, .9),
                7px 7px 20px 0px rgba(0, 0, 0, .2),
                4px 4px 5px 0px rgba(0, 0, 0, .3);
            transition: all 0.3s ease;
        }

        .btn-7 span:before {
            width: 2px;
            height: 0%;
        }

        .btn-7 span:after {
            height: 2px;
            width: 0%;
        }

        .btn-7 span:hover:before {
            height: 100%;
        }

        .btn-7 span:hover:after {
            width: 100%;
        }

        .search {
            margin-left: 3%;
            outline: none;
            border-radius: 30px;
            width: 20%;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: none;
            box-shadow: 5px 5px 10px black;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 50px;

        }

        #search {
            width: 7%;
            height: 50px;
            cursor: pointer;
            border-radius: 30px;
            margin-left: 2%;
            box-shadow: 5px 5px 10px black;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: 0.5s;
        }

        #search:hover {
            background-color: orange;
        }
    </style>

</body>

</html>