<div class="login-box">
  <div class="card card-outline card-primary">
  <div class="card-header text-center">
    <div class="login-logo">
      <a href="{{ route('test') }}" class="logo">
        <img
          src="{{ asset('img/jenkinsons-logo.png') }}"
          alt="viserhyip"
          class="img-fluid logo__is"
        />
      </a>
    </div>
  </div>
  </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to comment and explore</p>
        @include('admin.alert')
        <form action="" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        <!-- /.social-auth-links -->
  
        <p class="mb-1">
          <a href="/forget-password">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="/register" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>