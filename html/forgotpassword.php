<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../css/forgotpassword.css">
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
        <section class="recoverform">
            <form method="POST">
                <h1> FORGOT PASSWORD </h1>
                <input type="text" name="username" placeholder="Username" required>
                <input type="text" name="email" placeholder="Email Address" required>
                <input type="password" name="newPassword" placeholder="New Password" required>
                <input type="password" name="confirmPassword" placeholder="Confirm New Password" required>
                <input type="submit" name="submit" value="Recover">
                
                <?php 
                    if(isset($_POST["submit"])){
                        $username = $_POST["username"];
                        $email = $_POST["email"];
                        $newPassword = $_POST["newPassword"];
                        $confirmPassword = $_POST["confirmPassword"];

                        $recoverUser = "SELECT * FROM users WHERE userName='$username' AND userEmail='$email'";
                        $result = mysqli_query($conn, $recoverUser);
                        
                        if ($newPassword != $confirmPassword) {
                            echo "<p class='error'> New passwords are not the same. </p>";
                        }
                        else if (mysqli_num_rows($result) == 1) {
                            $user=mysqli_fetch_assoc($result);
                            $userId = $user["userId"];

                            mysqli_query($conn, "UPDATE users SET userPassword='$confirmPassword' WHERE userId='$userId'");
                            echo "<p class='success'> Account recovered successfully. </p>";
                        } 
                        else {
                            echo "<p class='error'> Account not found. </p>";
                        }
                    }
                ?>
                <a href="login.php"> Go back to Login </a>
            </form>
        </section>
    </main>
</body>
</html>