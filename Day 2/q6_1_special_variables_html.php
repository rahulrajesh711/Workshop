<html>
<form action='q6_1_special_variables_html.php' method='GET'>
    <lable>Side 1:</lable>
    <input type='text' name='side1'><br><br>
    <lable>Side 2:</lable>
    <input type='text' name='side2'><br><br>
    <lable>Side 3:</lable>
    <input type='text' name='side3'><br><br>
    <input type='submit' value='Check'>
<form>

</html>

<?php
global $side1;
global $side2;
global $side3;
if(isset($_GET['side1']))
{
    $side1=$_GET['side1'];
}
if(isset($_GET['side2']))
{
    $side2=$_GET['side2'];
}
if(isset($_GET['side3']))
{
    $side3=$_GET['side3'];
}
if($side3)
{
        if($side1==$side2&&$side2==$side3)
        {
            echo "<br>Its an Equilateral Triangle";
        }
        else if($side1==$side2||$side2==$side3||$side3==$side1)
        {
            echo "<br>Its an Isosceles Triangle";
        }
            else if($side1==sqrt(($side2*$side2)+($side3*$side3))||$side2==sqrt(($side3*$side3)+($side1*$side1))||$side3==sqrt(($side2*$side2)+($side1*$side1)))
        {
            echo "<br>Its a Right angled Triangle";
        }
            else 
        {
            echo "<br>Its an Scalene Triangle";
        }
}
?>