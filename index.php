
<?php
  
  //answer 2
  
$date =  date('Y/m/d', time());
echo "The value of $date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of $tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of $year: ";
print_r($year);

//answer 3

if ($date - $tar > 0) {
  echo "<br>";
   echo "the future"."<br>";
} elseif ($date - $tar< 0) {
    echo "the past"."<br>";
} else {
    echo "Oops"."<br>";
}
//answer 4
$posi = $date;
$searchh = "/";
$lastPos = 0;
$positions = array();

while (($lastPos = strpos($posi, $searchh, $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + strlen($searchh);
}


foreach ($positions as $value) {
    
    echo " ".$value ;
}
//Answer 5
echo "<br/>".count($date);
//Answer 6

echo "<br/>".strlen($date);

//Answer 7 

echo "<br>".ord($date);

//Answer 8

$last2_digit = substr($date, 8, 9);
echo "<br />".$last2_digit;

//Answer 9

$date= date('Y/m/d', time());
$date = explode('/', $date);
$numbers_string = '';
for ($i = 0; $i < count($date); $i++) {
    $numbers_string .= $date[$i] . ' '; 
}
echo "<br />".$numbers_string."<br />";
echo "<br>";
// Answer 10 

$year = array("2012", "396", "300","2000", "1100", "1089");
foreach ($year as $value) {
  if( ($value % 4==0) and ($value % 100 != 0) or ($value % 400==0) )
{
echo "$value True"."<br>";  
}
else{echo "$value False"."<br>";}
 }
    
?>