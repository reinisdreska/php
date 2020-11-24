<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script
                src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="./css/lightbox.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">

        <title>Elon Musk</title>
    </head>
<body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target ">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapse_target">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#elon">Elon musk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kompanijas">Kompānijas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#galerija">Galerija</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sazina">Sazina</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="slides" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/ElonMusk.jpg" alt="space">
                </div>
            </div>
        </div>

        <span id="elon">
            <div class="container-fluid padding" >
                <div class="row welcome text-center">
                    <div class="col-12">
                        <h1 class="display-2">Elon Musk</h1>
                        <hr>
                    </div>
                    <div class="col-12">
                        <p class="lead">Elon Reeve Musk, dzimis 1971. gada 28. jūnijā, ir tehnoloģiju uzņēmējs, investors un inženieris. Viņam ir Dienvidāfrikas, Kanādas un ASV pilsonība un viņš ir SpaceX dibinātājs, izpilddirektors un galvenais inženieris/projektētājs; Tesla, Inc. vadītājs un produktu arhitekts; Neuralink līdzdibinātājs; The Boring Company dibinātājs un līdzdibinātājs un OpenAI sākotnējais līdzpriekšsēdētājs..</p>
                  </div>
                </div>
            </div>
        </span>

        <span id="kompanijas">
            <div class="container-fluid padding">
                <div class="row welcome text-center">
                    <div class="col-12">
                        <h1 class="display-3">Kompanijas</h1>
                    </div>
                    <hr>
                </div>
                <div class="row text-center ">
                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <h3 class="display-4">SpaceX</h3>
                        <hr>
                        <p class="lead">Space Exploration Technologies Corp., kas veic uzņēmējdarbību kā SpaceX, ir privāts amerikāņu aviopārvadājumu un kosmosa transporta uzņēmums, kura galvenais birojs atrodas Hotornā, Kalifornijā. To 2002. gadā dibināja Elon Musk ar mērķi samazināt kosmosa transporta izmaksas, lai veicinātu Marsa kolonizāciju.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <h3 class="display-4">Tesla</h3>
                        <hr>
                        <p class="lead">Tesla, Inc. (iepriekš Tesla Motors, Inc.) ir amerikāņu autobūves un enerģētikas uzņēmums, kas bāzēts Palo Alto, Kalifornijā. Uzņēmums specializējas elektrisko automobiļu ražošanā.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <h3 class="display-4">SolarCity</h3>
                        <hr>
                        <p class="lead">Solarcity Corporation ir Tesla, Inc. meitasuzņēmums, kas specializējas saules enerģijas pakalpojumos un ir galvenais uzņēmums Sanmamateo, Kalifornijā.

                            Solarcity tirgo, ražo un uzstāda dzīvojamos un komerciālos saules enerģijas paneļus ASV. 2016. gadā uzņēmums apvienojās ar Tesla, Inc.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <h3 class="display-4">The Boring Company</h3>
                        <hr>
                        <p class="lead">The Boring Company (pazīstama arī kā TBC) ir infrastruktūras un tuneļu būvniecības uzņēmums, ko Elon Musk dibināja 2016. gada decembrī.

                            Musk ir minējis grūtības ar Losandželosas trafiku un ierobežojumiem ar pašreizējo 2D transporta tīklu kā iedvesmu projektam. Boring Company sākotnēji izveidojās 2017. gadā kā SpaceX meitasuzņēmums, 2018. gadā kļūstot par atsevišķu un pilnīgi neatkarīgu uzņēmumu.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <h3 class="display-4">OpenAI</h3>
                        <hr>
                        <p class="lead">Openai ir bezpeļņas korporācija OpenAI LP, kas veic pētījumus mākslīgā intelekta jomā (AI) ar izvirzīto mērķi veicināt un attīstīt draudzīgu mākslīgo intelektu tādā veidā, kas dod labumu visai cilvēcei kopumā.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <h3 class="display-4">Neuralink</h3>
                        <hr>
                        <p class="lead">Neuralink Corporation ir amerikāņu neirotehnoloģiju uzņēmums, ko dibināja Elon Musk un citi, izstrādājot implantējamas smadzeņu un mašīnu saskarnes (BMIs). Kompānijas galvenā mītne atrodas Sanfrancisko; tā darbību sāka 2016. gadā un pirmo reizi publiski paziņoja 2017. gada martā.</p>
                    </div>
                </div>
            </div>
        </span>


        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col"><b>Nosaukums</b></th>
                    <th scope="col">Cena</th>
                    <th scope="col">Cik daudz brauca 2018 gada</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Tesla Model S</th>
                    <td>$79,990</td>
                    <td>50000</td>
                </tr>
                <tr>
                    <th scope="row">Tesla Model 3</th>
                    <td>$36,000</td>
                    <td>144000</td>
                </tr>
                <tr>
                    <th scope="row">Tesla Model X</th>
                    <td>$84,990</td>
                    <td>49000</td>
                </tr>
            </tbody>
        </table>
        <hr>

        <div class="GoogleMaps">
        <div class="container img-fluid text-center">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h2>Tesla Gigafactory</h2>
                    <p>Tesla Gigafactory 1 ir litija jonu akumulatoru un elektromobiļu apakšiekārtu rūpnīca netālu no Reno, Nevadā. Uzņēmums Tesla, Inc. pieder un to ekspluatē, lai piegādātu akumulatoru komplektus elektriskajiem transportlīdzekļiem un stacionārajām uzglabāšanas sistēmām. Tas atrodas Tahoe Reno rūpniecības centrā (TRIC) Storey apgabalā un kopš 2018. gada augusta nodarbina aptuveni 3000 cilvēku.</p>
                </div>
                <div class="col-lg-6">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.9575121172206!2d-119.44122868463064!3d39.538012479476926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80991fc240ba30b9%3A0x7e66b0fa4fe55cd8!2sTesla%20Gigafactory!5e0!3m2!1sen!2slv!4v1575822747112!5m2!1sen!2slv" width="300" height="225" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                </div>
            </div>
        </div>
        </div>
        <hr class="my-4">

       <span id="galerija">
            <div class="images">
                <div class="container-fluid img-fluid padding">
                    <div class="row welcome text-center">
                        <div class="col-12">
                            <div class="title">
                                <h1 class="display-3">Foto galerija</h1>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <figure class="text-center">
                                <a data-lightbox="TeslaModels" data-title="Tesla Model S" href="./img/ModelS.jpg"><img src="./img/ModelS.jpg" alt="Tesla Models S" class="img-thumbnail"></a>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <figure class="text-center">
                                <a data-lightbox="TeslaModels" data-title="Tesla Model 3" href="./img/Model3.jpg"><img src="./img/Model3.jpg" alt="Tesla Model 3" class="img-thumbnail"></a>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <figure class="text-center">
                                <a data-lightbox="TeslaModels" data-title="Tesla Model X" href="./img/ModelX.jpg"><img src="./img/ModelX.jpg" alt="Tesla Model X" class="img-thumbnail"></a>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <figure class="text-center">
                                <a data-lightbox="TeslaModels" data-title="Tesla Model Y" href="./img/ModelY.jpg"><img src="./img/ModelY.jpg" alt="Tesla Model Y" class="img-thumbnail"></a>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <figure class="text-center">
                                <a data-lightbox="TeslaModels" data-title="Tesla Roadster" href="./img/Roadster.jpg"><img src="./img/Roadster.jpg" alt="Tesla Roadster" class="img-thumbnail"></a>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <figure class="text-center">
                                <a data-lightbox="TeslaModels" data-title="Tesla Cybertruck" href="./img/Cybertruck.jpg"><img src="./img/Cybertruck.jpg" alt="Tesla Cybertruck" class="img-thumbnail"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <!-- Video gallery -->
        <div class="VideoGallery">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <h2 class="display-3">Video</h2>
                        <p class="lead">Šajā video ir parādīts kā Elon Musk domā kolonizēt Marsu. <br>
                            Video Elon Musk parāda savu plānu kā kolonizēt Marsu <br>
                            Video arī ietver animāciju kā tas notiktu</p>
                    </div>
                    <div class="video">
                    <div class="col-lg-6">
                        <p><iframe width="500" height="315" src="https://www.youtube.com/embed/zSv0Y7qrzQM" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>


        <span id="sazina">
            <div class="row welcome text-center">
                        <div class="col-12">
                            <div class="title">
                                <h1 class="display-3">Saziņa</h1>
                            </div>
                        </div>
            </div>
            <div class="container-fluid" id="">
                <div class="row">
                    <div class="col-md-2">
                        <p></p>
                    </div>
                    <div class="col-md-8">
                        <form action="index.php#sazina" method="post">
                            <div class="form-group">
                                <label for="name">Vārds:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Jūsu vārds">
                            </div>
                            <div class="form-group">
                                <label for="surname">Uzvārds:</label>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Jūsu uzvārds">
                            </div>
                            <div class="form-group">
                                  <label for="email">E-pasts:</label>
                                  <input type="email" class="form-control" id="email" placeholder="Jūsu e-pasta adrese" name="email">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Telefons:</label>
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Jūsu telefona numurs">
                            </div>
                            <div class="form-group">
                                <label for="question">Jūsu jautājums:</label>
                                <textarea class="form-control" name="question" id="question" rows="3" placeholder="Jūsu jautājums"></textarea>
                            </div>
                            <button class="btn btn-dark" type="submit" name="submit">Nosūtīt</button>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <p></p>
                    </div>
                </div>
            </div>
        </span>
        <?php

            if(isset($_POST['submit'])){
                if (empty ($_POST["name"])) {
                    echo "<b>Laukums nedrīkst būt tukš</b><br/>";
                } else {
                    $name = $_POST ["name"];
                    if (!preg_match ("/^[a-zA-z]*$/", $name) ) {
                        echo "<b>Tikai burti var tikt izmantoti vārdā</b><br/>";
                    } else {
                        echo "<b>Vārds:</b>{$_POST['name']}<br/>";
                    }
                }

                if (empty ($_POST["surname"])) {
                    echo "<b>Laukums nedrīkst būt tukš</b><br/>";
                } else {
                    $surname = $_POST ["surname"];
                    if (!preg_match ("/^[a-zA-z]*$/", $surname) ) {
                        echo "<b>Tikai burti var tikt izmantoti uzvārdā</b><br/>";
                    } else {
                        echo "<b>Uzvārds:</b>{$_POST['surname']}<br/>";
                    }
                }

                if (empty ($_POST["email"])) {
                    echo "<b>E-pasta laukums nedrīkst būt tukš</b><br/>";
                } else {
                    echo "<b>E-pasts:</b>{$_POST['email']}<br/>";
                }

                $mobile = $_POST ["mobile"];
                if (!preg_match ("/^[0-9]*$/", $mobile) ){
                    echo "<b>Telefona numurā var būt tiaki skaitļi</b><br/>";
                } else {
                    echo "<b>Telefons:</b>{$_POST['mobile']}<br/>";
                }

                echo "<b>Jūsu jautājums:</b>{$_POST['question']}";
            }
        ?>


    <!-- Java script files -->
    <script src="lib/back_to_top.js"></script>
    <script src="lib/lightbox-plus-jquery.min.js"></script>
    <script src="lib/lightbox.min.js"></script>
    <script src="./lib/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>

