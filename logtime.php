<input type="submit" class="button" name="insert" value="insert" />

<?php


    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $db = "timestamp_db";// Create connection
    $conn = new mysqli($servername, $username, $password, $db);


    //Create connection
    $conn = new;
    $mysqli($servername, $username, $password, $db);


    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'insert':
                insert();
                break;
        }
    }

    

    function insert() {
        //$conn->query(INSERT INTO timestamp_tbl(id, ts) VALUES (NULL, NULL));
        exit;
    }
?>
