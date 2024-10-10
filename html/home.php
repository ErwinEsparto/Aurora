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
            <a href="home.php"><img class="hover" src="../images/AuroraLogo.png"/></a>
        </div>
        <nav>
            <a class="active" href="#"> Home </a>
            <a href="profile.php"> Profile </a>
            <a href="logout.php"> Logout </a>
        </nav>
    </header>
    <main>
        <section id="main">
            <div class="title">
                <h1> Aurora </h1> <hr>
                    <h2 class="description">“Turn off lights remotely and save energy using smart technology”</h2>
            </div>
        </section>
        <section id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61855.4196567874!2d121.00211974863281!3d14.313539699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d77dec99259b%3A0x85e6a0648bf24d87!2sPolytechnic%20University%20of%20the%20Philippines%20-%20Bi%C3%B1an%20Campus!5e0!3m2!1sen!2sph!4v1706864674702!5m2!1sen!2sph" 
            width="90%" height="450" style="border:0; border-radius: 15px; margin-top: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <div class="content">
            <div class="first">
                <img src="../images/a.jpg"/>
                <div class="firstText">
                    <p class="firstDescription"> 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu orci mattis lacus blandit fermentum. 
                    Vivamus quis rhoncus elit. Morbi vel lectus a lorem sagittis tempus in quis est. Morbi a consectetur massa, nec dignissim lectus. Cras quis sodales ligula.
                    </p>
                </div>
            </div>
            <div class="second">
                <div class="secondText">
                    <p class="secondDescription"> 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu orci mattis lacus blandit fermentum. 
                    Vivamus quis rhoncus elit. Morbi vel lectus a lorem sagittis tempus in quis est. Morbi a consectetur massa, nec dignissim lectus. Cras quis sodales ligula. 
                    </p>
                </div>
                <img src="../images/b.jpg"/>
            </div>
            <div class="third">
                <img src="../images/c.jpg"/>
                <div class="thirdText">
                    <p class="thirdDescription"> 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu orci mattis lacus blandit fermentum. 
                    Vivamus quis rhoncus elit. Morbi vel lectus a lorem sagittis tempus in quis est. Morbi a consectetur massa, nec dignissim lectus. Cras quis sodales ligula. 
                    </p>
                </div>
            </div>
        </div>
    </main>
    <footer >
        <section id="contactus">
            <div class="contacts">
                <div class="contactone">
                    <img src="../images/email.png">
                    <h2> Email Address </h2>
                    <p> auroralights@gmail.com </p>
                </div>
                <div class="contacttwo">
                    <img src="../images/contact.png">
                    <h2> Contact Number  </h2>
                    <p> +639158291856 </p>
                </div>
                <div class="contactthree">
                    <img src="../images/facebook.png">
                    <h2> Facebook Page  </h2>
                    <p> Aurora Official </p>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>