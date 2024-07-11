<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="/assets/frontend/styles.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <title>Web Directory UMKM</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#" class="logo">FindUmkm</a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#pembina">Pembina</a></li>
    <li><a href="#Regist">Daftar UMKM</a></li>
    
    @if (Route::has('login'))
        @auth
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
        @else
            <li><a href="{{ route('login') }}">Login</a></li>
            @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
            @endif
        @endauth
    @endif
</ul>

      <div class="nav__search" id="nav-search">
        <input type="text" placeholder="Search" />
        <span><i class="ri-search-2-line"></i></span>
      </div>
    </nav>

    <header class="section__container header__container" id="home">
      <div class="header__image">
        <img src="/assets/frontend/assets/header.jpg" alt="header" />
      </div>
      <div class="header__content">
        <div>
          <h1>Develop Ur Small Business</h1>
          <p>
            We are ready to develop and help you develop your small business in a structured manner
          </p>
        </div>
      </div>
    </header>

    <section class="section__container deals__container">
      <div class="deals__card">
        <h2 class="section__header">Kenapa harus FindUmkm?</h2>
        <p>Kami memiliki beberapa alasan!</p>
      </div>
      <div class="deals__card">
        <span><i class="ri-cash-line"></i></span>
        <h4>Pembina berpengalaman</h4>
        <p>Kalian akan di bimbing oleh pembina yang berpengalaman</p>
      </div>
      <div class="deals__card">
        <span><i class="ri-calendar-schedule-line"></i></span>
        <h4>Mentoring 30 Hari</h4>
        <p>
          Setiap hari selama 30 Hari kami akan memandu kalian 
        </p>
      </div>
      <div class="deals__card">
        <span><i class="ri-money-rupee-circle-line"></i></span>
        <h4>Biayanya Murah</h4>
        <p>
          Dengan biaya pembinaan yang murah, kami jamin hasilnya pasti wah!
        </p>
      </div>
    </section>

    <section class="section__container about__container" id="about">
      <div class="about__header">
        <div>
          <h2 class="section__header">UMKM Terbaik</h2>
          <p class="section__description">
            Kami memiliki beberapa peserta mentoring (UMKM) terbaik diantara yang terbaik!
          </p>
        </div>
      </div>
      <div class="about__content">
        <div class="about__image">
          <img src="/assets/frontend/assets/about.png" alt="about" />
        </div>
        <div class="about__grid">
          <div class="about__card">
            <h3>1.</h3>
            <h4>Keripickme</h4>
            <p>
              Umkm yang bergerak di bidang FnB dan memiliki target anak muda atau Genz. Berhasil merauk omset 
              40jt/bulan semenjak mengikuti pembinaan kami!
            </p>
          </div>
          <div class="about__card">
            <h3>2.</h3>
            <h4>EsTi</h4>
            <p>
             Esti adalah UMKM yang fokus dibidang minuman lebih tepatnya teh yang memiliki target anak muda. Berhasil merauk
             omset 20JT/Hari semenjak mengikuti pembinaan kami!
            </p>
          </div>
          <div class="about__card">
            <h3>3.</h3>
            <h4>Momchips</h4>
            <p>UMKM yang memiliki produk keripik dan memiliki target market ibu hamil yang khawtir ngemil saat hamil.
              berhasil meraih omset 15jt/jam semenjak mengikut pembinaan kami!
            </p>
          </div>
          <div class="about__card">
            <h3>4.</h3>
            <h4>Cabe2An</h4>
            <p>
              UMKM yang memiliki produk ayam geprek pedas dan memiliki nama cabe2an. Berhasil meraih omset 30jt/detik 
              semenjak mengikuti pembinaan kami!
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container client__container">
      <div class="client__content">
        <h2 class="section__header">Pembina UMKM!</h2>
        <p class="section__description">
          Berikut adalah pembina-pembina UMKM yang ada di FINDUMKM dengan pengalaman yang sanget berlimpah
        </p>
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="client__card">
                <img src="/assets/frontend/assets/user-1.jpg" alt="user" />
                <div>
                  <p>
                    Saya sangat bangga bisa membantu dan membina UMKM yang ada di FindUmkm, karena saya bisa 
                    sharing dan bisa bermanfaat bagi mereka.
                  </p>
                  <h4>Mas Yono</h4>
                  <h5>CEO Brand GakHaus</h5>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client__card">
                <img src="/assets/frontend/assets/user-2.jpg" alt="user" />
                <div>
                  <p>
                    UMKM yang saya bantu ini benar benar UMKM yang layak besar! Mereka selalu bangkit 
                    dengan masalah yang ada dan tidak pernah menyerah!
                  </p>
                  <h4>Rinjani</h4>
                  <h5>Owner Skincare Violet</h5>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client__card">
                <img src="/assets/frontend/assets/user-3.jpg" alt="user" />
                <div>
                  <p>
                  UMKM yang saya bantu ini benar benar UMKM yang layak besar! Mereka selalu bangkit 
                  dengan masalah yang ada dan tidak pernah menyerah!
                  </p>
                  <h4>Joni Siregar</h4>
                  <h5>CEO PT Mencari Cinta Sejati</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#" class="logo">furni.shop</a>
          </div>
          <p>
            Join us in transforming your living spaces with furniture that
            blends elegance and practicality seamlessly.
          </p>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-facebook-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-linkedin-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-pinterest-fill"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Services</h4>
          <ul class="footer__links">
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Payrol</a></li>
            <li><a href="#">Library</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Help Center</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Resources</h4>
          <ul class="footer__links">
            <li><a href="#">Pricing</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Contact Support</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Support</h4>
          <ul class="footer__links">
            <li><a href="#">Contact</a></li>
            <li><a href="#">Affiliates</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Cancelation Policy</a></li>
            <li><a href="#">Security</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/assets/frontend/main.js"></script>
  </body>
</html>

