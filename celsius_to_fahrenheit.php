<?php

function celsius_to_fahrenheit(int $celsius = 0){
    echo number_format(($celsius*9/5)+32, 2) ." °F";
}

celsius_to_fahrenheit(5);
