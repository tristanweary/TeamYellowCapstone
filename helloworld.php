<html>
<head>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>
<?php>



 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "timestamp_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

 // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

<form action="functioncalling.php">
    <input type="text" name="txt" />
    <input type="submit" name="insert" value="insert" onclick="insert()" />
    <input type="submit" name="select" value="select" onclick="select()" />
</form>

...skipping 1 line
<?php
    function select(){
        echo "The select function is called.";
    }
    function insert(){
        echo "The insert function is called.";
    }
?>

echo "<br><br>";
$sql = "SELECT * FROM timestamp_tbl";
$result = mysqli_query($conn, $sql);
while($row = mysql_fetch_array($result))  {
echo $row['fieldname']; }
echo $result;
?>

</body>
</html>