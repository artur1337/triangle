<?php
function triangle($number){
    for ($brake = 1; $brake <= $number; $brake++) {
        echo "<br>";
        for ($dot = 1; $dot <= $brake; $dot++) {
            echo "#";
        }
    }
    for ($brake = $number; $brake >= 1; $brake--) {
        echo "<br>";
        for ($dot = 1; $dot <= $brake; $dot++) {
            echo "#";
        }
    }
}