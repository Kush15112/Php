<?php
$a=10;

while($a<=10){
    echo $a;
    $a++;
}
?>

<?php
$a=11;
do{
    echo "</br>$a";
    $a++;
}while($a<10);
?>

<?php

echo"<table border='1'>";
for($i=0;$i<=10;$i++)
{   
    echo"<tr>";
    echo "</br>$i";
    echo"</tr>";
}

?>
<?php

echo"<table border='1'>";
for($i=0;$i<=10;$i++){
    echo"<tr>";
    if ($i%2==0){
        echo"<td bgcolor = 'blue'>$i</td>";
    }else{
        echo"<td bgcolor = 'greenyellow'>$i</td>";
    }
    echo"</tr>";
}
echo"</table>"
?>