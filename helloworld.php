<html>
<head>
<title>Hello World</title>
</head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>


<input type="submit" class="button" name="insert" value="insert" />

</body>
</html>

<?php


    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $db = "timestamp_db";// Create connection
    $conn = new mysqli($servername, $username, $password, $db);


    //Create connection
    $conn = new;
    $mysqli($servername, $username, $password, $db);

    if ($mysqli->ping()) {
  printf ("Our connection is ok!\n"); 
} else {
  printf ("Error: %s\n", $mysqli->error); 
}
?>
