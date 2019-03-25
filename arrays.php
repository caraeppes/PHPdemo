<?php

$phpHeader = "PHP Arrays";
$myArray = array("1. Indexed Arrays", "2. Associative Arrays", "3. Multidimensional arrays");
$sort1= "sort() - sort arrays in ascending order";
$sort2= "rsort() - sort arrays in descending order";
$sort3= "asort() - sort associative arrays in ascending order, according to the value";
$sort4= "ksort() - sort associative arrays in ascending order, according to the key";
$sort5= "arsort() - sort associative arrays in descending order, according to the value";
$sort6= "krsort() - sort associative arrays in descending order, according to the key";
$sortArray = array("sort"=>$sort1,
                  "rsort"=>$sort2,
                  "asort"=>$sort3,
                  "ksort"=>$sort4,
                  "arsort"=>$sort5,
                  "krsort"=>$sort6,);

$phpFact1 = "&rarrw;Arrays in PHP is a type of data structure that allows us to store multiple elements of similar data type under a single variable</br><br>";
$phpFact2 = "&rarrw;In PHP, the array() function is used to create an array</br></br>";
$phpFact3 = "&rarrw; An array with a numeric index. Values are stored and accessed in linear fashion</br></br>";
$phpFact4 = "&rarrw; An array Arrays with named keys</br></br>";
$phpFact5 = "&rarrw; Arrays containing one or more arrays.</br></br>";
$phpFact6 = "&rarrw; PHP Sorting Arrays.</br></br>";
$phpSort ="&rarrw; The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.</br></br>";
$phpExample = "&rarrw; PHP Examples</br></br>";

https://image.slidesharecdn.com/class4-phparrays-150930071103-lva1-app6891/95/class-4-php-arrays-9-638.jpg?cb=1443597388
$phplogo =  "<div><img src='http://www.galitein.com/ga-content/uploads/2017/01/php.jpg' alt='Indexed Array'align='right' />";

$phpexample1 =  "<div><img src='https://i2.wp.com/www.tutorialscan.com/wp-content/uploads/2018/03/PHP-Arrays.jpg?resize=554%2C364' alt='Array1' />";

$phpexample2 =  "<div><img src='https://www.jquery-az.com/wp-content/uploads/2015/12/8.4-PHP-associative-array.png' alt='Array' />";
$phpexample3 =  "<div><img src='https://image.slidesharecdn.com/class4-phparrays-150930071103-lva1-app6891/95/class-4-php-arrays-9-638.jpg?cb=1443597388' alt='Array2' />";
$imageArray =array($phpexample1,$phpexample2)

?>



<html>
<?php echo "<body style='background-color:lavender'>"; ?>

<head>
    <style>

        h1 {
            text-align: center;
            color: #191970;
        }
        h3 {

            color: #800000;
        }

        p {
            text-align: justify;
            color: #191970;
        }
        p2 {
            text-align: justify;
            color: #800000;
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



    <?php echo"<strong>";?>
    <?php echo($phpFact1); ?>
    <?php echo($phpFact2); ?>

    <?php echo($myArray[0]);?>

    <?php echo($phpFact3); ?>
    <?php echo($myArray[1]);?>
    <?php echo($phpFact4); ?>
    <?php echo($myArray[2]);?>
    <?php echo($phpFact5); ?>
<h3>
    <?php echo($phpFact6); ?>
</h3>

<p2>
    <?php echo($phpSort); ?>


<!-- --><?php //arsort($sortArray);?>

    <?php
    echo  " Below sort types displaying here with For each loop on Array</br></br>";

    foreach ( $sortArray as $key =>$value ) {


          echo  " $value</br></br>";

    }


    ?>


</p2>

<h3>
    <?php echo($phpExample); ?>
</h3>

<?php   foreach ( $imageArray as $myImage) {


    echo  " $myImage</br></br>";

}


?>

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