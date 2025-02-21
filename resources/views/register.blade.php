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
                <img src="../../assets/images/logo.svg">
              </div>
              <h4>New here?</h4>
              @if($errors->any())
              <div>
                <ul>
                  @foreach ($errors->all() as $error)
                  <h6 class="font-weight-light">{{ $error }}</h6>
                  @endforeach
                </ul>
              </div>
              @endif


              <form action="{{ url('register') }}" class="pt-3" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" id="exampleInputUsername1"
                    placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1"
                    placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1"
                    placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password_confirmation"
                    id="exampleInputPassword2" placeholder="Confirm Password">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                  </div>
                </div>
                <div class="gap-2 mt-3 d-grid">
                  <button type="submit"
                    class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>
                <div class="mt-4 text-center font-weight-light"> Already have an account? <a href="{{ route('login') }}"
                    class="text-primary">Login</a>
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