<input type="submit" class="button" name="insert" value="logtime" />

<?php


    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $db = "timestamp_db";// Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    //Create connection
    $conn = new
    $mysqli($servername, $username, $password, $db);


    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'insert':
                insert();
                break;
            case 'select':
                select();
                break;
        }
    }

    

    function insert() {
        //$sql = "INSERT INTO timestamp_tbl VALUES()"
        //mysqli_query($conn, $sql);
        exit;
    }
?>
