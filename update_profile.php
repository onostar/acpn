<?php
        session_start();
        /* connect db */
        include "server.php";

        $_SESSION['paid'] = "";
        
    if(isset($_POST['update_profile'])){
        $pharmacy_exist = $_POST['pharmacy_exist'];
        $pharmacy_name= $_POST['pharmacy_name'];
        $contact_person = $_POST['pharmacist'];
        $_SESSION['sup'] = $contact_person;
        $contact_phone = $_POST['username'];
        $contact_email = $_POST['pharmacist_email'];
        $contact_address = $_POST['pharmacist_address'];
        $contact_birth_date = $_POST['contact_birth_date'];
        $contact_gender = $_POST['contact_gender'];
        $contact_pcn_reg = $_POST['contact_pcn_reg'];
        $contact_next_of_kin = $_POST['contact_next_of_kin'];
        $contact_next_of_kin_phone = $_POST['contact_next_of_kin_phone'];
        $contact_next_of_kin_address = $_POST['contact_next_of_kin_address']; 
        $pharmacy_address = $_POST['pharmacy_address'];
        $pharmacy_location = $_POST['pharmacy_location'];
        $practice_type = $_POST['practice_type'];
        $pharmacy_director = $_POST['pharmacy_director'];
        $registration_number = $_POST['registration_number'];
        $contact_passport = $_FILES['pharmacist_passport']['name'];
        /* $tempname = $_FILES['contact_passport']['tmp_name'];  */
        $folder = "users/".$contact_passport;
        
        $user_password = $_POST['user_password'];

        $sql_user_update = "UPDATE users SET  pharmacist ='$contact_person',  pharmacist_passport = '$contact_passport', pharmacist_email = '$contact_email', pharmacist_address = '$contact_address', pharmacy_name = '$pharmacy_name', pharmacy_address = '$pharmacy_address', contact_gender = '$contact_gender', contact_pcn_reg = '$contact_pcn_reg', contact_birth_date = '$contact_birth_date', contact_next_of_kin = '$contact_next_of_kin', contact_next_of_kin_phone = '$contact_next_of_kin_phone', contact_next_of_kin_address = '$contact_next_of_kin_address', pharmacy_exist = '$pharmacy_exist', pharmacy_location = '$pharmacy_location', practice_type = '$practice_type', pharmacy_director = '$pharmacy_director', registration_number = '$registration_number' WHERE username = '$contact_phone'";
        
        
        if(move_uploaded_file($_FILES['pharmacist_passport']['tmp_name'], $folder)){
            $query_update = mysqli_query($connectdb, $sql_user_update);
            if(!$query_update){
                $_SESSION['paid'] = "Update failed!";
                header("Location: members.php");
            }else{
                $_SESSION['paid'] = "Profile updated!";
                header("Location: members.php");
            }
        }else{
            $_SESSION['paid'] = "Update failed!";
            header("Location: members.php");
        }
       
    }
            

