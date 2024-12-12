@extends('admin.layouts.app')

@push('title')
    Slider Ekle
@endpush

@push('css')
@endpush

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    {{-- BREADCRUMB START --}}
    <div class="row g-6 mb-6">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mb-0">
                      <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Anasayfa</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="{{ route('slider.index') }}">Tüm Sliderlar</a>
                      </li>
                      <li class="breadcrumb-item active">Slider Ekle</li>
                    </ol>
                  </nav>
                </div>
            </div>

        </div>
    </div>
    {{-- BREADCRUMB END --}}

    {{-- EKLEME FORMU START --}}
    <div class="row g-6 mb-6">
        <div class="col-12">
            <div class="card mb-6">
                <h5 class="card-header">Slider Ekle</h5>
                <form class="card-body">

                    <h6>1. İçerik</h6>
                    <div class="row g-6">

                        <div class="col-md-6 col-lg-6 col-12">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="multicol-username" class="form-control" placeholder="Slider Başlık Giriniz" />
                                <label for="multicol-username">Başlık</label>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-12">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="multicol-username" class="form-control" placeholder="Slider Başlık Giriniz" />
                                <label for="multicol-username">Başlık</label>
                            </div>
                        </div>

                    </div>

                    <hr class="my-6 mx-n4" />

                    <h6>2. Görsel</h6>
                    <div class="row g-6">

                        <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="multicol-first-name" class="form-control" placeholder="John" />
                            <label for="multicol-first-name">First Name</label>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="multicol-last-name" class="form-control" placeholder="Doe" />
                            <label for="multicol-last-name">Last Name</label>
                        </div>
                        </div>

                    </div>

                  <div class="pt-6">
                    <button type="submit" class="btn btn-primary me-4">Kaydet</button>
                    <button type="reset" class="btn btn-outline-secondary">Geri</button>
                  </div>

                </form>
            </div>
        </div>
    </div>
    {{-- EKLEME FORMU END --}}

</div>
@endsection

@push('scripts')

@endpush
