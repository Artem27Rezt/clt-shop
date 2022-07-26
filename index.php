<?php 
    session_start();
    error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- file styles -->
    <link rel="stylesheet" href="styles/default-styles.css">
    <link rel="stylesheet" href="styles/styles.css">
    
    
    <!-- font links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="logo/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="logo/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="logo/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="logo/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="logo/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="logo/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="logo/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="logo/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="logo/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="logo/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="logo/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="logo/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="logo/favicon/favicon-16x16.png">
    <link rel="manifest" href="logo/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="logo/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>CleverTech Shop</title>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header_content_1">
            <a class="header_logo_link" href="#">
                <img src="logo/CleverTech-Logotip.png" class="clevertech_logo" alt="clevertech logo" width="50px">
                <p class="logo_name">clevertech-shop</p>
            </a>
        </div>
        <div class="header_content_2">
            <nav class="navig">                
                <a class="header_links women" href="#">women</a>
                <a class="header_links man" href="#">man</a>
                <a class="header_links" href="#">home</a>
                <a class="header_links" href="#">Contact</a>
                <div class="container_links">
                    <a href="registration/index.php"><img class="icon icon_user" width="30px" src="icons/user.png" alt="account"></a>
                    <?php 
                        if($_SESSION['user']){
                            echo '<div class="extra_user_data hide">
                                    <p class="greeting">Welcome '.$_SESSION['user']['login'].'</p>
                                    <a href="registration/profile.php" class="extra_user_data_links profile">profile</a>
                                    <a href="registration/vendor/logout.php" class="extra_user_data_links logout">log out</a>
                                </div>';
                        }
                    ?>
                    <a href="#"><img class="icon" width="30px" src="icons/favorite.png" alt="favorite"></a>
                    <a href="#"><img class="icon" width="30px" src="icons/basket.png" alt="basket"></a>
                </div>
            </nav>
        <div class="second_level hide">
            <div class="third_level">
                <div class="products">
                    <a href="#" class="third_level_links">t-shirt</a>
                    <a href="#" class="third_level_links">jackets</a>
                    <a href="#" class="third_level_links">pencil</a>
                    <a href="#" class="third_level_links">gap</a>
                    <a href="#" class="third_level_links">gloves</a>
                    <a href="#" class="third_level_links">cup</a>
                    <a href="#" class="third_level_links special">sale %</a>
                </div>
                <div class="all_information">
                    <a class="watch_all" href="#"><img class="image_watch_all" src="#" alt="">watch all</a>
                </div>
            </div>
           
        </div>
        

        </div>
    </header>

    <!-- Main-Content -->

    <section class="main_section">
        <div class="content">
            <div class="text_content">
                <h1 class="clt_wear">clever<br>tech<br>wear</h1>
                <a class="link_shop_now" href="#">shop now</a>
            </div>
            <div class="image_shop">
                <img src="image/web-shopping.svg" alt="">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer_left_content">
            <p class="clevertech">© 2022 CLEVERTECH. All Rights Reserved</p>
        </div>
        <div class="footer_right_content">
            <a href="#" class="footer_links">home</a>
            <a href="#" class="footer_links">about us</a>
            <a href="#" class="footer_links">contact</a>
            <a href="#" class="footer_links">faq</a>
            <a href="#" class="footer_links">order</a>
        </div>
    </footer>

    <script src="scripts/default-scripts.js"></script>
</body>
</html>