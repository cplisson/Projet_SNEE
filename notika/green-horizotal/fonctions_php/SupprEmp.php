<?php
session_start();
include('Connexion_BD.php');


echo 'etape 1';
if (isset($_POST['NomEmp_Suppr'])&& isset($_POST['PrenomEmp_Suppr'])&& isset($_POST['MatEmp_Suppr']))
{

    $suppr_nom = htmlspecialchars($_POST["NomEmp_Suppr"]);
    $suppr_prenom = htmlspecialchars($_POST["PrenomEmp_Suppr"]);
    $suppr_mat = htmlspecialchars($_POST["MatEmp_Suppr"]);


    echo 'etape 2';
    if (empty($suppr_nom) or empty($suppr_prenom) or empty($suppr_mat))
    {

        echo "
       <div class = "."error".">
       Merci de remplir tous les champs
       </div>";

    }
    else
    {
        $req = $conn -> prepare('SELECT * FROM employe WHERE num_mat_employe = ?');
        $req -> execute(array($suppr_mat));
        $result = $req -> fetch();


        $count = $req->rowcount();
        echo 'etape 3';
        if ($count = 0)
        {

            echo "
            <div class = "."error".">
            L'employé n'existe pas, veuillez réessayer.
            </div>";

        }

        else
        {

            $query = $conn -> query ("UPDATE Employe SET nom_employe = null, prenom_employe = null, mdp_employe = null, is_admin = null, is_conduc = null, mail = null WHERE num_mat_employe = '$suppr_mat'");
            //$conn -> exec("DELETE FROM employe WHERE num_mat_employe = '$suppr_mat'");
            //$query = $conn -> query("SELECT * FROM employe WHERE num_Serie = '".$numOUTIL."' and type_O = '".$typeOUTIL."' and marque = '".$marqueOUTIL."' AND date_fin_garantie = '".$Dgarantie."' AND date_control_regl = '".$Dcontrole."'AND date_achat = '".$Dachat."'" );
            //$result = $query -> fetch();

            echo "
            <div class = "."error".">
            Votre compte à bien été supprimé.
            </div>";


        }
    }

}
echo 'termine';

?>
