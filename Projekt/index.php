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

    <!-- <div class="loader-container">
        <svg viewBox="0 0 800 300">
            <text x="50%" y="50%" dy="0" text-anchor="middle" class="text-body">
                Libero
            </text>
            <text x="45%" y="85%" dy="0" text-anchor="middle" class="text-body">
                City
            </text>
        </svg>
    </div> -->


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
            <a href="#news" class="nav__item">Aktualności</a>
            <a href="#about" class="nav__item">O nas</a>
            <a href="#contact" class="nav__item">Kontakt</a>
        </div>
    </nav>

    <header class="header">
        <h1 class="header__heading">Świat w Twoich Rękach: <br> Najnowsze Wydarzenia <span>Bez Cenzury</span></h1>
        <div class="header__browser">
            <input class="header__browser-input" type="text" id="browser" placeholder="Wpisz szukaną frazę">
        </div>
        <div class="white-block white-block-left"></div>
    </header>

    <section id="news" class="aboutUs section-padding">
        <h2 class="section-heading">
            <span class="heading">Aktualności</span>
        </h2>
        <div class="wrapper">
            <div class="cards">
                

                <?php 
                
                require('./php/mainPageArticles.php');

                for($i=0; $i<$numberOfArticles; $i++){
                    $title = $titles[$i];
                    $add_date = $add_dates[$i];
                    $author = $authors[$i];
                    $beginning = $beginnings[$i]."...";
                    $photo = $photos[$i];
                    $articleId = $articseIds[$i];
                    echo<<< et

                        <div class="card">
                            <div class="card__top">
                                <img src="$photo" alt="">
                            </div>
                            <div class="card__bottom">
                                <h3 class="card__bottom-title">$title</h3>
                                <p class="card__bottom-text">
                                    $beginning
                                </p>
                                <div class="card__bottom-info">
                                    <p class="author">$author</p>
                                    <p class="date">$add_date</p>
                                </div>
                                <p class="card__bottom-link"><a href="http://localhost/IT_FOR_GREEN/Projekt/article.php?artId=$articleId">czytaj dalej...</a></p>
                            </div>
                        </div>




                    et;
                }
                

                
                ?>

                
                

                
            </div>
        </div>
    </section>

    <div class="container">
        <div class="white-block white-block-right"></div>
        <div class="white-block white-block-left"></div>
        <hr>
        <h2 class="container__heading">
            Odkryj Świat bez Granic, Bez Cenzury, Razem z Nami!
        </h2>
        <hr>
    </div>

    <section id="about" class="aboutUs section-padding">
        <h2 class="section-heading">
            <span class="heading">O nas</span>
        </h2>
        <div class="wrapper">
            <div class="aboutUs__history">
                <h3 class="aboutUs__title">Historia Powstania</h3>
                <p class="aboutUs__text">
                    Strona "WolneSpojrzenie" narodziła się z głębokiej potrzeby stworzenia przestrzeni, w której
                    ludzie mogliby swobodnie wyrażać swoje opinie i dzielić się swoimi spostrzeżeniami na tematy
                    dotyczące ich miasta i świata. Wszystko zaczęło się od doświadczenia założycieli, którzy
                    zauważyli brak otwartego forum dyskusyjnego, gdzie mieszkańcy mogliby bez przeszkód wymieniać
                    swoje poglądy na ważne kwestie społeczne, kulturalne, ekonomiczne i inne, dotykające ich
                    codzienności.
                    <br>
                    <br>
                    Po wielu rozmowach i analizach postanowili zbudować platformę, która byłaby miejscem bez
                    cenzury, gdzie każdy mógłby czuć się swobodnie, wypowiadając się na tematy, które są dla niego
                    istotne. Po długich godzinach pracy nad projektem, "WolneSpojrzenie" powstało jako odpowiedź na
                    potrzebę wolności słowa i wzajemnego szacunku w dyskusjach online.
                </p>
            </div>
        </div>

    </section>

    <script src="./js/main.js"></script>
</body>

</html>`