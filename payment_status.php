<?php

include "server.php";

$paymentStatus = "SELECT users.username, payments.bank FROM users, payments WHERE users.username = '$member' AND users.pharmacist = payments.supretendent_pharmacist AND payments.payment_status = 0";
                                    
$query_paymentStatus = mysqli_query($connectdb, $paymentStatus);

$check_payment = mysqli_num_rows($query_paymentStatus);

if($check_payment){
    $payments = "Processing";
}else{
    $payments =  "Approved"; 
}


echo $payments;