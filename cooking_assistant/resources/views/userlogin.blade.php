<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Cooking Assistant</title>
    <link rel="shortcut icon" href="{{asset('frontend/images/f-icon.png')}}">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
     <!-- fontawesome link -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <!-- fontawesome download link -->
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.min.css')}}">
    
    <!-- External css -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>
<body>
<!-- login part start -->
<div class="login_part">
   <div class="baceground_image_login">
    <div class="layout">
        <div class="left_part">
            <a href="{{url('/')}}"><h4>Cooking Assistant</h4></a>
            <h3>Sign in to Account</h3>
             <div class="icon_part">
               <i class="fas fa-slash"></i></div>
             <div class="form_part">
                 <form method="post" action="{{ route('login') }}">
                 @csrf
                    <label for="email" style="font-size:18px;"><b>Email</b>&nbsp : </label>
                    <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><br>
                    @if (session('error'))
                        <strong style="color:red;margin-left:145px;">{{ session('error') }}</strong>
                    @endif
                    <br>
                    <label for="password" style="font-size:18px;"><b>Password</b>&nbsp : </label>
                    <input id="password" type="password" placeholder="Password" name="password" required autocomplete="current-password"><br>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                           Forgot Password?
                        </a>
                    @endif
                    <button type="submit">Login</button>
                 </form>
             </div>
            </div>
           <div class="right_part">
               <h3>Hello, Friend!</h3>
               <div class="icon_part">
               <i class="fas fa-slash"></i></div>
               <p>Fill up personal information and start journey with us.</p>
               <a href="{{ route('register') }}">Sign Up</a>
           </div>
       </div>
    </div>
</div>
<!-- login part end -->
</body>
</html>