

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <title>Free Tour and Travel Website Tempalte | Smarteyeapps.com</title> -->
    <title>Apply For Leave</title>
    
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
<style>
    .container{
        margin-top:40px;
        margin-bottom:30px;
        
        
    }
    h2{
        color:white;
        
    }

    

    </style>
    <!-- <style>
        
        *{
            box-sizing:border-box;
            
           
            
            
 
            
            
        }
      
        
        input[type=date],
        select,textarea{
            width: 20%;
  padding-bottom: 10px ;
  margin-left: 300px ;
 box-sizing: border-box;
 padding-top:30px;
  border: none;
  border-bottom: 2px solid black;
        }

        
        input[type=text],
        select,textarea{
            width: 40%;
  padding: 5px;
  margin-left: 300px ;
  /* box-sizing: border-box; */
  padding-top:30px;
  border: none;
  border-bottom: 2px solid black;
        }

        label{
            /* padding:12px 12px 12px 0; */
            display:inline-block;
            color:black;
            padding-top:10px;

            
            margin-left:300px;

            
        }
        input[type=submit],
        select,textarea{
            width:8%;
            border:30px;
            padding:10px;
            margin-top:20px;
             border-radius:5px;
            /* box-shadow:10px 5px 5px lightgrey; */
            /* background-color:grey;
            margin-left:300px; */ 
            margin-left:300px;
            background-color:green;
            
            color:white;
        }
      
        .container{
            background-color:lightblue;
            margin-top:30px;
            margin:100px 100px;
            padding:50px;
            
        } 
        .row::after{
            content:"";
            display:table;
            clear: both;
        }
        .Form{
            margin-left:290px;
        }
      
#fromdate1
{
 padding: left 320px;
}
        
       
        </style>
</head>
<body>
    <div class="container">
<form action="/loginAction" method="post">
        @csrf -->
        <!-- <div class="Form">
                <h1>Apply For Leave</h1>
 
            </div>
        <div class="row">
            <div class="col-1">
                <label for="user">Leave Type</label>
    </div>
    
              
                <div class="col-2">
        <input type="text" name="Leavetype" id="leavetype">
</div>
    </div>
    <div class="row"> -->
<!-- <div class="col-1" >
<div class="row">
    <label for="dt">From Date</label>
    
    <input type="date" name="fromdate" id="fromdate1">

    <label for="tdt">To Date</label>
    
    <input type="date" name="todate" id="todate1">

</div>
    </div>

    <div class="row">
            <div class="col-1">
                <label for="des">Description</label>
    </div>
    
              
                <div class="col-2">
        <input type="text" name="description" id="description">
</div>
    </div>


<input type="submit" id="sub" name="sub">
    </div>

    </form> -->
    <!-- @if(session('error'))
    <p style="color:red">
    {{session('error')}}
    </p>
    @endif -->


    
        
<body>
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
                               <li class="bgb"><i class="far fa-clock"></i> 09:00AM — 06:00PM</li>
                               <li class="bgb"><i class="fas fa-phone-alt"></i> +91 8963542178</li>
                               <li class="d-none d-lg-block"><button type="button" class="btn btn-outline-info" style="background-color:light-blue" >AdminLogin</button></li>
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
                               <!-- <li><a href="blog.html">Blog</a></li>  -->
                               <li><a href="contact">Contact Us</a></li> 
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
     
<form action="/applyAction" method="post" autocomplete="off">
    @csrf
   <div class="container bg-success ">
    
    <h2 style="text-align:center;" >Apply For Leave</h2>

    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4">
         <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
         </div>
         <div class="form-group">
            <label for="name">Select leave type:</label>
            <input type="text" name="leavetype" id="leavetype" class="form-control">
         </div>
         <div class="form-group">
            <label for="name">From Date:</label>
            <input type="date" name="fromdate" id="fromdate" class="form-control">
         </div>
         <div class="form-group">
            <label for="name">To Date:</label>
            <input type="date" name="todate" id="todte" class="form-control">
         </div>
         <div class="form-group">
            <label for="name">Description:</label>
            <input type="text" name="description" id="description" class="form-control">
         </div>

         <input type="submit" name="sub" id="sub" class="btn btn-info text-white">
        
        </div>
        
       
        <div class="col-md-4"></div>


       

    </div>
   </div> 
  
</form>

<footer class="container-fluid footer">
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
                    <h4>Our services</h4>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Contact Us</a></li>
                        <!-- <li><a href="">Packages</a></li>
                        <li><a href="">Services</a></li> -->
                    </ul>
                </div>
                <!-- <div class="col-md-3 destinations">
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
            </div> -->
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
    </footer>    
    
</body>
</html>