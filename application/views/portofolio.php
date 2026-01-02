<main class="main">

  <!-- Portfolio Details Section -->
  <section id="portfolio-details" class="portfolio-details section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Portfolio Details</h2>
      <p>
        Saya, <strong>Sayyid Abdul Wasye</strong>, mahasiswa <strong>Teknik Informatika di Global Institute</strong>,
        membangun berbagai proyek yang mencerminkan perjalanan saya di dunia pengembangan web dan sistem digital.
        Proyek berikut adalah hasil dari proses eksplorasi saya dalam membangun website yang fungsional, efisien, dan profesional.
      </p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="portfolio-details-media">

            <!-- Slider -->
            <div class="main-image">
              <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 1000,
                    "autoplay": { "delay": 6000 },
                    "effect": "creative",
                    "creativeEffect": {
                      "prev": { "shadow": true, "translate": [0, 0, -400] },
                      "next": { "translate": ["100%", 0, 0] }
                    },
                    "slidesPerView": 1,
                    "navigation": {
                      "nextEl": ".swiper-button-next",
                      "prevEl": ".swiper-button-prev"
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="assets/img/foto/Screenshot 2025-07-15 230251.png" alt="Portfolio Image" class="img-fluid">
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/img/foto/Screenshot 2025-10-18 115501.png" alt="Portfolio Image" class="img-fluid">
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/img/foto/Screenshot 2025-10-18 115514.png" alt="Portfolio Image" class="img-fluid">
                  </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
            </div>

            <!-- Thumbnail Preview -->
            <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
              <div class="row g-2 mt-3">
                <div class="col-3"><img src="assets/img/foto/Screenshot 2025-07-15 230251.png" alt="Gallery Image" class="img-fluid glightbox"></div>
                <div class="col-3"><img src="assets/img/foto/Screenshot 2025-10-18 115501.png" alt="Gallery Image" class="img-fluid glightbox"></div>
                <div class="col-3"><img src="assets/img/foto/Screenshot 2025-10-18 115514.png" alt="Gallery Image" class="img-fluid glightbox"></div>
                <div class="col-3"><img src="assets/img/foto/Screenshot 2025-10-18 115541.png" alt="Gallery Image" class="img-fluid glightbox"></div>
              </div>
            </div>

            <!-- Tech Stack -->
            <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
              <span>CodeIgniter</span>
              <span>Laravel</span>
              <span>MySQL</span>
              <span>JavaScript</span>
              <span>Bootstrap</span>
            </div>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left">
          <div class="portfolio-details-content">
            <div class="project-meta">
              <div class="badge-wrapper">
                <span class="project-badge">Fullstack Web Development</span>
              </div>
              <div class="date-client">
                <div class="meta-item">
                  <i class="bi bi-calendar-check"></i>
                  <span>juli 2025</span>
                </div>
                <div class="meta-item">
                  <i class="bi bi-person-workspace"></i>
                  <span>Proyek 1</span>
                </div>
              </div>
            </div>

            <h2 class="project-title">Ecommerce Pemesanan Tiket Trip</h2>

            <div class="project-website">
              <i class="bi bi-link-45deg"></i>
              <a href="#" target="_blank">plesiran.my.id</a>
            </div>

            <div class="project-overview">
              <p class="lead">
                Website ini saya kembangkan sebagai representasi diri saya di dunia profesional.
                Dirancang menggunakan framework PHP modern dengan struktur MVC untuk mempermudah pengelolaan konten dan skalabilitas sistem.
              </p>

              <div class="accordion project-accordion" id="portfolio-details-projectAccordion">
                <div class="accordion-item" data-aos="fade-up">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-1" aria-expanded="true">
                      <i class="bi bi-clipboard-data me-2"></i> Project Overview
                    </button>
                  </h2>
                  <div id="portfolio-details-collapse-1" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                      <p>
                        Proyek ini dibangun menggunakan CodeIgniter dan Bootstrap, dengan fokus pada performa dan struktur kode yang bersih.
                        Terdapat sistem routing dinamis, integrasi API sederhana, dan template yang bisa diubah sesuai kebutuhan.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-2">
                      <i class="bi bi-exclamation-diamond me-2"></i> Tantangan Proyek
                    </button>
                  </h2>
                  <div id="portfolio-details-collapse-2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      <p>
                        Tantangan utama adalah bagaimana membuat sistem yang fleksibel namun tetap ringan.
                        Saya juga belajar bagaimana mengoptimalkan query database dan mengatur struktur file agar mudah dipelihara.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-3">
                      <i class="bi bi-award me-2"></i> Solusi & Hasil
                    </button>
                  </h2>
                  <div id="portfolio-details-collapse-3" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      <p>
                        Hasil akhirnya adalah website portofolio dinamis yang cepat diakses dan mudah dikembangkan.
                        Saya berhasil mengintegrasikan berbagai komponen frontend dan backend dengan arsitektur rapi.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="project-features" data-aos="fade-up" data-aos-delay="300">
              <h3><i class="bi bi-stars"></i> Fitur Utama</h3>
              <div class="row g-3">
                <div class="col-md-6">
                  <ul class="feature-list">
                    <li><i class="bi bi-check2-circle"></i> Template Dinamis Berbasis MVC</li>
                    <li><i class="bi bi-check2-circle"></i> Routing Otomatis</li>
                    <li><i class="bi bi-check2-circle"></i> Integrasi API Dasar</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="feature-list">
                    <li><i class="bi bi-check2-circle"></i> Database Management MySQL</li>
                    <li><i class="bi bi-check2-circle"></i> Responsif di Semua Perangkat</li>
                    <li><i class="bi bi-check2-circle"></i> Desain Clean dan Modern</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
              <a href="#" class="btn-view-project">Lihat Proyek Langsung</a>
              <a href="#" class="btn-next-project">Proyek Berikutnya <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</main>
