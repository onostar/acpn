<?php

    session_start();

    include "server.php";
    /* if($connectdb){
        echo "db connected";
    }
    else{
        echo "not connected";
    } */
    $_SESSION['payment_stats'] = "You have not made payment";

    if(isset($_POST['submit_payment'])){
        $tdate = $_POST['tdate'];

        $_SESSION['tdate'] = $tdate;
        $pharmacy_name = $_POST['pharmacy_name'];
        $depositor_name = $_POST['depositor_name'];
        $depositor_position = $_POST['depositor_position'];
        $supretendent_pharmacist = $_POST['supretendent_pharmacist'];
        $bank = $_POST['bank'];
        $payment_ref = $_POST['payment_ref'];
        $amount_paid = $_POST['amount_paid'];
        $payment_evidence = $_POST['payment_evidence'];
        $pcn_payment = $_POST['pcn_payment'];
        $payment_status = 0;
        
        $receipt_number = "";
        $sql_insert = "INSERT INTO payments (tdate, pharmacy_name, depositor_name, depositor_position, supretendent_pharmacist, bank, payment_ref, amount_paid, payment_evidence, pcn_payment, payment_status, receipt_number) VALUES ('$tdate', '$pharmacy_name', '$depositor_name', '$depositor_position', '$supretendent_pharmacist', '$bank', '$payment_ref', '$amount_paid', '$payment_evidence', '$pcn_payment', '$payment_status', '$receipt_number')";
        $_SESSION['paid'] = "";
        $run_sql = mysqli_query($connectdb, $sql_insert);

        if($run_sql){
            
        $_SESSION['paid'] = "Payment submitted successfully!";
            header("Location: members.php");
        }else{
            echo "not submitted";
        }
    }else{
        header("Location: members.php#makePayment");
    }

    /* $tdate = $_POST['tdate'];
    $pharmacy_name = $_POST['pharmacy_name'];
    $depositor_name = $_POST['depositor_name'];
    $depositor_position = $_POST['depositor_position']; */
    $_SESSION['supretendent_pharmacist'] = $supretendent_pharmacist;
?>