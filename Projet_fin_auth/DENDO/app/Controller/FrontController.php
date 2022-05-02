<?php

namespace App\Controller;


class FrontController
{


    public function home(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Accueil";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/home.php';
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $style_header = ROOT_URL . "/CSS/style_header_index.css";
        $logo = ROOT_URL . "/assets/image/Main.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function register()
    {

        ob_start();

        $mainTemplate = ROOT_PROJECT . '/app/HTML/register.php';
        $title = "Dendo Jitesha : Inscription";
        $style_header = ROOT_URL . "/CSS/style_header_white.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';

        return ob_get_clean();

    }



    public function login(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Login";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/login.php';
        $style_header = ROOT_URL . "/CSS/style_header_white.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }



    public function insertion(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Insertion bdd";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/Insertion.php';
        $style_header = ROOT_URL . "/CSS/style_header.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }
    public function gestion_membre(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Gestion des membres";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/Gestion_membre.php';
        $style_header = ROOT_URL . "/CSS/style_header.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }


}