<?php
    session_start();
    header('location:login.html');
    
    $conn = mysqli_connect("localhost", "root", "") or die("not connected");
    mysqli_select_db($conn, 'userlogin');

    if(isset($_POST['signup'])){
        $uname = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);
        $cpass = mysqli_real_escape_string($conn, $_POST['confirmpass']);
        <?php
    session_start();
    header('location:login.html');
    
    $conn = mysqli_connect("localhost", "root", "") or die("not connected");
    mysqli_select_db($conn, 'userlogin');

    if(isset($_POST['signup'])){
        $uname = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);
        $cpass = mysqli_real_escape_string($conn, $_POST['confirmpass']);
        
        if ($pass != $cpass) {
            echo "Passwords do not match";
        }
        
        $query = "select * from logintable where username = '$uname'";
        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);
        
        if($num == 1){
            echo "Username already taken";
        }else{
            $reg="INSERT INTO logintable(username,email,password,confirmpass) VALUES('$uname','$email','$pass','$cpass')";
            mysqli_query($conn, $reg);
            echo "Registraion Successful";
        }
       
    }   
    
    ?>
        if ($pass != $cpass) {
            echo "Passwords do not match";
        }
        
        $query = "select * from logintable where username = '$uname'";
        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);
        
        if($num == 1){
            echo "Username already taken";
        }else{
            $reg="INSERT INTO logintable(username,email,password,confirmpass) VALUES('$uname','$email','$pass','$cpass')";
            mysqli_query($conn, $reg);
            echo "Registraion Successful";
        }
       
    }   
    
    ?>