<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Me</title>
<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="navbar">
        <h1>Contact</h1>
        <ul>
            <li class="yellow"><a href=".">Home</a></li>
            <li class="green"><a href="./about.html">About</a></li>
            <li class="blue"><a href="./hobbies.html">Hobbies</a></li>
            <li class="purple"><a href="./contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="contact">
        <h2>User Comments</h2>
        <div class="break"></div>
        <table>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Comment</th>
            </tr>
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

        </table>

    </div>
</body>
</html>