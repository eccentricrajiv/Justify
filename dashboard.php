<?php
session_start();
if(!$_SESSION["username"]){
	header('location:index.php');	
}
include "header.php";
include "db.php";
//include "sidebar.php";
?>

<style><?php include 'C:\xampp\htdocs\justify\pagination.css'; ?></style>
  <div id="admin-content">
      <div class="container">
          <div class="row align-items-center justify-content-center">
              <div class="col-md-10">
                  <h2 class="admin-heading text-center my-3"><strong>All client details</strong></h2>
              </div>	
              <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'today')">Todays Meeting</button>
  <button class="tablinks" onclick="openCity(event, 'category')">Categories</button>
  <a href ="contact-form.php"><button class="tablinks" onclick="openCity(event, 'tomorrow')">Add New Client</button></a>
</div>

<div id="today" class="tabcontent" <?php //include "todays.php"; ?>>
  </div>

<div id="category" class="tabcontent"> 
</div>

<div id="add-new" class="tabcontent"  <?php  ?>  >
</div>
			   <?php 
				  /* Calculate Offset Code */
                  $limit = 5;
                  if(isset($_GET['page'])){
                   $page = $_GET['page'];
                  }
				  else{
                   $page = 1;
                  }
                   $offset = ($page - 1) * $limit;				  
                  /* select query of user table with offset and limit */
                  $sql = "SELECT * FROM form_details ORDER BY id DESC LIMIT {$offset},{$limit}";
                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
				  
				  //$sql = "SELECT * FROM form_details WHERE date = curdate()";
				  
                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
				  
				  
                  if(mysqli_num_rows($result) > 0){
					  
                ?>
                  <table class="table table-bordered">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>Comapny</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Message</th>
                          <th>Date</th>
                          <th>Action</th>    
                      </thead>
                      <tbody>
                        <?php
                          $serial = $offset + 1;
                          while($row = mysqli_fetch_assoc($result)) {
                        ?>
                         <tr>
                           <td class='id'><?php echo $serial; ?></td>
                           <td><?php echo $row['first_name'] . " ". $row['last_name'];?></td>
                           <td><?php echo $row['company']; ?></td>
                           <td><?php echo $row['email']; ?></td>
                           <td><a href="tel:+91<?php echo $row['phone']; ?>"><?php echo $row['phone']; ?></a></td>
						   <td><?php echo $row['address']; ?></td>
                           <td><?php echo $row['message']; ?></td>   
                           <td><?php echo $row['date']; ?></td>   
						   <td><a href = "edit.php?id=<?php echo $row['id']; ?>";">Edit</a>
                          </tr>
                        <?php
                          $serial++;
                        } ?>
                      </tbody>
                  </table>
                  <?php
                }else {
                  echo "<h3>No Results Found.</h3>";
                }
                // show pagination
                $sql1 = "SELECT * FROM form_details";
                $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                if(mysqli_num_rows($result1) > 0){

                  $total_records = mysqli_num_rows($result1);

                  $total_page = ceil($total_records / $limit);

                  echo '<ul class="pagination admin-pagination">';
                  if($page > 1){
                    echo '<li><a href="dashboard.php?page='.($page - 1).'" class="pre">Prev</a></li>';
                  }
                  for($i = 1; $i <= $total_page; $i++){
                    if($i == $page){
                      $active = "active";
                    }else{
                      $active = "";
                    }
                    echo '<li class="'.$active.'"><a href="dashboard.php?page='.$i.'">'.$i.'</a></li>';
                  }
                  if($total_page > $page){
                    echo '<li><a href="dashboard.php?page='.($page + 1).'">Next</a></li>';
                  }
                  echo '</ul>';
                }
                  ?>
              </div>
          </div>
      </div>
  </div>
  <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
<?php include "footer.php"; ?>
