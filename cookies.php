<?php
    include 'include.php';
?>

<!DOCTYPE html>
<html>
<body>

<h1>Cookies</h1>

<p>
    &rarrw; PHP supports HTTP cookies.  Cookies are small files that are stored on a user's computer.<br>
    &rarrw; Cookies can be used to track a user's activity on a website.<br>
    &rarrw;  In PHP, Cookies are set using the setCookie() function.<br>
    &rarrw; Cookies are stored in the PHP global variable $_COOKIE, which is an associative array of cookie names and values.<br>
</p>

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