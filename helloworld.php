<html>
<head>
<title>Hello World</title>
</head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>


<?php
      
        if(isset($_POST['button1'])) {
            echo "This is Button1 that is selected";
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
