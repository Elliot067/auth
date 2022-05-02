<?php

require 'lien_panier.php';

if(isset($_GET['id'])) {
    $produit = $DB->query('DELETE FROM article WHERE id=:id', array('id' => $_GET['id']));
    header("location:" . $_SERVER['HTTP_REFERER']);
//    $getid = $_GET['id'];
//    $produit = $db->prepare('SELECT * FROM article WHERE id = ?');
//    $produit->execute(array(
//            $_GET['id'])
//    );
//    if ($produit->rowcount() > 0) {
//        $supprimer_article = $db->prepare('DELETE FROM article WHERE "id" = ?');
//        $supprimer_article->execute(array(
//                $_GET['id'])
//        );
//        header("location:" . $_SERVER['HTTP_REFERER']);
//    } else {
//        echo "Aucun article trouvé";
//    }
}

//
//require 'lien_panier.php';
//
//if (isset($_GET['id'])) {
//    $produit = $DB->query('SELECT id FROM article WHERE id=:id', array('id' => $_GET['id']));
//    if (empty($produit)) {
//        echo "Ce produit n'existe pas";
//    } else {
//        $aproduit->ajouter($produit[0]->id);
//
//        header('Location: /public/produit?id=' . $_GET['id']);
//        exit();
//
//    }
//} else {
//    echo "Vous n'avez pas sélectionné de produit";
//}

