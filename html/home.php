<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
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
            <a class="active" href="#"> Home </a>
            <a href="about.php"> About </a>
            <a href="profile.php"> Profile </a>
            <a href="logout.php"> Logout </a>
        </nav>
    </header>
    <main>
        
    </main>
</body>
</html>