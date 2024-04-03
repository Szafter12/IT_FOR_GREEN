<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jakub Pachut Jakub Wójtowicz">
    <title>LiberoCity</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/97392591bc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <nav class="nav">
        <button class="burger-btn">
            <div class="burger-btn__box">
                <div class="burger-btn__bars"></div>
            </div>
        </button>


        <div class="nav__logo">
            <a href="#">
                <img class="nav__logo-img" src="./img/administration-2031346.svg" alt="">
                <span class="nav__logo-text">Libero<span class="nav__logo-text--span">City</span></span>
            </a>
        </div>

        <div class="nav__items">
            <a href="./index.php#news" class="nav__item">Aktualności</a>
            <a href="./index.php#about" class="nav__item">O nas</a>
            <a href="./index.php#contact" class="nav__item">Kontakt</a>
        </div>
    </nav>
    <?php
    require("./php/getarticle.php");
    echo <<<et
            <header class="header article-header">
                <h1 class="header__heading">$title</h1>
                <div class="header__browser">
                    <div class="white-block white-block-left"></div>
            </header>

            <article class="section-padding article">
                <div class="wrapper">
                    <div class="article__content">
                        $content
                    </div>

                </div>
            </article>  


        et;
    ?>

    <footer class="footer footer-maker">
        <div class="wrapper">
            <div class="white-block white-block-right"></div>
            <div class="footer__boxes">

                <div class="footer__box">
                    <h3 class="footer__box-title">Libero City</h3>
                    <p>
                        Poprzez dyskusje na tematy lokalne, strona pomaga ludziom być na bieżąco z wydarzeniami w ich
                        mieście, takimi jak nowe inwestycje, wydarzenia społeczne, problemy środowiskowe itp. Dzięki
                        temu użytkownicy mogą lepiej zrozumieć swoje otoczenie i być bardziej zaangażowani w życie
                        społeczności lokalnej.
                    </p>
                </div>


                <div class="footer__box-social">
                    <a href="https://twitter.com/home?lang=pl" target="_blank" class="footer__box-link"><i class="fab fa-twitter-square"></i></a>
                    <a href="https://www.facebook.com/?locale=pl_PL" target="_blank" class="footer__box-link"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__box-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <hr>
            <p class="footer__bottom-text">Copyright &copy; <span class="footer__year"></span> | Libero City</p>
    </footer>




    <script src="./js/main.js"></script>
</body>

</html>