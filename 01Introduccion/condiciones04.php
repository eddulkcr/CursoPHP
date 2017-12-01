<?php

#condiciones

$a = 15;
$b = 10;
if($a > $b){
    echo "a es mayor que b <br><br>";

}
else if($a == $b){
    echo "a es igual que b <br><br> ";
}
else{
    echo "a es menor quu b <br><br> ";
}

$dia = "sabado";
switch ($dia) {
    case 'sabado':
        echo "voy a estudiar php";
        break;
    case 'viernes':
        echo "voy a estudiar android";
        break;
    
    default:
        echo "voy a la universidad";
        break;
}

echo " <br> <br> ";
#ciclos
$n = 0;
while ($n < 5) {
    $n++;
    echo $n ;
}
echo " <br> <br> ";
#ciclo do while
$p = 1;
do {
    echo $p;
    $p++;

} while ($p <= 10);

echo " <br> <br> ";
for ($i=0; $i < 10; $i++) { 
  echo $i;
}

?> 