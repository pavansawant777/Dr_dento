<?php

include 'config.php';

if(isset($_POST['login'])){
   
        $username =$_POST['username'];
       
        $user_password =$_POST['password'];
        

         // Check if email already exists
         $dup_email=mysqli_query($con, "SELECT * FROM register WHERE email =$email");
         
         if (mysqli_num_rows($dup_email)) {
            echo"
            <script>
                alert('Email is already registered.');
             </script>
             ";
         } else {


        mysqli_query($con, "INSERT INTO 'register' ('first_name', 'last_name','email','password', 'confirm_password')
         VALUES ('$first_name','$last_name','$email','$password','$confirm_password') ");
}

 
}

    ?>