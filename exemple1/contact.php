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

        <!-- Pour envoyer son formulaire 2 attributs sont nécessaires :
        * action contient l'adresse de la page où les informations du formulaire seront envoyées. Si vide c'est la page courante
        * method défini la méthode utilisée pour envoyer ces données, c'est soit en "get", soit en "post"
        -->
        
        <form action="" method="get">
            <label>Entrez votre nom</label>
            <!-- les champs souhaitants être utilisés pour transmettre des informations doivent posséder l'attribut name qui associe un nom à la future valeur. Concrètement ce nom sera la clé dans le array de la super global $_GET (methode en "get) ou bien $_POST (methode en "post").
            En savoir plus les super globales php : https://www.php.net/manual/fr/language.variables.superglobals
             -->
             <!-- l'attribut placeholder permet d'afficher à l'intérieur du champ vide, une information à l'utilisateur sur la valeur attendue -->
            <input type='text'name='nom' placeholder="entrez votre nom svp">
            <label>Entrez votre prénom</label>
            <input type='text' name='prenom' minlength="2" maxlength="12">
            <label>Entrez votre email</label>
            <input type='email' name='email' placeholder="on veut votre email ici">
            
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
            
            Dans le cas de l'input type="radio" le fonctionnement est similaire à celui de type="checkbox", la différence majeure est que dans un type="radio" le choix est exclusive 
            Dans le cas d'input de type="checkbox" et "radio", l'attribut checked permet de sélectionner par défaut une option -->
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
            <!-- ou bien :
            <button>Envoyer</button>
             -->
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>

