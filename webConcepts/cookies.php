<?php
    include 'include.php';
?>

<!DOCTYPE html>
<html>
<body>

<h1>Cookies<br>
<img src = "../images/cookies.jpg" width = "400" height = "300"></h1>


<b>$_COOKIES Example</b><br>
<form action="cookies.php" method="post">
    First Name: <input type="text" name="firstname"><br>
    Last Name: <input type="text" name="lastname"><br>
    <input type="submit">
</form>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $_SESSION['cookiedata'] = $_POST;
    header('Location: cookieexample.php');
}

if(isset($_COOKIE['user'])) {
    echo "Cookie is set! Value is: " . $_COOKIE['user'].".";
}
?>

<br><br>

<a href = "webConcepts.php">Back</a>

</body>
</html>