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
            <h4>Cooking Assistant</h4>
            <img src="{{asset('frontend/images/logo.png')}}" alt="logoimage">
             <h5>Already have an account?</h5>
              <a href="login.html">Sign In</a>
          </div>
      </div>
      <div class="right_part">
          <h3>Sign Up</h3>
          <div class="form_part">
             <div class="form">
                <label for="name">Full Name : </label>
                <input id="name" type="text" placeholder="Name"><br>
                <label for="email">Email Address : </label>
                <input id="email" type="email" placeholder="Email"><br>
                <label for="password">Password : </label>
                <input id="password" type="password" placeholder="Password" style="margin-left: 77px;"><br>
                <label for="cpassword">Conform Password : </label>
                <input id="cpassword" type="password" placeholder="Conform Password"><br>
                <button type="submit">Sign Up</button>
             </div>
         </div>
      </div>
       </div>
    </div>
</div>
<!-- sign up part end -->
</body>
</html>