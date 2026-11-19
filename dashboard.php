<?php
$base = '';
$active = 'beranda';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dashboard DIGIFEST - pusat navigasi profil, acara, galeri, dan kontak.">
    <title>Dashboard - DIGIFEST</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body class="dashboard-body">
    <a href="#dashboard-content" class="skip-link">Lewati ke konten utama</a>

    <?php require __DIR__ . '/partials/navbar.php'; ?>

    <main id="dashboard-content" class="dashboard-main">
        <div class="dashboard-head">
            <h1>Dashboard</h1>
            <p>Selamat datang di DIGIFEST. Pilih menu pada navigasi untuk membuka tiap bagian.</p>
        </div>

        <section class="content-empty" aria-label="Area konten Beranda">
            <span class="content-empty-label">Beranda</span>
            <p>Konten beranda akan diisi oleh anggota tim.</p>
        </section>
    </main>

    <script src="js/main.js"></script>
</body>
</html>
