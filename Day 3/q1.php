<html>
<form action='q1.php' method='POST'>
    <lable>Enter your name:</lable>
    <input type='text' name='name'><br><br>
    <lable>Enter marks in each Subject out of 100</lable><br>
    <lable>Enter marks in Subject 1:</lable>
    <input type='text' name='sub1'><br>
    <lable>Enter marks in Subject 2:</lable>
    <input type='text' name='sub2'><br>
    <lable>Enter marks in Subject 3:</lable>
    <input type='text' name='sub3'><br>
    <lable>Enter marks in Subject 4:</lable>
    <input type='text' name='sub4'><br>
    <lable>Enter marks in Subject 5:</lable>
    <input type='text' name='sub5'><br>
    <input type='submit' value='Submit'>
</form>    

</html>
<?php
global $name;
global $sub1;
global $sub2;
global $sub3;
global $sub4;
global $sub5;
if(isset($_POST['name']))
{
    $name=$_POST['name'];
}
if(isset($_POST['sub1']))
{
    $sub1=$_POST['sub1'];
}
if(isset($_POST['sub2']))
{
    $sub2=$_POST['sub2'];
}
if(isset($_POST['sub3']))
{
    $sub3=$_POST['sub3'];
}
if(isset($_POST['sub4']))
{
    $sub4=$_POST['sub4'];
}
if(isset($_POST['sub5']))
{
    $sub5=$_POST['sub5'];
}

$totalObt=($sub1+$sub2+$sub3+$sub4+$sub5);
    $percent=($totalObt/500)*100;
    $totalMrks=500;
    $connect=mysqli_connect("localhost","root","")or die(mysqli_error());
    mysqli_select_db($connect,"result")or die(mysqli_error());
if($name)
{
    $write=mysqli_query($connect,"INSERT INTO class1 VALUES('','$name','$sub1','$sub2','$sub3','$sub4','$sub5','$totalObt','$totalMrks','$percent')") or die(mysqli_error($connect));
}
mysqli_close($connect);

if($name)
{
    echo "<br>Name of Student: $name";
    echo "<br>Marks in Each Subject<br>";
    echo "<br>Subject 1: $sub1";
    echo "<br>Subject 2: $sub2";
    echo "<br>Subject 3: $sub3";
    echo "<br>Subject 4: $sub4";
    echo "<br>Subject 5: $sub5<br>";
    echo "<br>Total Marks Obtained: $totalObt";
    echo "<br>Total Marks: 500";
    echo "<br>Percentage: $percent %";
}
?>