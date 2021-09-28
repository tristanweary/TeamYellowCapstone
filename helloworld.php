<html>
<head>
<title>Hello World</title>
</head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>


<?php
      
  $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $db = "timestamp_db";// Create connection
    $conn = new mysqli($servername, $username, $password, $db);


    //Create connection
    $conn = new;
    $mysqli($servername, $username, $password, $db);
  
  
  
        if(isset($_POST['Log'])) {
            mysqli_query(INSERT INTO timestamp_tbl(id, ts) VALUES (NULL, NULL));
        }
        if(isset($_POST['button2'])) {
            echo "This is Button2 that is selected";
        }
    ?>  
  
<form method="post">
        <input type="submit" name="Log"
                value="Log"/>
          
        <input type="submit" name="button2"
                value="Button2"/>
    </form>
  
  
</html>
