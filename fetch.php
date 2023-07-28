<table Border="1px">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>delete</th>
        <th>operation</th>
         

        

        
    </tr>

<button><a href="front.php">add data</a></button>


<?php

include "connect.php";
$query="select * from stoodent";
$b=mysqli_query($a,$query);
while($row=mysqli_fetch_array($b,MYSQLI_ASSOC)){
    echo  "<tr>
    <th>" .$row["id"]."</th>"."
    <th>".$row["name"]."</th>"."
    <th>".$row["address"]." </th>
    <th><form action='delete.php' method='post'>
    <input type='text' name='id' value=".$row["id"]." >
    <input type='submit' value='delete'/></form></th>
    <th><form action='update.php' method='post'>
    <input type='hidden' name='id' value=".$row["id"]." >
    <input type='submit' value='update'></form></th>
    
    
   

    </tr>";
    
}

?>

</table>


<?php 
include "connect.php";
$query="select * from stoodent where id=3";
$b=mysqli_query($a,$query);
$row=mysqli_fetch_array($b);
   echo $row["name"]; 
   ?>
   


<p><?php  echo $row["name"];  ?></p>



