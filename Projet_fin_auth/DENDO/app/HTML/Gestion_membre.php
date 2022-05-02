<?php

require 'lien_panier.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<div class="gestion_membres">
    <H1>Gestion des utilisateurs :  </H1>
</body>

<?php $membres = $DB->query('SELECT u.* FROM utilisateur u ');



if(isset($_GET['id'])){

    $changement = $DB->sql('UPDATE utilisateur SET admin = :role WHERE id= :id', array(
            'id' => $_GET['id'],
        'role' => $_POST['role'],
    ));
}

?>

<?php foreach ($membres as $membre): ?>
    <form action="/public/Gestion_membre?id=<?= $membre->id; ?>" method="post" id="insertion_membre">
        <div class="username user_pass">
            <div class="Gestion_membre">Prénom : <?= $membre->prenom; ?></div>
            <div class="Gestion_membre">Nom : <?= $membre->nom; ?></div>
            <div class="Gestion_membre">Email : <?= $membre->email; ?></div>
            <div class="Gestion_membre">Tel : <?= $membre->tel; ?></div>
            <div class="Gestion_membre"><label for="categorie_id">Role actuel :   <?php if($membre->admin == 1): ?>
                    admin
                    <?php endif ?> <?php if($membre->admin == 0): ?>
                        membre
                    <?php endif ?> </label>
            </div>

            <div class="Gestion_membre"><label for="categorie_id">Changer de role :</label>
            <select name="role" id="role">
                <option value="">Choisissez un role </option>
                <option value="0">membre</option>
                <option value="1">admin</option>
            </select>
            </div>
            <a class="carousel_categorie_velo" href="/app/HTML/Bannir.php?id=<?= $membre->id; ?>"><span>Bannir</span></a>
        </div>
<div id="Actualiser">
        <input class="submit_insertion" type="submit" value="Actualiser">
</div>
    </form>
<?php endforeach ?>

</div>
</html>