<!DOCTYPE html>
<html lang="en">

<head>
    @include('header')
    <title>{{$title}}</title>
</head>

<body>
<?php ?>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="/template/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Room Chatbox</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-3 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Đăng nhập</h5>
                    <p class="text-center small">Nhập email và mật khẩu của bạn</p>
                  </div>
                  {{-- @include('Admin.alert') --}}

                  <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('formLogin') }}">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email:</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control">
                      </div>
                      @error('email')<small style="color: red;">{{$message}}</small>@enderror
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mật khẩu:</label>
                      <input type="password" name="password" class="form-control">
                      @error('password')<small style="color: red;">{{$message}}</small>@enderror
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="rememberMe">
                        <label class="form-check-label" for="rememberMe">Nhớ mật khẩu</label>
                      </div>
                    </div>

                    @error('error')<small style="color: red;">{{$message}}</small>@enderror

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Đăng nhập</button>
                    </div>

                    <div class="col-12">
                      <p class="small mb-0">Bạn chưa có tài khoản? <a href="{{ route('formRegister') }}">Đăng ký tài khoản</a></p>
                    </div>
                    @csrf
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('footer')

</body>

</html>