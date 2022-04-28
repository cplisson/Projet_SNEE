<?php
session_start();
include('Connexion_BD.php');


echo 'etape 1';
if (isset($_POST['NomEmp'])&& isset($_POST['PrenomEmp'])&& isset($_POST['MatEmp']))
{

    $ajout_nom = htmlspecialchars($_POST["NomEmp"]);
    $ajout_prenom = htmlspecialchars($_POST["PrenomEmp"]);
    $ajout_mat = htmlspecialchars($_POST["MatEmp"]);


    echo 'etape 2';
    if (empty($ajout_nom) or empty($ajout_prenom) or empty($ajout_mat))
    {

        echo "
       <div class = "."error".">
       Merci de remplir tous les champs
       </div>";

    }
    else
    {
        $req = $conn -> prepare('SELECT * FROM employe WHERE num_mat_employe = ?');
        $req -> execute(array($ajout_mat));
        $result = $req -> fetch();


        $count = $req->rowcount();
        echo 'etape 3';
        if ($count != 0)
        {

            echo "
            <div class = "."error".">
            Le matricule de l'employé est déjà utilisé, veuillez vérifier.
            </div>";

        }

        else
        {


            $conn -> exec("INSERT INTO employe (num_mat_employe, nom_employe, prenom_employe) Values ('".$ajout_mat."', '".$ajout_nom."', '".$ajout_prenom."')");

            //$query = $conn -> query("SELECT * FROM employe WHERE num_Serie = '".$numOUTIL."' and type_O = '".$typeOUTIL."' and marque = '".$marqueOUTIL."' AND date_fin_garantie = '".$Dgarantie."' AND date_control_regl = '".$Dcontrole."'AND date_achat = '".$Dachat."'" );
            //$result = $query -> fetch();

            echo "
            <div class = "."error".">
            Votre compte à bien été créé.
            </div>";


        }
    }

}
echo 'termine';

?>
