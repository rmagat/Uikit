<!DOCTYPE html>
<html>
    <head>
        <title>Thème - UiKit</title>
        <meta charset="utf-8">
        <!-- Uikit stylesheet -->
        <link rel="stylesheet" href="css/uikit.css" />
        <link rel="stylesheet" href="css/gradient.css" />
        
        <!-- CSS perso -->
        <link rel="stylesheet" href="style.css" />
        
        <!-- GoogleFont -->
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!-- UIkit script -->
        <script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/components/autocomplete.js"></script>
        <script src="js/components/autocomplete.min.js"></script>
        
        <!-- Menu du site -->
        <div class="uk-container uk-container-center">
            <div id="contenu">
            <nav class="uk-navbar">
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li class="uk-parent" data-uk-dropdown>
                        <a href=""><p class="titreMenu">MENU1</p></a>
                        <div class="uk-dropdown uk-dropdown-navbar">
                            <ul class="uk-nav uk-nav-navbar">
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li class="uk-parent" data-uk-dropdown>
                        <a href="">MENU2</a>
                        <div class="uk-dropdown uk-dropdown-navbar">
                            <ul class="uk-nav uk-nav-navbar">
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li class="uk-parent" data-uk-dropdown>
                        <a href="">MENU3</a>
                        <div class="uk-dropdown uk-dropdown-navbar">
                            <ul class="uk-nav uk-nav-navbar">
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>