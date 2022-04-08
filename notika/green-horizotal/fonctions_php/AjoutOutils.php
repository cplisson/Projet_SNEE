<!--Page Ajout habilitation -->
<?php
echo 'termine';
session_start();
include('Connexion_BD.php');

echo 'etape 1';
if (isset($_POST['NomOUTIL'])&& isset($_POST['MarqueOUTIL'])&& isset($_POST['TypeOUTIL'])&& isset($_POST['NumeroOutil'])&& isset($_POST['DA'])&& isset($_POST['DC'])&& isset($_POST['DG']))
{

    $nomOUTIL = htmlspecialchars($_POST["NomOUTIL"]);
    $marqueOUTIL = htmlspecialchars($_POST["MarqueOUTIL"]);
    $typeOUTIL = htmlspecialchars($_POST["TypeOUTIL"]);
    $numOUTIL = htmlspecialchars($_POST["NumeroOutil"]);
    $Dachat = htmlspecialchars($_POST["DA"]);
    $Dcontrole = htmlspecialchars($_POST["DC"]);
    $Dgarantie = htmlspecialchars($_POST["DG"]);

    echo 'etape 2';
    if (empty($nomOUTIL) or empty($marqueOUTIL) or empty($typeOUTIL) or $typeOUTIL==0 or empty($numOUTIL) or empty($Dachat)or empty($Dcontrole)or empty($Dgarantie))
    {

        echo "
       <div class = "."error".">
       Merci de remplir tous les champs
       </div>";

    }
    else
    {
        $req = $conn -> prepare('SELECT * FROM outils WHERE num_Serie = ?');
        $req -> execute(array($numOUTIL));
        $result = $req -> fetch();

        
        $count = $req->rowcount();
        echo 'etape 3';
        if ($count != 0)
        {

            echo "
            <div class = "."error".">
            Un outil possède déjà ce numéro de série, veuillez vérifier.
            </div>";

        }

        else
        {


            $conn -> exec("INSERT INTO outils (num_Serie, type_O, marque, date_fin_garantie, date_control_regl, date_achat) Values ('".$numOUTIL."', '".$typeOUTIL."', '".$marqueOUTIL."', '".$Dgarantie."','".$Dcontrole."','".$Dachat."')");

            $query = $conn -> query("SELECT * FROM outils WHERE num_Serie = '".$numOUTIL."' and type_O = '".$typeOUTIL."' and marque = '".$marqueOUTIL."' AND date_fin_garantie = '".$Dgarantie."' AND date_control_regl = '".$Dcontrole."'AND date_achat = '".$Dachat."'" );
            $result = $query -> fetch();

            echo "
            <div class = "."error".">
            Votre compte à bien été créé.
            </div>";
            exit();

        }
    }

}
echo 'termine';
echo $_POST['NomOUTIL'];
echo $_POST['TypeOUTIL'];
?>


