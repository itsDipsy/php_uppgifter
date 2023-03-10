
<?php 
    require_once("./functions.php");
    $header = the_header();
    $main = main();
    "<!DOCTYPE html>
    <html>
        $header
        $main
    </html>";
?>

<!DOCTYPE html>
<html>
<?php 
    require_once("./functions.php");
    $header = the_header();
    $main = main();
    
   echo $header;
   echo $main;
?>
</html>

