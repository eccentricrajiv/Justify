<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <title>ADMIN Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<style>
 
body{
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #000;
    background-color: #3DCE65 ;

}

/* Navbar */
.navbar .dropdown-toggle::after {
    border: none;
    content: "\f107";
    font-family: "Poppins";
    font-weight: 900;
    vertical-align: middle;
    margin-left: 8px;
}

.navbar .navbar-nav .nav-link {
    margin-right: 30px;
    padding: 30px 0;
    color: var(--dark);
    font-weight: 500;
    text-transform: uppercase;
    outline: none;
}

.navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .nav-link.active {
    color: var(--primary);
}

.navbar.sticky-top {
    top: -100px;
    transition: .5s;
}

@media (max-width: 991.98px) {
    .navbar .navbar-nav .nav-link {
        margin-right: 0;
        padding: 10px 0;
    }
    

    .navbar .navbar-nav {
        border-top: 1px solid #EEEEEE;
    }
}

@media (min-width: 992px) {
    .navbar .nav-item .dropdown-menu {
        display: block;
        visibility: hidden;
        top: 100%;
        transform: rotateX(-75deg);
        transform-origin: 0% 0%;
        transition: .5s;
        opacity: 0;
    }

    .navbar .nav-item:hover .dropdown-menu {
        transform: rotateX(0deg);
        visibility: visible;
        transition: .5s;
        opacity: 1;
    }
}
/** Footer **/
.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: #777777;
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    color: var(--primary);
    margin-right: 10px;
}
.divScroll {
	Overflow-y:scroll;
height:400px;
width:100%;
}

.footer .btn.btn-link:hover {
    color: var(--primary);
    letter-spacing: 1px;
    box-shadow: none;
}

.footer .form-control {
    border-color: #777777;
}

.footer .copyright {
    padding: 25px 0;
    font-size: 15px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: var(--light);
}

.footer .copyright a:hover {
    color: var(--primary);
}.w-25 {
    width: 9%!important;
}
form.contact-form {
    background: #87CEEB;
    padding: 14px;
    border: 2px solid black;
}
.submit-button-wrapper {
    text-align: center;
}
</style>
 <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn; top: -100px;">
         <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary reallogo m-0">
                            <img src="https://dipanshutech.com/wp-content/themes/Dipanshutech/img/logo.png"  class="w-25 h-25"/>    DipanshuTech
            </h1>
         </a>
         <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
               <a href="index.html" class="nav-item nav-link active">Home</a>
               <a href="about.html" class="nav-item nav-link">About</a>
               <a href="services.html" class="nav-item nav-link">Services</a>
               <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
         </div>
      </nav><!-- End Header/Navbar -->
	  <section class="logn">
         <div class="container py-5">
         <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
               <div>
                  <div class="contact-form-wrapper d-flex justify-content-center">
                     <form action="<?php $_SERVER['PHP_SELF']; ?>" class="contact-form" method="POST">
                        <h5 class="title">   </h5>
                        <p class="description"><h4> Please login :</h4>
                        </p>
                        <div class="input-icons"><i class="fa fa-user icon"></i>
                           <input type="text" class="form-control rounded border-white mb-3 form-input" name = "user" id="user" placeholder="Username" required>
                        </div>
                        <div>
                           <input type="password" class="form-control rounded border-white mb-3 form-input" name = "pass" placeholder="Password" required>
                        </div>
                        
                        <div class="submit-button-wrapper">
                           <input type="submit" name ="submit" value="Login">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section
	   <?php
if(isset($_POST["submit"]))
{
	include "db.php";
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$sql = "SELECT * FROM login WHERE username = '$user' AND password = '$pass'";
	$query= mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($query);
    if($rowcount>0)
    {
	while($row=mysqli_fetch_assoc($query))
	{
	 //session_start();	
	 $_SESSION['username'] = $row['username'];
	 header('location:dashboard.php');
     echo '<script> window.location.href="dashboard.php";</script>' ;
    }
    }else{
	echo '<script type="text/JavaScript"> 
     alert("Invalid Credentials!");
     </script>';
   }
   }
include "footer.php";  
?>
</body>
</html>
