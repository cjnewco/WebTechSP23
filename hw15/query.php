<?php

$username="webuser";
$password="TKII[(iIaoBF2/e9";
$host="localhost";
$db="contact_data";

$dblink=new mysqli($host,$username,$password,$db);

$sql="Select * from `entries`";

$results=$dblink->query($sql) or 
    die("<p>Something went wrong with $sql<br>".$dblink->error);
    
while($data=$results->fetch_array(MYSQLI_ASSOC)){
    echo "<tr><td>$data[auto_id]</td><td>$data[first_name]</td><td>$data[last_name]</td><td>$data[email]</td><td>$data[phone]</td><td>$data[comment]</td><td>";
}
            
?>