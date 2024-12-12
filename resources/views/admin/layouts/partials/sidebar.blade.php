<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme pb-5">

      {{-- LOGO START --}}
      <div class="app-brand demo pb-2 mt-2">
        <a href="javascript:void(0)" class="app-brand-link">
          <img src="{{ asset('assets/limfit/limfit-logo-siyah.webp') }}" class="mx-5 mt-5" width="150" height="50" alt="">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M8.47365 11.7183C8.11707 12.0749 8.11707 12.6531 8.47365 13.0097L12.071 16.607C12.4615 16.9975 12.4615 17.6305 12.071 18.021C11.6805 18.4115 11.0475 18.4115 10.657 18.021L5.83009 13.1941C5.37164 12.7356 5.37164 11.9924 5.83009 11.5339L10.657 6.707C11.0475 6.31653 11.6805 6.31653 12.071 6.707C12.4615 7.09747 12.4615 7.73053 12.071 8.121L8.47365 11.7183Z"
              fill-opacity="0.9" />
            <path
              d="M14.3584 11.8336C14.0654 12.1266 14.0654 12.6014 14.3584 12.8944L18.071 16.607C18.4615 16.9975 18.4615 17.6305 18.071 18.021C17.6805 18.4115 17.0475 18.4115 16.657 18.021L11.6819 13.0459C11.3053 12.6693 11.3053 12.0587 11.6819 11.6821L16.657 6.707C17.0475 6.31653 17.6805 6.31653 18.071 6.707C18.4615 7.09747 18.4615 7.73053 18.071 8.121L14.3584 11.8336Z"
              fill-opacity="0.4" />
          </svg>
        </a>
      </div>
      {{-- LOGO END --}}

      <div class="menu-inner-shadow"></div>

      {{-- MENÜ START --}}
      <ul class="menu-inner mt-4 py-1">

        <!-- LİMFİT ANA SAYFA -->
        <li class="menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
          <a href="{{ route('dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons ri-home-smile-line"></i>
            <div data-i18n="Kontrol Paneli">Kontrol Paneli</div>
          </a>
        </li>

        {{-- SATIŞ YÖNETİMİ TİTLE --}}
        <li class="menu-header mt-5">
            <span class="menu-header-text" data-i18n="Satış Yönetimi">Satış Yönetimi</span>
        </li>
        {{-- SATIŞ YÖNETİMİ TİTLE --}}

        <!-- DUYURULAR -->
        <li class="menu-item {{ Request::is('announcements') ? 'active' : '' }}">
            <a href="{{ route('announcements.index') }}" class="menu-link">
              <i class="menu-icon tf-icons ri-megaphone-line"></i>
              <div data-i18n="Duyurular">Duyurular</div>
            </a>
        </li>

        <!-- SİPARİŞLER -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
              <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
              <div data-i18n="Siparişler">Siparişler</div>
            </a>
        </li>

        <!-- PAKETLER -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ri-aed-line"></i>
              <div data-i18n="Paketler">Paketler</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link">
                  <div data-i18n="Kategoriler">Kategoriler</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link">
                  <div data-i18n="Paketler">Paketler</div>
                </a>
              </li>
            </ul>
        </li>

        <!-- KUPONLAR -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
              <i class="menu-icon tf-icons ri-coupon-3-line"></i>
              <div data-i18n="Kuponlar">Kuponlar</div>
            </a>
        </li>

        {{-- WEB SİTE TİTLE --}}
        <li class="menu-header mt-5">
            <span class="menu-header-text" data-i18n="Web Site">Web Site</span>
        </li>
        {{-- WEB SİTE TİTLE --}}

        <!-- Web Site Ayarları -->
        <li class="menu-item {{ Request::is('website-setting') ? 'active' : '' }}">
            <a href="{{ route('website.index') }}" class="menu-link">
              <i class="menu-icon tf-icons ri-file-settings-line"></i>
              <div data-i18n="Web Site Ayarları">Web Site Ayarları</div>
            </a>
        </li>

        <!-- SLİDERLAR -->
        <li class="menu-item {{ Request::is('sliders') ? 'active' : '' }}">
            <a href="{{ route('slider.index') }}" class="menu-link">
              <i class="menu-icon tf-icons ri-gallery-line"></i>
              <div data-i18n="Sliderlar">Sliderlar</div>
            </a>
        </li>

        <!-- SAYFALAR -->
        <li class="menu-item {{ Request::is('pages') ? 'active' : '' }}">
            <a href="{{ route('pages.index') }}" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ri-pages-line"></i>
              <div data-i18n="Sayfalar">Sayfalar</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link">
                  <div data-i18n="Hakkımızda">Hakkımızda</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link">
                  <div data-i18n="İletişim">İletişim</div>
                </a>
              </li>
            </ul>
        </li>

        {{-- KULLANICI YÖNETİMİ TİTLE --}}
        <li class="menu-header mt-5">
            <span class="menu-header-text" data-i18n="Kullanıcı Yönetimi">Kullanıcı Yönetimi</span>
        </li>
        {{-- KULLANICI YÖNETİMİ TİTLE --}}

        <!-- KULLANICILAR -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
              <i class="menu-icon tf-icons ri-group-line"></i>
              <div data-i18n="Kullanıcılar">Kullanıcılar</div>
            </a>
        </li>

        <!-- EĞİTMENLER -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
              <i class="menu-icon tf-icons ri-team-line"></i>
              <div data-i18n="Eğitmenler">Eğitmenler</div>
            </a>
        </li>

        <!-- YÖNETİCİLER -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
              <i class="menu-icon tf-icons ri-user-star-line"></i>
              <div data-i18n="Yöneticiler">Yöneticiler</div>
            </a>
        </li>

        <!-- ROL YÖNETİMİ -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ri-lock-star-line"></i>
              <div data-i18n="Rol Yönetimi">Rol Yönetimi</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link">
                  <div data-i18n="Tüm Roller">Tüm Roller</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link">
                  <div data-i18n="Rol Ekle">Rol Ekle</div>
                </a>
              </li>
            </ul>
        </li>

        {{-- AYARLAR TİTLE --}}
        <li class="menu-header mt-5">
            <span class="menu-header-text" data-i18n="Ayarlar">Ayarlar</span>
        </li>
        {{-- AYARLAR TİTLE --}}

        <!-- Genel Ayarlar -->
        <li class="menu-item {{ Request::is('general-setting') ? 'active' : '' }}">
            <a href="{{ route('general.index') }}" class="menu-link">
              <i class="menu-icon tf-icons ri-settings-3-line"></i>
              <div data-i18n="Genel Ayarlar">Genel Ayarlar</div>
            </a>
        </li>

        <!-- ÖDEME ENTEGRASYONU -->
        <li class="menu-item {{ Request::is('payment-integration') ? 'active' : '' }}">
            <a href="{{ route('payment.index') }}" class="menu-link">
              <i class="menu-icon tf-icons ri-secure-payment-line"></i>
              <div data-i18n="Ödeme Entegrasyonu">Ödeme Entegrasyonu</div>
            </a>
        </li>

      </ul>
      {{-- MENÜ END --}}

</aside>
