@extends('admin.layouts.app')

@push('title')
  Genel Ayarlar
@endpush

@push('css')
@endpush

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <!-- BREADCRUMB START -->
    <div class="row g-6 mx-1">
        <nav aria-label="breadcrumb" class="d-flex justify-content-between">
            <ol class="breadcrumb breadcrumb-style1 mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">Anasayfa</a>
                </li>
                <li class="breadcrumb-item active">Genel Ayarlar</li>
            </ol>
        </nav>
    </div>
    <!-- BREADCRUMB END -->

    {{-- CONTENT START --}}
    <div class="card mb-6 mt-4">
        <div class="card-header overflow-hidden">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active waves-effect" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" role="tab" aria-selected="true">
                <span class="ri-user-line ri-20px d-sm-none"></span><span class="d-none d-sm-block">Personal Info</span></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link  waves-effect" data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab" aria-selected="false" tabindex="-1"><span class="ri-folder-user-line ri-20px d-sm-none"></span><span class="d-none d-sm-block">Account Details</span></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link waves-effect" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab" aria-selected="false" tabindex="-1"><span class="ri-facebook-fill ri-20px d-sm-none"></span><span class="d-none d-sm-block">Social Links</span></button>
            </li>
          <span class="tab-slider" style="left: 0px; width: 142.062px; bottom: 0px;"></span></ul>
        </div>

        <div class="tab-content">
          <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
            <form>
              <div class="row g-6">
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="John">
                    <label for="formtabs-first-name">First Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe">
                    <label for="formtabs-last-name">Last Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="formtabs-birthdate" class="form-control dob-picker flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
                    <label for="formtabs-birthdate">Birth Date</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941">
                    <label for="formtabs-phone">Phone No</label>
                  </div>
                </div>
              </div>
              <div class="pt-6">
                <button type="submit" class="btn btn-primary me-4 waves-effect waves-light">Submit</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect">Cancel</button>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
            <form>
              <div class="row g-6">
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe">
                    <label for="formtabs-username">Username</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="formtabs-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="formtabs-email2">
                      <label for="formtabs-email">Email</label>
                    </div>
                    <span class="input-group-text" id="formtabs-email2">@example.com</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input type="password" id="formtabs-password" class="form-control" placeholder="············" aria-describedby="formtabs-password2">
                        <label for="formtabs-password">Password</label>
                      </div>
                      <span class="input-group-text cursor-pointer" id="formtabs-password2"><i class="ri-eye-off-line"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input type="password" id="formtabs-confirm-password" class="form-control" placeholder="············" aria-describedby="formtabs-confirm-password2">
                        <label for="formtabs-confirm-password">Confirm Password</label>
                      </div>
                      <span class="input-group-text cursor-pointer" id="formtabs-confirm-password2"><i class="ri-eye-off-line"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pt-6">
                <button type="submit" class="btn btn-primary me-4 waves-effect waves-light">Submit</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect">Cancel</button>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
            <form>
              <div class="row g-6">
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="formtabs-twitter" class="form-control" placeholder="https://twitter.com/abc">
                    <label for="formtabs-twitter">Twitter</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="formtabs-facebook" class="form-control" placeholder="https://facebook.com/abc">
                    <label for="formtabs-facebook">Facebook</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="formtabs-google" class="form-control" placeholder="https://plus.google.com/abc">
                    <label for="formtabs-google">Google+</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="formtabs-linkedin" class="form-control" placeholder="https://linkedin.com/abc">
                    <label for="formtabs-linkedin">Linkedin</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="formtabs-instagram" class="form-control" placeholder="https://instagram.com/abc">
                    <label for="formtabs-instagram">Instagram</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating form-floating-outline">
                    <input type="text" id="formtabs-quora" class="form-control" placeholder="https://quora.com/abc">
                    <label for="formtabs-quora">Quora</label>
                  </div>
                </div>
              </div>
              <div class="pt-6">
                <button type="submit" class="btn btn-primary me-4 waves-effect waves-light">Submit</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect">Cancel</button>
              </div>
            </form>
          </div>
        </div>

    </div>
    {{-- CONTENT END --}}

</div>

@endsection

@push('scripts')

@endpush
