<?php
require 'lien_panier.php';

try {
    $db= new PDO('mysql:host=localhost;dbname=auth;', 'root', '');
} catch (Exception $e) {
    die("Erreur :" . $e->getMessage());
}
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $admins = $DB->query_co('SELECT admin FROM utilisateur where email = ? ', array($email));

    $verifuser = $db->prepare('SELECT email,password FROM utilisateur WHERE email = ?');
    $verifuser->execute(array($email));
    $data = $verifuser->fetch();
    $row = $verifuser->rowCount();

    if ($row == 1) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {



            if (password_verify($password, $data['password'])) {
                $id_panier = $DB->query('SELECT id FROM utilisateur WHERE email = ?', array($email));
                $idclient->ajouter($id_client[0]->id);
                if ($admin == 1){
                    $_SESSION['admin'] =1;
                    $_SESSION['connecte'] =1;
                    header('Location: /public/');
                }
                else{
                $_SESSION['connecte'] =1;
                header('Location: /public');
                }
                exit();

            } else header('Location: ../../public/login?login_err=password');
        } else header('Location: ../../public/login?login_err=email');
    } else header('Location: ../../public/login?login_err=already');


}
