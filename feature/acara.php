<?php
$base = '../';
$active = 'acara';

$days = [
    [
        'label' => 'Hari 1',
        'date' => 'Rabu, 12 Februari 2026',
        'events' => [
            ['time' => '09:00 - 11:00', 'title' => 'Opening Ceremony DIGIFEST 2026', 'speaker' => 'Panitia & Rektor', 'place' => 'Main Hall', 'tag' => 'Utama', 'tone' => 'utama'],
            ['time' => '11:00 - 12:00', 'title' => 'Talkshow Masa Depan Talenta Digital', 'speaker' => 'Prof. Amelia Putri', 'place' => 'Auditorium', 'tag' => 'Seminar', 'tone' => 'seminar'],
            ['time' => '13:00 - 16:00', 'title' => 'Workshop UI/UX Design Sprint', 'speaker' => 'Bagas Prasetyo, M.Kom', 'place' => 'Studio A', 'tag' => 'Workshop', 'tone' => 'workshop'],
            ['time' => '16:00 - 20:00', 'title' => 'Pameran Karya Digital', 'speaker' => 'Kurator DIGIFEST', 'place' => 'Galeri Utama', 'tag' => 'Pameran', 'tone' => 'pameran'],
        ],
    ],
    [
        'label' => 'Hari 2',
        'date' => 'Kamis, 13 Februari 2026',
        'events' => [
            ['time' => '10:00 - 12:00', 'title' => 'Seminar AI & Masa Depan Kerja', 'speaker' => 'Dr. Rizky Maulana', 'place' => 'Auditorium', 'tag' => 'Seminar', 'tone' => 'seminar'],
            ['time' => '13:00 - 15:00', 'title' => 'Workshop Visualisasi Data', 'speaker' => 'Nadia Kusuma, M.Sc', 'place' => 'Lab Analitik', 'tag' => 'Workshop', 'tone' => 'workshop'],
            ['time' => '15:00 - 17:00', 'title' => 'Kompetisi Ide Bisnis Digital', 'speaker' => 'Dewan Juri DIGIFEST', 'place' => 'Ruang 201', 'tag' => 'Kompetisi', 'tone' => 'kompetisi'],
            ['time' => '20:00 - 20:00', 'title' => 'Hackathon 24 Jam (Mulai)', 'speaker' => 'Mentor Teknis', 'place' => 'Lab Digital', 'tag' => 'Kompetisi', 'tone' => 'kompetisi'],
            ['time' => '09:00 - 21:00', 'title' => 'Pameran Karya Digital', 'speaker' => 'Kurator DIGIFEST', 'place' => 'Galeri Utama', 'tag' => 'Pameran', 'tone' => 'pameran'],
        ],
    ],
    [
        'label' => 'Hari 3',
        'date' => 'Jumat, 14 Februari 2026',
        'events' => [
            ['time' => '08:00 - 12:00', 'title' => 'Demo Day & Penjurian Hackathon', 'speaker' => 'Dewan Juri DIGIFEST', 'place' => 'Main Hall', 'tag' => 'Kompetisi', 'tone' => 'kompetisi'],
            ['time' => '13:00 - 15:00', 'title' => 'Panel Diskusi Kreator Digital', 'speaker' => 'Prof. Amelia Putri', 'place' => 'Auditorium', 'tag' => 'Seminar', 'tone' => 'seminar'],
            ['time' => '15:00 - 17:00', 'title' => 'Workshop Personal Branding', 'speaker' => 'Nadia Kusuma, M.Sc', 'place' => 'Studio A', 'tag' => 'Workshop', 'tone' => 'workshop'],
            ['time' => '19:00 - 21:00', 'title' => 'Closing Ceremony & Awarding', 'speaker' => 'Panitia DIGIFEST', 'place' => 'Main Hall', 'tag' => 'Utama', 'tone' => 'utama'],
            ['time' => '09:00 - 19:00', 'title' => 'Pameran Karya Digital', 'speaker' => 'Kurator DIGIFEST', 'place' => 'Galeri Utama', 'tag' => 'Pameran', 'tone' => 'pameran'],
        ],
    ],
];

$filters = [
    'semua' => 'Semua',
    'utama' => 'Utama',
    'seminar' => 'Seminar',
    'workshop' => 'Workshop',
    'kompetisi' => 'Kompetisi',
    'pameran' => 'Pameran',
];

$totalEvents = 0;
foreach ($days as $day) {
    $totalEvents += count($day['events']);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rangkaian acara DIGIFEST 2026 - seminar, workshop, kompetisi, dan pameran digital.">
    <title>Acara - DIGIFEST</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base ?>css/style.css">
    <link rel="stylesheet" href="<?= $base ?>css/dashboard.css">
    <link rel="stylesheet" href="<?= $base ?>css/acara.css">
</head>
<body class="dashboard-body">
    <a href="#dashboard-content" class="skip-link">Lewati ke konten utama</a>

    <?php require __DIR__ . '/../partials/navbar.php'; ?>

    <main id="dashboard-content" class="dashboard-main">
        <div class="dashboard-head">
            <h1>Acara</h1>
            <p>Rangkaian acara DIGIFEST 2026 &middot; <?= $totalEvents ?> kegiatan selama 3 hari.</p>
        </div>

        <div class="filter-bar" role="group" aria-label="Filter kategori acara">
            <?php foreach ($filters as $key => $label): ?>
                <button type="button" class="filter-btn<?= $key === 'semua' ? ' is-active' : '' ?>" data-filter="<?= $key ?>" aria-pressed="<?= $key === 'semua' ? 'true' : 'false' ?>">
                    <?= $label ?>
                </button>
            <?php endforeach; ?>
        </div>

        <div class="event-days" id="event-days">
            <?php foreach ($days as $day): ?>
                <section class="event-day" aria-labelledby="day-<?= strtolower(str_replace(' ', '-', $day['label'])) ?>">
                    <div class="day-head">
                        <span class="day-label"><?= $day['label'] ?></span>
                        <span class="day-date"><?= $day['date'] ?></span>
                    </div>
                    <div class="event-grid">
                        <?php foreach ($day['events'] as $event): ?>
                            <article class="event-card" data-category="<?= $event['tone'] ?>">
                                <div class="event-top">
                                    <span class="event-time">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                        <?= $event['time'] ?>
                                    </span>
                                    <span class="event-tag <?= $event['tone'] ?>"><?= $event['tag'] ?></span>
                                </div>
                                <h3 class="event-title"><?= $event['title'] ?></h3>
                                <ul class="event-meta">
                                    <li>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                        <?= $event['speaker'] ?>
                                    </li>
                                    <li>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                        <?= $event['place'] ?>
                                    </li>
                                </ul>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>

        <p class="filter-empty" id="filter-empty" hidden>Tidak ada acara pada kategori ini.</p>
    </main>

    <script src="<?= $base ?>js/main.js"></script>
    <script src="<?= $base ?>js/acara.js"></script>
</body>
</html>