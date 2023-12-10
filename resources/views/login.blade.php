<!DOCTYPE html>
<html>
<head>
<title>TeacherSpace</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous"></script>
      <link rel="stylesheet" href="assets/css/style1.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      </head>
<body>


<body>
      <div class="login-form">
         <div class="text">
            LOGIN
         </div>
<div class="card-body">
@if(Session::has('error'))
<div class="alert alert-danger" role="alert">
{{ Session::get('error') }}
</div>
@endif
<form action="{{ route('login') }}" method="POST">
@csrf
            <div class="field">
               <!-- <div class="fas fa-envelope"></div> -->
                 <input type="text" placeholder="Email"id="email" class="form-control" name="email" required autofocus>
               @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif

          
            </div>
            <div class="field">
               <!-- <div class="fas fa-lock"></div> -->
            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            </div>
            <button>LOGIN</button>
            <div class="link">
              Belum memiliki Akun
               <a href="/register">Register</a>
            </div>
         </form>
      </div>
   </body>
</html>
</body>
</html>