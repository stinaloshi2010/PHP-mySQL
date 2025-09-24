<?php

$age = 15;
switch($age){
case($age >=0 && $age < 18):
  echo"You are and a minor(0-18) <br>";
  break;
case($age >= 18 && $age <=25):
  echo"You are a young adult <br>";
  break;
case($age > 25):
  echo "You are an adult <br>";
  default:
  echo"invalid age input <br>";
  break;
}

$day = "Monday";
switch($day){
  case 'Monday':
  echo"Its monday";
  break;


  case 'Tuesday':
  echo"Its tuesday";
  break;

 
  case 'Monday':
  echo"Its monday";
  break;

  case 'Thursday':
  echo"Its thursday";
  break;


  case 'Friday':
  echo"Its friday";
  break;


  case 'Saturday':
  echo"Its saturday";
  break;


  case 'Sunday':
  echo"Its sunday";
  break;

  default:
  echo "invalid date";
  break;
}

$x = 1;
while($x <= 5){
  echo" The number is: $x <br>";
  $x++;
}
 echo"<br>";
$y = 1;
do{
  echo" The number is: $y <br>";
  $y++;
}while($y <= 5);

  

?>
