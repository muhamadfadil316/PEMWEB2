<?php
session_start();
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/auth.php';

// Debugging - bisa dihapus setelah fix
error_log("Login script accessed");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    // Contoh validasi sederhana - ganti dengan validasi database di production
    $valid_username = 'admin';
    $valid_password = 'puskesmas123';
    
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['user_logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: ../dashboard.php');
        exit();
    } else {
        $_SESSION['error'] = 'Username atau password salah';
        header('Location: ../index.php');
        exit();
    }
} else {
    // Jika diakses bukan via POST, redirect ke index
    header('Location: ../index.php');
    exit();
}