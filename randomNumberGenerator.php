<?php

//This code genrates 200 random 16-digit numbers, typical of the recharge card digit of a telecommunications company


for($i = 0; $i < 200; $i++){ 
    echo '<b>Randon Number </b>',  $i+1, ': ', mt_rand(1000000000000000, 9999999999999999) , '<br>'; 
} 

?>