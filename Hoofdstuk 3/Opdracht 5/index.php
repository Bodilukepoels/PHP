<?php
$leeftijd = 27;
$kosten = 10;

if ($leeftijd >= 65) {
    $kosten = 5;
} 
else if ($leeftijd >= 13 && $leeftijd <= 65) {
    $kosten = 10;
}
else if ($leeftijd >= 4 && $leeftijd <= 12){
    $kosten = 5;
}
else {
    $kosten = 0;
}
echo $leeftijd, '<br>', $kosten;
?>