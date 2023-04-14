<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Me</title>
<link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="navbar">
        <h1>Contact</h1>
        <ul>
            <li class="yellow"><a href=".">Home</a></li>
            <li class="green"><a href="./about.html">About</a></li>
            <li class="blue"><a href="./hobbies.html">Hobbies</a></li>
            <li class="purple"><a href="./contact.html">Contact</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="break"></div>
        <?php

        if (!isset($_POST['submit'])){
            echo '<form method="post" action="">';
            echo '<p>First Name: ';
            echo '<input type="text" name="firstname">';
            echo '</p>';
            echo '<p>Last Name: ';
            echo '<input type="text" name="lastname">';
            echo '</p>';
            echo '<p>Email: ';
            echo '<input type="text" name="email">';
            echo '</p>';
            echo '<p>Phone Number: ';
            echo '<input type="text" name="phone_number">';
            echo '</p>';
            
            echo '<p>Comments: ';
            echo '<input type="text" name="comments">';
            echo '</p>';
            echo '<p><button type="submit" name="submit" value="submit">Submit</button></p>';

            echo '</form>';
        }
        if (isset($_POST['submit'])){
            $firstname=addslashes($_POST['firstname']);
            $lastname=addslashes($_POST['lastname']);
            $email=addslashes($_POST['email']);
            $phone=addslashes($_POST['phone_number']);
            $comments=addslashes($_POST['comments']);

            $username="webuser";
            $password="TKII[(iIaoBF2/e9";
            $host="localhost";
            $db="contact_data";

            $dblink=new mysqli($host,$username,$password,$db);

            $sql="Insert into `entries` 
            (`first_name`,`last_name`,`email`,`phone`,`comment`) values
            ('$firstname','$lastname','$email','$phone','$comments')";

            $dblink->query($sql) or 
                die("<p>Something went wrong with $sql<br>".$dblink->error);
            
            echo '<p>Thank you for your feedback!</p>';
            
        }
        ?>
    </div>
</body>
</html>