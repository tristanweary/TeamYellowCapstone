<?php 
You can add any function in php in this file it will link to the button in html
    
 $conn = new;
    $mysqli($servername, $username, $password, $db);

    if ($mysqli->ping()) {
  printf ("Our connection is ok!\n"); 
} else {
  printf ("Error: %s\n", $mysqli->error); 
}


    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
?>
