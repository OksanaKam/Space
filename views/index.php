<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/template/index.css">
    <title>Space</title>
</head>
<body>
    <div class="page page_type_main">
<?php

require 'views/components/header.php';

?>
        <main class="content">
            <div class="homepage">
                <div class="homepage__info">
                    <h2 class="homepage__subtitle">SO, YOU WANT TO TRAVEL TO</h2>
                    <h1 class="homepage__title">SPACE</h1>
                    <p class="homepage__text">Let’s face it; if you want to go to space, you might as well genuinely go to outer space and not hover kind of on the edge of it. Well sit back, and relax because we’ll give you a truly out of this world experience!</p>
                </div>
                <div class="homepage__explore">
                    <img class="homepage__oval" src="/template/images/others/Oval Copy.png" alt="белый круг">
                    <button class="homepage__oval-title" type="button" id="subscribe-button" aria-label="Explore">EXPLORE</button>
                </div>
            </div>
            <div class="popup popup__subscribe" id="popup">
              <div class="popup__modal">
                <button class="popup__close" type="button" aria-label="Close"></button>
                <form class="popup__container popup__form" id="popup__container" action="" name="subscribe" method="post" novalidate>
                  <h2 class="popup__title">Subscribe to SPACE's Newsletter</h2>
                  <input class="popup__input popup__input_name_email" id="email-input" type="email" name="user_email" value="" placeholder="" required>
                  <span class="popup__input-error email-input-error"></span>
                  <button class="popup__button popup__button_disabled" type="submit" name="subscribe" value="Subscribe" aria-label="Subscribe" disabled>Subscribe</button>
                </form>
              </div>
            </div>
        </main>
    </div>
    <script type="module" src="/template/index.js"></script>
</body>
</html>