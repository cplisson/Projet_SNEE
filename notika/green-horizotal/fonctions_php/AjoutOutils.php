<!--Page Ajout habilitation -->
<?php

session_start();
include('Connexion_BD.php');


if (isset($_POST['NomOUTIL'])&&isset($_POST['TypeOUTIL'])&&isset($_POST['MarqueOUTIL'])&& isset($_POST['NumeroOUTIL'])&& isset($_POST['DA'])&& isset($_POST['DC'])&& isset($_POST['DG']))
{

    $nomOUTIL = htmlspecialchars($_POST["NomOUTIL"]);
    $typeOUTIL = $_POST["TypeOUTIL"];
    $marqueOUTIL = $_POST["MarqueOUTIL"];
    $numOUTIL = $_POST["NumeroOUTIL"];
    $Dachat = $_POST["DA"];
    $Dcontrole = $_POST["DC"];
    $Dgarantie = $_POST["DG"];


    if (empty($nomOUTIL) or empty($typeOUTIL) or empty($marqueOUTIL) or empty($numOUTIL) or empty($Dachat)or empty($Dcontrole)or empty($Dgarantie))
    {

        echo "
       <div class = "."error".">
       Merci de remplir tous les champs
       </div>";

    }
    else
    {
        $query = $conn -> query("SELECT * FROM outils WHERE num_Serie = '".$numOUTIL."'");



        $result = $query -> fetch();
        $count = $result->rowcount();

        if ($count != 0)
        {

            echo "
            <div class = "."error".">
            Un outil possède déjà ce numéro de série, veuillez vérifier.
            </div>";

        }

        else
        {


            $conn -> exec("INSERT INTO outils (numSerie, type, marque, date_fin_grantie, date_control_regl, date_achat) Values ('".$numOUTIL."','".$typeOUTIL."','".$marqueOUTIL."', '".$Dgarantie."','".$Dcontrole."','".$Dachat."')");

            $query = $conn -> query("SELECT * FROM outils WHERE numSerie = '".$numOUTIL."' AND type = '".$typeOUTIL."' and marque = '".$marqueOUTIL."' AND date_fin_grantie = '".$Dgarantie."' AND date_control_regl = '".$Dcontrole."'AND date_achat = '".$Dachat."'" );
            $result = $query -> fetch();

            echo "
            <div class = "."error".">
            Votre compte à bien été créé.
            </div>";
            exit();

        }
    }

}
?>


