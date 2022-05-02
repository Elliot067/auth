<?php

require 'lien_panier.php';


unset($_SESSION['aproduit']);

?>


<!-- CAROUSEL -->
<main>
    <div class="brackground_linear_gradient">
        <div class="titre_carousel">Nos Vélos
        </div>

    </div>

    <div class="carousel_conteneur1"></div>


    <div class="carousel_conteneur2">

        <div class="carousel_conteneur_option">
            <button type="button" class="carousel_menu" id="slide1">TOUT</button>
            <button type="button" class="carousel_menu" id="slide3">ROUTE</button>
            <button type="button" class="carousel_menu" id="slide4">URBAIN</button>
            <button type="button" class="carousel_menu" id="slide2">VTT</button>
        </div>


        <!-- tout -->
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
                            <a href="/app/HTML/redirection_produit.php?id=<?= $product->id; ?>">
                                <span class="carousel_button">EN SAVOIR PLUS</span>
                            </a>
                        </div>
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
                            <a href="/app/HTML/redirection_produit.php?id=<?= $product->id; ?>">
                                <span class="carousel_button">EN SAVOIR PLUS</span>
                            </a>
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

                            <a href="/app/HTML/redirection_produit.php?id=<?= $product->id; ?>">
                                <span class="carousel_button">EN SAVOIR PLUS</span>
                            </a>
                        </div>
                    </li>
                <?php endforeach ?>
            </div>



        </ul>




    </div>
</main>

