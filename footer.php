


<head>
  
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<style>
body 
{
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
</style>




</head>





<!-- Footer Start -->
      <section class="bg-dark">
         <div class="container py-5 text-body footer ">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <h3 class="text-light mb-4">Address</h3>
                 <p class="text-white">DIPANSHU TECH Solutions Pvt. Ltd.
                 214 SF, 2nd floor, Meridian View Building Alpha Commercial Belt Greater Noida, India</p>
                  <p class="mb-2"><i class="fa fa-map-marker-alt text-primary terms me-3"></i>Address Dipanshutech</p>
                  <p class="mb-2"><i class="fa fa-phone-alt text-primary terms me-3"></i>+91 - 1234567890</p>
                  <p class="mb-2"><i class="fa fa-envelope text-primary terms me-3"></i>admin@dipanshutech.com</p>
                  <div class="d-flex pt-2">
                     <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-twitter terms"></i></a>
                     <a class="btn btn-square btn-outline-body me-1 terms" href=""><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-square btn-outline-body me-1 terms" href=""><i class="fab fa-youtube"></i></a>
                     <a class="btn btn-square btn-outline-body me-0 terms" href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <h3 class="text-light mb-4 ser-property">Home</h3>
                  <a class="btn btn-link" href="">About</a>
                  <a class="btn btn-link" href="">Services</a>
                  <a class="btn btn-link" href="">Portfolio</a>
                  <a class="btn btn-link" href=""> FAQs</a>
                  <a class="btn btn-link" href="">Contact</a>
               </div>
               <div class="col-lg-3 col-md-4">
                  <h3 class="text-light mb-4 ser-property">Social Media</h3>
                  <a class="btn btn-link" href="">Facebook</a>
                  <a class="btn btn-link" href="">Instagram</a>
                  <a class="btn btn-link" href="">Twitter</a>
                  <a class="btn btn-link" href="">Youtube</a>
                  <a class="btn btn-link" href="">flickr</a>
               </div>
               <div class="col-lg-3 col-md-4">
                  <h3 class="text-light mb-4 ser-property">Quick Links</h3>
                  <a class="btn btn-link" href="">About Us</a>
                  <a class="btn btn-link" href="">Contact Us</a>
                  <a class="btn btn-link" href="">Our Services</a>
                  <a class="btn btn-link" href="">Terms & Condition</a>
                  <a class="btn btn-link" href="">Support</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer End -->

