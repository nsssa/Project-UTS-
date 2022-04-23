<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Anisa", "Mariyam", "Aliya", "Novia"];
    array_unshift($tims, "Rahma", "Dania");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>
