<!DOCTYPE html>
<html lang="en">
<head>
    <title>How To create Bootstrap 4 Registration Form Template HTML</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>

  .register-form h1 {
    font-size: 42px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 150px 0px;
    line-height: 60px;
   
}
.register-form .form-control {
    border: none;
    background: none;
    border-bottom: 1px solid #ffc107;
    border-radius: 0px !important;
    color: #fff;
}
.register-form .form-control:focus,
.register-form .form-control:hover{
  border:none;
  margin: 0 auto;
  background: none;
  box-shadow: none;
  border-bottom: 1px solid #fff;
  color: #fff;
}

.form-group{
    color:white;
}

    </style>
<body>
<form action="/regAction" method="post" autocomplete="off">
    @csrf

  <div class="register-form mt-3 mb-3">
  

  <h2 style="text-align:center;margin:30px;" >Register</h2>
    <div class="container">
          <div class="row">
            <div class="col-md-6 d-none d-md-block bg-muted">
            <img src="assets/images/login/reg.jpg" alt="..." width="95%" height="70%" >
                <!-- <h1 class="text-center pt-3">Register<br> Here!!!</h1> -->
            </div>
            <div class="col-md-6 bg-dark">
                <form action="#" class="p-4 text-white">

                <div class="form-group">
                      <label for="name"><i class="fas fa-user"></i> Emp ID</label>
                      <input type="text" class="form-control" id="empid" name="empid">
                  </div>
                  <div class="form-group">
                      <label for="name"><i class="fas fa-user"></i> Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                      <label for="departement"><i class="fas fa-envelope"></i> Departement</label>
                      <input type="text" class="form-control" id="department" name="department">
                  </div>
                  <div class="form-group">
                      <label for="position"><i class="fas fa-envelope"></i> position</label>
                      <input type="text" class="form-control" id="position" name="position">
                  </div>



                  <div class="form-group">
                      <label for="pwd"><i class="fas fa-user"></i>User Name</label>
                      <input type="text" class="form-control" id="username" name="username" >
                  </div>
                  <div class="form-group">
                      <label for="pwd"><i class="fas fa-lock"></i> Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                  
                  <input type="submit" class="btn btn-warning mb-3 mt-3 float-right" name="register">
                </form>
            </div>
          </div>
      </div>
  </div>
</form>
</body>
</html>