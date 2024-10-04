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
    ?>
    <header>
        <div class="logo">
            <h1> Aurora </h1>
        </div>
        <nav>
            <a href="home.php"> Home </a>
            <a href="about.php"> About </a>
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
                        <p> Erwin Esparto </p>
                    </div>
                    <a href="#"> Change Password </a>
                </div>
                <div class="information">
                    <div class="informationhead">
                        <div class="title">
                            <h2> Personal Information </h2>
                        </div>
                        <a href="#"> Edit Profile </a>
                    </div>
                    <div class="columns">
                        <div class="columnOne">
                            <h3> First Name </h3>
                            <p> Erwin </p>
                            <h3> Email Address </h3>
                            <p> eesparto@gmail.com </p>
                            <h3> Username </h3>
                            <p> Irwen </p>
                        </div>
                        <div class="columnTwo">
                            <h3> Last Name </h3>
                            <p> Esparto </p>
                            <h3> Contact Number </h3>
                            <p> 091234567890 </p>
                            <h3> Date Created </h3>
                            <p> 2024-10-02 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>