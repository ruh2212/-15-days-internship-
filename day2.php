<?php
 echo "Welcom to php";
 echo "<h1>I am html in php </h1>";
 ?>
<html>
    <body>
        I am HTML <br/>
       <?php 
        echo "I am php in html";
        ?>
    </body>
</html>
<?php
// In php variable declar using $
$a = 100;
$b = 120;
//method 1
echo " <br/>1 value of a".$a;
echo "<br/> value of b".$b;
//method 2
echo"<br/>2 value of a ".$a."<br/> value of b".$b;
//method 3
echo"<br/>3 value of a $a <br/>value of b $b";
//method 4 its shoe diff between "" & ''
echo'<br/>4 value of a $a <br/>value of b $b';
//method 5
echo"<br/>5 value of a $a <br/>value of b $b <br/> sum of ".($a+$b);
echo "</br/>value of a $a <br/>value of b $b <br/> sub of ".($a-$b);
echo "</br/>value of a $a <br/>value of b $b <br/> mul of ".($a*$b);
echo "</br/>value of a $a <br/>value of b $b <br/> div of ".($a/$b);

// if condition
if($a==100){
    echo "<br/>A is 100";
}
else if($a<100){
    echo"A is samll";
}
else if($a>100){
    echo "A is large";
}
switch ($b) {
    case 1:
        echo"<br/>1";
        break;
     case 2:
        echo"2";
        break;

     case 3:
        echo"3";
        break;

     case 4:
        echo"4";
        break;


    default:
        echo"<br/>please select 1to4";
        break;
}