<?php
include 'include.php';
?>


<!DOCTYPE HTML>
<html>
<body>

<h1>Web Concepts</h1>
<img src = "images/phplogo.png" width = "400" height = 250>

<h2>
<a href = "forms.php">Forms</a>

<br><br>

<a href = "cookies.php">Cookies</a>
</h2>

<br>
<?php
if(isset($_COOKIE['user'])) {
    echo "Cookie is set! Value is: " . $_COOKIE['user'].".";
}
?>

<br><br>

<a href = "index.php">Back</a>

</body>

</html>