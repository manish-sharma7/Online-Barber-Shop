<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="home.css">
</head>
<body>

    <div class="main">

        <h1>Sign up</h1>
        <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="container">
            <div class="sign-up-content">
                <form method="POST" class="signup-form">
                    <h2 class="form-title">What type of user are you ?</h2>
                    <div class="form-radio">
                        <a href="registration/register.php">
                        <input type="radio" name="member_level" value="newbie" id="newbie" >
                        <label for="newbie">Barber</label></a>

                        <input type="radio" name="member_level " checked="checked" />
                        <label for="average" >Customer</label>
                    </div>

                    <div class="form-textbox">
                        <label for="name">Username</label>
                        <input type="text" name="username" id="name" value="<?php echo $username; ?>" />
                    </div>

                    <div class="form-textbox">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $email; ?>" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Password</label>
                        <input type="password" name="password_1" id="pass" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">confirm </label>
                        <input type="password" name="password_2" id="confirm" />
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>

                    <div class="form-textbox">
                        <input type="submit" name="reg_user" id="submit" class="submit" value="Create account" />
                        
                    </div>
                </form>

                <p class="loginhere">
                    Already have an account ?<a href="login.php" class="loginhere-link"> Log in</a>
                </p>
            </div>
        </div>
      </form>

    </div>

</body>
</html>