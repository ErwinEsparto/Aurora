<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../css/changepassword.css">
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
    <header>
        <div class="logo">
            <a href="home.php"><img class="hover" src="../images/AuroraLogo.png"/></a>
        </div>
        <nav>
            <a href="home.php"> Home </a>
            <a class="active" href="#"> Profile </a>
            <a href="logout.php"> Logout </a>
        </nav>
    </header>
    <main>
        <section class="passwordform">
            <form method="POST">
                <h1> Change Password </h1>
                <input type="password" name="oldPassword" placeholder="Current Password" required>
                <input type="password" name="newPassword" placeholder="New Password" required>
                <input type="password" name="confirmPassword" placeholder="Confirm New Password" required>
                <input type="submit" name="submit" value="Change Password">
                
                <?php 
                    if(isset($_POST["submit"])){
                        $oldPassword = $_POST["oldPassword"];
                        $newPassword = $_POST["newPassword"];
                        $confirmPassword = $_POST["confirmPassword"];

                        $changePassword = "SELECT * FROM users WHERE userPassword='$oldPassword' AND userId='".$_SESSION['userID']."'";
                        $result = mysqli_query($conn, $changePassword);
                        
                        if ($newPassword != $confirmPassword) {
                            echo "<p class='error'> New passwords are not the same. </p>";
                        }
                        else if ($oldPassword == $confirmPassword) {
                            echo "<p class='error'> New password must not be the old password. </p>";
                        } 
                        else if (mysqli_num_rows($result) == 1) {
                            $user=mysqli_fetch_assoc($result);
                            $userId = $user["userId"];

                            mysqli_query($conn, "UPDATE users SET userPassword='$confirmPassword' WHERE userId='$userId'");
                            echo "<p class='success'> Password changed successfully. </p>";
                        } 
                        else {
                            echo "<p class='error'> Current Password Incorrect. </p>";
                        }
                    }
                ?>
                <a href="profile.php"> Go back to Profile </a>
            </form>
        </section>
    </main>
</body>
</html>