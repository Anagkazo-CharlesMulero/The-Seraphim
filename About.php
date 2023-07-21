<!DOCTYPE html>

<html lang="en">
<head>
  <meta name="viewpoint" content="width=device-width, initial-scale=1">
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="style.css"/>
  <title>My Portfolio</title>
</head>
<body>
<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myinfo";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>


  <header>
    <a href="=index.html" class="logo">Welcome to My <span>Portfolio</span></a>
      <ul class="navigationList">
        <li><a href="index.php">HOME</a></li>
        <li><a href="projects.php">My Projects</a></li>
        <li><a href="skills.php">My Skills</a></li>
        <li><a href="About.php" class="AHome">Contact <span>Me</span></a></li>
      </ul>
  </header>

  <section class="contactMe" id="contactMe">
    <div class="ContactMeTxt">
        <h2>Contact <span>Me</span></h2>
        <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM contactdetails";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Name:" . $row["name"]. "<br>". "Email:". $row["email"]. "<br>". "Phone:" . $row["Contact"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    ?>

        <h3>Let Me Handle Your Projects</h3>
        <div class="contactMeList">
                <li><ion-icon name="mail-outline"></ion-icon><a href="mailto:mulerocharles@gmai.com" target="_blank"><span>Via</span> Email</a></li>
                <li><ion-icon name="logo-facebook"></ion-icon><a href="http://www.facebook.com/CharlesChristianmulero" target="_blank"><span>Via</span> Facebook</a></li>
                <li><ion-icon name="logo-whatsapp"></ion-icon><a href=" https://wa.me/+265991004000" target="_blank"><span>Via</span> Whatsapp</a></li>
        </div>

    </div>
    <div class="ContactForm">
        <form action="">
            <input type="text" name="" id="" placeholder="Your Name" required>
            <input type="email" name="" id="" placeholder="xyz@gmail.com" required>
            <input type="" name="" id="" placeholder="Your whatsapp contact" required>
            <textarea name="" id="" cols="30" rows="10" placeholder="How Can I help You" required></textarea>
            <input type="submit" value="send message" class="submit" required>
        </form>
    </div>

  </section>
  <script type="text/javascript" src="Script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
  
  </body>
  </html>