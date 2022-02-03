
<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement de commentaires</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php
            $arrCom = filter_input(INPUT_POST,'saisie',FILTER_DEFAULT,FILTER_REQUIRE_ARRAY);
            // include les infos saisies a partir de la page commentaires
            $nom = $arrCom['nom'];
            $com = $arrCom['commentaire'];
            echo 'Nom : '.$nom.'<br>';
            echo 'Commentaire : ' .$com .'<br>';

            //connexion la BDD
            include('connexion.php');

            //On insere les données reçues
            $sth = $conn->prepare("
            INSERT INTO comment(pseudo, comment)
            VALUES(:pseudo, :comment)");
            $sth->bindParam(':pseudo',$nom);
            $sth->bindParam(':comment',$com);
            $sth->execute();
            //On renvoie l'utilisateur vers la page de remerciement
            header("Location:form-merci.php");
        ?>
    </body>
</html>