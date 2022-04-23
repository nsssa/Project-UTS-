<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Anisa", "Mariyam", "Novia", "Rahma"];
    array_pop($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>
