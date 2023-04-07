<html>
    <body>
        <?php
            if (!isset($_POST['submit'])){
                echo '<form action="" method="post">';
                if (isset($_REQUEST['fname'])){
                    echo '<p><span style="color:F00">Error: First name cannot be blank!</span></p>';
                }
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
            if (isset($_POST['submit'])){
                if (($fname=$_REQUEST['firstname'])==""){
                    header('Location: https://ec2-3-144-234-72.us-east-2.compute.amazonaws.com/hw10/request.php?fname=err');
                }
                $lname=$_REQUEST['lastname'];
                $email=$_REQUEST['email'];

                echo '<h3>Data Recieved from index.php:</h3>';
                echo '<p>First name: '.$fname.'</p>';
                echo '<p>last name: '.$lname.'</p>';
                echo '<p>Email address: '.$email.'</p>';
            }
        ?>
    </body>
</html>