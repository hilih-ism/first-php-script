<?php
//question1

$fc = array(20, 150, 4, $fc2 = array("CS" => 200, "SE" => 350, "IT" => 250, "IS" => 175), 1200, $fc3 = array("FC" => "Bahir Dar"));
$keys = array_keys($fc3);
echo "<b>".$keys[0]."</b>"," found at ", "<u>". $fc3['FC'] ."</u>" ,". It has " ,"<b>","<i>". $fc[2] ."</i>","</b>", " departments, ", 
"<b>","<i>". $fc[4] ."</i>","</b>" ," students, and ","<b>","<i>" . $fc[1] ."</i>","</b>", " staff members.","<br>";

echo "The name of the departments are ";
foreach(array_keys($fc2) as $key) {
  if(is_string($key)) {
    echo $key . ", ";
  }
}

//question2

$dept = array("CS","SEng","IT","IS");

foreach($dept as $dept)
{
	echo "<ul>","<li>". $dept ."</li>","</ul>";
}

//question3

$string = "Human beings have an innate desire to be listened, but only few are good listeners. 
So, if you listen to someone attentively, you'll flatter them.";

$words = explode(" ", $string);
for ($i = 0;$i<10;$i++){
	echo $words[$i]. " ";
}
?>
