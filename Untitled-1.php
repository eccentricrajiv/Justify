<html>
    <body>
        <form action = "<?php $_SERVER[''PHP_SELF]; ?>" method = "post">
            Email:<input type = "email" name = "email"></br><br/>
            Subject:<input type = "text" name = "subject"></br><br/>
            Message:<textarea name = "message" rows = '15' cols = '40'></textarea></br><br/>
            <input type = "submit" name = "submit">

            </form>
            <?php
            if(isset($_POST['submit'])){
                $message = $_POST['message'];
                $subject = $_POST['subject'];
            } 
            
            
            
            
            ?>