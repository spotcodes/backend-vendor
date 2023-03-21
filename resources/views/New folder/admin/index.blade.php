<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_assets/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Admin </b>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <a href="#">
    <p class="login-box-msg">{{Config::get('constants.site_name')}}</p>
</a>
     <!--- <p class="login-box-msg">Sign in to Admin Panel</p>--->

      <form action="{{route('admin.auth')}}" method="post">
        @csrf

        <div class="alert alert-danger" role='alert'>
          {{ session('error') }}
         
        </div>

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
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('admin_assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin_assets/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
<script type="text/javascript">
        setTimeout(function () {
  
            // Closing the alert
            $('.alert').alert('close');
        }, 3000);
    </script>