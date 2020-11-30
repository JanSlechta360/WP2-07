<?php

$plane[0]['capacity'] = 215;          // Boeing 737
$plane[0]['speed'] = "950 kmh";
$plane[0]['weight'] = "41,145kg";      
$plane[0]['wingspan'] = "35.8 m";

$plane[1]['capacity'] = 4;           // cesna 172
$plane[1]['speed'] = "230 km/h";
$plane[1]['weight'] = "757 kg";
$plane[1]['wingspan'] = "11 m";

$plane[2]['capacity'] = 2;            // A-10 warhog
$plane[2]['speed'] = "706 km/h";
$plane[2]['weight'] = "57 kg";
$plane[2]['wingspan'] = "18 m";

$plane[3]['capacity'] = 1;            // Messerschmitt Me 262
$plane[3]['speed'] = "870 km/h";
$plane[3]['weight'] = 	"3.800 kg";
$plane[3]['wingspan'] = "12,51 m";

$plane[4]['capacity'] = 475;         // Antonov An-225
$plane[4]['speed'] = "850 km/h";
$plane[4]['weight'] = 	"640 000 kg";
$plane[4]['wingspan'] = "88 m";

$plane[5]['capacity'] = 19;		   // Let L-410 Turbolet
$plane[5]['speed'] = "388 km/h";
$plane[5]['weight'] = 	"6400 kg";
$plane[5]['wingspan'] = "14,424 m";



$people[0]['firstname'] = "John";
$people[0]['lastname'] = "Slechta";
$people[0]['age'] = "36";
$people[0]['hoursflown'] = "1500";
$people[0]['medicalcondition'] = "perfect";
$people[0]['plane'] = $plane[1];

$people[1]['firstname'] = "Brian";
$people[1]['lastname'] = "Fletcher";
$people[1]['age'] = "48";
$people[1]['hoursflown'] = "3500";
$people[1]['medicalcondition'] = "glasess";
$people[1]['plane'] = $plane[2];


$people[2]['firstname'] = "Conor";
$people[2]['lastname'] = "Mcdonald";
$people[2]['age'] = "55";
$people[2]['hoursflown'] = "6680";
$people[2]['medicalcondition'] = "perfect";
$people[2]['plane'] = $plane[3];

$people[3]['firstname'] = "Paul";
$people[3]['lastname'] = "Donald";
$people[3]['age'] = "28";
$people[3]['hoursflown'] = "400";
$people[3]['medicalcondition'] = "overweight";
$people[3]['plane'] = $plane[4];

$people[4]['firstname'] = "Jake";
$people[4]['lastname'] = "Mcdonald";
$people[4]['age'] = "60";
$people[4]['hoursflown'] = "8000";
$people[4]['medicalcondition'] = "high_heart_presure";
$people[4]['plane'] = $plane[5];

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
    echo $people[$i]['firstname'] . " " . $people[$i]['plane']['capacity'] . " " . $people[$i]['plane']['speed'] . " " . $people[$i]['plane']['weight'] . " " . $people[$i]['plane']['wingspan'];
    ?> <br>
    <?php
}
?>
</body>
</html>
