<?php 

include 'connect.php';

if(isset($_POST['email-section'])){
    $firstName=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    //  $checkEmail="SELECT * From signup where email='$email'";
    //  $result=$conn->query($checkEmail);
    //  if($result->num_rows>0){
        // echo "Email Address Already Exists !";
     
        $insertQuery="INSERT INTO signup(firstname,email)
                       VALUES ('$firstName','$email')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
    
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM signup WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: homepage.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>