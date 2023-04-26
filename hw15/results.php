<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Me</title>
<link rel="stylesheet" href="./assets/css/style.css">
<script src="assets/js/jquery-3.5.1.js"></script>
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
            <tbody id="results">
            </tbody>
        </table>

    </div>
</body>
</html>
<script>
function refresh(){
    $.ajax({
        type: 'post',
        url: 'https://ec2-3-144-234-72.us-east-2.compute.amazonaws.com/hw15/query.php',
        success: function(data){
            $('#results').html(data);
        }
    });
}
setInterval(function(){refresh(); }, 500);
</script>