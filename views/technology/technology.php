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
    <title>Document</title>
</head>
<body>
    <div class="page page_type_tech">
<?php

require 'views/components/header.php';

?>
        <main class="content">
            <div class="tech">
                <h2 class="tech__heading"><span class="crew__barlow">03</span>SPACE LAUNCH 101</h2>
                <div class="tech__about">
                    <nav>
                        <ul class="tech__menu">
                            <li>
                                <a href="/technology/1">
                                    <button class="tech__link
                                    <?php 
                                    if("/technology/1" == $currentpage) 
                                    echo "tech__link_active";
                                    ?>" type="button">1</button>
                                </a>
                            </li>
                            <li>
                                <a href="/technology/2">
                                    <button class="tech__link
                                    <?php 
                                    if("/technology/2" == $currentpage) 
                                    echo "tech__link_active";
                                    ?>" type="button">2</button>
                                </a>
                            </li>
                            <li>
                                <a href="/technology/3">
                                    <button class="tech__link
                                    <?php 
                                    if("/technology/3" == $currentpage) 
                                    echo "tech__link_active";
                                    ?>" type="button">3</button>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="tech__info">
                        <h2 class="tech__subtitle"><?=$techItem['tech_subtitle']?></h2>
                        <h1 class="tech__title"><?=$techItem['tech_title']?></h1>
                        <p class="tech__description"><?=$techItem['tech_text']?></p>
                    </div>
                    <img class="tech__image" src="<?=$techItem['tech_image']?>" alt="<?=$techItem['tech_title']?>">
                </div>
            </div>
        </main>
    </div>
</body>
</html>