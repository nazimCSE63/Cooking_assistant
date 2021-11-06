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
            <h4>Cooking Assistant</h4>
            <h3>Sign in to Account</h3>
             <div class="icon_part">
               <i class="fas fa-slash"></i></div>
             <div class="icon_link">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-google-plus-square"></i></a>
             </div>
             <p>or use your emaill account</p>
             <div class="form_part">
                 <div class="form">
                    <label for="email">Email : </label>
                     <input id="email" type="email" placeholder="Email"><br>
                    <label for="password">Password : </label>
                    <input id="password" type="password" placeholder="Password"><br>
                    <a href="">Forgot Password?</a><br>
                    <button type="submit">Login</button>
                 </div>
             </div>
            </div>
           <div class="right_part">
               <h3>Hello, Friend!</h3>
               <div class="icon_part">
               <i class="fas fa-slash"></i></div>
               <p>Fill up personal information and start journey with us.</p>
               <a href="sign.html">Sign Up</a>
           </div>
       </div>
    </div>
</div>
<!-- login part end -->
</body>
</html>