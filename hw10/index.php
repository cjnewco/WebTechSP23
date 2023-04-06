<html>
    <body>
        <?php
        if (!isset($_POST['submit'])){
            echo '<p>Welcome to my Homepage!</p>';
            echo '<form action="" method="post">';
            echo '<div>First Name:';
            echo '<input type="text" name="firstname" id="firstname" class="firstname">';
            echo '</div>';
            echo '<div>Last Name:';
            echo '<input type="text" name="lastname" id="lastname" class="lastname">';
            echo '</div>';
            echo '<div>Email:';
            echo '<input type="text" name="email" id="email" class="email">';
            echo '</div>';
            echo '<button type="submit" name="submit" value="submit">Submit</button>';
            echo '</form>';
        }
        else{
            $fname=$_POST['firstname'];
            $lname=$_POST['lastname'];
            $email=$_POST['email'];

            echo '<h3>Data Recieved from index.php:</h3>';
            echo '<p>First name: '.$fname.'</p>';
            echo '<p>last name: '.$lname.'</p>';
            echo '<p>Email address: '.$email.'</p>';
        }
        ?>
    </body>
</html>