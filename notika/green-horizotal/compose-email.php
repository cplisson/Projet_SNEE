<?php

session_start();
include('fonctions_php/Connexion_BD.php');

?>

<!doctype html>
<html class="no-js" lang="" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/faviconSNEEv3.ico">
    <!-- Google Fonts
            ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
            ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
            ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
            ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
            ============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
            ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- summernote CSS
            ============================================ -->
    <link rel="stylesheet" href="css/summernote/summernote.css">
    <!-- Range Slider CSS
            ============================================ -->
    <link rel="stylesheet" href="css/themesaller-forms.css">
    <!-- normalize CSS
            ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
            ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
            ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- bootstrap select CSS
            ============================================ -->
    <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
            ============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
            ============================================ -->
    <link rel="stylesheet" href="css/color-picker/farbtastic.css">
    <!-- main CSS
            ============================================ -->
    <link rel="stylesheet" href="css/chosen/chosen.css">
    <!-- notification CSS
            ============================================ -->
    <link rel="stylesheet" href="css/notification/notification.css">
    <!-- dropzone CSS
            ============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- wave CSS
            ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
            ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
            ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
            ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
            ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!--head copier depuis dialog.html pour utiliser le bouton d'ajout d'outil et afficher une notification de succes d'ajout de l'outil -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dialog | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- favicon
            ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/faviconSNEEv3.ico">
       <!-- Google Fonts
            ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- font awesome CSS
            ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
            ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- meanmenu CSS
            ============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
        <!-- animate CSS
            ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
            ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
        <!-- mCustomScrollbar CSS
            ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- Notika icon CSS
            ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
        <!-- wave CSS
            ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
        <!-- dialog CSS
            ============================================ -->
    <link rel="stylesheet" href="css/dialog/sweetalert2.min.css">
    <link rel="stylesheet" href="css/dialog/dialog.css">
        <!-- main CSS
            ============================================ -->
    <link rel="stylesheet" href="css/main.css">
        <!-- style CSS
            ============================================ -->
    <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
            ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
            ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
</head>


<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Header Top Area -->
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#"><img src="img/logo/logo_SNEE_sans_bg.png" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                               class="nav-link dropdown-toggle"><span><i
                                    class="notika-icon notika-search"></i></span></a>
                            <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                <div class="search-input">
                                    <i class="notika-icon notika-left-arrow"></i>
                                    <input type="text" />
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                class="nav-link dropdown-toggle"><span><i
                                class="notika-icon notika-menus"></i></span>
                            <!-- <div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>2</span></div>--></a>
                            <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Mon compte</h2>
                                </div>
                                <div class="hd-message-info hd-task-info">
                                    <div class="skill">
                                        <!--<div class="progress">-->
                                        <div class="lead-content">
                                            <p>Je suis [Admin ou employé]</p>
                                        </div>
                                        <!--<div class="progress-bar wow fadeInLeft" data-progress="93%" style="width: 65%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>65%</span> </div>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                class="nav-link dropdown-toggle"><span><i
                                class="notika-icon notika-chat"></i></span></a>
                            <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Espace Déconnexion</h2>
                                </div>
                                <!--<div class="search-people">
                                    <i class="notika-icon notika-left-arrow"></i>
                                    <input type="text" placeholder="Search People" />
                                </div>-->
                                <div class="hd-mg-va">
                                    <a href="#">Se déconnecter</a>
                                    <!--lié le formulaire de déconnexion-->
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="index.html">Dashboard One</a></li>
                                    <li><a href="index-2.php">Fiche outil</a></li>
                                     
                                    <li><a href="index-4.html">Acceuil CT</a></li>
                                    <li><a href="analytics.html">Je reçois</a></li>
                                    <li><a href="widgets.html">Je recherche</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demoevent" href="#">Gestion outils</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="inbox.html">Mes habilitations</a></li>
                                     
                                    <li><a href="compose-email.php">Ajout outil</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#democrou" href="#">Gestion employés</a>
                                <ul id="democrou" class="collapse dropdown-header-top">
                                     
                                    <li><a href="google-map.html">Gestion employés</a></li>
                                     
                                     
                                     
                                    <li><a href="wizard.html"> Accueil employé</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demolibra" href="#"> Habilitation</a>
                                <ul id="demolibra" class="collapse dropdown-header-top">
                                     
                                     
                                     
                                    <li><a href="Ajout_habilitation.html"> Ajouter une habilitation</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demodepart" href="Donner.html"> Je donne</a>
                                <ul id="#demodepart" class="collapse dropdown-header-top">
                                     
                                     
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-components.html">Form Components</a></li>
                                    <li><a href="form-examples.html">Form Examples</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                    <li><a href="notification.html">Notifications</a>
                                    </li>
                                    <li><a href="alert.html">Alerts</a>
                                    </li>
                                    <li><a href="modals.html">Modals</a>
                                    </li>
                                    <li><a href="buttons.html">Buttons</a>
                                    </li>
                                    <li><a href="tabs.html">Tabs</a>
                                    </li>
                                    <li><a href="accordion.html">Accordion</a>
                                    </li>
                                    <li><a href="dialog.html">Dialogs</a>
                                    </li>
                                    <li><a href="popovers.html">Popovers</a>
                                    </li>
                                    <li><a href="tooltips.html">Tooltips</a>
                                    </li>
                                    <li><a href="dropdown.html">Dropdowns</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="contact.html">Contact</a>
                                    </li>
                                    <li><a href="invoice.html">Invoice</a>
                                    </li>
                                    <li><a href="typography.html">Typography</a>
                                    </li>
                                    <li><a href="color.html">Color</a>
                                    </li>
                                    <li><a href="login-register.html">Login Register</a>
                                    </li>
                                    <li><a href="404.html">404 Page</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i>
                        Home</a>
                    </li>
                    <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Gestion outils</a>
                    </li>
                    <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Gestion employés</a>
                    </li>
                    <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i>  Habilitation</a>
                    </li>
                    <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i>  Je donne</a>
                    </li>
                    <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Forms</a>
                    </li>
                    <li><a data-toggle="tab" href="#Appviews"><i class="notika-icon notika-app"></i> App views</a>
                    </li>
                    <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Pages</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="index.html">Dashboard One</a>
                            </li>
                            <li><a href="index-2.php">Fiche outil</a>
                            </li>
                             
                            </li>
                            <li><a href="index-4.html">Acceuil CT</a>
                            </li>
                            <li><a href="analytics.html">Je reçois</a>
                            </li>
                            <li><a href="widgets.html">Je recherche</a>
                            </li>
                        </ul>
                    </div>
                    <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="inbox.html">Mes habilitations</a>
                            </li>
                             
                            </li>
                            <li><a href="compose-email.php">Ajout outil</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="animations.html"> </a>
                            </li>
                            <li><a href="google-map.html">Gestion employés</a>
                            </li>
                             
                            </li>
                             
                            </li>
                             
                            </li>
                            <li><a href="wizard.html"> Accueil employé</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                             
                            </li>
                             
                            </li>
                             
                            </li>
                            <li><a href="Ajout_habilitation.html"> Ajouter une habilitation</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                             
                            </li>
                             
                            </li>
                        </ul>
                    </div>
                    <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="form-elements.html">Form Elements</a>
                            </li>
                            <li><a href="form-components.html">Form Components</a>
                            </li>
                            <li><a href="form-examples.html">Form Examples</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="notification.html">Notifications</a>
                            </li>
                            <li><a href="alert.html">Alerts</a>
                            </li>
                            <li><a href="modals.html">Modals</a>
                            </li>
                            <li><a href="buttons.html">Buttons</a>
                            </li>
                            <li><a href="tabs.html">Tabs</a>
                            </li>
                            <li><a href="accordion.html">Accordion</a>
                            </li>
                            <li><a href="dialog.html">Dialogs</a>
                            </li>
                            <li><a href="popovers.html">Popovers</a>
                            </li>
                            <li><a href="tooltips.html">Tooltips</a>
                            </li>
                            <li><a href="dropdown.html">Dropdowns</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="contact.html">Contact</a>
                            </li>
                            <li><a href="invoice.html">Invoice</a>
                            </li>
                            <li><a href="typography.html">Typography</a>
                            </li>
                            <li><a href="color.html">Color</a>
                            </li>
                            <li><a href="login-register.html">Login Register</a>
                            </li>
                            <li><a href="404.html">404 Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->

<!-- Formulaire -->
<form action='fonctions_php/AjoutOutils.php' method="POST">

<div class="form-element-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-10 col-sm-8 col-xs-8">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd">
                        <h1>Ajouter un outil</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-calendar"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="NomOUTIL" id="NomOUTIL" placeholder="Nom de l'outil">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropzone-area">
                        <div class="container">
                                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                                    <div class="dropdone-nk mg-t-30">
                                        <div class="cmp-tb-hd">
                                            <p>Photo de l'outil</p>
                                        </div>
                                        <div id="dropzone1" class="multi-uploader-cs">
                                            <input type="file" disabled class="dropzone dropzone-nk needsclick" id="demo1-upload">
                                                <div class="dz-message needsclick download-custom">
                                                    <i class="notika-icon notika-cloud"></i>
                                                    <h2>Glisser le ficher ou cliquer pour télécharger la photo.</h2>
                                                </div>
                                            </input>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="form-element-area">
                        <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-calendar"></i>
                                            </div>
                                            <select class="selectpicker" data-live-search="true" name="TypeOUTIL">
                                                <option> Type d'outil </option>
                                                <option>Perceuse</option>
                                                <option>Marteau</option>
                                                <option>Rallonge</option>
                                                <option>Disqueuse</option>
                                                <option>Boite à outils</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-calendar"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="MarqueOUTIL" placeholder="Marque de l'outil">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-calendar"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="NumeroOutil" placeholder="Numéro de série">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-calendar"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" data-mask="99/99/9999" name="DA" placeholder="Date d'achat : jj/mm/aaaa">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-calendar"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" data-mask="99/99/9999" name="DC" placeholder="Date de contrôle réglementaire : jj/mm/aaaa">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-calendar"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" data-mask="99/99/9999" name="DG" placeholder="Date de fin de garantie : jj/mm/aaaa">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dropzone area Start : insertion de la notice de l'outil-->
<div class="dropzone-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                <div class="dropdone-nk mg-t-30">
                    <div class="cmp-tb-hd">
                        <p>Notice d'utilisation de l'outil</p>
                    </div>
                    <input type="file" disabled id="dropzone1" class="multi-uploader-cs">
                        <div class="dropzone dropzone-nk needsclick" id="demo1-upload">
                            <div class="dz-message needsclick download-custom">
                                <i class="notika-icon notika-cloud"></i>
                                <h2>Glisser le ficher ou cliquer pour télécharger.</h2>
                            </div>
                        </div>
                    </input>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dropzone area End-->

<!-- Start bouton de confirmation d'ajout d'un outil -->
<button class="btn btn-primary" type="submit">Login</button>
</form>
<div class="buttons-area">
    <div class="container">
        <div class="dialog-inner mg-t-30">
            <div class="dialog-pro dialog">
                <button class="btn btn-info" id="sa-success" data-from="bottom" data-align="center"><i ></i>Ajouter l'outil</button>
            </div>
        </div>
    </div>
</div>
<!-- End bouton de confirmation d'ajout d'un outil type="submit" form="form1"-->




<!-- Start Footer area-->
<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2018
                        . All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer area-->
<!-- jquery
    ============================================ -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
        ============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
        ============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
        ============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- owl.carousel JS
        ============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- scrollUp JS
        ============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- meanmenu JS
        ============================================ -->
<script src="js/meanmenu/jquery.meanmenu.js"></script>
<!-- counterup JS
        ============================================ -->
<script src="js/counterup/jquery.counterup.min.js"></script>
<script src="js/counterup/waypoints.min.js"></script>
<script src="js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
        ============================================ -->
<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sparkline JS
        ============================================ -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/sparkline-active.js"></script>
<!-- flot JS
        ============================================ -->
<script src="js/flot/jquery.flot.js"></script>
<script src="js/flot/jquery.flot.resize.js"></script>
<script src="js/flot/flot-active.js"></script>
<!-- knob JS
        ============================================ -->
<script src="js/knob/jquery.knob.js"></script>
<script src="js/knob/jquery.appear.js"></script>
<script src="js/knob/knob-active.js"></script>
<!-- Input Mask JS
        ============================================ -->
<script src="js/jasny-bootstrap.min.js"></script>
<!-- icheck JS
        ============================================ -->
<script src="js/icheck/icheck.min.js"></script>
<script src="js/icheck/icheck-active.js"></script>
<!-- rangle-slider JS
        ============================================ -->
<script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
<script src="js/rangle-slider/rangle-active.js"></script>
<!-- datapicker JS
        ============================================ -->
<script src="js/datapicker/bootstrap-datepicker.js"></script>
<script src="js/datapicker/datepicker-active.js"></script>
<!-- bootstrap select JS
        ============================================ -->
<script src="js/bootstrap-select/bootstrap-select.js"></script>
<!--  color-picker JS
        ============================================ -->
<script src="js/color-picker/farbtastic.min.js"></script>
<script src="js/color-picker/color-picker.js"></script>
<!--  notification JS
        ============================================ -->
<script src="js/notification/bootstrap-growl.min.js"></script>
<script src="js/notification/notification-active.js"></script>
<!--  summernote JS
        ============================================ -->
<script src="js/summernote/summernote-updated.min.js"></script>
<script src="js/summernote/summernote-active.js"></script>
<!-- dropzone JS
        ============================================ -->
<script src="js/dropzone/dropzone.js"></script>
<!--  wave JS
        ============================================ -->
<script src="js/wave/waves.min.js"></script>
<script src="js/wave/wave-active.js"></script>
<!--  chosen JS
        ============================================ -->
<script src="js/chosen/chosen.jquery.js"></script>
<!--  Chat JS
        ============================================ -->
<script src="js/chat/jquery.chat.js"></script>
<!--  todo JS
        ============================================ -->
<script src="js/todo/jquery.todo.js"></script>
<!-- plugins JS
        ============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
        ============================================ -->
<script src="js/main.js"></script>
<!-- tawk chat JS
        ============================================ -->
<script src="js/tawk-chat.js"></script>
<!--Ajout de JS depuis dialog.html pour utiliser le bouton d'ajout d'outil et afficher une notification de succés -->
<!-- jquery
    ============================================ -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="js/meanmenu/jquery.meanmenu.js"></script>
<!-- counterup JS
    ============================================ -->
<script src="js/counterup/jquery.counterup.min.js"></script>
<script src="js/counterup/waypoints.min.js"></script>
<script src="js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sparkline JS
    ============================================ -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/sparkline-active.js"></script>
<!-- flot JS
    ============================================ -->
<script src="js/flot/jquery.flot.js"></script>
<script src="js/flot/jquery.flot.resize.js"></script>
<script src="js/flot/flot-active.js"></script>
<!-- knob JS
    ============================================ -->
<script src="js/knob/jquery.knob.js"></script>
<script src="js/knob/jquery.appear.js"></script>
<script src="js/knob/knob-active.js"></script>
<!--  wave JS
    ============================================ -->
<script src="js/wave/waves.min.js"></script>
<script src="js/wave/wave-active.js"></script>
<!--  Chat JS
    ============================================ -->
<script src="js/dialog/sweetalert2.min.js"></script>
<script src="js/dialog/dialog-active.js"></script>
<!--  Chat JS
    ============================================ -->
<script src="js/chat/jquery.chat.js"></script>
<!--  todo JS
    ============================================ -->
<script src="js/todo/jquery.todo.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="js/main.js"></script>
<!-- tawk chat JS
    ============================================ -->
<script src="js/tawk-chat.js"></script>

</body>

</html>
