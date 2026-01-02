
  <main class="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>About Me</h2>
        <p>
          Halo! Saya <b>Sayyid Abdul Wasye</b> — seorang <b>Software Engineer</b> dengan fokus pada pengembangan aplikasi
          <b>backend, desktop, dan web enterprise</b> menggunakan berbagai teknologi modern seperti <b>.NET C#, Java, Golang, dan PHP</b>.
        </p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center justify-content-between gy-5 mb-5">
          <div class="col-lg-7" data-aos="fade-right" data-aos-delay="150">
            <div class="intro-content">
              <span class="eyebrow">Perkenalkan</span>
              <h2 class="headline">Saya Sayyid Abdul Wasye – Software Engineer & System Developer</h2>
              <p class="lead">
                Saya memiliki pengalaman dalam membangun aplikasi berbasis <b>backend</b>, <b>web fullstack</b>, dan <b>otomatisasi sistem</b>.
                Saya percaya bahwa efisiensi dan struktur kode yang bersih adalah fondasi utama dari software yang tangguh.
              </p>

              <p>
                Saat ini saya aktif menggunakan <b>Golang</b> untuk backend API, <b>.NET C#</b> untuk sistem enterprise,
                <b>Java</b> untuk Android dan desktop, serta <b>PHP (CodeIgniter / Laravel)</b> untuk web.
                Selain itu, saya juga memahami <b>DevOps</b>, pengelolaan <b>Git</b>, database <b>SQL</b>, dan penggunaan
                <b>Excel</b> untuk analisis data.
              </p>

              <div class="cta-group">
                <!-- <a href="#portfolio" class="btn-ghost">
                  Lihat Proyek Saya <i class="bi bi-arrow-up-right"></i>
                </a>
                <a href="mailto:sayyidabdulwasye@gmail.com" class="link-underline">
                  Hubungi Saya <i class="bi bi-envelope"></i>
                </a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="250">
            <figure class="profile-figure text-center text-lg-end">
              <img src="<?= base_url('assets/img/foto/photo.jpg'); ?>" 
                   alt="Foto Sayyid Abdul Wasye" class="img-fluid profile-photo rounded shadow">
            </figure>
          </div>
        </div>

        <!-- ======= Skills Section ======= -->
        <div class="mb-5">
          <h3 class="text-center mb-4">Skills & Tools</h3>
          <div class="row g-4 text-center">
            <?php 
              $skills = [
                ['.NET C#', 'bi bi-microsoft'],
                ['Java', 'bi bi-cup-hot'],
                ['Golang', 'bi bi-gear'],
                ['PHP / CodeIgniter / Laravel', 'bi bi-braces'],
                ['JavaScript', 'bi bi-lightning-charge'],
                ['SQL / Database Design', 'bi bi-hdd-network'],
                ['Git / GitHub / GitLab', 'bi bi-git'],
                ['DevOps / Docker', 'bi bi-box'],
                ['Excel / Data Analysis', 'bi bi-table'],
              ];
              foreach ($skills as $index => $s): 
            ?>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                <div class="skill-item p-3 border rounded shadow-sm">
                  <i class="<?= $s[1] ?> fs-2 mb-2"></i>
                  <h4><?= $s[0] ?></h4>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- ======= Experience Section ======= -->
        <div class="mb-5">
          <h3 class="text-center mb-4">Experience</h3>
          <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <article class="timeline-item p-4 border rounded shadow-sm">
                <span class="dot"></span>
                <time>2023 - Sekarang</time>
                <h4>Mahasiswa Teknik Informatika</h4>
                <p>Global Institute, Tangerang — Fokus pada software engineering dan sistem backend.</p>
              </article>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <article class="timeline-item p-4 border rounded shadow-sm">
                <span class="dot"></span>
                <time>2024</time>
                <h4>Junior Backend Developer</h4>
                <p>Mengembangkan REST API menggunakan <b>Golang</b> dan <b>CodeIgniter 3</b> untuk sistem internal kampus.</p>
              </article>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <article class="timeline-item p-4 border rounded shadow-sm">
                <span class="dot"></span>
                <time>2025</time>
                <h4>Software Engineer Intern</h4>
                <p>Berperan dalam proyek enterprise menggunakan <b>.NET C#</b> dan integrasi dengan database SQL Server.
                  Juga membantu tim DevOps dalam deployment berbasis <b>Docker</b> dan GitHub Actions.</p>
              </article>
            </div>
          </div>
        </div>

      </div>
    </section>
  </main>

  