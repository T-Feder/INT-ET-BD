<!DOCTYPE html>
<html>
    <head>
        <title>QUESTION 1</title>
        <meta charset="utf-8" />
    </head>
    <body>
		<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM Vinyles');

while ($donnees = $reponse->fetch())
{
?>
    <p>
        <strong>id</strong> : <?php echo $donnees['id']; ?><br />
        <strong>titre :</strong> <?php echo $donnees['titre']; ?><br />
        <strong>artiste :</strong> <?php echo $donnees['artiste']; ?><br />
        <strong>annee_sortie :</strong> <?php echo $donnees['annee_sortie']; ?><br />
        <strong>annee_edition :</strong> <?php echo $donnees['annee_edition']; ?><br />
        <strong>nb_disques :</strong> <?php echo $donnees['nb_disques']; ?><br />
        <strong>commentaire :</strong> <?php echo $donnees['commentaire']; ?><br />
    </p>
<?php
}

$reponse->closeCursor();
?> 
    </body>
</html>
