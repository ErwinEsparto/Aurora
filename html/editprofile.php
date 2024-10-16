<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../css/editprofile.css">
</head>
<body>
    <?php
        session_start();

        $DBHost = "localhost";
        $DBUser = "root";
        $DBPass = "";
        $DBName = "auroradb";
        $conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);

        $getData = "SELECT * FROM users WHERE userId='".$_SESSION['userID']."'";
        $result = mysqli_query($conn, $getData);
        $account = mysqli_fetch_assoc($result);
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
        <section class="profileform">
            <form method="POST">
                <h1> Edit Profile </h1>
                <input type="text" name="firstname" placeholder="First Name" value="<?php echo $account['userFname']; ?>" required>
                <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $account['userLname']; ?>" required>
                <input type="text" name="username" placeholder="Username" value="<?php echo $account['userName']; ?>" required>
                <input type="email" name="email" placeholder="Email Address" value="<?php echo $account['userEmail']; ?>" required>
                <input type="text" name="contact" placeholder="Contact Number" value="<?php echo $account['userContact']; ?>" required>
                <input type="submit" name="submit" value="Save Changes">
                <?php 
                    if(isset($_POST["submit"])){
                        $firstname = $_POST["firstname"];
                        $lastname = $_POST["lastname"];
                        $username = $_POST["username"];
                        $email = $_POST["email"];
                        $contact = $_POST["contact"];
                        $userId = $account["userId"];

                        $saveChanges = "UPDATE users SET userFname='$firstname', userLname='$lastname', userName='$username', userEmail='$email',
                            userContact='$contact' WHERE userId='$userId'";
                        $saveUser = mysqli_query($conn, $saveChanges);
                        echo "<p class='result'> Saved Successfully. </p>";
                    }
                ?>
                <a href="profile.php"> Go back to Profile </a>
            </form>
        </section>
    </main>
</body>
</html>