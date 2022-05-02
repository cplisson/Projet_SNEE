<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
session_start();
require('config.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
    // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    $username = stripslashes($_REQUEST['username']);
    //$username = mysqli_real_escape_string($username);
    // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
    $email = stripslashes($_REQUEST['email']);
    //$email = mysqli_real_escape_string($email);
    // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
    $password = stripslashes($_REQUEST['password']);
    //$password = mysqli_real_escape_string($password);
    //requéte SQL + mot de passe crypté
    $query = "INSERT into `employe` (num_mat_employe, mdp_employe, mail)
              VALUES ('$username', '".hash('sha256', $password)."', '$email')";
    // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
        echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login_test.php'>connecter</a></p>
       </div>";
    }
}else{
    ?>
    <form class="box" action="" method="post">
        <h1 class="box-logo box-title"><a href="https://waytolearnx.com/">SNEE</a></h1>
        <h1 class="box-title">S'inscrire</h1>
        <input type="text" class="box-input" name="username" placeholder="Matricule" required />
        <input type="text" class="box-input" name="email" placeholder="Email" required />
        <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
        <input type="submit" name="submit" value="S'inscrire" class="box-button" />
        <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
    </form>
<?php } ?>
</body>
</html>
