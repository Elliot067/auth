<?php

require 'connected.php';
if (connecte()) {
    header('Location: /public');
    exit();
}

require 'lien_panier.php';

try {
    $db = new PDO("mysql:host=localhost;dbname=auth", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Erreur de la connexion : " . $e->getMessage();
    die();
}

function verifMotDePasse(string $mdp)
{
    if (strlen($mdp) >= 8) {
        $minCarac = false;
        $majCarac = false;
        $specialCarac = false;
        $special = ["!", "*", "#", "$", "&"];

        for ($i = 0; $i < strlen($mdp); $i++) {
            if (ctype_lower($mdp[$i])) {
                $minCarac = true;
            }
            if (ctype_upper($mdp[$i])) {
                $majCarac = true;
            }
            foreach ($special as $caractere) {
                if ($mdp[$i] == $caractere) {
                    $specialCarac = true;
                }
            }
        }
    }
    return $minCarac && $majCarac && $specialCarac;
}
if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['password']) && !empty($_POST['password_retype'])) {

    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);


    $verifuser = $db->prepare('SELECT prenom, nom,  email, tel, password FROM utilisateur WHERE email = ?');
    $verifuser->execute(array($email));
    $data = $verifuser->fetch();
    $row = $verifuser->rowCount();

    $email = strtolower($email);
    if ($row == 0) {
        if (strlen($prenom) <= 40) {
            if (strlen($nom) <= 40) {
                    if (strlen($email) <= 75) {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            if ( is_numeric($tel)) {
                                if ($password === $password_retype) {
                                    if (verifMotDePasse($password)){

                                    $cost = ['cost' => 12];
                                    $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                                    $insertion = $DB->sql('INSERT INTO utilisateur(prenom, nom,  email, tel, password) VALUES(:prenom, :nom,  :email, :tel, :password)', array(
                                        'prenom' => $prenom,
                                        'nom' => $nom,
                                        'email' => $email,
                                        'tel' => $tel,));

                                    header('Location: ../../public/register?reg_err=success');
                                    die();
                                    }else {
                                        header('Location: ../../public/register?reg_err=password_condition');
                                        die();
                                    }
                                } else {
                                    header('Location: ../../public/register?reg_err=password');
                                    die();
                                }
                            } else {
                                header('Location: ../../public/register?reg_err=tel_is_int');
                                die();

                            }
                        }else {
                            header('Location: ../../public/register?reg_err=email');
                            die();
                        }
                    } else {
                        header('Location: ../../public/register?reg_err=email_length');
                        die();

                    }
        }else {
            header('Location: ../../public/register?reg_err=nom_length');
            die();

        }
    } else {
        header('Location: ../../public/register?reg_err=prenom_length');
        die();

    }
} else {
    header('Location: ../../public/register?reg_err=already');
    die();
}}