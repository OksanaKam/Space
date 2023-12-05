<?php
$currentpage = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/template/index.css">
    <title><?=$planetsItem['planet_title']?></title>
</head>
<body>
    <div class="page page_type_planet">
<?php

require 'views/components/header.php';

?>
        <main class="content">
            <div class="planet">
                <h2 class="planet__heading"><span class="planet__barlow">01</span>Pick your destination</h2>
                <div class="planet__info">
                    <img class="planet__image" src="<?=$planetsItem['planet_img']?>" alt="<?=$planetsItem['planet_title']?>">
                    <div class="planet__about">
                        <nav>
                            <ul class="planet__names">
                                <li><a class="planet__name 
                                <?php 
                                if("/planet/1" == $currentpage) 
                                echo "planet__name_active";
                                ?>" href="/planet/1">MOON</a></li>
                                <li><a class="planet__name
                                <?php 
                                if("/planet/2" == $currentpage)  
                                echo "planet__name_active";
                                ?>" href="/planet/2">MARS</a></li>
                                <li><a class="planet__name 
                                <?php 
                                if("/planet/3" == $currentpage)  
                                echo "planet__name_active";
                                ?>" href="/planet/3">EUROPE</a></li>
                                <li><a class="planet__name 
                                <?php 
                                if("/planet/4" == $currentpage) 
                                echo "planet__name_active";
                                ?>" href="/planet/4">TITAN</a></li>
                            </ul>
                        </nav>
                        <h1 class="planet__title"><?=$planetsItem['planet_title']?></h1>
                        <p class="planet__description"><?=$planetsItem['planet_text']?></p>
                        <hr class="planet__line">
                        <div class="planet__details">
                            <div class="planet__detail">
                                <h3 class="planet__detail-title">AVG. DISTANCE</h3>
                                <p class="planet__detail-value"><?=$planetsItem['distance']?></p>
                            </div>
                            <div class="planet__detail">
                                <h3 class="planet__detail-title">Est. travel time</h3>
                                <p class="planet__detail-value"><?=$planetsItem['time']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>