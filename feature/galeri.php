<?php
$base = '../';
$active = 'galeri';

// Data galeri (bisa dipindah ke database nanti)
$galeri_items = [
    [
        'judul' => 'Opening Ceremony',
        'deskripsi' => 'Pembukaan acara DIGITECH FEST 2025 yang meriah',
        'kategori' => 'Acara',
        'gambar' => $base . 'assets/galeri/opening.jpg',
        'tanggal' => '9 Desember 2026'
    ],
    [
        'judul' => 'Workshop AI & Machine Learning',
        'deskripsi' => 'Sesi workshop bersama praktisi industri',
        'kategori' => 'Workshop',
        'gambar' => $base . 'assets/galeri/workshop-ai.jpg',
        'tanggal' => '9 Desember 2026'
    ],
    [
        'judul' => 'Kompetisi Hackathon',
        'deskripsi' => 'Peserta berkompetisi membuat solusi digital',
        'kategori' => 'Kompetisi',
        'gambar' => $base . 'assets/galeri/hackathon.jpg',
        'tanggal' => '9 Desember 2026'
    ],
    [
        'judul' => 'Seminar Teknologi',
        'deskripsi' => 'Seminar dengan pembicara ahli di bidang teknologi',
        'kategori' => 'Seminar',
        'gambar' => $base . 'assets/galeri/seminar.jpg',
        'tanggal' => '9 Desember 2026'
    ],
    [
        'judul' => 'Pameran Proyek Mahasiswa',
        'deskripsi' => 'Showcase hasil karya mahasiswa FAST',
        'kategori' => 'Pameran',
        'gambar' => $base . 'assets/galeri/pameran.jpg',
        'tanggal' => '9 Desember 2026'
    ],
    [
        'judul' => 'Closing & Awarding Night',
        'deskripsi' => 'Malam penutupan dan pemberian penghargaan',
        'kategori' => 'Acara',
        'gambar' => $base . 'assets/galeri/closing.jpg',
        'tanggal' => '9 Desember 2026'
    ],
];

// Ambil kategori unik untuk filter
$kategori_list = array_unique(array_column($galeri_items, 'kategori'));
sort($kategori_list);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - DIGIFEST</title>
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
            <h1>Galeri DIGITECH FEST</h1>
            <p>Dokumentasi momen seru dan berkesan dari rangkaian acara DIGITECH FEST.</p>
        </div>

        <!-- Filter Kategori -->
        <div class="galeri-filter" role="group" aria-label="Filter kategori galeri">
            <button class="galeri-filter-btn is-active" data-filter="all">Semua</button>
            <?php foreach ($kategori_list as $kategori): ?>
                <button class="galeri-filter-btn" data-filter="<?= htmlspecialchars($kategori) ?>">
                    <?= htmlspecialchars($kategori) ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Grid Galeri -->
        <section class="galeri-grid" aria-label="Grid galeri foto">
            <?php foreach ($galeri_items as $item): ?>
                <figure class="galeri-card" data-kategori="<?= htmlspecialchars($item['kategori']) ?>">
                    <div class="galeri-media">
                        <img 
                            src="<?= htmlspecialchars($item['gambar']) ?>" 
                            alt="<?= htmlspecialchars($item['judul']) ?>"
                            loading="lazy"
                            onerror="this.parentElement.classList.add('is-placeholder'); this.remove();"
                        >
                        <span class="galeri-placeholder-text"><?= htmlspecialchars($item['kategori']) ?></span>
                        <span class="galeri-badge"><?= htmlspecialchars($item['kategori']) ?></span>
                    </div>
                    <figcaption class="galeri-caption">
                        <h3><?= htmlspecialchars($item['judul']) ?></h3>
                        <p><?= htmlspecialchars($item['deskripsi']) ?></p>
                        <time datetime="<?= htmlspecialchars($item['tanggal']) ?>"><?= htmlspecialchars($item['tanggal']) ?></time>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        </section>

        <!-- Pesan kosong saat filter tidak ada hasil -->
        <p class="galeri-empty" hidden>Belum ada foto pada kategori ini.</p>
    </main>

    <script src="<?= $base ?>js/main.js"></script>
    <script>
    // Filter galeri sederhana
    (function () {
        const buttons = document.querySelectorAll('.galeri-filter-btn');
        const cards = document.querySelectorAll('.galeri-card');
        const emptyMsg = document.querySelector('.galeri-empty');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.dataset.filter;

                buttons.forEach(b => b.classList.remove('is-active'));
                btn.classList.add('is-active');

                let visible = 0;
                cards.forEach(card => {
                    const match = filter === 'all' || card.dataset.kategori === filter;
                    card.style.display = match ? '' : 'none';
                    if (match) visible++;
                });

                if (emptyMsg) emptyMsg.hidden = visible > 0;
            });
        });
    })();
    </script>
</body>
</html>