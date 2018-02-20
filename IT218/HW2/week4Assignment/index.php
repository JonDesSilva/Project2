<?php
//Vars
$date =  date('Y-m-d', time());
$tar = "2017/05/24";
$year = array("2012", "396", "300","2000", "1100", "1089");
//vars for Problem 10
$leap_year_mods = array(4, 100, 400);
$leap_year_result;
$is_leap_year;
$true_counter;
//vars for printing
$problem2;
$problem3;
$problem4;
$problem5;
$problem6;
$problem7;
$problem8;
$problem9;
$problem10 = '';

//Problem 2
$problem2 = str_replace('-', '/', $date);

//Problem 3
if (strcmp($date, $tar) == 0) {
    $problem3 = "Oops";
}
elseif (strcmp($date, $tar) < 0) {
    $problem3 = "the past";
}
else {
    $problem3 = "the future";
}

//Problem 4
$date = $problem2;
$date_matches = "";
$offset = 0;
                            //Iterate with strpos using while loop
while (true){
    $i = strpos($date, '/', $offset);
    $offset = $i + 1;
                            //if strpos return nothing, exit with flag
    if($i == ''){
        break;
    }                       //End inner if loop
    $date_matches .= $i;
}                           //End while loop
$date_matches = chunk_split($date_matches, 1, ' ');
$problem4 = "Positions(index number) of '/' in Date: $date_matches";

//Problem 5
$problem5 = "Word Count: " . str_word_count("$date");

//Problem 6
$problem6 = 'Length of string Date: ' . strlen($date);

//Problem 7
$problem7 = 'ASCII: ' . ord($date); 

//Problem 8
$problem8 = 'Last 2 characters of Date: ' . substr($date, -2);

//Problem 9
$problem9 = '';
$date_array = (explode("/",$date));
foreach ($date_array as $date_array_index){
    $problem9 .= $date_array_index . ' ';
}

//Problem 10
foreach ($year as $year_index){
    $true_counter = 0;
    for ($mods_index = 0; $mods_index <= 2; $mods_index++){
        $leap_year_result = $year_index % $leap_year_mods[$mods_index];
        switch(true){
            case ($leap_year_result == 0):
                if ($mods_index == 1){
                    break;
                }
                $true_counter++;
                break;
            case ($leap_year_result != 0):
                if ($mods_index == 1){
                    $true_counter++;
                }
                break;
        }// end switch
    } //end for loop
    if ($true_counter >= 2){
        $is_leap_year = 'true';
    }
    else{
        $is_leap_year = 'false';
    }
    $problem10.= $year_index . ':' . $is_leap_year . ' ';
} //end for each loop

// PROBLEMS PRINTED DOWN HERE------------------------------------------------
echo "Problem 2) $problem2 <br>";
echo "Problem 3) $problem3 <br>";
echo "Problem 4) $problem4 <br>";
echo "Problem 5) $problem5 <br>";
echo "Problem 6) $problem6 <br>";
echo "Problem 7) $problem7 <br>";
echo "Problem 8) $problem8 <br>";
echo "Problem 9) $problem9 <br>";
echo "Problem 10) $problem10 <br>";



