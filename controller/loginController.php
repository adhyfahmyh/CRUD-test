<?php
	
	include '../conn.php';
	
	// if (isset($_POST['submit'])){
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $cek = mysqli_query($conn, "select * from users WHERE username='$username' AND password='$password'");
        if (mysqli_num_rows($cek) > 0){
            $c = mysqli_fetch_array($cek);
            $_SESSION['username'] = $c['username'];
            $_SESSION['password'] = $c['password'];
            $_SESSION['name'] = $c['name'];
            header("location:../page/home.php");
        }else{
            die();
        }
    // }
?>