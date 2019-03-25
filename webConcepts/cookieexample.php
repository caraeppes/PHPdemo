<?php

include 'include.php';

$cookieName = "user";
    if (isset($_SESSION['cookiedata'])) {
        $cookieData = $_SESSION['cookiedata'];
        setcookie($GLOBALS['cookieName'], $cookieData['firstname'] . $cookieData['lastname'], time() + 10, "/");
        echo "Cookie set!";
    } else {
        header('Location: cookies.php');
    }
?>

<html>
<body>

<br><br>

<a href = "cookies.php">Back</a>
</body>
</html>