<?php

$zwemclubs = ['De spartelkuikens'=>25, 'De waterbuffels'=>32, 'Plonsmderin'=>11, 'Bommetje'=>23];
$plaatjes = [0, 0, 0, 0];

foreach ($zwemclubs as $x => $value){
    $original_value = $value;
    $plaatjes_count = 0;
    while ($value >= 5) {
        $value -= 5;
        $plaatjes_count++;
    }
    echo "$x = $original_value members, $plaatjes_count plaatjes <br>";
}

?>
