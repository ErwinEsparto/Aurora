<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <?php
        session_start();

        $DBHost = "localhost";
        $DBUser = "root";
        $DBPass = "";
        $DBName = "auroradb";
        $conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);
    ?>
    <main>
        <section class="loginform">
            <form method="POST">
                <h1> LOGIN </h1>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="condition">
                    <div class="remember">
                        
                    </div>
                    <div class="forgot">
                        <a href="forgotpassword.php"> Forgot Password? </a>
                    </div>
                </div>
                <input type="submit" name="submit" value="Login">
                <?php 
                    if(isset($_POST["submit"])){
                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        $getUser = "SELECT * FROM users WHERE userName='$username' AND userPassword='$password';";
                        $userResult = mysqli_query($conn, $getUser);

                        if (mysqli_num_rows($userResult) == 1) {
                            $user=mysqli_fetch_assoc($userResult);

                            $_SESSION['userID'] = $user['userId'];
                            $_SESSION['userName'] = $user['userName'];
                            $_SESSION['loggedIn'] = true;

                            header("location: home.php");
                            exit();
                        } 
                        else {
                            echo "<p class='result'> Invalid credentials. </p>";
                        }
                    }
                ?>
                <a href="register.php">Don't have an account? <b> Register </b> </a> <hr>
                <div class="socials">
                    <p> Or continue with </p> 
                    <div class="accounts">
                        <div class="media">
                            <a href="https://www.facebook.com" target="_blank"><img src="../images/fblogo.png"></a>
                            <p> Facebook </p>
                        </div>
                        <div class="media">
                            <a href="https://www.x.com" target="_blank"><img src="../images/xlogo.png"></a>
                            <p> X </p>
                        </div>
                        <div class="media">
                            <a href="https://www.google.com" target="_blank"><img src="../images/googlelogo.png"></a>
                            <p> Google </p>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
</body>
</html>