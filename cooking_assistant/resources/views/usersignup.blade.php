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
<!-- sign up part start -->
<div class="sign_part">
   <div class="baceground_image_signin">
    <div class="layout">
      <div class="left_part">
          <img src="{{asset('frontend/images/slide5.jpg')}}" alt="signbackgroundimage">
          <div class="overlay">
            <div class="header_name_part"><a href="{{url('/')}}"><h4>Cooking Assistant</h4></a></div>
            <div class="logo_show_part"><a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" alt="logoimage"></a></div>
             <h5>Already have an account?</h5>
            <div class="botton_part"><a href="{{ route('login') }}">Login</a></div>
          </div>
      </div>
      <div class="right_part">
          <h3>Sign Up</h3>
          <div class="form_part">
             <form method="POST" action="{{ route('register') }}">
              @csrf
                <label for="name" style="font-size:18px;"><b>Full Name</b>&nbsp : </label>
                <input id="name" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br>
                <label for="email" style="font-size:18px;"><b>Email Address</b>&nbsp  : </label>
                <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email"><br>
                <label for="password" style="font-size:18px;"><b>Password</b>&nbsp  : </label>
                <input id="password" type="password" placeholder="Password" style="margin-left: 85px;" name="password" required autocomplete="new-password"><br>
                <label for="cpassword" style="font-size:18px;"><b>Conform Password</b>&nbsp  : </label>
                <input id="cpassword" type="password" placeholder="Conform Password" name="password_confirmation" required autocomplete="new-password"><br>
                <button type="submit">Sign Up</button>
             </form>
         </div>
      </div>
       </div>
    </div>
</div>
<!-- sign up part end -->
</body>
</html>