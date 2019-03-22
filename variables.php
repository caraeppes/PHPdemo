<?php

$phpHeader = "PHP Variables";
$phpFact1 = "&rarrw; PHP is a loosely type language.</br></br>";
$phpFact2 = "&rarrw; Variables begin with '$' followed by the name of the variable.</br></br>";
$phpFact3 = "&rarrw; PHP automatically associates a data type with a variable depending on its value.</br></br>";
$phpFact4 = "&rarrw; In PHP 7, type declarations were added.  Data type can be specified by enabling the 'strict' requirement.</br></br>";
$phpFact5 = "&rarrw; Variables declared outside of a function have a global scope.  They can only be accessed outside of functions</br></br>";
$phpFact6 = "&rarrw; Variables declared within a function have a local scope.  They can only be accessed within that function.</br></br>";
$phpFact7 = "&rarrw; The 'global' keyword can be used to access a global variable from within a function.</br></br>";
$phpFact8 = "&rarrw; The 'static' keyword can be used to maintain the value of a local variable each time a function is called.  
 However, the variable is still local to the function.</br></br>"

?>

<html>
<head>
<body>
<h1>
    <?php echo($phpHeader); ?>
</h1>
<h3>
    <?php echo($phpFact1); ?>
    <?php echo($phpFact2); ?>
    <?php echo($phpFact3); ?>
    <?php echo($phpFact4); ?>
    <?php echo($phpFact6); ?>
    <?php echo($phpFact7); ?>
    <?php echo($phpFact8); ?>
    <a href = "index.php">Index</a>
    <a href = "/variables.php">Variables</a>
</h3>
</body>
</head>
</html>