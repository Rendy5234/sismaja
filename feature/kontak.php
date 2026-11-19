<?php
$base = '../';
$active = 'kontak';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - DIGIFEST</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base ?>css/style.css">
    <link rel="stylesheet" href="<?= $base ?>css/dashboard.css">
</head>
<body class="dashboard-body">
    <a href="#dashboard-content" class="skip-link">Lewati ke konten utama</a>

    <?php require __DIR__ . '/../partials/navbar.php'; ?>

    <main id="dashboard-content" class="dashboard-main">
        <div class="dashboard-head">
            <h1>Kontak</h1>
            <p>Halaman ini disiapkan untuk konten kontak DIGIFEST.</p>
        </div>

        <section class="content-empty" aria-label="Area konten Kontak">
            <span class="content-empty-label">Kontak</span>
            <p>Konten kontak akan diisi oleh anggota tim.</p>
        </section>
    </main>

    <script src="<?= $base ?>js/main.js"></script>
</body>
</html>
