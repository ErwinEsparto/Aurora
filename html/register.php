<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/register.css">
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
        <section class="registerform">
            <form method="POST">
                <h1> Register </h1>
                <input type="text" name="firstname" placeholder="First Name" required>
                <input type="text" name="lastname" placeholder="Last name" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="text" name="contact" placeholder="Contact Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="submit" value="Register">
                <?php 
                    if(isset($_POST["submit"])){
                        $firstname = $_POST["firstname"];
                        $lastname = $_POST["lastname"];
                        $username = $_POST["username"];
                        $email = $_POST["email"];
                        $contact = $_POST["contact"];
                        $password = $_POST["password"];

                        $registerUser = "INSERT INTO users (userName, userFname, userLname, userEmail, userContact, userPassword, dateCreated) 
                        VALUES ('$username', '$firstname', '$lastname', '$email', '$contact', '$password', curdate())";
                        $addUser = mysqli_query($conn, $registerUser);
                        echo "<p class='result'> Successfully Registered. </p>";
                    }
                ?>
                <a href="login.php"> Go back to Login </a>
            </form>
        </section>
    </main>
</body>
</html>