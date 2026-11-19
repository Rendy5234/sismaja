<?php
$base = '../';
$active = 'profil';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - DIGIFEST</title>
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
            <h1>Profil Program Studi</h1>
            <p>Pendidikan Teknologi Informasi (PTI) - IKIP PGRI Bojonegoro</p>
        </div>

        <!-- Deskripsi Umum -->
        <section class="content-section" aria-label="Deskripsi Program Studi">
            <h2>Tentang Program Studi</h2>
            <p>
                Program Studi Pendidikan Teknologi Informasi (PTI) mempelajari pemanfaatan teknologi dalam kehidupan sehari-hari, khususnya di bidang pendidikan. 
                Prodi ini memiliki prospek lulusan yang dapat mencakup kebutuhan industri dalam maupun luar negeri, seperti tenaga teknis di bidang informatika, peneliti, dan tenaga pendidik [citation:1].
            </p>
        </section>

        <!-- Data Ringkas -->
        <section class="content-section" aria-label="Data Ringkas Program Studi">
            <h2>Data Ringkas</h2>
            <div class="profile-grid">
                <div class="profile-item"><strong>Status Prodi:</strong> Aktif</div>
                <div class="profile-item"><strong>Perguruan Tinggi:</strong> IKIP PGRI Bojonegoro</div>
                <div class="profile-item"><strong>Kode Program Studi:</strong> 27020</div>
                <div class="profile-item"><strong>Jenjang:</strong> S1</div>
                <div class="profile-item"><strong>Tanggal Berdiri:</strong> 15 Desember 2021</div>
                <div class="profile-item"><strong>SK Penyelenggaraan:</strong> 551/E/O/2021</div>
                <div class="profile-item"><strong>Akreditasi:</strong> Baik</div>
            </div>
        </section>

        <!-- Keunggulan -->
        <section class="content-section" aria-label="Keunggulan Program Studi">
            <h2>Mengapa Memilih PTI IKIP PGRI Bojonegoro?</h2>
            <ul>
                <li>Pembelajaran dengan tenaga pendidik yang berkompeten di bidangnya.</li>
                <li>Didukung sarana dan prasarana memadai: Lab Komputer, Lab Microteaching, Lab Multimedia, dan layanan internet cepat.</li>
                <li>Lingkungan belajar yang asri dan aman.</li>
                <li>Administrasi terkontrol untuk kebutuhan data, program, beasiswa, magang, dan tracer study.</li>
                <li>Mengimplementasikan Kurikulum Merdeka dalam setiap rangkaian program internal maupun eksternal kampus.</li>
                <li>Layanan mahasiswa yang ramah dan responsif terhadap permasalahan mahasiswa [citation:2][citation:8].</li>
            </ul>
        </section>
    </main>

    <script src="<?= $base ?>js/main.js"></script>
</body>
</html>