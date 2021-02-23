<?php

//This code genrates 200 random 16-digit numbers, typical of the recharge card digit of a telecommunications company


for($i = 0; $i < 200; $i++){ 
    echo  $i+1, ': ', '[', mt_rand(1000, 9999) , '-', mt_rand(1000, 9999) , '-', mt_rand(1000, 9999) , '-', mt_rand(1000, 9999) , ']', '<br>'; 
} 

?>