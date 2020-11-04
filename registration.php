<?php
        session_start();
        /* connect db */
        include "server.php";

        /* if($connectdb){
            echo "db connected";
        }
        else{
            echo "not connected";
        } */

        $_SESSION['msg'] = "";
        
    if(isset($_POST['register'])){
        $pharmacy_exist = $_POST['pharmacy_exist'];
        $pharmacy_name= ucfirst($_POST['pharmacy_name']);
        $contact_person = ucwords($_POST['pharmacist']);
        $_SESSION['sup'] = $contact_person;
        $username = $_POST['username'];
        $contact_email = $_POST['contact_email'];
        $contact_address = $_POST['contact_address'];
        $contact_birth_date = $_POST['contact_birth_date'];
        $contact_gender = $_POST['contact_gender'];
        $contact_pcn_reg = $_POST['contact_pcn_reg'];
        $contact_next_of_kin = ucwords($_POST['contact_next_of_kin']);
        $contact_next_of_kin_phone = $_POST['contact_next_of_kin_phone'];
        $contact_next_of_kin_address = $_POST['contact_next_of_kin_address']; 
        $pharmacy_address = $_POST['pharmacy_address'];
        $pharmacy_location = $_POST['pharmacy_location'];
        $practice_type = $_POST['practice_type'];
        $pharmacy_director = $_POST['pharmacy_director'];
        $registration_number = $_POST['registration_number'];
        $contact_passport = $_FILES['contact_passport']['name'];
        /* $tempname = $_FILES['contact_passport']['tmp_name'];  */
        $folder = "users/".$contact_passport;
        date_default_timezone_set("Africa/Lagos");
        $registration_date = date("Y-m-d");
        /* $reg_status = 0; */
        $user_password = 123;

        

        $sql_user_input = "INSERT INTO users (username, pharmacist, pharmacist_passport, pharmacist_email, pharmacist_address, pharmacy_name, pharmacy_address, user_password, contact_gender, contact_pcn_reg, contact_birth_date, contact_next_of_kin, contact_next_of_kin_phone, contact_next_of_kin_address, pharmacy_exist, pharmacy_location, practice_type, pharmacy_director, registration_number, registration_date) VALUES ('$username', '$contact_person', '$contact_passport', '$contact_email', '$contact_address', '$pharmacy_name', '$pharmacy_address', '$user_password', '$contact_gender', '$contact_pcn_reg', '$contact_birth_date', '$contact_next_of_kin', '$contact_next_of_kin_phone', '$contact_next_of_kin_address', '$pharmacy_exist', '$pharmacy_location', '$practice_type', '$pharmacy_director', '$registration_number', '$registration_date')";

        /* $sql_inserted = mysqli_query($connectdb, $sql_input); */

        $sql_check_user = "SELECT * FROM users WHERE username= '$username'";
        $check_user = mysqli_query($connectdb, $sql_check_user);
        
      if(mysqli_num_rows($check_user) > 0){
        $_SESSION['msg'] = "User already exist!";
        header("Location: register.php");
        
      }else{
            if(move_uploaded_file($_FILES['contact_passport']['tmp_name'], $folder)){
            $sql_insert_users = mysqli_query($connectdb, $sql_user_input);
            if(!$sql_insert_users){
                echo "user not created";
            }else{
                    echo "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>ACPN reg successful</title>
                        <style>
                            *{
                                margin:0;
                                padding:0;
                            }
                            body{
                                display:flex;
                                flex-direction:column;
                                justify-content:center;
                                align-items:center;
                                background:#0ab;
                            }
                            .contact_img{
                                position:absolute;
                                top:0;
                                left:0;
                                width:100%;
                                height:100vh;
                            }
                            .contact_img img{
                                width:100%;
                                height:100%;
                            }
                            .contact_img:after{
                                content:'';
                                position:absolute;
                                top:0;
                                left:0;
                                width:100%;
                                height:100vh;
                                background:rgba(36, 34, 34, 0.8);
                            }
                            .contact_success{
                                position:absolute;
                                top:20vh;
                                background:rgb(18, 109, 109);
                                color:#fff;
                                padding:20px;
                                box-shadow:2px 2px 2px #c4c4c4;
                                font-size:1.2rem;
                                text-align:center;
                                animation:1s zoomOut 1;
                            }
                            @keyframes zoomOut{
                                0%{
                                    opacity:0;
                                    transform:scale(0);
                                }
                                100%{
                                    opacity:1;
                                    transform:scale(1);
                                }
                            }
                            .contact_success button{
                                background:#fff;
                                margin-top:10px;
                                tranistion:.5s all;
                                border:none;
                                padding:10px;
                            }
                            .contact_success button a{
                                color:#000;
                                text-decoration:none;
                                padding:10px;
                            }
                            .contact_success button:hover{
                                background:rgb(20, 73, 73);
                            }
                            .contact_success button a:hover{
                                color:#fff;
                            }
                        </style>
                    </head>
                    <body>
                        <div class='contact_img'>
                            <img src='pharmacy-store.jpg' alt='acpn'>
                        </div>
                        <div class='contact_success'>
                            <p>Registration successful!</p>
                            <button><a href='index.php'>Ok</a></button>
                        </div>
                    </body>
                    </html>";
                }
            }else{
                $_SESSION['msg'] = "Passport not accepted!";
                header("Location: register.php");
            }
        }
       
    }
            