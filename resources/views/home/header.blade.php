    <!-- LOADER -->
    <header>
      <div id="preloader">
        <div id="main-ld">
          <div id="loader"></div>
        </div>
      </div><!-- end loader -->
      <!-- END LOADER -->
      <style>
        .dropdown-item {
          color: white;
          font-family:sans-serif !important;
        }

        .btn-link {
          color: white;
        }

        .btn-link:hover {
          color: white;
        }

        .dropdown-item:hover {}
      </style>

      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="/">
            <img class="img-fluid" src="{{asset('assets')}}/images/ieee-logo.png" width="254" height="70">
          </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger @yield('scrollindex')" href="/" style="font-size:14.5px; margin-top:1.2px;letter-spacing: 1px;position: relative;">ANASAYFA</a>
              </li>
              <li class="nav-item">
                <div class="dropdown" style="margin-top:2px;">
                  <button type="button" class="btn  btn-link dropdown-toggle " style="font-size:14.5px; margin-top:1.2px;letter-spacing: 1px;position: relative; margin-top: 3px; color: #969292 !important;" data-toggle="dropdown">
                    HAKKIMIZDA
                  </button>
                  <div class="dropdown-menu" style="background-color: black;opacity:.8;font-size:14.5px;">
                    <a class="dropdown-item" href="/ieee">IEEE Karabük Öğrencİ Kolu</a>
                    <a class="dropdown-item" href="/yonetim-kurulu">Yönetİm Kurulu</a>
                    <a class="dropdown-item" href="/idari-kurul">İDARİ Kurul</a>
                    <a class="dropdown-item" href="/denetim-kurulu">Denetİm Kurulu</a>

                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger @yield('scrollkomiteler')" href="/komiteler">KOMİTELER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger @yield('scrolletkinlikler')" href="/etkinliklerimiz">ETKİNLİKLER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger @yield('scrollblog')" href="/blog">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger @yield('scrolliletisim')" href="/iletisim">BİZE ULAŞIN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>