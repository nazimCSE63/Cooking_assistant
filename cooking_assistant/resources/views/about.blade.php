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
<!-- Header area start -->
<header class="header_part" id="home" >
    <div class="container">
        <div class="row">
           <div class="col-1"></div>
            <div class="col-2">
                <div class="logo_part"><a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" alt="logo"></a></div>
            </div>
            <div class="col-6">
                <div class="menu_part">
                    <div class="menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#about"></a></li>
                            <li><a href="#blog"></a></li>
                            <li><a href="#recipe"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="button_part">
                    <a href="{{ route('login') }}">Login</a>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</header>
<!-- Header area end -->



<!-- extra about part start -->
<div class="extra_about_part">
    <div class="container">
    <center><h3>About Page</h3></center>
    <p style="margin-top:40px;">Do you ever stand in front of your fridge or are you in the kitchen, knowing you have some food but are convinced there's nothing at all to 
        actually make with it? Well, the nights of random groceries are about to get a whole lot better, because here we are to help you with recipes with the exact ingredients you have. Your Cooking Assistant will help you avoid the dreaded thought of "I have nothing to eat," 
        because it will literally tell you what to make with a box of rice and some random ingredients.
        The website is very easy to use. All you have to do is enter the ingredients you have (or just the ones you want to cook with), and it will give you recipe options with those ingredients. The site has hundreds of ingredients in 20 different categories, including dairy, meats,
        vegetables, seasonings, fruits, baking and grains, and so on. Users can check them off under each category or type them in. And the recipes include ones with only the ingredients you have as well as some that require a 
        few additional ingredients, so if you really don't want to leave the house for butter or salt, you don't have to. Oh, and the whole thing is free!
        So, what are you making for dinner tonight?</p>
        <br>
        <br>
        <p>Do you ever stand in front of your fridge or are you in the kitchen, knowing you have some food but are convinced there's nothing at all to 
        actually make with it? Well, the nights of random groceries are about to get a whole lot better, because here we are to help you with recipes with the exact ingredients you have. Your Cooking Assistant will help you avoid the dreaded thought of "I have nothing to eat," 
        because it will literally tell you what to make with a box of rice and some random ingredients.
        The website is very easy to use. All you have to do is enter the ingredients you have (or just the ones you want to cook with), and it will give you recipe options with those ingredients. The site has hundreds of ingredients in 20 different categories, including dairy, meats,
        vegetables, seasonings, fruits, baking and grains, and so on. Users can check them off under each category or type them in. And the recipes include ones with only the ingredients you have as well as some that require a 
        few additional ingredients, so if you really don't want to leave the house for butter or salt, you don't have to. Oh, and the whole thing is free!
        So, what are you making for dinner tonight?</p>
    </div>
</div>
<!-- extra about part end -->



<!-- footer part start -->
<div class="footer_part">
     <div class="container">
      <div class="row">
         <div class="col-3">
            <div class="part1">
             <img src="{{asset('frontend/images/logo.png')}}" alt="logoimage">
             <h4><i class="fas fa-phone-alt"></i>&nbsp;+8801700-000000</h4>
             <p><i class="far fa-envelope"></i>&nbsp;contact.cooking@gmail.com</p>
             <p><i class="fas fa-map-marker-alt"></i>&nbsp;Mouchak, Dhaka, Balgladesh</p>
             </div>
         </div>
         <div class="col-3">
            <div class="part2">
             <h4>About Us</h4>
             <p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills. Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills.</p>
             <a href="#"><i class="fab fa-skype"></i></a>
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-facebook-messenger"></i></a>
             </div>
         </div>
         <div class="col-3">
            <div class="part3">
             <h4>Links</h4>
             <a href="#home"><i class="fas fa-angle-right"></i>&nbsp;HOME</a>
             <a href="#about"><i class="fas fa-angle-right"></i>&nbsp;ABOUT</a>
             <a href="#blog"><i class="fas fa-angle-right"></i>&nbsp;BLOG</a>
             <a href="#recipe"><i class="fas fa-angle-right"></i>&nbsp;RECIPE</a>
             </div> 
         </div>
         <div class="col-3">
            <div class="part4">
             <h4>Newsletter</h4>
             <p>Stay updated with our latest trends.</p>
             <form action="">
                 <input type="email" placeholder="Enter your email..." >
                 <a href=""><i class="fas fa-location-arrow"></i></a>
             </form>
             </div>
         </div>
      </div>
      </div>
     <!-- footer_end_part start -->
    <div class="footer_end_part">
        <div class="container">
            <hr>
            <p>Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This web site is made by Cooking Assintant IT Division</p>
        </div>
    </div>
    <!-- footer_end_part end -->
</div><!-- footer part end -->
   
<!-- end botton start -->
<div class="end_button">
    <a href="#home"><i class="fas fa-angle-double-up"></i></a>
</div>
<!-- end botton end -->


<!-- Bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>