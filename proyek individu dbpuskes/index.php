<?php
session_start();
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskesmas Fadil Orsy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="gradient-header">
        <div class="container text-center py-5">
            <img src="assets/images/FO.jpg" alt="Logo Puskesmas" class="logo mb-3">
            <h1 class="display-4 fw-bold">Puskesmas Fadil Orsy</h1>
            <p class="lead">Melayani dengan hati untuk kesehatan masyarakat</p>
        </div>
    </header>

    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="glass-card p-4 p-md-5">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="pe-md-4">
                                <h2 class="fw-bold mb-4">Tentang Kami</h2>
                                <p class="mb-4">Puskesmas Fadil Orsy adalah fasilitas kesehatan pertama yang melayani masyarakat dengan berbagai layanan kesehatan dasar dan rujukan.</p>
                                
                                <div class="features">
                                    <div class="feature-item mb-3">
                                        <i class="fas fa-user-md me-2"></i>
                                        <span>Tim medis profesional</span>
                                    </div>
                                    <div class="feature-item mb-3">
                                        <i class="fas fa-clock me-2"></i>
                                        <span>Layanan 24 jam</span>
                                    </div>
                                    <div class="feature-item mb-3">
                                        <i class="fas fa-heart me-2"></i>
                                        <span>Pelayanan ramah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="auth-form">
                                <div class="text-center mb-4">
                                    <h3 class="fw-bold">Admin Login</h3>
                                    <p class="text-muted">Masukkan kredensial Anda untuk mengakses dashboard</p>
                                </div>
                                
                                <?php if (isset($_SESSION['error'])): ?>
                                    <div class="alert alert-danger alert-elegant"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
                                <?php endif; ?>
                                
                                <form action="auth/login.php" method="POST">
                                    <div class="form-group mb-4">
                                        <label for="username" class="form-label">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Masukkan username" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Masukkan password" required>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember">
                                            <label class="form-check-label" for="remember">Ingat saya</label>
                                        </div>
                                        <a href="#forgot-password" class="text-decoration-none">Lupa password?</a>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                                        <i class="fas fa-sign-in-alt me-2"></i> Login
                                    </button>
                                    
                                    <div class="text-center mt-3">
                                        <p class="text-muted">Butuh bantuan? <a href="#contact" class="text-decoration-none">Hubungi admin</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-elegant py-4">
        <div class="container text-center">
            <div class="social-icons mb-3">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
            </div>
            <p>&copy; <?= date('Y'); ?> Puskesmas Fadil Orsy. All rights reserved.</p>
            <p>Jl. Kesehatan No. 123, Kelurahan Sehat, Kecamatan Bahagia | Telp: (021) 1234567</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>