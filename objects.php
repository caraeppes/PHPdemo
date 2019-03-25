<?php

$phpHeader = "PHP Objects";
$phpFact1 = "&rarrw; An Object is an individual instance of the data structure defined by a class. We define a class once and then make many objects that belong to it. Objects are also known as instances..</br></br>";
$phpFactObjectHeader = "&rarrw; Creating an Object:</br></br>";
$phpFact2 = "&rarrw; Once you defined your class, then you can create as many objects as you like of that class type. Following is an example of how to create object using new operator</br></br>";
$phpMember = "&rarrw; Member Functions:</br></br>";
$phpMemberdef = "&rarrw; After creating our objects, we can call member functions related to that object. A member function typically accesses members of current object only.</br></br>";
$phpConstructor = "&rarrw; Constructors:</br></br>";
$phpConstructordef = "&rarrw; Constructor in PHP is special type of function of a class which is automatically executed as any object of that class is created or instantiated.</br></br>";
$phpConstructordef2 = "&rarrw;Constructor is also called magic function because in PHP, magic methods usually start with two underscore characters</br></br>";
$phplogo =  "<div><img src='http://www.galitein.com/ga-content/uploads/2017/01/php.jpg' alt='Indexed Array'align='right' />";

$objectImage =  "<div><img src='https://i0.wp.com/www.thecreativedev.com/wp-content/uploads/2017/02/Objects-and-Classes-in-PHP.png?resize=545%2C300&ssl=1' alt='Objectimage1' />";
$constructorImage =  "<div><img src='https://ars.els-cdn.com/content/image/3-s2.0-B9780127323503500028-u02-02-9780127323503.jpg' alt='Objectimage1' />";



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

<p>





<?php

include 'ObjectDef.php';
include 'ObjectHeadAndImage.php';

    $displayObject = new phpObjectDef;
    $displayObjectHead = new phpObjectHead();

    /* Setting Title and Def for the object */

    $displayObjectHead->setPhpHeader($phpHeader);

    /* Calling Member Functions */

    ?>
<h1>
    <?php echo($displayObjectHead->getPhpHeader()); ?>
</h1>
<p>
<?php

$displayObject->setPhpFact1($phpFact1);
echo($displayObject->getPhpFact1());
 $displayObjectHead->setPhpFactObjectHeader($phpFactObjectHeader);
?>

<h1>
    <?php echo($displayObjectHead->getPhpFactObjectHeader()); ?>
</h1>
<p>
    <?php

    $displayObject->setPhpFact2($phpFact2);
    echo($displayObject->getPhpFact2());
    $displayObjectHead->setObjectImage($objectImage);
    echo($displayObjectHead->getObjectImage());
    $displayObjectHead->setPhpMember($phpMember);
    ?>





<h1>
    <?php
    echo($displayObjectHead->getPhpMember());
    ?>
</h1>
<p>
<?php

     $displayObject->setPhpMemberdef($phpMemberdef);
    echo($displayObject->getPhpMemberdef());
     $displayObjectHead->setPhpConstructor($phpConstructor);


   ?>
<h1>
    <?php
    echo($displayObjectHead->getPhpConstructor());
    ?>
</h1>
<p>
    <?php

    $displayObject->setPhpConstructordef($phpConstructordef);
    echo($displayObject->getPhpConstructordef());
    $displayObject->setPhpConstructordef2($phpConstructordef2);
    echo($displayObject->getPhpConstructordef2());

    $displayObjectHead->setConstructorImage($constructorImage);
    echo($displayObjectHead->getConstructorImage())

    ?>
<br>
    <br>
    <a href="index.php">Index</a> &bull;
    <a href="variables.php">Variables</a> &bull;
    <a href="functions.php">Functions</a> &bull;
    <a href="arrays.php">Arrays</a> &bull;
    <a href="objects.php">Objects</a> &bull;
    <a href="webConcepts.php">Web Concepts</a> &bull;
    <a href="database.php">Database</a>





</body>
</head>
</html>
