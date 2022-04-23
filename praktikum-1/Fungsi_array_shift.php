<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Anisa", "Mariyam", "Aliya", "Novia"];
    array_shift($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>
