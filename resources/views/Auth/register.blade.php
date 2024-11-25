<!DOCTYPE html>
<html lang="en">

<head>
  @include('header');
  {{-- <title>Register users</title> --}}
  <title>{{$title}}</title>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="/template/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Room Chatbox</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-2 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Đăng ký tài khoản</h5>
                    <p class="text-center small">Nhập thông tin cá nhân của bạn</p>
                  </div>

                  <form class="row g-2 needs-validation" method="POST">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Tên của bạn:</label>
                      <input type="text" name="name" class="form-control">
                      @error('name')<small style="color: red;">{{$message}}</small>@enderror
                      {{-- <div class="invalid-feedback">Please, enter your name!</div> --}}
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email:</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control">
                        {{-- <div class="invalid-feedback">Please choose a username.</div> --}}
                      </div>
                      @error('email')<small style="color: red;">{{$message}}</small>@enderror
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mật khẩu:</label>
                      <input type="password" name="password" class="form-control">
                      @error('password')<small style="color: red;">{{$message}}</small>@enderror
                      {{-- <div class="invalid-feedback">Please enter your password!</div> --}}
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Xác thực mật khẩu:</label>
                        <input type="password" name="confirmPassword" class="form-control">
                        @error('confirmPassword')<small style="color: red;">{{$message}}</small>@enderror
                        {{-- <div class="invalid-feedback">Please enter your password!</div> --}}
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Đăng ký</button>
                    </div>
                    <div class="col-12">
                      <p class="sma ll mb-0">Bạn đã có tài khoản? 
                        <a href="{{route('formLogin')}}">Đăng nhập</a>
                        {{-- <a href="#">Log in</a> --}}
                      </p>
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