<?php
if(isset($_POST['submit'])){
    require_once "dbconnection.php";
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    //check email exist
    $check="SELECT * FROM registration WHERE email='$email'";
    $response=$connection->query($check);
    if($response){
      echo "<script>alert('Email already exist try to login')
      window.location.href = 'login_page.php';
      </script>";
    }
    //prepare query
    $qry="INSERT INTO registration(username, email, password, id) VALUES('$name','$email', '$password', '')";
    //Execute query
    $res=$connection->query($qry);
    if($res){
        header('location:login_page.php');
        // echo "One record submited";
    }
    else{
        echo "error:".$connection->error;
    }
    $connection->close();
}
?>