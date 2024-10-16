<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
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
        <div class="profile">
            <div class="maintitle">
                <h1> My Profile </h1>
            </div>
            <div class="content">
                <div class="head">
                    <div class="picture">
                        <img src="../images/sample.jpg"/>
                    </div>
                    <div class="name">
                        <p> <?php echo $account['userFname']; ?> <?php echo $account['userLname']; ?></p>
                    </div>
                    <a href="changepassword.php"> Change Password </a>
                </div>
                <div class="information">
                    <div class="informationhead">
                        <div class="title">
                            <h2> Personal Information </h2>
                        </div>
                        <a href="editprofile.php"> Edit Profile </a>
                    </div>
                    <div class="columns">
                        <div class="columnOne">
                            <h3> First Name </h3>
                            <p> <?php echo $account['userFname']; ?> </p>
                            <h3> Email Address </h3>
                            <p> <?php echo $account['userEmail']; ?> </p>
                            <h3> Username </h3>
                            <p> <?php echo $account['userName']; ?> </p>
                        </div>
                        <div class="columnTwo">
                            <h3> Last Name </h3>
                            <p> <?php echo $account['userLname']; ?> </p>
                            <h3> Contact Number </h3>
                            <p> <?php echo $account['userContact']; ?> </p>
                            <h3> Date Created </h3>
                            <p> <?php echo $account['dateCreated']; ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>