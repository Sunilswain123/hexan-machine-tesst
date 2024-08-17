<?php
if(isset($_POST['g-recaptcha-response'])){
     require_once 'dbconnection.php';
     //validate captcha
     $secretkey="6Lc3cigqAAAAAB_kV2IFSvzDomI2kM5eqx-IWGWg";
     $ip=$_SERVER['REMOTE_ADDR'];
     $response=$_POST['g-recaptcha-response'];
     $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
     $fire=file_get_contents($url);
     $data=json_decode($fire);
     //capture form data and validate;
     $email=$_POST['email'];
     $password=$_POST['password'];
     $check="SELECT * FROM registration WHERE email='$email' AND password='$password'";
     $response=$connection->query($check);
     if($response->num_rows> 0 && $data->success==true){
        session_start();
        $details=$response->fetch_assoc();
        $_SESSION["login"] = true;
        $_SESSION["username"]=$details['username'];
        header('location:welcome.php');
     }
     else{
        echo "<script>alert('error while login try again!!')
              window.location.href = 'login_page.php';
             </script>";
     }
}
else{
    echo "<script>alert('recaptcha error')
     window.location.href = 'login_page.php';
    </script>";
}
?>