<?php
require_once 'connected.php';
connexion_force();
obligation_admin();
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

<?php

if (!empty($_POST['prix']) && !empty($_POST['info']) && !empty($_POST['nom']) && !empty($_POST['image'] )) {
    $prix = htmlspecialchars($_POST['prix']);
    $info = htmlspecialchars($_POST['info']);
    $nom = htmlspecialchars($_POST['nom']);
    $categorie = htmlspecialchars($_POST['categorie']);
    $image = htmlspecialchars($_POST['image']);





    $insert = $DB->sql('INSERT INTO article(prix,info,nom, categorie, image) VALUES(:prix,:info,:nom, :categorie, :image)', array(
        'prix' => $prix,
        'info' => $info,
        'nom' => $nom,
        'categorie' => $categorie,
        'image' => $image,));

}

?>
<div class="Ajout_produit">
<form action="" method="POST" id="insertion">

    <h1>Insertion d'un article</h1>
        <div class="t"><label for="prix">PRIX</label>
            <input id="prix" type="text" value="" name="prix">
        </div>
        <div class="t"><label for="info">INFO</label>
            <input id="info" type="text" value="" name="info">
        </div>
        <div class="t"><label for="nom">NOM</label>
            <input id="nom" type="text" value="" name="nom">
        </div>
        <div class="t"><label for="categorie_id">Categorie_id</label>
            <br>
            <select name="categorie" id="categorie">
                <option value="VTT" >VTT</option>
                <option value="ROUTE">Route</option>
                <option value="VILLE">Ville</option>
            </select>
        </div>
        <div class="t"><label for="nom">image</label>
            <input id="image" type="text" value="" name="image">
        </div>
    <br>
        <input class="submit_insertion" type="submit" value="envoyer">



</form>
</div>





<div class="carousel_conteneur2">



    <ul class="carousel_conteneur3">


        <div id="route">

            <?php $products = $DB->query('SELECT a.* FROM article a  where  a.categorie = "ROUTE" '); ?>
            <?php foreach ($products as $product): ?>
                <li class="carousel_block">
                    <a href="">
                        <img class="carousel_image" src="/public/<?= $product->image; ?>"></a>
                    <h2 class="carousel_titre"><?= $product->nom; ?></h2>
                    <div class="carousel_categorie_velo"><?= $product->categorie; ?></div>
                    <div class="carousel_prix"><?= $product->prix; ?>€</div>
                    <div class="carousel_centre_bouton">
                    </div>
                    <br>
                    <a id="supprimer_article" href="/app/HTML/supprimer_article.php?id=<?= $product->id; ?>"><span>Supprimer</span></a>


                </li>
            <?php endforeach ?>
        </div>


        <div id="ville">

            <?php $products = $DB->query('SELECT a.* FROM article a  where  a.categorie = "VILLE" '); ?>

            <?php foreach ($products as $product): ?>
                <li class="carousel_block">
                    <a href="">
                        <img class="carousel_image" src="/public/<?= $product->image; ?>" alt="velo1"></a>
                    <h2 class="carousel_titre"><?= $product->nom; ?></h2>
                    <div class="carousel_categorie_velo"><?= $product->categorie; ?></div>
                    <div class="carousel_prix"><?= $product->prix; ?>€</div>
                    <div class="carousel_centre_bouton">
                        <a id="supprimer_article" href="/app/HTML/supprimer_article.php?id=<?= $product->id; ?>"><span>Supprimer</span></a>
                    </div>
                </li>
            <?php endforeach ?>
        </div>

        <div id="vtt">

            <?php $products = $DB->query('SELECT a.* FROM article a  where  a.categorie = "VTT" '); ?>
            <?php foreach ($products as $product): ?>

                <li class="carousel_block">
                    <a href="">
                        <img class="carousel_image" src="/public/<?= $product->image; ?>" alt="velo1"></a>
                    <h2 class="carousel_titre"><?= $product->nom; ?></h2>
                    <div class="carousel_categorie_velo"><?= $product->categorie; ?></div>
                    <div class="carousel_prix"><?= $product->prix; ?>€</div>
                    <div class="carousel_centre_bouton">
                        <a id="supprimer_article" href="/app/HTML/supprimer_article.php?id=<?= $product->id; ?>"><span>Supprimer</span></a>
                    </div>
                </li>
            <?php endforeach ?>
        </div>



    </ul>




</div>



</ul>
</body>

</html>