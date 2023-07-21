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
        <li><a href="skills.php" class="AHome">My Skills</a></li>
        <li><a href="About.php">Contact <span>Me</span></a></li>
      </ul>
  </header>
    

  <section id="Skills" class="mySkills">
      <div class="skill">
        <p>MY <span>SKILLS</span></p>
        <h2>WHAT I DO</h2>
      </div>

      <div class="skillContent">
        <div class="box">
          <div class="icon">

          </div>
              <?php
                // SQL query to retrieve data from the database
                $sql = "SELECT * FROM skills";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "" . $row["web_design"]. "<br>";
                    }
                } else {
                    echo "0 results";
                }
                ?>


        </div>
        <div class="box">
          <div class="icon">

          </div>
          <?php
                // SQL query to retrieve data from the database
                $sql = "SELECT * FROM skills";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "" . $row["programming"]. "<br>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
        
        </div>
        <div class="box">
          <div class="icon">

          </div>
          <?php
                // SQL query to retrieve data from the database
                $sql = "SELECT * FROM skills";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "" . $row["flyer_production"]. "<br>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
        
        
        </div>
      </div>

    
  <br>
    <p class="follow">Follow/Contact Us:</p>
    <ul class="followList">
      <li><a href="mailto:mulerocharles@gmai.com" target="_blank"><ion-icon name="mail-outline"></ion-icon></a></li>
      <li><a href="http://www.facebook.com/CharlesChristianmulero" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></li>
      <li><a href=" https://wa.me/+265991004000" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
  </ul>
  </div>

  
  </section>



  <script type="text/javascript" src="Script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
</body>
</html>