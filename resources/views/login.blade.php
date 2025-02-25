<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="flex-grow row">
          <div class="mx-auto col-lg-4">
            <div class="p-5 text-left auth-form-light">
              <div class="brand-logo">
                <img src="{{  asset('assets/images/logo.jpeg') }}">
              </div>
              @if($errors->any())
              <div>
                <ul>
                  @foreach ($errors->all() as $error)

                  <h6 class="font-weight-light">{{ $error }}</h6>
                  @endforeach
                </ul>
              </div>
              @endif


              <form class="pt-3" action="{{ url('login') }}" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1"
                    placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1"
                    placeholder="Password">
                </div>
                <div class="gap-2 mt-3 d-grid">
                  <button type="submit"
                    class="btn btn-block btn-gradient-success btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                  </div>
                  <a href="#" class="auth-link text-primary">Forgot password?</a>
                </div>
                {{-- <div class="gap-2 mb-2 d-grid">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook me-2"></i>Connect using facebook </button>
                </div> --}}
                <div class="mt-4 text-center font-weight-light"> Don't have an account? <a
                    href="{{ route('register') }}" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('layouts.js')
  <!-- endinject -->
</body>

</html>