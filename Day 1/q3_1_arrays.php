<?php
$days=array(1=>"Sunday",2=>"Monday",3=>"Tuesday",4=>"Wednesday",5=>"Thursday",6=>"Friday",7=>"Saturday");
for($i=1;$i<=sizeof($days);$i++) {
    echo nl2br("\n$days[$i]");
}

?>