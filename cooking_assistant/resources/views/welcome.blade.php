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
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="{{asset('frontend/images/slider_3_1920_600.jpg')}}" class="d-block w-100" alt="foodimage" style="height:480px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{asset('frontend/images/slider_6_1920_600.jpg')}}" class="d-block w-100" alt="foodimage"
      style="height:480px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/images/slider_4_1920_600.jpg')}}" class="d-block w-100" alt="foodimage" style="height:480px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
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
                    <img src="{{asset('frontend/images/welcome-bg.png')}}" alt="welcomeimage">
                </div>
            </div>
            <div class="col-6">
                <div class="right_part">
                    <h2><i>Welcome</i> <br> <spam style="color: #131230;">to Cooking Assistant</spam></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt assumenda dolor nam sed, libero repellendus quis ducimus possimus, quaerat impedit, aliquid reiciendis eveniet.<br><br>  soluta eligendi modi cumque eaque velit!50Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt assumenda dolor nam sed, libero repellendus quis ducimus possimus, quaerat impedit, aliquid reiciendis eveniet accusamus.</p>
                    <a href="about.html">More...</a>
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
                    <img src="{{asset('frontend/images/deshes1.png')}}" alt="foodimage">
                </div>
            </div>
            <div class="col-6">
                <div class="right_part">
                    <h4><i>Garlic</i> <br> <spam style="color: #131230;">green beans</spam></h4>
                    <p>Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can. Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can. Be. </p>
                    <a href="blog.html">More...</a>
                </div>
            </div>
        </div>
       </div>
      <div class="part2">
        <div class="row">
            <div class="col-6">
                <div class="left_part">
                    <h4><i>Garlic</i> <br> <spam style="color: #131230;">green beans</spam></h4>
                    <p>Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can. Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can. Be. </p>
                    <a href="blog.html">More...</a>
                </div>
            </div>
            <div class="col-6">
                <div class="right_part">
                    <img src="{{asset('frontend/images/deshes2.png')}}" alt="foodimage">
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur possimus aperiam illum assumenda facere labore deleniti dolorum molestias voluptatibus ipsam adipisci odio minus sunt sed culpa obcaecati soluta, blanditiis accusantium voluptatum earum! Explicabo enim porro expedita, placeat blanditiis iste a libero dolorem dignissimos nam tempora. Nihil, ad est illo veniam animi optio eligendi explicabo quas deserunt distinctio, saepe consequuntur quod repellendus, sunt voluptate at et quia. Mollitia officiis eius ut, ipsa, ipsam dolorum odit voluptatem dolorem! Libero consequatur quia voluptate veritatis! Ea rem consequuntur aperiam fuga ipsum dolorem illo, itaque fugit hic dolores corporis adipisci, praesentium a omnis. Incidunt, harum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur possimus aperiam illum assumenda facere labore deleniti dolorum molestias voluptatibus ipsam adipisci odio minus sunt sed culpa obcaecati soluta.</p>
            </div>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="part1">
                        <img src="{{asset('frontend/images/food1.jpg')}}" alt="foodimage">
                        <H4>Mexican Eggrolls</H4>
                        <p>Face together given moveth divided form Of Seasons that fruitful.</p>
                    </div>
                    <div class="part2">
                        <img src="{{asset('frontend/images/food2.jpg')}}" alt="foodimage">
                          <H4>Mexican Eggrolls</H4>
                        <p>Face together given moveth divided form Of Seasons that fruitful.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="part3">
                        <img src="{{asset('frontend/images/food2.jpg')}}" alt="foodimage">
                         <H4>Mexican Eggrolls</H4>
                        <p>Face together given moveth divided form Of Seasons that fruitful.</p>
                    </div>
                    <div class="part4">
                        <img src="{{asset('frontend/images/food4.jpg')}}" alt="foodimage">
                         <H4>Mexican Eggrolls</H4>
                        <p>Face together given moveth divided form Of Seasons that fruitful.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="part5">
                        <img src="{{asset('frontend/images/food5.jpg')}}" alt="foodimage">
                         <H4>Mexican Eggrolls</H4>
                        <p>Face together given moveth divided form Of Seasons that fruitful.</p>
                    </div>
                    <div class="part6">
                        <img src="{{asset('frontend/images/food6.jpg')}}" alt="foodimage">
                         <H4>Mexican Eggrolls</H4>
                        <p>Face together given moveth divided form Of Seasons that fruitful.</p>
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