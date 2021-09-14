<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="icon/all.css">
    <link rel="stylesheet" href="icon/icofont.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="position: relative; overflow-x: hidden;">
    <div id="signup" class="signpg contain">
        <div class="left">
            <div class="tittle">
                <h1>Chatme </h1>
            </div>
            <div class="login-with">
                <a href="" class="goggle">
                    <i class="icon icofont-google-plus"></i>
                    Google +
                </a>
                <!-- <a href="" class="facebook">
					<i class="icon icofont-twitter"></i>
					Twitter
				</a> -->
                <a href="" class="facebook">
                    <i class="icon icofont-facebook"></i>
                    Facebook
                </a>
            </div>
            <span class="alt">or Register with</span>
            <div class="form" method="POST">
                <div class="Seterr">
                    <span class="err"></span>
                </div>
                <form action="" method="post">
                    <div class="field">
                        <input type="text" placeholder="First name" name="Fname" id="Fname">
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Last name" name="Lname" id="Lname">
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Email address" name="Email" id="Email">
                    </div>
                    <div class="field">
                        <input type="tell" placeholder="Phone number" name="Phone" id="Phone">
                    </div>
                    <div class="loc field">
                        <select class="bge" name="Country" id="Country">

                        </select>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Set Password" name="Pass" id="Pass">
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Confirm Password" name="Cpass" id="Cpass">
                    </div>
                    <div class="diff field">
                        <input type="checkbox" placeholder="agr" name="Agr" 🇫🇲 value="true" id="agr"> <span>
                            Agree to the terms of service
                        </span>
                    </div>
                    <div class="field">
                        <input type="submit" value="Register" name="Reg" id="Reg">
                    </div>
                </form>
                <span class="qs"> have an account ? <a href="login.php" class="logbt">Login</a></span>
            </div>
        </div>
        <div class="right">
            <img src="img/ig.jpg" alt="">
        </div>
    </div>

    <script src="js/script.js"></script>
    <script src="js/signup.js"></script>
</body>

</html>