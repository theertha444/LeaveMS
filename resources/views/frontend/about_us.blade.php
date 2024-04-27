@extends('frontend.layout.main')
@section('main.container')
    <body>
      
 <!-- ################# Header Starts Here #######################--->       
      
 

    <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>About Our Employee Management System</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div>
       
      <!--*************** About Us Starts Here ***************-->
   
   <section id="about" class="contianer-fluid about-us">
       <div class="container">
            <div class="row">
                <div class="col-md-7 text">
                    <h2>About Us</h2>
                    <p></p>A leave management system is a tool or software that helps 
                    businesses track and manage employee leave requests. 
                    It gives employees a self-serve portal where they can request for days off, allows managers to approve or reject the leave, and also allows 
                    the HR and finance teams access to this data.

                    <p>Leave management systems allow businesses to define leave policies, mandatory holidays, optional holidays and more.</p>

                    <h1>Benifit </h1>
                    <p>Eliminates paperwork
                      <p> Removes manual interventions</p>
                      <p> Improves communication</p>
                      <p>Offers real-time visibility of data</p>
                      
                      <p>Reflects your organization's values</p>
                   
                </div>
                <div class="col-md-5 center image">
                    <img src="assets/images/login/about.jpg" alt="">
                </div>
            </div>
       </div>
   </section>   
       
       
    <!-- ################# Our Team Starts Here#######################--->
    <!-- <section class="our-team">
        <div class="container">
            <div class="session-title row">
                <h2>Our Team</h2>
               
            </div>
            <div class="row team-row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb1.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb2.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb3.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb4.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>      -->
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
