<?php
    session_start();
    
    include "server.php";
    $_SESSION['msg'] = "";
    if(isset($_POST['create_user'])){
        $username = $_POST['contact_phone'];
        $pharmacist = $_POST['pharmacist'];
        $user_password = 123;
        $pcn_reg = $_POST['contact_pcn_reg'];
        date_default_timezone_set("Africa/Lagos");
        $reg_date = date("Y-m-d");

        $sql_create_users = "INSERT INTO users(username, user_password, pharmacist, contact_pcn_reg, registration_date) VALUES('$username', '$user_password', '$pharmacist', '$pcn_reg', '$reg_date')";

        $run_create = mysqli_query($connectdb, $sql_create_users);

        if(!$run_create){
            $_SESSION['msg'] = "User not created";
            header("Location: admin.php");
        }else{
            $_SESSION['msg'] = "User \"$pharmacist\" created";
            header("Location: admin.php");
        }
    }