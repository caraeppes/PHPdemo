<?php

$phpHeader = "PHP Variables";
$phpFact1 = "&rarrw; PHP is a loosely typed language.</br></br>";
$phpFact1 = "&rarrw; Variables begin with '$' followed by the name of the variable.</br></br>";
$phpFact2 = "&rarrw; PHP automatically associates a data type with a variable depending on its value.</br></br>";
$phpFact3 = "&rarrw; Variable names are case-sensitive ($ age and $ AGE are two different variables).</br></br>";
$phpFact4 = "&rarrw;DATA Types :String,Integer,Float, Boolean,Array,Object,NULL.</br></br>";
$phpFact5 ="&rarrw; Two basic ways to get output echo and print.</br></br>";





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
    <?php show_source("test.php"); ?></br></br>

    <a href = "index.php">Index</a>&bull;
    <a href="functions.php">Functions</a>
</h3>
</body>
</head>
</html>