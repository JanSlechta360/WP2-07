<?php

$plane[0]['capacity'] = 215;         
$plane[0]['speed'] = "950 kmh";
$plane[0]['weight'] = "41,145kg";      
$plane[0]['wingspan'] = "35.8 m";

$plane[1]['capacity'] = 4;           
$plane[1]['speed'] = "230 km/h";
$plane[1]['weight'] = "757 kg";
$plane[1]['wingspan'] = "11 m";

$plane[2]['capacity'] = 2;            
$plane[2]['speed'] = "706 km/h";
$plane[2]['weight'] = "57 kg";
$plane[2]['wingspan'] = "18 m";

$plane[3]['capacity'] = 1;            
$plane[3]['speed'] = "870 km/h";
$plane[3]['weight'] = 	"3.800 kg";
$plane[3]['wingspan'] = "12,51 m";

$plane[4]['capacity'] = 475;         
$plane[4]['speed'] = "850 km/h";
$plane[4]['weight'] = 	"640 000 kg";
$plane[4]['wingspan'] = "88 m";

$plane[5]['capacity'] = 19;		  
$plane[5]['speed'] = "388 km/h";
$plane[5]['weight'] = 	"6400 kg";
$plane[5]['wingspan'] = "14,424 m";



$people[1]['firstname'] = "John";
$people[1]['lastname'] = "Slechta";
$people[1]['age'] = "36";
$people[1]['hoursflown'] = "1500";
$people[1]['medicalcondition'] = "perfect";
$people[1]['plane'] = $plane[1];

$people[2]['firstname'] = "Brian";
$people[2]['lastname'] = "Fletcher";
$people[2]['age'] = "48";
$people[2]['hoursflown'] = "3500";
$people[2]['medicalcondition'] = "glasess";
$people[2]['plane'] = $plane[2];


$people[3]['firstname'] = "Conor";
$people[3]['lastname'] = "Mcdonald";
$people[3]['age'] = "55";
$people[3]['hoursflown'] = "6680";
$people[3]['medicalcondition'] = "perfect";
$people[3]['plane'] = $plane[3];

$people[4]['firstname'] = "Paul";
$people[4]['lastname'] = "Donald";
$people[4]['age'] = "28";
$people[4]['hoursflown'] = "400";
$people[4]['medicalcondition'] = "overweight";
$people[4]['plane'] = $plane[4];

$people[5]['firstname'] = "Jake";
$people[5]['lastname'] = "Mcdonald";
$people[5]['age'] = "60";
$people[5]['hoursflown'] = "8000";
$people[5]['medicalcondition'] = "high_heart_presure";
$people[5]['plane'] = $plane[5];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
for ($i=0; $i < 5; $i++) { 
    echo $person[$i]['firstname'] . " " . $person[$i]['plane']['capacity'] . " " . $person[$i]['plane']['speed'] . " " . $person[$i]['plane']['weight'] . " " . $person[$i]['plane']['wingspan'];
    ?> <br>
    <?php
}
?>
</body>
</html>
