<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="reset.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.php'; ?>
 
    <h1 class="title-center">Contactez-nous</h1>
    <p class="title-center">Envoyez-nous vos coordonnées pour rentrer en contact avec nous</p>
    <div class="center">
        <form>
            <label>Entrez votre nom</label>
            <input type='text'name='nom'>
            <label>Entrez votre prénom</label>
            <input type='text' name='prenom'>
            <label>Entrez votre email</label>
            <input type='email' name='email'>
            <input type="submit" value="Envoyer">
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>