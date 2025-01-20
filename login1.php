<?php

include 'config.php';

if(isset($_POST['login'])){
   
        $username =$_POST['useremail'];
       
        $user_password =$_POST['password'];
        

         // Check if email already exists
         $dup_email=mysqli_query($con, "SELECT * FROM register WHERE email ='$username' And password='$user_password'");
         
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