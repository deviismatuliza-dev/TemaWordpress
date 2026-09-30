<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="page-wrapper">

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="navbar-inner">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">Devi Izzah</a>
            </div>
            <div class="nav-menu">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <a href="#profil">Profil</a>
                <a href="#artikel">Artikel</a>
                <a href="#kontak">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <header class="hero">
        <div class="hero-content">
            <div class="hero-badge">✨ Welcome to My Website</div>
            <h1>Devi Ismatul Izzah</h1>
            <p class="hero-subtitle">Mahasiswa Pendidikan Informatika</p>
            <p class="hero-description">
                Selamat datang di website pribadi saya.
                Website ini dibuat sebagai media untuk berbagi
                informasi, artikel, dan karya di bidang teknologi
                serta pendidikan informatika.
            </p>
            <div class="hero-buttons">
                <a href="#profil" class="hero-button">Lihat Profil →</a>
                <a href="#artikel" class="hero-button secondary-button">Lihat Artikel</a>
            </div>
        </div>
        <div class="hero-circle circle-one"></div>
        <div class="hero-circle circle-two"></div>
        <div class="hero-heart">♡</div>
    </header>

    <!-- PROFILE -->
    <section class="profile-section" id="profil">
        <div class="section-title">
            <span>MY PROFILE</span>
            <h2>Tentang Saya</h2>
            <p>Informasi singkat mengenai diri saya.</p>
        </div>

        <div class="profile-card">
            <div class="profile-avatar">DI</div>
            <div class="profile-info">
                <h2>Devi Ismatul Izzah</h2>
                <p class="profile-role">Mahasiswa Pendidikan Informatika</p>

                <div class="profile-details">
                    <div class="detail-item">
                        <div class="detail-icon">🎓</div>
                        <div>
                            <span>NIM</span>
                            <strong>240631100004</strong>
                        </div>
                    </div>

                    <div class="detail-item">
                        <div class="detail-icon">📱</div>
                        <div>
                            <span>No. HP</span>
                            <strong>085781986793</strong>
                        </div>
                    </div>

                    <div class="detail-item">
                        <div class="detail-icon">💻</div>
                        <div>
                            <span>Program Studi</span>
                            <strong>Pendidikan Informatika</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ARTICLES -->
    <main class="content" id="artikel">
        <div class="section-title">
            <span>MY BLOG</span>
            <h2>Artikel Terbaru</h2>
            <p>Berbagai tulisan dan informasi yang tersedia di website saya.</p>
        </div>

        <div class="post-grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="post-card">

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); ?>
                            </a>
                        </div>
                    <?php else : ?>
                        <div class="post-thumbnail no-image">
                            <span>🌸</span>
                        </div>
                    <?php endif; ?>

                    <div class="post-content">
                        <div class="post-date"><?php echo get_the_date(); ?></div>

                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

                        <a href="<?php the_permalink(); ?>" class="read-more">Baca Selengkapnya →</a>
                    </div>

                </article>

            <?php endwhile; else : ?>

                <div class="no-post">
                    <div class="no-post-icon">🌷</div>
                    <h2>Belum Ada Artikel</h2>
                    <p>Silakan tambahkan artikel melalui dashboard WordPress.</p>
                </div>

            <?php endif; ?>
        </div>
    </main>

    <!-- CONTACT -->
    <section class="contact-section" id="kontak">
        <div class="contact-box">
            <div class="contact-content">
                <span>GET IN TOUCH</span>
                <h2>Hubungi Saya</h2>
                <p>Jika ingin menghubungi saya, silakan gunakan informasi berikut.</p>
            </div>

            <div class="contact-card">
                <div class="contact-icon">📱</div>
                <div>
                    <small>Nomor Handphone</small>
                    <h3>085781986793</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-profile">
                <h3>Devi Ismatul Izzah</h3>
                <p>Mahasiswa Pendidikan Informatika</p>
                <p>NIM: 240631100004</p>
            </div>

            <div class="footer-links">
                <h4>Menu</h4>
                <a href="#">Home</a>
                <a href="#profil">Profil</a>
                <a href="#artikel">Artikel</a>
                <a href="#kontak">Kontak</a>
            </div>

            <div class="footer-contact">
                <h4>Kontak</h4>
                <p>📱 085781986793</p>
                <p>🎓 Pendidikan Informatika</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© <?php echo date('Y'); ?> <strong>Devi Ismatul Izzah</strong>. All Rights Reserved.</p>
        </div>
    </footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
