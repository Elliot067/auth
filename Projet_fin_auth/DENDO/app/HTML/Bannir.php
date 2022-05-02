<?php

require 'lien_panier.php';

if(isset($_GET['id'])) {
    $membre = $DB->query('DELETE FROM utilisateur WHERE id=:id', array('id' => $_GET['id']));
    header("location:" . $_SERVER['HTTP_REFERER']);
}