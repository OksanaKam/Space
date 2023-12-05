<?php
$currentpage = $_SERVER['REQUEST_URI'];
?>
        <header class="header">
            <nav class="header__navbar-container">
                <img class="header__logo" src="/template/images/others/Path.png" alt="space">
                <input class="header__checkbox" type="checkbox" name="" id="">
                <div class="header__menu-burger">
                    <span class="header__line header__line1"></span>
                    <span class="header__line header__line2"></span>
                    <span class="header__line header__line3"></span>
                </div>
                <ul class="header__nav">
                    <li>
                        <a class="header__link 
                        <?php 
                        if("/" == $currentpage) 
                        echo "header__link_active";
                        ?>" href="/"><span class="header__barlow">00</span>HOME</a>
                    </li>
                    <li>
                        <a class="header__link
                        <?php 
                        if("/planet/1" == $currentpage || "/planet/2" == $currentpage || "/planet/3" == $currentpage || "/planet/4" == $currentpage) 
                        echo "header__link_active";
                        ?>" href="/planet/1"><span class="header__barlow">01</span>DESTINATION</a>
                    </li>
                    <li>
                        <a class="header__link
                        <?php 
                        if("/crew/1" == $currentpage || "/crew/2" == $currentpage || "/crew/3" == $currentpage || "/crew/4" == $currentpage) 
                        echo "header__link_active";
                        ?>" href="/crew/1"><span class="header__barlow">02</span>CREW</a>
                    </li>
                    <li>
                        <a class="header__link
                        <?php 
                        if("/technology/1" == $currentpage || "/technology/2" == $currentpage || "/technology/3" == $currentpage) 
                        echo "header__link_active";
                        ?>" href="/technology/1"><span class="header__barlow">03</span>TECHNOLOGY</a>
                    </li>
                </ul>
            </nav>
        </header>