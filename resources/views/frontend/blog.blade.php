@extends('frontend.layout.main')
@section('main.container')

    <body>
      
 <!-- ################# Header Starts Here #######################--->       
      

    <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Blog</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Blog</li>
                </ul>
            </div>
        </div>
    </div>
       
     
      <!--################### Blog Starts Here #######################--->  
     
        <div class="blog container-fluid">
            <div class="container">
                
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
                    <div class="col-md-4">
                        <div class="blogcol">
                            <img src="assets/images/packages/p4.jpg" alt="">
                              <span>Oct 12, 2019</span> 
                              <h4>Journeys Are Best Measured In New Friends</h4> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blogcol">
                            <img src="assets/images/packages/p5.jpg" alt="">
                              <span>Oct 12, 2019</span> 
                              <h4>Journeys Are Best Measured In New Friends</h4> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blogcol">
                            <img src="assets/images/packages/p6.jpg" alt="">
                              <span>Oct 12, 2019</span> 
                              <h4>Journeys Are Best Measured In New Friends</h4> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
       @endsection
        
   <!--################### Footer Starts Here #######################--->        
        
    

    </body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
