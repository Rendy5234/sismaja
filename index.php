<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DIGIFEST - Website profil festival digital. Kenali profil, rangkaian acara, dan galeri DIGIFEST.">
    <meta name="theme-color" content="#2563eb">
    <title>DIGIFEST - Festival Digital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="#main-content" class="skip-link">Lewati ke konten utama</a>

    <header class="site-header" role="banner">
        <div class="site-header-inner">
            <a href="index.php" class="logo" aria-label="DIGIFEST - Beranda">
                <span class="logo-icon">D</span>
                <span>DIGIFEST</span>
            </a>
            <nav aria-label="Navigasi utama">
                <a href="dashboard.php" class="btn btn-primary">Masuk Dashboard</a>
            </nav>
        </div>
    </header>

    <main id="main-content" class="main" role="main">
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-inner">
                <div class="hero-badge">
                    <span>Festival Digital 2026</span>
                </div>
                <h1 id="hero-title">DIGIFEST <span>Festival Digital</span></h1>
                <p>Ruang kolaborasi untuk karya, gagasan, dan talenta digital. Jelajahi profil, rangkaian acara, dan galeri kegiatan DIGIFEST dalam satu website.</p>
                <div class="hero-actions">
                    <a href="dashboard.php" class="btn btn-primary">
                        Masuk Dashboard
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>
                    <a href="#tentang" class="btn btn-secondary">Tentang DIGIFEST</a>
                </div>
            </div>
        </section>

        <section id="tentang" class="highlights" aria-labelledby="tentang-title">
            <div class="highlights-inner">
                <div class="section-header">
                    <h2 id="tentang-title">Kenali DIGIFEST</h2>
                    <p>Semua informasi DIGIFEST tersedia di dalam dashboard</p>
                </div>
                <div class="highlights-grid">
                    <article class="highlight-card">
                        <h3>Profil</h3>
                        <p>Profil penyelenggara, visi, dan susunan tim di balik DIGIFEST.</p>
                        <a href="feature/profil.php" class="card-link">Lihat Profil</a>
                    </article>
                    <article class="highlight-card">
                        <h3>Acara</h3>
                        <p>Rangkaian seminar, workshop, dan kompetisi digital DIGIFEST.</p>
                        <a href="feature/acara.php" class="card-link">Lihat Acara</a>
                    </article>
                    <article class="highlight-card">
                        <h3>Galeri</h3>
                        <p>Dokumentasi foto dan video dari setiap kegiatan DIGIFEST.</p>
                        <a href="feature/galeri.php" class="card-link">Lihat Galeri</a>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer" role="contentinfo">
        <div class="footer-inner">
            <p>&copy; 2026 DIGIFEST - Festival Digital. Hak cipta dilindungi.</p>
        </div>
    </footer>
</body>
</html>
