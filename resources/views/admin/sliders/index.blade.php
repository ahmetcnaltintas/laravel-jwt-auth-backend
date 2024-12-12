@extends('admin.layouts.app')

@push('title')
    Sliderlar
@endpush

@push('css')
@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    {{-- BREADCRUMB KARTI START --}}
    <div class="row g-6 mb-6">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Anasayfa</a>
                        </li>
                        <li class="breadcrumb-item active">Tüm Sliderlar</li>
                        </ol>
                    </nav>
                    </div>
                    <div class="col-6 separators gap-3 d-flex justify-content-end">

                    <a href="{{ route('slider.create') }}">
                        <button type="button" class="btn btn-primary waves-effect waves-light">
                        <i class="ri-add-fill ri-25px me-2"></i>Slider Ekle
                        </button>
                    </a>

                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>
    {{-- BREADCRUMB KARTI END --}}

    {{-- DATA LİSTELEME START --}}
    <div class="row g-6 mb-6">
        <div class="col-12">

            {{-- DATATABLE KARTI START --}}
            <div class="card">
                <div class="card-datatable table-responsive">
                {{ $dataTable->table() }}
                </div>
            </div>
            {{-- DATATABLE KARTI END --}}

        </div>
    </div>
    {{-- DATA LİSTELEME START --}}
</div>

@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
