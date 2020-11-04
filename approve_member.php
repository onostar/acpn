<?php
    session_start();
    include "server.php";

   /*  if($connectdb){
        echo "db connected";
    }
    else{
        echo "not connected";
    }
     */
    $new_number = rand(1, 1000);
    /* if(isset($_SESSION['tdate'])){
        $transdate = $_SESSION['tdate'];
    } */
    $transdate = date("Y/m/d/his");
    
    if(isset($_GET['approve'])){
        $id = $_GET['approve'];
        $select_statement = "UPDATE payments SET payment_status=1, receipt_number='ACPN/EDO/$transdate/$new_number' WHERE id = $id";


        $_SESSION['changed_status'] = "";
        $run_update = mysqli_query($connectdb, $select_statement);
        if($run_update){
            $_SESSION['msg'] = "Member Approved!";
            header("Location: admin.php#approvedMembers");
        }else{
            echo "unsuccessful";
        }
    }
    $_SESSION['id'] = $id;
