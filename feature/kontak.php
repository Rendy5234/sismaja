<?php
$base = '../';
$active = 'kontak';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - IKIP PGRI Bojonegoro</title>
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
            <p>Informasi kontak IKIP PGRI Bojonegoro</p>
        </div>

        <section class="kontak-section" aria-labelledby="kontak-title">
            <div class="kontak-grid">
                <article class="kontak-card">
                    <h2 id="kontak-title">Alamat</h2>
                    <address>
                        <p>Jl. Sumpah Pemuda No. 18</p>
                        <p>Kec. Bojonegoro, Kab. Bojonegoro</p>
                        <p>Jawa Timur 62111</p>
                        <p>Indonesia</p>
                    </address>
                </article>

                <article class="kontak-card">
                    <h2>Telepon & Faks</h2>
                    <ul class="kontak-list">
                        <li>
                            <strong>Telepon:</strong>
                            <a href="tel:+62353881234">(0353) 881234</a>
                        </li>
                        <li>
                            <strong>Faks:</strong>
                            <a href="tel:+62353881235">(0353) 881235</a>
                        </li>
                    </ul>
                </article>

                <article class="kontak-card">
                    <h2>Email</h2>
                    <ul class="kontak-list">
                        <li>
                            <strong>Umum:</strong>
                            <a href="mailto:humas@ikippgribojonegoro.ac.id">humas@ikippgribojonegoro.ac.id</a>
                        </li>
                        <li>
                            <strong>Akademik:</strong>
                            <a href="mailto:akademik@ikippgribojonegoro.ac.id">akademik@ikippgribojonegoro.ac.id</a>
                        </li>
                        <li>
                            <strong>Kemahasiswaan:</strong>
                            <a href="mailto:kemahasiswaan@ikippgribojonegoro.ac.id">kemahasiswaan@ikippgribojonegoro.ac.id</a>
                        </li>
                    </ul>
                </article>

                <article class="kontak-card">
                    <h2>Media Sosial</h2>
                    <ul class="kontak-list kontak-social">
                        <li>
                            <a href="https://www.instagram.com/ikippgribojonegoro/" target="_blank" rel="noopener noreferrer">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                                </svg>
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/ikippgribojonegoro/" target="_blank" rel="noopener noreferrer">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                                </svg>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@ikippgribojonegoro" target="_blank" rel="noopener noreferrer">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.44 24.16 24.16 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.44 24.16 24.16 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/>
                                    <path d="m10 15 5-3-5-3z"/>
                                </svg>
                                <span>YouTube</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/ikippgribojonegoro" target="_blank" rel="noopener noreferrer">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/>
                                </svg>
                                <span>Twitter</span>
                            </a>
                        </li>
                    </ul>
                </article>
            </div>

            <div class="kontak-map">
                <h2>Lokasi Kampus</h2>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.123456789!2d111.876543!3d-7.123456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78b123456789ab%3A0x123456789abcdef!2sIKIP%20PGRI%20Bojonegoro!5e0!3m2!1sid!2sid!4v1234567890"
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Peta lokasi IKIP PGRI Bojonegoro">
                    </iframe>
                </div>
            </div>
        </section>
    </main>

    <script src="<?= $base ?>js/main.js"></script>
</body>
</html>
