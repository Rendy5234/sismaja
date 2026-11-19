<?php
$base = $base ?? '';
$active = $active ?? 'beranda';
$navItems = [
    'beranda' => ['label' => 'Beranda', 'href' => $base . 'dashboard.php'],
    'profil'  => ['label' => 'Profil',  'href' => $base . 'feature/profil.php'],
    'acara'   => ['label' => 'Acara',   'href' => $base . 'feature/acara.php'],
    'galeri'  => ['label' => 'Galeri',  'href' => $base . 'feature/galeri.php'],
    'kontak'  => ['label' => 'Kontak',  'href' => $base . 'feature/kontak.php'],
];
?>
<header class="navbar">
    <div class="navbar-inner">
        <a href="<?= $base ?>dashboard.php" class="navbar-brand">
            <span class="navbar-logo">D</span>
            <span>DIGIFEST</span>
        </a>

        <button class="navbar-toggle" type="button" aria-label="Buka menu" aria-expanded="false" aria-controls="navbar-menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="navbar-menu" id="navbar-menu" aria-label="Navigasi dashboard">
            <ul class="navbar-links">
                <?php foreach ($navItems as $key => $item): ?>
                    <li>
                        <a href="<?= $item['href'] ?>" class="navbar-link<?= $active === $key ? ' is-active' : '' ?>"<?= $active === $key ? ' aria-current="page"' : '' ?>>
                            <?= $item['label'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a href="<?= $base ?>index.php" class="navbar-exit">Keluar</a>
        </nav>
    </div>
</header>
