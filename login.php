<?php
    session_start();
        
    include "server.php";

    $_SESSION['status'] = "";
    if(isset($_POST['login']) && isset($_POST['username']) && isset($_POST['user_password'])){
        $username = $_POST['username'];
        $user_password = $_POST['user_password'];

        /* $_SESSION['username'] = $username; */
        $sql_select = "SELECT * FROM  users WHERE username = '$username' AND user_password='$user_password'";
        /* $_SESSION['id'] = $_GET['id']; */
        $run = mysqli_query($connectdb, $sql_select);
        
        if(mysqli_num_rows($run)){
            $_SESSION['user'] = $username;
            if($username == 'admin'){
                header("Location: admin.php");
                $_SESSION['success'] = "Welcome Admin";
            }else{
                if($user_password == 123){
                    header("Location: change_password.php");
                }else{
                    header("Location: members.php");
                $_SESSION['success'] = "welcome ";
                }
            }
        }
        else{
            $_SESSION['status'] = "Invalid username or password!";
            header("Location: index.php");
        }
    }else{
        
        header("Location: index.php");
        $_SESSION['status'] = "Please login";
        exit();
        
    }
