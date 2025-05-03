<?php
session_start();

// Redirect jika sudah login
function redirect_if_logged_in() {
    if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
        header('Location: dashboard.php');
        exit();
    }
}

// Redirect jika belum login
function redirect_if_not_logged_in() {
    if (!isset($_SESSION['user_logged_in'])) {
        header('Location: index.php');
        exit();
    }
}