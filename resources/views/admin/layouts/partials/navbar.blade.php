<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
        <i class="ri-menu-fill ri-22px"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        <!-- SEARCH START -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                <i class="ri-search-line ri-22px scaleX-n1-rtl me-3"></i>
                <span class="d-none d-md-inline-block text-muted">Ara (Ctrl+/)</span>
                </a>
            </div>
        </div>
        <!-- SEARCH END -->

        <ul class="navbar-nav flex-row drop align-items-center ms-auto">



            <!-- THEME MODE BUTTON START -->
            <li class="nav-item dropdown-style-switcher dropdown me-1 me-xl-0">
                <a
                class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                href="javascript:void(0);"
                data-bs-toggle="dropdown">
                <i class="ri-22px"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                    <span class="align-middle"><i class="ri-sun-line ri-22px me-3"></i>Light</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                    <span class="align-middle"><i class="ri-moon-clear-line ri-22px me-3"></i>Dark</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                    <span class="align-middle"><i class="ri-computer-line ri-22px me-3"></i>System</span>
                    </a>
                </li>
                </ul>
            </li>
            <!-- THEME MODE BUTTON END -->

            <!-- FAVORİ SAYFALAR START  -->
            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
                <a
                class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                href="javascript:void(0);"
                data-bs-toggle="dropdown"
                data-bs-auto-close="outside"
                aria-expanded="false">
                <i class="ri-star-smile-line ri-22px"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0">
                {{-- BAŞLIK START --}}
                <div class="dropdown-menu-header border-bottom py-50">
                    <div class="dropdown-header d-flex align-items-center py-2">
                        <h6 class="mb-1 mt-1 me-auto">Kısayollar</h6>
                    </div>
                </div>
                {{-- BAŞLIK END --}}
                <div class="dropdown-shortcuts-list scrollable-container">

                    {{-- 1.SATIR --}}
                    <div class="row row-bordered overflow-visible g-0">

                        {{-- NOT EKLE START --}}
                        <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ri-sticky-note-add-line ri-26px text-heading"></i>
                            </span>
                            <a href="javascript:void(0)" class="stretched-link">Notlar</a>
                            <small class="mb-0">Not Ekle</small>
                        </div>
                        {{-- NOT EKLE END --}}

                        {{-- DATA EKLE START --}}
                        <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ri-add-box-line ri-26px text-heading"></i>
                            </span>
                            <a href="javascript:void(0)" class="stretched-link">Datalar</a>
                            <small class="mb-0">Data Ekle</small>
                        </div>
                        {{-- DATA EKLE END --}}

                    </div>
                    {{-- 1.SATIR --}}

                    {{-- 2.SATIR --}}
                    <div class="row row-bordered overflow-visible g-0">

                        {{-- HATIRLATICI EKLE START --}}
                        <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ri-add-box-line ri-26px text-heading"></i>
                            </span>
                            <a href="javascript:void(0)" class="stretched-link">Hatırlatıcılar</a>
                            <small class="mb-0">Hatırlatıcı Ekle</small>
                        </div>
                        {{-- HATIRLATICI EKLE END --}}

                        {{-- HATIRLATICI EKLE START --}}
                        <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ri-add-box-line ri-26px text-heading"></i>
                            </span>
                            <a href="javascript:void(0)" class="stretched-link">Hatırlatıcılar</a>
                            <small class="mb-0">Hatırlatıcı Ekle</small>
                        </div>
                        {{-- HATIRLATICI EKLE END --}}

                    </div>
                    {{-- 2.SATIR --}}

                </div>
                </div>
            </li>
            <!-- FAVORİ SAYFALAR END  -->

            <!-- BİLDİRİMLER START -->
            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-4 me-xl-1">

                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <i class="ri-notification-2-line ri-22px"></i>
                </a>

                    <span class="position-absolute top-0 start-50 translate-middle-y rounded-pill badge bg-danger mt-2 border">
                        0
                    </span>

                <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom py-50">
                        <div class="dropdown-header d-flex align-items-center py-2">
                            <h6 class="mb-0 me-auto">Hatırlatıcılar & Bildirimler</h6>
                            <div class="d-flex align-items-center">
                                <a href="#" class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Hepsini Okunmuş Olarak İşaretle"
                                onclick="markAllAsRead(event)">
                                    <i class="ri-mail-open-line text-heading ri-20px"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                        <ul class="list-group list-group-flush">

                        </ul>
                    </li>
                </ul>
            </li>
            <!-- BİLDİRİMLER END -->

            <!-- KULLANICI BİLGİLERİ START -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                    <img src="#" alt class="rounded-circle" />
                </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="javascript:void(0)">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-2">
                        <div class="avatar avatar-online">
                            <img src="#" alt class="rounded-circle" />
                        </div>
                        </div>
                        <div class="flex-grow-1">
                        <span class="fw-medium d-block small">Name</span>
                        <small class="text-muted">Name</small>
                        </div>
                    </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ri-user-3-line ri-22px me-3"></i><span class="align-middle">Profil Ayarları</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ri-settings-4-line ri-22px me-3"></i><span class="align-middle">Ayarlar</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
               <form action="javascript:void(0)" method="POST">
                @csrf
                <li>
                    <div class="d-grid px-4 pt-2 pb-1">
                    <button type="submit" class="btn btn-sm btn-danger d-flex">
                        <small class="align-middle">Çıkış Yap</small>
                        <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                    </button>
                    </div>
                </li>
               </form>
                </ul>
            </li>
            <!-- KULLANICI BİLGİLERİ END -->

        </ul>

    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper d-none">
        <input
        type="text"
        class="form-control search-input container-xxl border-0"
        placeholder="Search..."
        aria-label="Search..." />
        <i class="ri-close-fill search-toggler cursor-pointer"></i>
    </div>
</nav>
<!-- / Navbar -->
