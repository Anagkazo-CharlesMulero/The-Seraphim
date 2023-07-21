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

  <div class="mainDiv">
<header>
 <a href="=index.html" class="logo">Welcome To My<span>Portfolio</span></a>
    <ul class="navigationList">
      <li><a href="index.php" class="AHome">HOME</a></li>
      <li><a href="projects.php">My Projects</a></li>
      <li><a href="skills.php">My Skills</a></li>
      <li><a href="About.php">Contact <span>Me</span></a></li>
    </ul>
</header>

<section id="homeText" class="homeText">
  <div class="homeTexDiv">
    <div class="slide">
      <span class="bonjour1">Bonjour</span>
      <span class="bonjour2">My Name Is</span>
    </div>
    <h1><span>Charles Mulero</span></h1>
    <p> I am a graphic designer.<br>
        Get in touch with me to get yourself awesome flyers for your events
    </p>

    <div>
      <h3 id="greeting"></h3>
      <h3 id="clock"></h3>
    </div>

  </div>

</section>

<section id="About" class="About">
  <div class="AboutMeImage" id="AboutMeImage">
    <img name="slide" alt="This an image of Charles Mulero">

  </div>
  <div class="AboutMeText"> 
    <h2 class="aboutMe">ABOUT ME</h2><br><br>
           <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM home_page";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["about_me"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    ?>
    
    
    
    

  </div>


</section>
</div>
<script type="text/javascript" src="Script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
        
</html>
