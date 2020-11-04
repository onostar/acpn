<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Association of Community Pharmacist of Nigeria (ACPN), Edo chapter is an organisation made up of pharmacy owners in Edo state">
    <meta name="keyword" content="ACPN, pharmacies, pharmacy, pharmacist, medicine, drugs, pharmacology, acpn portal">
    <title>ACPN EDo state</title>
    
    <link rel="icon" type="image/png" href="acpn_logo.png" size="32X32">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <style>
        main{
            height:80vh;
        }
        .reg_form{
            margin-top:0;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
        
        .main_form{
            position:relative;
            top:0vh;
        }
        .new_password{
            width:60%;
            margin:0 auto;
        }
        .new_password input{
            width:100%;
            margin:0 auto;
            padding:10px;
        }
        .reg_form button{
            width:40%;
            margin:0;
        }
        .reg_form button a{
            color:#fff;
            padding:10px;
        }
        .new_password .btn-float{
            display:flex;
            justify-content:center;
        }
        .status p{
            text-decoration:underline;
            color:red;
            font-size:1.1rem;
        }
        @media screen and (max-width:800px){
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
                height:100vh;
            }
            .main_form{
                margin:50px auto;
                width:80%;
            }
            .new_password{
                width:80%;
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
            <p><i class="fas fa-phone-alt"></i> +2348123456789</p>
        </div>
    </section>
    <header>
        <h1>
            <a href="index.php">
            <img src="acpn_logo.png" alt="acpn">
            <div class="title">ACPN<span>EDO STATE</span></div>
            </a>
        </h1>
        <h2>MEMBERSHIP PORTAL</h2>
        
    </header>
    <main>
        <div class="contents">
            <div class="bg">
                <img src="pharmacy-store.jpg" alt="form background">
            </div>
            <div class="reg_form">
                <div class="change">
                    <p>
                        
                    </p>
                </div>
                <div class="main_form">
                    <p>Enter login details</p>
                    <hr>
                    <div class="new_password">
                        <div class="status">
                            <p>
                                <?php
                                    if (isset($_SESSION['status'])){
                                        echo $_SESSION['status'];
                                        unset($_SESSION['status']);
                                    }
                                ?>
                                <?php
                                    if(isset($_SESSION['msg'])){
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }

                                    if(isset($_SESSION['change'])){
                                        echo $_SESSION['change'];
                                        unset($_SESSION['change']);
                                    }

                                    
                                ?>
                            </p>
                        </div>
                        <form class="login_form" action="login.php" method="POST">
                            <input type="text" name="username" placeholder="username" required><br><br>
                            <input type="password" name="user_password" placeholder="password"><br><br>
                            <div class="btn-float">
                                <button type="submit" name="login">Login</buton>
                               <button><a href="register.php">Register</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>All Rights Reserved &copy; 2020 ACPN, Edo state. Powered by <a href="https://appliedmacros.com">Applied Macrosystems</a></p>
    </footer>
</body>
</html>