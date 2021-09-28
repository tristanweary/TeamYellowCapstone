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
    $db = "timestamp_db";


    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
  
    // Check connection
    if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
     echo "Connected successfully";
  
    $sql = "INSERT INTO timestamp_tbl(id, ts) VALUES (NULL, NULL)"
  
  
        if(isset($_POST['Log'])) {
            mysqli_query($conn, $sql)
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
