<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="position: relative; overflow-x: hidden;">
    <div class="logpg contain">
        <div class="left">
            <div class="tittle">
                <h1>Chatme</h1>
            </div>
            <div class="login-with">
                <a href="" class="goggle">
                    <i class="icon icofont-google-plus"></i>
                    Google +
                </a>
                <!-- <a href="" class="twitter">
					<i class="icon icofont-twitter"></i>
					Twitter
				</a> -->
                <a href="" class="facebook">
                    <i class="icon icofont-facebook"></i>
                    Facebook
                </a>
            </div>
            <span class="alt">or Login with</span>
            <div class="form">
                <div class="Seterr">
                    <span class="err"></span>
                </div>
                <form action="">
                    <div class="field">
                        <input type="text" placeholder="Email or Phone" name="Login" id="login">
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="Pass" id="Pass">
                    </div>
                    <div class="diff field">
                        <input type="checkbox" name="kp" value="true" id="kp"> <span>
                            keep me logged in
                        </span>
                        <a href="#" class="pw">forgot password</a>
                    </div>
                    <div class="  field">
                        <input type="submit" value="Login" name="login" id="Logbt">
                    </div>
                </form>
                <span class="qs">Already have an account? <a href="index.php" class="signbt">Sign up</a></span>
            </div>
        </div>
        <div class="right">
            <img src="img/ig.jpg" alt="">
        </div>
    </div>
    <script src="js/login.js"></script>
</body>

</html>