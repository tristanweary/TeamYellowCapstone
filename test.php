<input type="submit" class="button" name="insert" value="insert" />
<input type="submit" class="button" name="select" value="select" />

<?php


    $servername = "localhost";
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

    function select() {
        echo "The select function is called.";
        exit;
    }

    function insert() {
        echo "The insert function is called.";
        $sql = "INSERT INTO timestamp_tbl VALUES()"
        mysqli_query($conn, $sql);
        exit;
    }
?>