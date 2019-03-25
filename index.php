<?php

$phpHeader = "PHP Introduction";
$phpFact1 = "&rarrw; PHP is an acronym for PHP: Hypertext Preprocessor.</br></br>";

$phpFact2 = "&rarrw; PHP is a server-side scripting language designed for web development.  It was created by 
Rasmus Lerdorf in 1994.</br></br>";

$phpFact3 ="&rarrw;PHP files have extension .php</br></br>";

$phpFact4 = "&rarrw; PHP code are executed on the server, and the result is returned to the browser as plain HTML.</br></br>";


$phpFact5 = "&rarrw; PHP can able to run on multiple OS’s(windows , Mac , Unix etc. ) and servers ( Apache , IIS etc. .).
</br></br>";




$phpFact6 = "&rarrw; PHP can:<UL>&bull; generate dynamic web content</br>&bull; work with databases</br>&bull; encrypt data</br>
    &bull; control user access</br></UL>
</p>";
?>

<html>
<?php echo "<body style='background-color:lavender'>"; ?>

<head>
    <style>

        h1 {
            text-align: center;
            color: #191970;
        }

        p {
            text-align: justify;
            color: #191970;
        }

        ul {
            color: #191970;
        }

        a {
            align-items: center;
            color:  #191970;
        }
    </style>
<body>
<h1>
    <?php echo($phpHeader); ?>
</h1>
<p>
    <?php echo($phpFact1); ?>
    <?php echo($phpFact2); ?>
    <?php echo($phpFact3); ?>
    <?php echo($phpFact4); ?>
    <?php echo($phpFact5); ?>
    <?php echo($phpFact6); ?>

    <a href="index.php">Index</a> &bull;
    <a href="variables.php">Variables</a> &bull;
    <a href="functions.php">Functions</a> &bull;
    <a href="arrays.php">Arrays</a> &bull;
    <a href="objects.php">Objects</a> &bull;
    <a href="webConcepts/webConcepts.php">Web Concepts</a> &bull;
    <a href="database.php">Database</a>


</body>
</head>
</html>