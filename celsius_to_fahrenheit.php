<?php

function celsius_to_fahrenheit(int $celsius = 0){
    echo ($celsius*9/5)+32 ."°F";
}

celsius_to_fahrenheit(5);