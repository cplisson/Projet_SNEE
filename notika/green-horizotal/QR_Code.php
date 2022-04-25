<?php

session_start();
include('fonctions_php/Connexion_BD.php');
include('Menu_Gestion_O.html');
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

<!-- Formulaire -->
<form action='Info_Outils.php' method="POST">

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
                </div>
            </div>
        </div>
    </div>
    <br><button class="btn btn-primary" type="submit">Login</button>
</div>

<!-- Start bouton de confirmation d'ajout d'un outil -->

</form>

<?php 
include('lib/phpqrcode/qrlib.php');
echo '<img src="fonctions_php/Creation_QRcode.php">';
?>

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

