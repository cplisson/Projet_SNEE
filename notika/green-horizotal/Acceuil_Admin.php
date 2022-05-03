<!--Page de visualisation des outils en transmission-->
<?php

session_start();
include('Menu_Home.html');

?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Visualisation des transmissions | Notika - Notika Admin Template</title>
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

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Table | Notika - Notika Admin Template</title>
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
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
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

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Tableau de transmissions des outils</h2>
                        <p>La tableau permet de visualiser l'état de transmission d'un outil entre deux employés. On peut utiliser la barre de recherche pour rechercher un outil par son type ou son numéro de série. On peut également filtrer la recherche par le nom ou le matricule de l'employé.</p>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Matricule donneur</th>
                                <th>Nom donneur</th>
                                <th>Type outil</th>
                                <th>Numéro de série</th>
                                <th>Matricule receveur</th>
                                <th>Nom receveur</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0001</td>
                                <td>Pierre</td>
                                <td>Perceuse</td>
                                <td>61</td>
                                <td>0100</td>
                                <td>Paul</td>
                            </tr>
                            <tr>
                                <td>0002</td>
                                <td>Paul</td>
                                <td>Disqeuse</td>
                                <td>39</td>
                                <td>0101</td>
                                <td>Louis</td>
                            </tr>
                            <tr>
                                <td>0003</td>
                                <td>Jacques</td>
                                <td>Perceuse</td>
                                <td>23</td>
                                <td>0102</td>
                                <td>Pierre</td>
                            </tr>
                            <tr>
                                <td>0004</td>
                                <td>Patrick</td>
                                <td>Perceuse</td>
                                <td>30</td>
                                <td>0103</td>
                                <td>Pierre</td>
                            </tr>
                            <tr>
                                <td>0005</td>
                                <td>Louis</td>
                                <td>Disqeuse</td>
                                <td>22</td>
                                <td>0104</td>
                                <td>Jean</td>
                            </tr>
                            <tr>
                                <td>0006</td>
                                <td>Louis</td>
                                <td>Disqeuse</td>
                                <td>36</td>
                                <td>0105</td>
                                <td>Jean</td>
                            </tr>
                            <tr>
                                <td>0007</td>
                                <td>Jasques</td>
                                <td>Echaffaudage</td>
                                <td>43</td>
                                <td>0106</td>
                                <td>Pierre</td>
                            </tr>
                            <tr>
                                <td>0008</td>
                                <td>Patrick</td>
                                <td>Echaffaudage</td>
                                <td>19</td>
                                <td>0107</td>
                                <td>Benjamin</td>
                            </tr>
                            <tr>
                                <td>0009</td>
                                <td>Louis</td>
                                <td>Echaffaudage</td>
                                <td>59</td>
                                <td>0108</td>
                                <td>Pierre</td>
                            </tr>
                            <tr>
                                <td>0009</td>
                                <td>Benjamin</td>
                                <td>Disqeuse</td>
                                <td>41</td>
                                <td>0109</td>
                                <td>Patrick</td>
                            </tr>
                            <tr>
                                <td>0010</td>
                                <td>Gerard</td>
                                <td>Disqeuse</td>
                                <td>35</td>
                                <td>0110</td>
                                <td>Fredo</td>
                            </tr>
                            <tr>
                                <td>0011</td>
                                <td>Jacques</td>
                                <td>Disqeuse</td>
                                <td>23</td>
                                <td>0111</td>
                                <td>Gerard</td>
                            </tr>
                            <tr>
                                <td>0012</td>
                                <td>Fredo</td>
                                <td>Perceuse</td>
                                <td>28</td>
                                <td>0112</td>
                                <td>Louis</td>
                            </tr>
                            <tr>
                                <td>0013</td>
                                <td>Pierre</td>
                                <td>Perceuse</td>
                                <td>28</td>
                                <td>0113</td>
                                <td>Gerard</td>
                            </tr>
                            <tr>
                                <td>0014</td>
                                <td>Benjamin</td>
                                <td>Echaffaudage</td>
                                <td>47</td>
                                <td>0114</td>
                                <td>Fredo</td>
                            </tr>
                            <tr>
                                <td>0015</td>
                                <td>Louis</td>
                                <td>Echaffaudage</td>
                                <td>27</td>
                                <td>0114</td>
                                <td>Gerard</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Matricule donneur</th>
                                <th>Nom donneur</th>
                                <th>Type outil</th>
                                <th>Numéro de série</th>
                                <th>Matricule receveur</th>
                                <th>Nom receveur</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<!--  Chat JS
    ============================================ -->
<script src="js/chat/jquery.chat.js"></script>
<!--  todo JS
    ============================================ -->
<script src="js/todo/jquery.todo.js"></script>
<!--  wave JS
    ============================================ -->
<script src="js/wave/waves.min.js"></script>
<script src="js/wave/wave-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="js/plugins.js"></script>
<!-- Data Table JS
    ============================================ -->
<script src="js/data-table/jquery.dataTables.min.js"></script>
<script src="js/data-table/data-table-act.js"></script>
<!-- main JS
    ============================================ -->
<script src="js/main.js"></script>
<!-- tawk chat JS
    ============================================ -->
<script src="js/tawk-chat.js"></script>
</body>

</html>

