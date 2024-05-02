@extends('frontend.layout.main')
@section('main.container')

    <body>
      
 <!-- ################# Header Starts Here #######################--->       
      

    <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Contact Us</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
       
     
      
      <!--  ************************* Contact Us Starts Here ************************** -->


    <div style="margin-top:0px;" class="row no-margin">

        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


    </div>
    <form action="/contactAction" method="post" autocomplete="off" id="contact">
                       @csrf

    <div class="row contact-rooo no-margin">
    

        <div class="container">
            <div class="row">
          

                <div style="padding:20px" class="col-sm-7">
                    <h2 >Contact Form</h2> <br>
                    <div class="row cont-row">
                    
                        <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name"  id="name" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email" id="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="mobilenumber" id="mobilenumber" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <input type="text" name="message" id="message" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm">Send Message</button>
                        </div>
                    </div>
        </form>
                </div>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>

<script type="text/javascript">
$("#contact").validate({
    rules:
    {
        name:{
            required:true,
            minlength:4
        },
        email:
        {
            required:true,
            email:true
        },
        mobilenumber:{
            required:true,
            minlenght:10
        }
        
    }

    });

</script>
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">





                        <h2 style="margin-top:10px;">Address</h2>

                       sebastin road, <br>
                        23, Building<br>
                        Ernakulam District<br>
                        Phone:+91 8974569823<br>
                        Email:ourwebsite@gmail.com<br>
                        Website:www.leavemscom<br>







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
