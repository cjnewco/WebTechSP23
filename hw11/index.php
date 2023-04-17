<html>
    <body>
        <?php
            if (!isset($_POST['submit'])){
                echo '<form action="" method="post">';
                echo '<p>First Name:';
                if(isset($_GET['first']) && $_GET['first'] != ''){
                    echo '<input type="text" name="firstname" value="'.$_GET['first'].'">';
                }
                else{
                    echo '<input type="text" name="firstname">';
                    if (isset($_REQUEST['fnameErr'])){
                        echo '<p><span style="color:F00">Error: First name cannot be blank!</span></p>';
                    }
                }
                echo '</p>';

                echo '<p>Last Name:';
                if(isset($_GET['last']) && $_GET['last'] != ''){
                    echo '<input type="text" name="lastname" value="'.$_GET['last'].'">';
                }
                else{
                    echo '<input type="text" name="lastname">';
                    if (isset($_REQUEST['lnameErr'])){
                        echo '<p><span style="color:F00">Error: Last name cannot be blank!</span></p>';
                    }
                }
                echo '</p>';


                echo '<p>Email:';
                if(isset($_GET['mail']) && $_GET['mail'] != ''){
                    echo '<input type="text" name="email" value="'.$_GET['mail'].'">';
                }
                else{
                    echo '<input type="text" name="email">';
                    if (isset($_REQUEST['emailErr'])){
                        echo '<p><span style="color:F00">Error: Email cannot be blank!</span></p>';
                    }
                }
                echo '</p>';

                echo '<button type="submit" name="submit" value="submit">Submit</button>';
                echo '</form>';
            }
            if (isset($_POST['submit'])){
                $errString='';
                if(($fname=$_REQUEST['firstname'])==""){
                    $errString.="fnameErr=err&";
                }
                if(($lname=$_REQUEST['lastname'])==""){
                    $errString.="lnameErr=err&";
                }
                if(($email=$_REQUEST['email'])==""){
                    $errString.="emailErr=err&";
                }
                if($errString!=''){
                    header("Location: https://ec2-3-144-234-72.us-east-2.compute.amazonaws.com/hw11/index.php?$errString&first=$fname&last=$lname&mail=$email");
                }

                echo '<h3>Data Recieved from index.php:</h3>';
                echo '<p>First name: '.$fname.'</p>';
                echo '<p>last name: '.$lname.'</p>';
                echo '<p>Email address: '.$email.'</p>';
            }
        ?>
    </body>
</html>