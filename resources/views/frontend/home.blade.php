
 <!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Free Tour and Travel Website Tempalte | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>
      
  <!-- ################# Header Starts Here #######################        -->
       <header class="conainer-fluid">
           <div class="header-top">
               <div class="container">
                   <div class="row">
                       <div class="col-md-4 logo">
                       <img src="assets/images/login/log.png" alt="" width="70"> 
                           <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                       </div>
                       <div class="col-md-8 d-none d-md-block clldetal">
                           <ul>
                               <li class="bgb"><i class="far fa-clock"></i> 09:00AM — 05:00PM</li>
                               <li class="bgb"><i class="fas fa-phone-alt"></i> +1 323-913-4688</li>
                               <li class="d-none d-lg-block"><a href="adminlogin"><button type="button" class="btn btn-outline-info">Admin Login</button></li></a>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="header-bottom">
               <div class="container">
                   <div class="row">
                       <div id="menu" class="col-lg-8 col-md-12 d-none d-md-block navs">
                           <ul>
                               <li><a href="home">Home</a></li>
                               <li><a href="about_us">About US</a></li>
                               <!-- <li><a href="packages.html">Our Packages</a></li>
                               <li><a href="services.html">Services</a></li> -->
                               <li><a href="contact">Contact</a></li> 
                               <li><a href="applyleave">Apply Leave</a></li>
                           </ul>
                       </div>
                       <div class="col-md-4 d-none d-lg-block socials">
                            <ul>
                                <li>
                                    <i class="fab fa-facebook-square"></i>
                                </li>
                                <li>
                                    <i class="fab fa-twitter-square"></i>
                                </li>
                                <li>
                                    <i class="fab fa-instagram"></i>
                                </li>
                                <li>
                                    <i class="fab fa-linkedin"></i>
                                </li>
                            </ul>
                       </div>
                   </div>
               </div>
           </div>
       </header>  
 
        <!-- ################# Slider Starts Here #######################--->     
        
                    <!-- login page -->
        <div class="login-page bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <h3 class="mb-3">Login </h3>
                <div class="bg-white shadow rounded">
                    <div class="row">
                        <div class="col-md-7 pe-0">
                            <div class="form-left h-100 py-5 px-5">
                            <form action="/loginAction" method="post" class="row g-4">
                                @csrf
                                
                                        <div class="col-12">
                                            <label>Username<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                <input type="text" class="form-control" placeholder="Enter Username" name="username" id="username">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                                            </div>
                                        </div>

                                        <!-- <div class="col-sm-6">
                                            <a href="#" class="float-end text-primary">Forgot Password?</a>
                                        </div> -->

                                        <div class="col-12">
                                            <input type="submit" class="btn btn-primary px-4 float-end mt-4" id-="sub" name="sub">
                                        </div>
                                </form>

                                @if(session('error'))
                                 <p style="color:red">
                                {{session('error')}}
                                  </p>
                                  @endif

                            </div>
                        </div>
                        <div class="col-md-5 ps-0 d-none d-md-block">
                            <div class="form-right h-100 bg-muted text-white text-center pt-5">
                                <i class="bi bi-bootstrap"></i>
                                <img src="assets/images/login/log.jpg" alt="..." height="95%" >
                                <a href="register">
                                <button type="submit" class="btn btn-primary px-4 float-end mt-4">Register on your account</button>
                            </a>
                                <!-- <h2 class="fs-1">Welcome Back!!!</h2> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <style>
    a {
    text-decoration: none;
}
.login-page {
    width: 100%;
    height: 100vh;
    display: inline-block;
    display: flex;
    align-items: center;
}
.form-right i {
    font-size: 100px;
}
</style>
</div>
<!-- login end -->
       
        <div class="slider container-fluid">


         
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                
            

                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>



                
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
             -->
           

             <div class="carousel-inner">

            
                 <div class="carousel-item active">
                    <a href="single.html"> 
                        <img src="assets/images/slider/slider4.jpg" class="d-block w-100" alt="...">
                        
                    </a>



                     
          
                </div>  
                <!-- <div class="carousel-item">
                    <a href="single.html">
                        <img src="assets/images/slider/slider4.jpg" class="d-block w-100" alt="..." >
                        
                    </a>
                </div> -->
                
            </div>
            <!-- <a
                class="carousel-control-prev"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>


                
            </a>
            <a
                class="carousel-control-next"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->


        </div>

      
    </div>
    
    
    <!-- ******************** Travel Destination Starts Here ******************* -->
    
    <div class="travel-destination container-fluid">
        <div class="container">
           
            <div class="destination-row row">
                <div class="col-md-4 descol">
                   <div class="destcol">
                       <img src="assets/images/login/im.jpg" alt="">
                       <div class="layycover">
                            <span class="badge badge-light" ></span>
                       </div>
                   </div>
                </div>
                <div class="col-md-4 descol">
                   <div class="destcol">
                       <img src="assets/images/login/lap.jpg" alt="">
                       <div class="layycover">
                           <span class="badge badge-light"></span>
                       </div>
                   </div>
                </div>
                
                <div class="col-md-4 descol">
                   <div class="destcol">
                       <img src="assets/images/login/td.jpg" alt="">
                       <div class="layycover">
                            <span class="badge badge-light"></span>
                       </div>
                   </div>
                </div>
                
               
            </div>
        </div>
    </div>
    
    
     <!--*************** About Us Starts Here ***************-->
   
   <!-- <section id="about" class="contianer-fluid about-us">
       <div class="container">
            <div class="row">
                <div class="col-md-7 text">
                    <h2>About Smart Traveler</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. dummy text of the printing and  been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.dummy text of the has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                   
                </div>
                <div class="col-md-5 center image">
                    <img src="assets/images/about.jpg" alt="">
                </div>
            </div>
       </div>
   </section> -->
   
   
    <!--*************** Our Services Starts Here ***************-->
    
    <!-- <section class="out-services container-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Our Services</h2>
                <p>when an unknown printer took a galley of type and scrambled it to make</p>
            </div>
            <div class="serv-row row">
                <div class="col-md-4">
                   <div class="serv-col">
                       <div class="icon">
                           <i class="fas fa-plane-departure"></i>
                       </div>
                       <div class="detail">
                           <h4>Wide Variety of Tours</h4>
                           <p>Our unique matching system lets you find just the tour you want for your next holiday</p>
                       </div>
                   </div> 
                </div>
                 <div class="col-md-4">
                   <div class="serv-col">
                       <div class="icon">
                           <i class="far fa-heart"></i>
                       </div>
                       <div class="detail">
                           <h4>Highly Qualified Service</h4>
                           <p>Our unique matching system lets you find just the tour you want for your next holiday</p>
                       </div>
                   </div> 
                </div>
                 <div class="col-md-4">
                   <div class="serv-col">
                       <div class="icon">
                           <i class="far fa-comments"></i>
                       </div>
                       <div class="detail">
                           <h4>@4 x 7 Support</h4>
                           <p>Our unique matching system lets you find just the tour you want for your next holiday</p>
                       </div>
                   </div> 
                </div>
                 <div class="col-md-4">
                   <div class="serv-col">
                       <div class="icon">
                           <i class="fas fa-dollar-sign"></i>
                       </div>
                       <div class="detail">
                           <h4>Attractive Packages</h4>
                           <p>Our unique matching system lets you find just the tour you want for your next holiday</p>
                       </div>
                   </div> 
                </div>
                 <div class="col-md-4">
                   <div class="serv-col">
                       <div class="icon">
                           <i class="fas fa-map-marked-alt"></i>
                       </div>
                       <div class="detail">
                           <h4>Exciting Places</h4>
                           <p>Our unique matching system lets you find just the tour you want for your next holiday</p>
                       </div>
                   </div> 
                </div>
                 <div class="col-md-4">
                   <div class="serv-col">
                       <div class="icon">
                           <i class="fas fa-car"></i>
                       </div>
                       <div class="detail">
                           <h4>Wide Variety of Tours</h4>
                           <p>Our unique matching system lets you find just the tour you want for your next holiday</p>
                       </div>
                   </div> 
                </div>
            </div>
        </div>
    </section>
     -->
    
    <!-- ################# Popular Packages Starts Here #######################--->   
    
    <!-- <div class="popular-pack  container-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Popular packages</h2>
                <p>when an unknown printer took a galley of type and scrambled it to make</p>
            </div>
            <div class="row pack-row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pack-col">
                        <img src="assets/images/packages/p1.jpg" alt="">
                        <div class="revire row no-margin">
                            <ul class="rat">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span class="pric">
                                $750
                            </span>
                        </div>
                        <div class="detail row no-margin">
                            <h4>Amazon Cruise</h4>
                            <p>Mattis interdum nunc massa. Velit. Nonummy penatibus</p>
                        </div>
                        <div class="options row no-margin">
                            <ul>
                                <li><i class="fas fa-car"></i></li>
                                <li><i class="fab fa-fly"></i></li>
                                <li><i class="fas fa-cocktail"></i></li>
                                <li><i class="fas fa-umbrella-beach"></i></li>
                                <li><i class="far fa-bell"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pack-col">
                        <img src="assets/images/packages/p2.jpg" alt="">
                        <div class="revire row no-margin">
                            <ul class="rat">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span class="pric">
                                $750
                            </span>
                        </div>
                        <div class="detail row no-margin">
                            <h4>Amazon Cruise</h4>
                            <p>Mattis interdum nunc massa. Velit. Nonummy penatibus</p>
                        </div>
                        <div class="options row no-margin">
                            <ul>
                                <li><i class="fas fa-car"></i></li>
                                <li><i class="fab fa-fly"></i></li>
                                <li><i class="fas fa-cocktail"></i></li>
                                <li><i class="fas fa-umbrella-beach"></i></li>
                                <li><i class="far fa-bell"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pack-col">
                        <img src="assets/images/packages/p3.jpg" alt="">
                        <div class="revire row no-margin">
                            <ul class="rat">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span class="pric">
                                $750
                            </span>
                        </div>
                        <div class="detail row no-margin">
                            <h4>Amazon Cruise</h4>
                            <p>Mattis interdum nunc massa. Velit. Nonummy penatibus</p>
                        </div>
                        <div class="options row no-margin">
                            <ul>
                                <li><i class="fas fa-car"></i></li>
                                <li><i class="fab fa-fly"></i></li>
                                <li><i class="fas fa-cocktail"></i></li>
                                <li><i class="fas fa-umbrella-beach"></i></li>
                                <li><i class="far fa-bell"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    
    <!-- ################# What people say Starts Here #######################--->
    
    <!-- <div class="what-people-say container-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>What people say about Us</h2>
                <p>when an unknown printer took a galley of type and scrambled it to make</p>
            </div>
            <div class="what-people-say-row row">
                <div class="col-md-4">
                    <div class="peole-col">
                        <img src="assets/images/testimonial/member-01.jpg" alt="">
                        <p>Sed sed mattis arcu, eget porttitor urna. Vestibulum ultricies varius suscipit. Quisque imperdiet justo at eleifend feugiat. In hac habitasse platea dictumst. Etiam in turpis in urna vulputate</p>
                        <h4>James Anderson</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="peole-col">
                        <img src="assets/images/testimonial/member-02.jpg" alt="">
                        <p>Sed sed mattis arcu, eget porttitor urna. Vestibulum ultricies varius suscipit. Quisque imperdiet justo at eleifend feugiat. In hac habitasse platea dictumst. Etiam in turpis in urna vulputate</p>
                        <h4>Philip Jasmes</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="peole-col">
                        <img src="assets/images/testimonial/member-03.jpg" alt="">
                        <p>Sed sed mattis arcu, eget porttitor urna. Vestibulum ultricies varius suscipit. Quisque imperdiet justo at eleifend feugiat. In hac habitasse platea dictumst. Etiam in turpis in urna vulputate</p>
                        <h4>Jason Rose</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>   -->
    
    
    <!--################### Blog Starts Here #######################--->  
     
        <!-- <div class="blog container-fluid">
            <div class="container">
                 <div class="session-title row">
                    <h2>Our Latest Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin nisi id consequat bibendum. Phasellus at convallis elit. In purus enim, scelerisque id arcu vitae</p>
                </div>
                <div class="row blog-row">
                    <div class="col-md-4">
                        <div class="blogcol">
                            <img src="assets/images/packages/p1.jpg" alt="">
                              <span>Oct 12, 2019</span> 
                              <h4>Journeys Are Best Measured In New Friends</h4> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blogcol">
                            <img src="assets/images/packages/p2.jpg" alt="">
                              <span>Oct 12, 2019</span> 
                              <h4>Morbi sollicitudin nisi id consequat bibendum</h4> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blogcol">
                            <img src="assets/images/packages/p3.jpg" alt="">
                              <span>Oct 12, 2019</span> 
                              <h4>Journeys Are Best Measured In New Friends</h4> 
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
      <!--################### Footer Starts Here #######################--->  
          
    <!-- <footer class="container-fluid footer">
        <div class="container">
            <div class="foot-row row">
                <div class="col-md-4 address">
                    <h4>Contact Us</h4>
                    
                    <p>8th flora, 500/D Amlod road, Tender <br>
                    lane New York-1782 <br>
                    +10 367 654 345 <br>
                    contact@smarteyeapps.com</p>
                </div>
                <div class="col-md-2 qlink">
                    <h4>Conpany</h4>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Packages</a></li>
                        <li><a href="">Services</a></li>
                    </ul>
                </div>
                <div class="col-md-3 destinations">
                     <h4>Popular Destinations</h4>
                     <ul>
                         <li><a href="">Indonesia</a></li>
                         <li><a href="">India</a></li>
                         <li><a href="">Italy</a></li>
                         <li><a href="">Frencs</a></li>
                         <li><a href="">Switzerland</a></li>
                         <li><a href="">Americak</a></li>
                         <li><a href="">Australia</a></li>
                         <li><a href="">Cnada</a></li>
                         <li><a href="">England</a></li>
                     </ul>
                </div>
                <div class="col-md-3 gallery">
                   <h4>Gallery</h4>
                    <div class="row gallery-row">
                        <div class="col-4 lck">
                            <img src="assets/images/gallery/gallery_01.jpg" alt="">
                        </div>
                         <div class="col-4 lck">
                            <img src="assets/images/gallery/gallery_02.jpg" alt="">
                        </div>
                         <div class="col-4 lck">
                            <img src="assets/images/gallery/gallery_03.jpg" alt="">
                        </div>
                         <div class="col-4 lck">
                            <img src="assets/images/gallery/gallery_04.jpg" alt="">
                        </div>
                         <div class="col-4 lck">
                            <img src="assets/images/gallery/gallery_05.jpg" alt="">
                        </div>
                         <div class="col-4 lck">
                            <img src="assets/images/gallery/gallery_06.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy">
                <a href="https://www.smarteyeapps.com/">2019 © All Rights Reserved | Designed and Developed by Smarteyeapps</a>
                <span>
                    <a><i class="fab fa-github"></i></a>
                    <a><i class="fab fa-google-plus-g"></i></a>
                    <a><i class="fab fa-pinterest-p"></i></a>
                    <a><i class="fab fa-twitter"></i></a>
                    <a><i class="fab fa-facebook-f"></i></a>
                </span>
            </div>
        </div>
    </footer>     -->
    
    

    </body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
