<?php
include 'include.php';
?>


<!DOCTYPE HTML>
<html>
<body>

<h1>Forms<br>


<img src="images/getvspost.png" width = "400" height = "300"></h1>


<b>$_GET Example</b>
<form action="getexample.php" method="get">
    Name: <input type="text" name="name"><br>
    Favorite Color: <input type="text" name="color"><br>
    <input type="submit">
</form>

<b>$_POST Example</b><br>
<form action="postexample.php" method="post">
    Name: <input type="text" name="name"><br>
    Favorite Animal: <input type="text" name="animal"><br>
    <input type="submit">
</form>


<b>$_SESSION Example</b><br>
<form action="forms.php" method="post">
    Name: <input type="text" name="name"><br>
    Favorite Beverage: <input type="text" name="beverage"><br>
    <input type="submit">
</form>

&rarrw; $_SESSION is a PHP superglobal.  It is used to store information about a user over multiple pages during a browsing session.<br>
The session_start() function is used to start a session.  The session_unset() function unsets all session variables.  The session_destroy() function destroys a session.<br>



</p>

<?php
if(($_SERVER["REQUEST_METHOD"] == "POST") && ($_POST["beverage"] != "")){
    $_SESSION['formdata'] = $_POST;
    header('Location: sessionexample.php');
}
?>

<br>

<a href = "webConcepts.php">Back</a>

</body>

</html>