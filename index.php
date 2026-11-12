<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SISMAJA - Sistem Penjadwalan Dosen Terintegrasi. Kelola jadwal mengajar, ruangan, dan mata kuliah dengan efisien.">
    <meta name="theme-color" content="#2563eb">
    <title>SISMAJA - Sistem Penjadwalan Dosen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="#main-content" class="skip-link">Lewati ke konten utama</a>
    
    <header class="header" role="banner">
        <div class="header-inner">
            <a href="/" class="logo" aria-label="SISMAJA - Beranda">
                <svg class="logo-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                    <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01"/>
                </svg>
                <span>SISMAJA</span>
            </a>
            <nav aria-label="Navigasi utama">
                <a href="#" class="btn btn-primary" onclick="alert('Halaman login akan dikembangkan oleh tim')">Masuk ke Sistem</a>
            </nav>
        </div>
    </header>

    <main id="main-content" class="main" role="main">
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-inner">
                <div class="hero-badge" aria-label="Status sistem">
                    <span>Sistem Terintegrasi</span>
                </div>
                <h1 id="hero-title">Sistem Penjadwalan Dosen <span>Terintegrasi</span></h1>
                <p>Kelola jadwal mengajar, ruangan, mata kuliah, dan preferensi dosen dalam satu platform terpusat. Mengurangi konflik jadwal hingga 90% dan menghemat waktu administrasi.</p>
                <div class="hero-actions">
                    <a href="#" class="btn btn-primary" onclick="alert('Halaman login akan dikembangkan oleh tim')">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                            <polyline points="10 17 15 12 10 7"/>
                            <line x1="15" y1="12" x2="3" y2="12"/>
                        </svg>
                        Masuk Sekarang
                    </a>
                    <a href="#features" class="btn btn-secondary">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        Lihat Fitur
                    </a>
                </div>
                
                <div style="display: flex; align-items: center; justify-content: center; gap: 16px; color: var(--text-light); font-size: 0.875rem; flex-wrap: wrap;">
                    <span>✓ Tidak perlu instalasi</span>
                    <span>✓ Akses dari mana saja</span>
                    <span>✓ Data terenkripsi</span>
                </div>
            </div>
        </section>

        <section id="features" class="features" aria-labelledby="features-title">
            <div class="features-inner">
                <div class="section-header">
                    <h2 id="features-title">Fitur Unggulan</h2>
                    <p>Dirancang untuk memenuhi kebutuhan penjadwalan akademik yang kompleks</p>
                </div>
                <div class="features-grid">
                    <article class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                        </div>
                        <h3>Jadwal Otomatis</h3>
                        <p>Algoritma cerdas menghasilkan jadwal optimal berdasarkan ketersediaan dosen, ruangan, dan kurikulum. Deteksi konflik real-time.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <h3>Manajemen Dosen</h3>
                        <p>Kelola profil, preferensi mengajar, beban kerja maksimal, dan keahlian dosen. Riwayat mengajar tercatat otomatis.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                                <path d="M8 21h8"/>
                                <path d="M12 17v4"/>
                            </svg>
                        </div>
                        <h3>Ruangan & Aset</h3>
                        <p>Inventaris ruangan lengkap dengan kapasitas, fasilitas (proyektor, AC, lab), dan jadwal pemakaian per semester.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                            </svg>
                        </div>
                        <h3>Analitik & Laporan</h3>
                        <p>Dashboard visual beban kerja dosen, tingkat pemakaian ruangan, dan laporan akreditasi siap cetak (PDF/Excel).</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M12 6v6l4 2"/>
                            </svg>
                        </div>
                        <h3>Notifikasi Real-time</h3>
                        <p>Pengingat jadwal, perubahan ruangan, dan pengumuman dikirim via email dan notifikasi in-app otomatis.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                                <line x1="8" y1="21" x2="16" y2="21"/>
                                <line x1="12" y1="17" x2="12" y2="21"/>
                            </svg>
                        </div>
                        <h3>Multi-role Access</h3>
                        <p>Hak akses terpisah untuk Admin, Koordinator Prodi, Dosen, dan Staf Akademik dengan audit trail lengkap.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="stats" aria-labelledby="stats-title">
            <div class="stats-inner">
                <div class="stat-item">
                    <div class="stat-value" data-target="5000">0</div>
                    <div class="stat-label">Jadwal Dibuat</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value" data-target="1200">0</div>
                    <div class="stat-label">Dosen Terdaftar</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value" data-target="85">0</div>
                    <div class="stat-label">Ruangan Kelola</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value" data-target="99">0</div>
                    <div class="stat-label">Uptime System (%)</div>
                </div>
            </div>
        </section>

        <section style="padding: 80px 24px; background: var(--bg);" aria-labelledby="cta-title">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h2 id="cta-title" style="font-size: clamp(1.75rem, 3vw, 2.25rem); font-weight: 700; color: var(--secondary); margin-bottom: 16px;">Siap Mengoptimalkan Penjadwalan?</h2>
                <p style="color: var(--text-muted); font-size: 1.125rem; margin-bottom: 32px;">Bergabung dengan ratusan institusi yang telah mempermudah proses penjadwalan akademik. Mulai hari ini.</p>
                <a href="#" class="btn btn-primary" style="font-size: 1.125rem; padding: 16px 36px;" onclick="alert('Halaman login akan dikembangkan oleh tim')">
                    Mulai Sekarang
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </section>
    </main>

    <footer class="footer" role="contentinfo">
        <div class="footer-inner">
            <p style="font-size: 0.875rem;">&copy; 2025 SISMAJA - Sistem Penjadwalan Dosen. Hak cipta dilindungi.</p>
            <nav class="footer-links" aria-label="Tautan footer">
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat Penggunaan</a>
                <a href="#">Bantuan</a>
                <a href="#">Kontak</a>
            </nav>
            <p style="font-size: 0.75rem; color: var(--text-light);">Dibangun dengan standar keamanan tinggi untuk institusi pendidikan</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>