<?php


$phpHeader = "PHP Functions";
$phpFact1 = "&rarrw; A function is a block of statements that can be used repeatedly in a program.</br></br>";
$phpFact2 = "&rarrw; A function will be executed by a call to the function.</br></br>";
$phpFact3 = "&rarrw; A user-defined function declaration starts with the word function.</br></br>";
$phpFact4 ="&rarrw; Arguments are specified after the function name, inside the parentheses.
 You can add as many arguments as you want, just separate them with a comma.</br></br>";
$phpFact4="&rarrw; PHP has three different variable scopes:
<UL>&bull; local</br>&bull; global</br>&bull; static</br></UL></br>";
$phpFact5 = "&rarrw; Variables declared outside of a function have a global scope.  They can only be accessed outside of functions</br></br>";
$phpFact6 = "&rarrw; Variables declared within a function have a local scope.  They can only be accessed within that function.</br></br>";
$phpFact7 = "&rarrw; The 'global' keyword can be used to access a global variable from within a function.</br></br>";
$phpFact8 = "&rarrw; The 'static' keyword can be used to maintain the value of a local variable each time a function is called.  
 However, the variable is still local to the function.</br></br>";

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
<h3>
    <?php echo($phpFact1); ?>
    <?php echo($phpFact2); ?>
    <?php echo($phpFact3); ?>
    <?php echo($phpFact4); ?>
    <?php echo($phpFact6); ?>
    <?php echo($phpFact7); ?>
    <?php echo($phpFact8); ?>
    <a href = "index.php">Index</a>
</h3>
</body>
</head>
</html>