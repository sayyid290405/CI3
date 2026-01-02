<main class="main">

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Hubungi saya untuk kolaborasi, proyek freelance, atau sekadar berdiskusi tentang teknologi dan pengembangan web. Saya selalu terbuka untuk kesempatan baru yang bisa memperluas pengalaman saya di dunia IT.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-4 g-lg-5">

        <!-- Contact Info -->
        <div class="col-lg-5">
          <div class="info-box" data-aos="fade-up" data-aos-delay="200">
            <h3>Informasi Kontak</h3>
            <p>Berbasis di Tangerang, saya seorang mahasiswa aktif semester 3 di Global Institute jurusan Teknik Informatika yang berfokus pada pengembangan web dan teknologi backend.</p>

            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="content">
                <h4>Lokasi</h4>
                <p>Tangerang, Banten, Indonesia</p>
              </div>
            </div>

            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="content">
                <h4>Nomor Telepon</h4>
                <p>+62 881-9972-581</p>
              </div>
            </div>

            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="content">
                <h4>Email</h4>
                <p><a href="mailto:sayyidabdulwasye@gmail.com">sayyidabdulwasye@gmail.com</a></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-7">
          <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
            <h3>Kirim Pesan</h3>
            <p>Isi formulir di bawah ini untuk menghubungi saya. Saya akan berusaha membalas secepat mungkin.</p>

            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
                </div>

                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Tulis pesan Anda di sini..." required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>

                  <button type="submit" class="btn">Kirim Pesan</button>
                </div>

              </div>
            </form>

          </div>
        </div>

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>
