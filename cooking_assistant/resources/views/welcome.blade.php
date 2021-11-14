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
                            <li><a href="#about">About</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#recipe">Recipe</a></li>
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

<!-- carousel slide part start -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="{{asset('frontend/images/Slider2.jpg')}}" class="d-block w-100" alt="foodimage" style="height:480px; opacity:0.5 !importanr;">
      <div class="carousel-caption d-none d-md-block">
      <center><h3 style="margin-bottom:250px;font-size:60px;color:white;">Welcome To Cooking Assistant</h3></center>
        <h5 style="color:white;">Add your ingredients to get started</h5>
        <p style="color:white;">Unlock your recipes</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{asset('frontend/images/Slider3.jpg')}}" class="d-block w-100" alt="foodimage"
      style="height:480px;">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:white;">Tell us what Ingredients you Have</h5>
        <p style="color:white;">And Get The Recipes like magic!</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{asset('frontend/images/Slider1.jpg')}}" class="d-block w-100" alt="foodimage" style="height:480px;">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:white;">Do you have nothing to eat?</h5>
        <p style="color:white;">Let us know what ingredient you have!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- carousel slide part end -->


<!-- About area start -->
<div class="welcome_parts" id="about">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="left_part">
                    <img src="{{asset('frontend/images/aboutimage.png')}}" alt="welcomeimage">
                </div>
            </div>
            <div class="col-6">
                <div class="right_part">
                    <h2><i>Welcome</i> <br> <spam style="color: #131230;">to Your Cooking Assistant</spam></h2>
                    <p>Do you ever stand in front of your fridge or are you in the kitchen, knowing you have some food but are convinced there's 
                     nothing at all to actually make with it? Well, the nights of random groceries are about to get a whole lot better, because here we are to help you with recipes with the exact ingredients you have. <br><br>
                     Your Cooking Assistant will help you avoid the dreaded thought of "I have nothing to eat," because it will literally tell you what to make with a box of rice and some random ingredients.
                     The website is very easy to use.</p>
                    <a href="{{url('about')}}">More...</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About area end -->


<!-- Blog part start -->
<div class="blog_part" id="blog">
  <center><h3>Blog</h3></center>
   <div class="background_image">
   <div class="image1"></div>
   <div class="image2"></div>
    <div class="container">
        <div class="part1">
            <div class="row">
            <div class="col-6">
                <div class="left_part">
                    <img src="{{asset('frontend/images/vegatables.jpg')}}" alt="foodimage">
                </div>
            </div>
            <div class="col-6">
                <div class="right_part">
                    <h4><i>Healthy</i> <br> <spam style="color: #131230;">eating basics</spam></h4>
                    <p>Eating a healthy, balanced diet is one of the most important things you can do to protect your health. In fact, up to 80% of premature heart disease and stroke can 
                        be prevented through your life choices and habits, such as eating a healthy diet and being physically active.
                        A healthy diet can help lower your risk of heart disease and stroke by: 1. improving your cholesterol levels. 
                        2. reducing your blood pressure. 3. helping you manage your body weight. 4. controlling your blood sugar.</p>
                    <a href="{{url('blog')}}">More...</a>
                </div>
            </div>
        </div>
       </div>
      <div class="part2">
        <div class="row">
            <div class="col-6">
                <div class="left_part">
                    <h4><i>8 tips for </i> <br> <spam style="color: #131230;">healthy eating</spam></h4>
                    <p>These 8 practical tips cover the basics of healthy eating and can help you make healthier choices. The key to a healthy diet is to eat the right amount of calories 
                        for how active you are so you balance the energy you consume with the energy you use. If you eat or drink more than your body needs, you'll put on weight because the 
                        energy you do not use is stored as fat. If you eat and drink too little, you'll lose weight. You should also eat a wide range of foods to make sure you're getting a 
                        balanced diet and your body is receiving all the nutrients it needs.</p>
                    <a href="{{url('blog')}}">More...</a>
                </div>
            </div>
            <div class="col-6">
                <div class="right_part">
                    <img src="{{asset('frontend/images/blog2.jpg')}}" alt="foodimage">
                </div>
            </div>
        </div>
       </div>
    </div>
    </div>
</div>
<!-- Blog part end -->

<!-- recipe part start -->
<div class="recipe_part" id="recipe">
    <div class="backgroud_part_recipe">
        <div class="container">
            <div class="header_part_recipe">
            <div class="row">
                <div class="col-10">
                <h4>Recipe</h4>
                <p> Eat lots of fruit and veg. It's recommended that you eat at least 5 portions of a variety of 
                    fruit and veg every day. They can be fresh, frozen, canned, dried or juiced. Getting your 5 A 
                    ay is easier than it sounds. Why not chop a banana over your breakfast cereal, or swap your 
                    usual mid-morning snack for a piece of fresh fruit? A portion of fresh, canned or frozen 
                    fruit and vegetables is 80g. A portion of dried fruit (which should be kept to mealtimes) 
                    is 30g. A 150ml glass of fruit juice, vegetable juice or smoothie also counts as 1 portion, 
                    but limit the amount you have to no more than 1 glass a day as these drinks are sugary and 
                    can damage your teeth.</p>
            </div>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="part1">
                        <img src="{{asset('frontend/images/ilish-pulao.jpg')}}" alt="foodimage">
                        <H4>Ilish Pulao</H4>
                        <p>Cut hilsa fish into pieces. Wash and drain properly. To soak excess water.</p>
                    </div>
                    <div class="part2">
                        <img src="{{asset('frontend/images/KushaMurgi.png')}}" alt="foodimage">
                          <H4>Spicy Dry Chicken </H4>
                        <p>Heat the mustard oil in a deep wok or saucepan over medium/medium-high heat.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="part3">
                        <img src="{{asset('frontend/images/chicken-chow-mein-noodles.jpg')}}" alt="foodimage">
                         <H4>Noodles</H4>
                        <p>Boil water in a pan with 4 cups water or enough to boil.</p>
                    </div>
                    <div class="part4">
                        <img src="{{asset('frontend/images/vuna-bhuna-khichuri-recipe.jpg')}}" alt="foodimage">
                         <H4>Vuna Khichuri</H4>
                        <p>Wash chickpea and soak for overnight or at least 4 hours.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="part5">
                        <img src="{{asset('frontend/images/gorurMangsho.jpg')}}" alt="foodimage">
                         <H4>Gorur Mangsho</H4>
                        <p>Cut the meat into small pieces, wash and drain properly.</p>
                    </div>
                    <div class="part6">
                        <img src="{{asset('frontend/images/eggCurry.jpg')}}" alt="foodimage">
                         <H4>Egg curry with rice</H4>
                        <p>This recipe is a great introduction to curries, who is of Bengali descent.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- recipe part end -->

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