<?php

?>

<head>

<title>Calendar</title>

<link rel="stylesheet" href="calendar.css" type="text/css">

</head>

<body>

<div class="container">

<?php

function get_hour_string ($time){
$hour_string = "";
$hour = date("h",$time);
$ampm = date("a",$time);
$hour_string = "$hour:00$ampm";
return $hour_string;
}

$hours_to_show = 12;
$d = time();
for($row = 0; $row <= $hours_to_show; $row++)
{
echo "<tr class=";

if ($row % 2 == 0) 

echo '"even_row">';
else echo '"odd_row">';
echo '<td class="hr_td">'. get_hour_string($d) . "</td>";
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo "</tr>";
$d += 60 * 60;
}
?>

