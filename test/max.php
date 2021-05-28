<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="site">
        <div class="wrap-header-menu">
            <header class="header">
                <div class="container">
                    <div class="content-width">
                        <div class="header-wrapper">
                            <div class="header-main">
                                <a href="#" class="logo header__logo">Лого</a>
            
                                <nav class="menu">
                                    <ul class="menu-list">
                                      <li class="menu-list__item">
                                          <a href="index.html" class="menu-list__link">Задание 1</a></li>
                                      <li class="menu-list__item">
                                          <a href="autorization.html" class="menu-list__link">Задание 2</a></li>
                                      <li class="menu-list__item">
                                          <a href="accordeon.html" class="menu-list__link">Задание 3</a></li>
                                      <li class="menu-list__item">
                                          <a href="max.php" class="menu-list__link menu-list__link_active">Задание 4</a></li>
                                      <li class="menu-list__item">
                                          <a href="breadcrumbs.php" class="menu-list__link">Задание 5</a></li>
                                      <li class="menu-list__item">
                                          <a href="task.html" class="menu-list__link">Задание 6</a></li>  
                                    </ul>
                                </nav>
                                <div class="burger-menu">
                                    <span class="burger-menu__item"></span>
                                </div>
                            </div>
                            <div class="user">
                                <a href="" class="user__link">
                                    <img src="img/user.png" alt="User-img" class="user__img">
                                </a>
                                <span class="user__name">Привет Аноним!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="mobile-menu"></div>
        </div>

        <div class="max">
            <div class="container">
                <div class="content-width">
                    <div class="max-wrapper">
                        <?php 

                            $arr = array();
                            
                            for ($i = 0; $i < 10; $i++) {
                                $arr[$i] = rand(0, 100);
                                echo '<p>число - '.$arr[$i].'</p>';
                            }

                            sort($arr, SORT_NUMERIC);

                            // for($w = 0; $w < 10; $w++) {
                            //     echo '<p> сорт - '.$arr[$w].'</p>';
                            // }

                            $max = array_slice($arr, -3);

                            for($m = 0; $m < 3; $m++) {
                               
                                echo '<h2>Максимальные значения - '.$max[$m].'</h2>';
                            }

                        ?>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="content-width">
                   <div class="footer-modifier">
                        <div class="footer-wrapper">
                            <a href="#" class="logo footer__logo">Лого</a>
                            <div class="footer-author">
                                <span class="footer-author__name">Земсков Александр Сергеевич</span>
                                <span class="footer-author__tel">тел. +7 960 305 67 53</span>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </footer>
    </div>
    <script src='js/script.js'></script>
</body>
</html>