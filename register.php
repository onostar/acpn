<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Association of Community Pharmacist of Nigeria (ACPN), Edo chapter is an organisation made up of pharmacy owners in Edo state">
    <meta name="keyword" content="ACPN, pharmacies, pharmacy, pharmacist, medicine, drugs, pharmacology, acpn portal">
    <title>ACPN registration portal</title>
    
    <link rel="icon" type="image/png" href="acpn_logo.png" size="32X32">
    <!-- <link rel="stylesheet" href="all.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .status p{
            font-size:1.3rem;
            color:red;
            text-decoration: underline;
        }
        .msg p{
            color:red;
            text-decoration:underline;
        }
        .reg_form form .inputs{
            display:flex;
            align-items:center;
            margin:0;  
        }
        .reg_form .inputs .inputData{
            width:50%;
            padding:5px;
        }
        .reg_form .inputs select{
            padding:8px;
            width:95%;
            box-shadow:2px 2px 2px rgb(18, 109, 109);
            border-radius:4px;
            border:none;
        }
        .reg_form .inputs input{
            width:90%;
            padding:8px;
            box-shadow:2px 2px 2px rgb(18, 109, 109);
            border-radius:4px;
            border:none;
        }
        .reg_form .inputs .gender{
            width:50%;
        }
        .reg_form .inputs .data label{
            margin-left:5px;
        }
        @media screen and (max-width:600px){
            .top-header .social-media{
                margin-left:0;
            }
            .top-header .social-media a{
                font-size:1.1rem;
            }
            header h1{
                margin-left:0;
            }
            header h1 a{
                width:15vw;
            }
            header h1 .title{
                font-size:2.6rem;
            }
            header h1 .span{
                font-size:.4rem;
            }
            header h2{
                margin-right:5px;
                font-size:1.2rem;
                display:none;
            }
            main{
                height:150vh;
            }
            .main_form{
                margin:30px auto;
                width:80%;
            }
            .login_form input{
                display:none;
            }
        }
    </style>
</head>
<body>
    <section class="top-header">
        <div class="social_media">
            <a target="_blank" href="#" title="follow us on facebook"><i class="fab fa-facebook"></i></a>
            <a target="_blank" href="#" title="follow us on twitter"><i class="fab fa-twitter"></i></a>
            <a target="_blank" href="#" title="follow us on instagram"><i class="fab fa-instagram"></i></a>
            <a target="_blank" href="#" title="follow us on linkedin"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="hotline">
            <p><i class="fas fa-phone-alt"></i>+2348123456789</p>
        </div>
    </section>
    <header>
        <h1>
            <a href="index.php">
            <img src="acpn_logo.png" alt="acpn">
            <div class="title">ACPN<span>EDO STATE</span></div>
            </a>
        </h1>
        <h2>Membership Portal</h2>
        <form class="login_form" action="login.php" method="POST">
            <div class="status">
                <p>
                    <?php
                        if (isset($_SESSION['status'])){
                            echo $_SESSION['status'];
                            unset($_SESSION['status']);
                        }
                    ?>
                    
                </p>
            </div>
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="user_password" placeholder="password">
            <input type="submit" name="login" value="Login">
        </form>
    </header>
    <main>
        <div class="contents">
            <div class="bg">
                <img src="pharmacy-store.jpg" alt="form background">
            </div>
            <div class="reg_form">
                
                <div class="main_form">
                    <p>Kindly fill the form below to register</p>
                    <hr>
                    <div class="status">
                        <p>
                            <?php
                                if(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                }
                            ?>
                        </p>
                    </div>
                    <form action="registration.php" method="POST" enctype="multipart/form-data">
                        <div class="inputs">
                            <div class="inputData">
                                <input type="text" id="contactPerson" name="pharmacist" required placeholder="Supritendent Pharmacist"><br><br>
                            </div>
                            <div class="inputData">
                                <input type="tel" id="contactPhone" name="username" required placeholder="Supritendent Phone Number"><br><br>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="inputData"> 
                                <input type="email" id="contactEmail" name="contact_email" required placeholder="Supritendent Email"><br><br>
                            </div>
                            <div class="inputData">
                                <input type="text" id="supritendentAdd" name="contact_address" required placeholder="Pharmacists Residential Address"><br><br>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="inputData">
                                <label for="contactDob">Date of Birth</label><br>
                                <input type="date" id="contactDob" name="contact_birth_date" required placeholder="Supritendent Date of birth" title="Supritendent Date of birth"><br><br>
                            </div>
                            <div class="inputData">
                                <select name="contact_gender">
                                    <option value="" selected>Pharmacist Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select><br><br>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="inputData">
                                <input type="text" id="contactPCN" name="contact_pcn_reg" required placeholder="PCN Registration Number"><br><br>
                            </div>
                            <div class="inputData">
                                <input type="text" id="contactNext" name="contact_next_of_kin" required placeholder="Pharmacist Next of Kin"><br><br>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="inputData">
                                <input type="text" id="contactKinAddress" name="contact_next_of_kin_address" required placeholder="Next of Kin residential address"><br><br>
                            </div>
                            <div class="inputData">
                                <input type="tel" id="contactKinDetails" name="contact_next_of_kin_phone" required placeholder="Next of Kin Phone number"><br><br>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="inputData">
                                <label for="passport">Upload Pharmacist Photograph</label><br>
                                <input type="file" id="passport" name="contact_passport" required><br><br>
                            </div>
                            <div class="inputData">
                                <input type="text" id="pharmacyName" name="pharmacy_name" required placeholder="Pharmacy Name"><br><br>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="inputData">
                                <select name="pharmacy_exist">
                                    <option value="" slected>New or existing pharmacy</option>
                                    <option value="New pharmacy">New pharmacy</option>
                                    <option value="Existing pharmacy">Exsiting pharmacy</option>
                                </select><br><br>
                            </div>
                            <div class="inputData">
                                <input type="text" id="address" name="pharmacy_address" required placeholder="Pharmacy Address"><br><br>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="inputData">
                                <select name="pharmacy_location" id="location">
                                    <option value="" selected>Select Pharmacy location</option>
                                    <option value="Aduwawa">Aduwawa</option>
                                    <option value="Agbor Park">Agbor Park</option>
                                    <option value="Country home">Country Home</option>
                                    <option value="Ekenwa">Ekenwa</option>
                                    <option value="GRA">GRA</option>
                                    <option value="Ikpoba Hill">Ikpoba Hill</option>
                                    <option value="New Benin">New Benin</option>
                                    <option value="Ring road">Ring road</option>
                                    <option value="Sapele road">Sapele road</option>
                                    <option value="Uselu">Uselu</option>
                                    <option value="Ugbowo">Ugbowo</option>
                                </select><br><br>
                            </div>
                            <div class="inputData">
                                <input type="text" id="pharmDirector" name="pharmacy_director" required placeholder="Pharmacy Director"><br><br>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="inputData">
                                <select name="practice_type" id="pharmPractice">
                                    <option value="" selected>Pharmacy practice type</option>
                                    <option value="Wholesale">Wholesale</option>
                                    <option value="Retail">Retail</option>
                                </select><br><br>
                            </div>
                            <div class="inputData">
                                <input type="text" id="regNum" name="registration_number" required placeholder="Registration Number"><br><br>
                            </div>
                        </div>
                        <button type="submit" name="register">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>All Rights Reserved &copy; 2020 ACPN, Edo state. Powered by <a href="https://appliedmacros.com">Applied Macrosystems</a></p>
    </footer>
</body>
</html>