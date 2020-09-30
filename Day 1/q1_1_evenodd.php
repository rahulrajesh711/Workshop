<?php
function check($number)
{    
    if($number%2==0)
    {
        echo nl2br("\nThe number $number is Even"); //nl2br function to display \n in browser
    }
    else
    {
        echo nl2br("\nThe number $number is Odd"); //nl2br function to display \n in browser
    }
}

$number=array(11,23,72,44);

for($i=0;$i<sizeof($number);$i++) //for loop for parsing array
{
    check($number[$i]);
}
?>