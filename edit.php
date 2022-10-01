<?php
session_start();
if(!$_SESSION["username"]){
	header('location:index.php');	
}
include "header.php";

include "db.php";
?>
<html>

<head><title>Update</title>
<style>
}
.w-25 {
    width: 9%!important;
}

body{
	background: #57b846;
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
textarea.box {
	 min-width: 34rem;
	 box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
    border-radius: 16px;
    text-align: center;
    min-width: 35rem;
}
form.edit-form {
    padding-bottom: 50px;
    padding-top: 50px;
}
h2.mcdh {
    text-align: center;
}
.update-btn {
    text-align: center;
    margin-top: 20px;
}
.update-btn button {
    padding: 10px 50px;
}
</style>
</head>
<body>      
	<?php
    include "db.php";
    // if(isset($_GET['id'])){
      
	  $id = $_GET['id'];          
    $res=mysqli_query($conn,"SELECT * FROM form_details WHERE id = '$id'");				
	$row=mysqli_fetch_assoc($res);
	 
    ?>
	<?php
					if(isset($_POST['update']))
					{
						$fname = $_POST['first_name'];
						$lname = $_POST['last_name'];
						$company = $_POST['company'];
						$email= $_POST['email'];
						$phone= $_POST['phone'];
						$address= $_POST['address'];
						$date = $_POST['date'];
						$message = $_POST['message'];	
						/*$sql ="UPDATE form_details SET id = '$id', first_name='$fname',last_name='$lname',
						company='$company',email='$email',phone='$phone',address='$address',date='$date',
						message='$message' WHERE id='$id'";*/
						$sql1 = "UPDATE `form_details` SET `id`='$id',`first_name`='$fname',`last_name`='$lname',`company`='$company',`email`='$email',`phone`='$phone',`address`='$address',`date`='$date',`message`='$message' WHERE id = '$id'";
						
						
						
						$sql_run = mysqli_query($conn,$sql1);
                        if($sql_run)
			              {
				 echo '<script> alert("Data Updated Successfully!"); </script>';
				 echo "<script>window.location.href = 'dashboard.php'</script>";

				 //header("location:fetch.php");
			    }				 
             else
			 {
				 echo '<script> alert("Data not Updated"); </script>';
			 }	
					}
?>				  
		<div class="container">
<div class="row">
			<div class="column">
			
			<form action= "" class="edit-form" method = "POST">
			<h2 class="mcdh">Modify Client Details</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Id</label>
    <input type="number" class="form-control" id="id" name = "id" value = "<?php echo $row['id']; ?>" >
    <small id="emailHelp" class="form-text"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">First Name</label>
    <input type="text" class="form-control" id="first_name" name = "first_name" value="<?php echo $row['first_name']; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" id="last_name" name = "last_name" value="<?php echo $row['last_name']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Company</label>
    <input type="text" class="form-control" id="company" name = "company" value="<?php echo $row['company']; ?>" >
  </div><div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="email" name = "email" value="<?php echo $row['email']; ?>" >
  </div><div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" class="form-control" id="phone" name = "phone" value="<?php echo $row['phone']; ?>" >
  </div><div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="address" name = "address" value="<?php echo $row['address']; ?>" >
  </div><div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input type="date" class="form-control" id="date"  name = "date" name = "message" value="<?php echo $row['date']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Message</label>
    <textarea class="form-control" id="message" name = "message" ><?php echo $row['message']; ?></textarea>
  </div>
  <div class="update-btn">
  <button type="submit" name = "update" class="btn btn-primary">Update</button></div>
</form>
		</div>
		</div>
		</div>			 
			
		<!-- Footer Start -->
      <section class="bg-dark">
         <div class="container py-5 text-body footer ">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <h3 class="text-light mb-4">Address</h3>
                 <p claSS="text-white">DIPANSHU TECH Solutions Pvt. Ltd.
                 214 SF, 2nd floor, Meridian View Building Alpha Commercial Belt Greater Noida, India</p>
                  <p class="mb-2"><i class="fa fa-map-marker-alt text-primary terms me-3"></i>Address realestate</p>
                  <p class="mb-2"><i class="fa fa-phone-alt text-primary terms me-3"></i>+91 - 1234567890</p>
                  <p class="mb-2"><i class="fa fa-envelope text-primary terms me-3"></i>info@realestet.com</p>
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
                  <h3 class="text-light mb-4 ser-property">Quick Links</h3>
                  <a class="btn btn-link" href="">About Us</a>
                  <a class="btn btn-link" href="">Contact Us</a>
                  <a class="btn btn-link" href="">Our Services</a>
                  <a class="btn btn-link" href="">Terms & Condition</a>
                  <a class="btn btn-link" href="">Support</a>
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
		</body>
		</html>