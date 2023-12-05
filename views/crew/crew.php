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
    <div class="page page_type_crew">
<?php

require 'views/components/header.php';

?>
        <main class="content">
            <div class="crew">
                <h2 class="crew__heading"><span class="crew__barlow">02</span>Meet your crew</h2>
                <div class="crew__about">
                    <div class="crew__info">
                        <h2 class="crew__subtitle"><?=$crewItem['crew_title']?></h2>
                        <h1 class="crew__title"><?=$crewItem['crew_name']?></h1>
                        <p class="crew__description"><?=$crewItem['crew_text']?></p>
                        <nav>
                            <ul class="crew__menu">
                                <li>
                                    <a href="/crew/1">
                                    <button class="crew__link 
                                    <?php 
                                    if("/crew/1" == $currentpage) 
                                    echo "crew__link_active";
                                    ?>" type="button"></button>
                                    </a>
                                </li>
                                <li>
                                    <a href="/crew/2">
                                        <button class="crew__link
                                        <?php 
                                        if("/crew/2" == $currentpage) 
                                        echo "crew__link_active";
                                        ?>" type="button"></button>
                                    </a>
                                </li>
                                <li>
                                    <a href="/crew/3">
                                        <button class="crew__link
                                        <?php 
                                        if("/crew/3" == $currentpage) 
                                        echo "crew__link_active";
                                        ?>" type="button"></button>
                                    </a>
                                </li>
                                <li>
                                    <a href="/crew/4">
                                        <button class="crew__link
                                        <?php 
                                        if("/crew/4" == $currentpage) 
                                        echo "crew__link_active";
                                        ?>" type="button"></button>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <img class="<?=$crewItem['crew_class']?>" src="<?=$crewItem['crew_img']?>" alt="<?=$crewItem['crew_name']?>">
                </div>
            </div>
        </main>
    </div>
</body>
</html>