
<?php
    $conn = new PDO( 'mysql:host=localhost;dbname=volunteer_app_form', 'root', '');
    if(!$conn){
        die("Fatal Error: Connection Failed!");
    }
?>
