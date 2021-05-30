<?php
echo"<table border='5'>";
for($i=0;$i<100;$i++){
    echo "<tr>";
    if($i%2==0){
       echo "<td bgcolor='pink'>$i</td>"; 
    }
    else{
        echo "<td bgcolor='blue'>$i</td>";
    }
    
    echo "</tr>";
}
echo"</table>";