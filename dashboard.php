<?php
$base = '';
$active = 'beranda';

$agenda = [
    ['day' => '12', 'month' => 'Feb', 'title' => 'Opening Ceremony DIGIFEST 2026', 'time' => '09:00 - 11:00', 'place' => 'Main Hall', 'tag' => 'Utama', 'tone' => 'utama'],
    ['day' => '12', 'month' => 'Feb', 'title' => 'Workshop UI/UX Design Sprint', 'time' => '13:00 - 16:00', 'place' => 'Studio A', 'tag' => 'Workshop', 'tone' => 'workshop'],
    ['day' => '13', 'month' => 'Feb', 'title' => 'Seminar AI & Masa Depan Kerja', 'time' => '10:00 - 12:00', 'place' => 'Auditorium', 'tag' => 'Seminar', 'tone' => 'seminar'],
    ['day' => '13', 'month' => 'Feb', 'title' => 'Kompetisi Hackathon 24 Jam', 'time' => '20:00 - 20:00', 'place' => 'Lab Digital', 'tag' => 'Kompetisi', 'tone' => 'kompetisi'],
    ['day' => '14', 'month' => 'Feb', 'title' => 'Panel Diskusi Kreator Digital', 'time' => '15:00 - 17:00', 'place' => 'Main Hall', 'tag' => 'Diskusi', 'tone' => 'diskusi'],
];

$announcements = [
    ['text' => 'Registrasi peserta DIGIFEST 2026 resmi dibuka.', 'time' => '2 jam lalu'],
    ['text' => 'Pendaftaran volunteer ditutup pada 5 Februari 2026.', 'time' => 'Kemarin'],
    ['text' => 'Jadwal lengkap rangkaian acara sudah dapat diunduh.', 'time' => '3 hari lalu'],
];

$categories = [
    ['name' => 'Seminar', 'count' => 8, 'percent' => 33],
    ['name' => 'Workshop', 'count' => 6, 'percent' => 25],
    ['name' => 'Kompetisi', 'count' => 4, 'percent' => 17],
    ['name' => 'Pameran', 'count' => 6, 'percent' => 25],
];
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
    <link rel="stylesheet" href="css/beranda.css">
</head>
<body class="dashboard-body">
    <a href="#dashboard-content" class="skip-link">Lewati ke konten utama</a>

    <?php require __DIR__ . '/partials/navbar.php'; ?>

    <main id="dashboard-content" class="dashboard-main">
        <div class="dashboard-head">
            <h1>Beranda</h1>
            <p>Ringkasan rangkaian acara, agenda, dan pengumuman DIGIFEST 2026.</p>
        </div>

        <section class="dashboard-banner" aria-labelledby="banner-title">
            <div class="banner-copy">
                <span class="banner-badge">Festival Digital 2026</span>
                <h2 id="banner-title">DIGIFEST segera dimulai</h2>
                <p>12-14 Februari 2026 &middot; 24 acara &middot; 36 pembicara dari berbagai bidang digital.</p>
            </div>
            <div class="banner-countdown" data-countdown="2026-02-12T09:00:00" aria-label="Hitung mundur menuju DIGIFEST">
                <div class="countdown-unit">
                    <span class="countdown-value" data-unit="hari">00</span>
                    <span class="countdown-label">Hari</span>
                </div>
                <div class="countdown-unit">
                    <span class="countdown-value" data-unit="jam">00</span>
                    <span class="countdown-label">Jam</span>
                </div>
                <div class="countdown-unit">
                    <span class="countdown-value" data-unit="menit">00</span>
                    <span class="countdown-label">Menit</span>
                </div>
                <div class="countdown-unit">
                    <span class="countdown-value" data-unit="detik">00</span>
                    <span class="countdown-label">Detik</span>
                </div>
            </div>
        </section>

        <section class="stat-grid" aria-label="Statistik DIGIFEST">
            <article class="stat-card">
                <div class="stat-card-top">
                    <span class="stat-icon blue" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    </span>
                </div>
                <div class="stat-value" data-count="24">0</div>
                <div class="stat-label">Total Acara</div>
            </article>
            <article class="stat-card">
                <div class="stat-card-top">
                    <span class="stat-icon green" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </span>
                </div>
                <div class="stat-value" data-count="1280">0</div>
                <div class="stat-label">Peserta Terdaftar</div>
            </article>
            <article class="stat-card">
                <div class="stat-card-top">
                    <span class="stat-icon orange" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/></svg>
                    </span>
                </div>
                <div class="stat-value" data-count="36">0</div>
                <div class="stat-label">Pembicara</div>
            </article>
            <article class="stat-card">
                <div class="stat-card-top">
                    <span class="stat-icon purple" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </span>
                </div>
                <div class="stat-value" data-count="52">0</div>
                <div class="stat-label">Sesi Kegiatan</div>
            </article>
        </section>

        <div class="dashboard-split">
            <section class="panel" aria-labelledby="agenda-title">
                <div class="panel-head">
                    <h2 id="agenda-title" class="panel-title">Agenda Mendatang</h2>
                    <a href="feature/acara.php" class="panel-link">Lihat semua</a>
                </div>
                <ul class="agenda-list">
                    <?php foreach ($agenda as $item): ?>
                        <li class="agenda-item">
                            <div class="agenda-date">
                                <span class="agenda-day"><?= $item['day'] ?></span>
                                <span class="agenda-month"><?= $item['month'] ?></span>
                            </div>
                            <div class="agenda-info">
                                <h3><?= $item['title'] ?></h3>
                                <div class="agenda-meta">
                                    <span><?= $item['time'] ?></span>
                                    <span><?= $item['place'] ?></span>
                                </div>
                            </div>
                            <span class="agenda-tag <?= $item['tone'] ?>"><?= $item['tag'] ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section class="panel" aria-labelledby="announce-title">
                <div class="panel-head">
                    <h2 id="announce-title" class="panel-title">Pengumuman</h2>
                </div>
                <ul class="announce-list">
                    <?php foreach ($announcements as $note): ?>
                        <li class="announce-item">
                            <span class="announce-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                            </span>
                            <div>
                                <p><?= $note['text'] ?></p>
                                <time><?= $note['time'] ?></time>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>

        <section class="panel" aria-labelledby="category-title">
            <div class="panel-head">
                <h2 id="category-title" class="panel-title">Jenis Kegiatan</h2>
                <span class="panel-hint">24 acara terjadwal</span>
            </div>
            <div class="category-grid">
                <?php foreach ($categories as $category): ?>
                    <article class="category-card">
                        <div class="category-count"><?= $category['count'] ?> <span>acara</span></div>
                        <div class="category-name"><?= $category['name'] ?></div>
                        <div class="progress" role="img" aria-label="<?= $category['name'] ?> <?= $category['count'] ?> acara (<?= $category['percent'] ?> persen)">
                            <div class="progress-bar" style="width: <?= $category['percent'] ?>%"></div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <script src="js/main.js"></script>
    <script src="js/beranda.js"></script>
</body>
</html>