<?php
include 'include.php';
?>


<!DOCTYPE HTML>
<html>
<body>

<h1>FORMS</h1>
<b>$_GET Example</b><br>
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