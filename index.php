<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
  <title>My PHP Website</title>
  </head>
  <p>Bryce Arnold</p>
  <p>CISS301 Operating Systems and Cloud Computing</p>
  <p>Dropbox Assignment 7</p>
  <p>Instructor: Professor Alfred Basta</p>
  <body>
    <h1>Welcome to the cloud?</h1>
    <form action = "" method = "post">
    Your name:
    <br>
    <input type = "text" name = "name" size = "30" maxlength = "30">
    <br>
    <input type = "submit" name = "submit" value = "Submit">
    </form>
    <?php
    $host = "chapter4database.database.windows.net";
    $user = "bjarnold1";
    $password = "Ccischp4";
    $database = "chapter4";
    // connect to the database
    $conn = mysqli_connect($host, $user, $password, $database);
    if (isset($_POST['submit']))
    {
    $yourName = $_POST['name'];
    // sql statement
    $query = "INSERT INTO visitor (visitorName)
    VALUES('$yourName');
    if(mysqli_query($conn, $query))
    echo "<p>Hi, $yourName, welcome to my cloud.</p>";
    else
    echo "<p>Hi, $yourName, please try again.</p>";
    }
    // if the view button is clicked
    ifIisset($_POST['view']))
    {
    $query = "SELECT * FROM visitor";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
      {
      $display = "<h2>All Visitors</h2>";
      while($row = mysqli_fetch_assoc($result)){
        $display .="Name: ".$row["visitorName"]."<br>";
        $display .="Date Time: ".$row[visitTime"]."<br>";
        }
    }
    echo $display;
    }
    // close the connection
   mysqli_close($conn);
    ?>
  </body>
</html>
      
