<html>
    <body>
        <form method = "POST" action = "<?php $_SERVER['PHP_SELF']; ?>">
        Email:<input type = "email" name = "email"/></br></br>
        Subject:<input type = "text" name = "subject"/></br></br>
        Message:<br/>
        <textarea name= "message" rows ="15" cols = "40"></textarea><br/><br/>
        <input type = "submit" name= "esubmit" />
        
</form>
</body>
</html>

<?php 
if(isset($_POST['esubmit'])){ 
    $to = "rajiv.y12@gmail.com";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $from = $_POST['email'];
    $headers = "From: $from";
    
mail($to, $subject, $message, $headers);
echo "<script>alert('Mail Sent')</script>";

}
?>