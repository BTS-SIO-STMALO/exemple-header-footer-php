<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="reset.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.php'; ?>
<?php 

if (!empty($_GET)){
    echo "Salut ". $_GET['prenom'] ."<br/>";
    echo "Ton nom est ".$_GET['nom'] ."<br/>";
    echo "Ton mail enregistré est". $_GET['email'];
} else {
    echo "Vous n'avez pas transmis de données";
    // var_dump($_GET);
}
?>
 
    <h1 class="title-center">Contactez-nous</h1>
    <p class="title-center">Envoyez-nous vos coordonnées pour rentrer en contact avec nous</p>
    <div class="center">
        <form action="" method="get">
            <label>Entrez votre nom</label>
            <input type='text'name='nom'>
            <label>Entrez votre prénom</label>
            <input type='text' name='prenom' minlength="2" maxlength="12">
            <label>Entrez votre email</label>
            <input type='email' name='email'>
            
            <!--
            <div class="center">
                <label for="femme">Femme</label>
                <input type="checkbox" name="femme" checked>
                <label for="homme">Homme</label>
                <input type="checkbox" name="homme">
            </div>
             Plein de input différents existent pour mes formulaires, découvrez les ici : https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input
            On peut rajouter des attributs à ces différents inputs exemple type, exemple minlenght, maxlenght.
            Il faut les tester pour les découvrir
            
            Dans le cas de l'input type="radio" le fonctionnement est similaire à celui de type="checkbox", la différence majeure est que dans un type="radio" le choix est exclusive -->
            <!--
            <div class="center">
                <label for="choiceUn">Je suis client</label>
                <input type="radio" name="choiceUn">
                <label for="choiceDeux">Je ne suis pas client</label>
                <input type="radio" name="choiceDeux">
                <label for="choiceTrois">Je ne suis pas client</label>
                <input type="radio" name="choiceTrois">
            </div>
            -->
            <input type="submit" value="Envoyer">
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>

