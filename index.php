<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Login </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/fav.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login-style.css">
</head>
<body>
    <div class="container-fluid bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 login-card">
                    <div class="row">
                        <div class="col-md-5 detail-part">

                        </div>
                        <div class="col-md-7 logn-part">
                          <div class="row">
                              <div class="col-lg-10 col-md-12 mx-auto">
                                  <div class="logo-cover">
                                       
                                   </div>
                                   <form>
                                    <div class="form-cover">
                                        <div class="form-group">
                                         <label>Username</label>
                                         <input placeholder="Enter Username" type="text" name="user" id="email" class="form-control ">
                                         <div class="invalid-feedback">Please enter username.</div>
                                         </div>
                                         <div class="form-group">
                                         <label>Password</label>
                                         <input Placeholder="Enter Password" id="password" name="password" type="password" class="form-control" >
                                         </div>
                                         <div class="row form-footer">
                                             <div class="col-md-6 forget-paswd">
                                                 <label><input type="checkbox" checked="checked" name="remember"  id="rememberme"> Remember me</label>  
                                             </div>
                                             
                                             <div class="col-md-12 button-div">
                                                 <button class="btn btn-primary" id="signInBtn" type="submit">LOGIN</button>
                                             </div>
                                             <div class="col-md-12">
                                                <small class="signInResponse text-danger"></small>
                                             </div>
                                         </div>
                                    </div>
                                   </form>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="js/lib/jquery/jquery.min.js"></script>
<script src="js/lib/bootstrap/js/popper.min.js"></script>
<script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/sidebarmenu.js"></script>
<script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/common.js"></script>
<script src="js/login.js"></script>
</html>