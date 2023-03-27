<?php

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];

echo '<h3>Data Recieved from index.php:</h3>';
echo '<p>First name: '.$fname.'</p>';
echo '<p>last name: '.$lname.'</p>';
echo '<p>Email address: '.$email.'</p>';

?>