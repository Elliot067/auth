<?php
    session_start();
    unset($_SESSION['connecte']);
    unset($_SESSION['admin']);
    unset($_SESSION['idpanier']);
    header("location:".  '/public/login');
    die();