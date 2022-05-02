<?php
function connecte (): bool {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

function connexion_force (): void {
    if(!connecte()) {
        header('Location: ../public/login');
        exit();
    }
}

function admin (): bool {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['admin']);
}

function obligation_admin (): void {
    if(!admin()) {
        header('Location: ../public/login');
        exit();
    }
}