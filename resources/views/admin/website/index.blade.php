@extends('admin.layouts.app')

@push('title')
  Web Site Ayarları
@endpush

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <style>
        .view-system-build{
            display: grid;
            grid-template-columns: 4fr 8fr;
            grid-gap: 30px;
        }
    </style>
@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-md-12">

        <div class="nav-align-top">
            <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-2 gap-lg-0" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="view-settings-tab" data-bs-toggle="tab" href="#view-settings" role="tab" aria-controls="view-settings" aria-selected="true">
                  <i class="ri-pages-line me-2"></i>Görünüm Ayarları
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="menu-settings-tab" data-bs-toggle="tab" href="#menu-settings" role="tab" aria-controls="menu-settings" aria-selected="false">
                  <i class="ri-list-settings-line me-2"></i>Menü Ayarları
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="seo-settings-tab" data-bs-toggle="tab" href="#seo-settings" role="tab" aria-controls="seo-settings" aria-selected="false">
                  <i class="ri-tools-line me-2"></i>SEO Ayarları
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-settings-tab" data-bs-toggle="tab" href="#contact-settings" role="tab" aria-controls="contact-settings" aria-selected="false">
                  <i class="ri-contacts-line me-2"></i>İletişim Ayarları
                </a>
              </li>
            </ul>
        </div>

        <div class="tab-content">
            <!-- Görünüm Ayarları -->
            <div class="tab-pane fade show active" id="view-settings" role="tabpanel" aria-labelledby="view-settings-tab">
                <form action="" method="POST">
                    @csrf
                    <div class="view-system-build">

                        {{-- SOL KISIM --}}
                        <div class="single_system_wrap">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-12 mb-5">
                                            <label for="formFile" class="form-label fw-bold fs-6">Üst Menü Logo</label>
                                            <input class="form-control" type="file" id="formFile">
                                            <img src="{{ asset('assets/limfit/limfit-logo-siyah.webp') }}" id="headerLogo" class="w-100 mt-3" style="height: 70px; object-fit: contain;">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12 mb-5">
                                            <label for="formFile" class="form-label fw-bold fs-6">Alt Bilgi Logo</label>
                                            <input class="form-control" type="file" id="formFile">
                                            <img src="{{ asset('assets/limfit/limfit-logo-siyah.webp') }}" id="footerLogo" class="w-100 mt-3" style="height: 70px; object-fit: contain;">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12 mb-5">
                                            <label for="formFile" class="form-label fw-bold fs-6">Favicon</label>
                                            <input class="form-control" type="file" id="formFile">
                                            <img src="{{ asset('assets/limfit/limfit-fav.webp') }}" id="favicon" class="w-100 mt-3" style="height: 70px; object-fit: contain;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- SAĞ KISIM --}}
                        <div class="single_system_wrap">
                            <div class="card">
                                <h5 class="card-header">Web Site</h5>
                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="input-group input-group-merge mb-6">
                                                <span class="input-group-text">
                                                    <i class="ri-text"></i>
                                                </span>
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" class="form-control" placeholder="Web Site Adı">
                                                    <label for="formValidationName">Web Site Adı</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-12 col-md-6 col-lg-6">
                                            <label class="form-label ms-1">Ana Renk</label>
                                            <div class="d-flex align-items-center">
                                                <input type="color" class="form-control form-control-color" id="primaryColorPicker" name="primary_color" value="#ff0000" title="Renk Seçin" style="width: calc(100% - 50px); margin-right: 10px;">
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-lg-6">
                                            <label class="form-label ms-1">Yan Renk</label>
                                            <div class="d-flex align-items-center">
                                                <input type="color" class="form-control form-control-color" id="secondaryColorPicker" name="secondary_color" value="#ff0000" title="Renk Seçin" style="width: calc(100% - 50px); margin-right: 10px;">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row d-flex align-items-center justify-content-center mt-5">
                                        <div class="col-lg-3 col-md-12 col-12 mt-4">
                                            <button type="submit" class="btn btn-primary w-100">Kaydet</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <!-- Menü Ayarları -->
            <div class="tab-pane fade" id="menu-settings" role="tabpanel" aria-labelledby="menu-settings-tab">
                <div class="view-system-build">

                    {{-- SOL KISIM --}}
                    <div class="single_system_wrap">
                        <div class="card">
                            <div class="card-header">
                                <h5>Menü Öğe Ekleme</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mb-6 mb-md-2">
                                        <div class="accordion mt-4" id="accordionExample">

                                            {{-- SAYFALAR START --}}
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingOne">
                                                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                                  Sayfalar
                                                </button>
                                              </h2>

                                              <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <form action="{{ route('menu.add.select.item') }}" method="POST">
                                                        @csrf
                                                        <div class="col-lg-12 col-12 mt-3 pt-4 pb-4">
                                                            <div class="form-floating form-floating-outline">
                                                                <select id="select2Basic" class="select2 form-select form-select-lg" name="page_id" data-allow-clear="true">
                                                                    <option disabled selected>Sayfa Seçiniz</option>
                                                                    @foreach ($pages as $page)
                                                                        <option value="{{ $page->id }}">{{ $page->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <label for="select2Basic">Sayfalar</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-12 mt-2 pb-4">
                                                            <button type="submit" class="btn btn-primary w-100">Ekle</button>
                                                        </div>
                                                    </form>

                                                </div>
                                              </div>

                                            </div>
                                            {{-- SAYFALAR END --}}

                                            {{-- YENİ ÖĞE EKLE START --}}
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingTwo">
                                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                                  Yeni Öğe Ekle
                                                </button>
                                              </h2>
                                              <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <form action="{{ route('menu.add.item') }}" method="POST">
                                                        @csrf

                                                        <div class="col-lg-12 col-md-12 col-12 mb-3">
                                                            <div class="form-floating form-floating-outline">
                                                                <input type="text" name="name" class="form-control" placeholder="Menü Adı Giriniz">
                                                                <label for="floatingInput">Menü Adı</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-12 mb-3">
                                                            <div class="form-floating form-floating-outline">
                                                                <input type="text" name="slug" class="form-control" value="/">
                                                                <label for="floatingInput">Slug</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-12 mt-2 pb-4">
                                                            <button type="submit" class="btn btn-primary w-100">Ekle</button>
                                                        </div>

                                                    </form>
                                                </div>
                                              </div>
                                            </div>
                                            {{-- YENİ ÖĞE EKLE END --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- SAĞ KISIM --}}
                    <div class="single_system_wrap">
                        <div class="card">
                            <div class="card-header">
                                <h5>Menü Yapısı</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mb-6 mb-md-2">
                                        <div id="menuList" class="accordion mt-4">
                                            @foreach ($menus as $menu)
                                                <div class="accordion-item" data-id="{{ $menu->id }}">
                                                    <h2 class="accordion-header" id="heading{{ $menu->id }}">
                                                        <button
                                                            type="button"
                                                            class="accordion-button collapsed"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#accordion{{ $menu->id }}"
                                                            aria-expanded="false"
                                                            aria-controls="accordion{{ $menu->id }}">
                                                            {{ $menu->name }}
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="accordion{{ $menu->id }}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="heading{{ $menu->id }}"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <form action="#" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="mb-3">
                                                                    <label for="name{{ $menu->id }}" class="form-label">Menü İsmi</label>
                                                                    <input type="text" class="form-control" id="name{{ $menu->id }}" name="name" value="{{ $menu->name }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="slug{{ $menu->id }}" class="form-label">Slug</label>
                                                                    <input type="text" class="form-control" id="slug{{ $menu->id }}" name="slug" value="{{ $menu->slug }}">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Kaydet</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- SEO Ayarları -->
            <div class="tab-pane fade" id="seo-settings" role="tabpanel" aria-labelledby="seo-settings-tab">

                {{-- SEO START --}}
                <div class="card mb-6">
                    <div class="card-header">
                        <h5>SEO Bilgileri</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <span class="input-group-text">
                                        <i class="ri-seo-line"></i>
                                    </span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control" placeholder="SEO Başlık">
                                        <label for="formValidationName">SEO Başlık</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <span class="input-group-text">
                                        <i class="ri-seo-line"></i>
                                    </span>
                                    <div class="form-floating form-floating-outline">
                                        <textarea class="form-control" placeholder="SEO Açıklama"></textarea>
                                        <label for="formValidationName">SEO Açıklama</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- SEO START --}}

                {{-- SCRİPTLER START --}}
                <div class="card mb-6">
                    <div class="card-header">
                        <h5>Özel Kodlar</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <div class="form-floating form-floating-outline mb-6">
                                        <textarea class="form-control h-px-150" placeholder="CSS Kodları..."></textarea>
                                        <label for="exampleFormControlTextarea1">CSS</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <div class="form-floating form-floating-outline mb-6">
                                        <textarea class="form-control h-px-150" placeholder="JS Kodları..."></textarea>
                                        <label for="exampleFormControlTextarea1">JS</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- SCRİPTLER START --}}

            </div>

            <!-- İletişim Ayarları -->
            <div class="tab-pane fade" id="contact-settings" role="tabpanel" aria-labelledby="contact-settings-tab">

                {{-- İLETİŞİM START --}}
                <div class="card mb-6">
                    <div class="card-header">
                        <h5>İletişim Bilgileri</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <span class="input-group-text">
                                        <i class="ri-phone-line"></i>
                                    </span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control" placeholder="Telefon Numarası">
                                        <label for="formValidationName">Telefon</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <span class="input-group-text">
                                        <i class="ri-mail-line"></i>
                                    </span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control" placeholder="E-Posta Adresi">
                                        <label for="formValidationName">E-Posta</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <span class="input-group-text">
                                        <i class="ri-map-pin-line"></i>
                                    </span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control" placeholder="Adres">
                                        <label for="formValidationName">Adres</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <span class="input-group-text">
                                        <i class="ri-map-2-line"></i>
                                    </span>
                                    <div class="form-floating form-floating-outline">
                                        <textarea class="form-control h-px-100" placeholder="Harita Kodu"></textarea>
                                        <label for="formValidationName">Harita Kodu</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- İLETİŞİM END --}}

                {{-- SOSYAL MEDYA START --}}
                <div class="card mb-6">
                    <div class="card-header">
                        <h5>Sosyal Medya Bilgileri</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <span class="input-group-text">
                                        <i class="ri-instagram-line"></i>
                                    </span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control" placeholder="İnstagram Adresi">
                                        <label for="formValidationName">İnstagram</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <span class="input-group-text">
                                        <i class="ri-facebook-line"></i>
                                    </span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control" placeholder="Facebook Adresi">
                                        <label for="formValidationName">Facebook</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <span class="input-group-text">
                                        <i class="ri-twitter-line"></i>
                                    </span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control" placeholder="Twitter Adresi">
                                        <label for="formValidationName">Twitter</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-group input-group-merge mb-6">
                                    <span class="input-group-text">
                                        <i class="ri-youtube-line"></i>
                                    </span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control" placeholder="Youtube Adresi">
                                        <label for="formValidationName">Youtube</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- SOSYAL MEDYA END --}}

            </div>
        </div>


      </div>
    </div>
</div>

@endsection

@push('scripts')
    <script src="{{ asset('assets/js/extended-ui-drag-and-drop.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const colorPicker = document.getElementById('primaryColorPicker');
            const colorPreview = document.getElementById('primaryColorPreview');

            colorPicker.addEventListener('input', function() {
                // Seçilen rengi önizleme divinin arka plan rengine ata
                colorPreview.style.backgroundColor = this.value;
            });
        });
    </script>

    {{-- MENÜ SIRALAMA SCRİPTİ --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuList = document.getElementById("menuList");

            Sortable.create(menuList, {
                animation: 150, // Sürükleme sırasında animasyon süresi
                handle: ".accordion-header", // Sadece başlıkları sürüklenebilir yap
                onEnd: function (evt) {
                    const order = [];
                    menuList.querySelectorAll(".accordion-item").forEach((item, index) => {
                        order.push({
                            id: item.getAttribute("data-id"),
                            position: index + 1,
                        });
                    });

                    // Yeni sıralamayı sunucuya gönder
                    fetch('/menus/reorder', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify(order),
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data.message);
                    })
                    .catch(error => console.error('Hata:', error));
                },
            });
        });
    </script>
@endpush
