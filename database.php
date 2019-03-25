<?php
/**
 * Created by PhpStorm.
 * User: caraeppes
 * Date: 2019-03-22
 * Time: 15:52
 */

$host = '127.0.0.1';
$db   = 'snowReport';
$user = 'root';
$pass = null;
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $connection = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$tableHeader = "<table id='t01'>
<tr>
<th>ID</th>
<th>Resort Name</th>
<th>Inches of Snow Last 72hrs</th>
<th>Expected Inches of Snow Next 72hrs</th>
<th>Base Depth in Inches</th>
<th>Number of Open Trails</th>
</tr>";

$default = 'SELECT * FROM resorts';
$last72 = 'SELECT * FROM resorts ORDER BY snowFallLast72 DESC';
$next72 = 'SELECT * FROM resorts ORDER BY expectedSnowFall DESC';
$base = 'SELECT * FROM resorts ORDER BY base DESC';
$trails = 'SELECT * FROM resorts ORDER BY openTrails DESC';
$above1foot = 'SELECT * FROM resorts WHERE expectedSnowFall > 12.0 ORDER BY expectedSnowFall DESC';


function addSomething(){
    global $connection;

    $sql = $connection->query('INSERT INTO `snowReport`.`resorts` (`resortName`, `snowFallLast72`, `expectedSnowFall`, `base`, `openTrails`, ) VALUES (\'Bear 122\', 30, 35, 200, 122)');
    $connection->exec($sql);

}

function baseTable($pstm)
{
    global $connection;
    global $tableHeader;
    $result = $connection->query($pstm);
    if ($result->rowCount() > 0) {
        echo $tableHeader;
        // output data of each row
        while ($row = $result->fetch()) {
            echo "<tr>
<td>" . $row["id"] . "</td>
<td>" . $row["resortName"] . "</td>
<td>" . $row["snowFallLast72"] . "</td>
<td>" . $row["expectedSnowFall"] . "</td>
<td>" . $row["base"] . "</td>
<td>" . $row["openTrails"] . "</td>
</tr>";
        }
        return "</table>";
    } else {
        echo "0 results";
    }

}


?>


<html>
<?php echo "<body style='background-color:lavender'>"; ?>
<head>
    <style>

        h1 {
            text-align: center;
            color: #191970;
        }

        table, th, td{
            border: 2px solid #c2914c;
            border-collapse: collapse;
            align-items: center;
        }

        th{
            padding: 5px;
            background-color: #7d7009;
            color: white;

        }

        td{
            text-align: center;
            color: black;

        }

        table#t01 tr:nth-child(odd){
            background-color: #dcced5;
        }

        table#t01 tr:nth-child(even){
            background-color: #c8ae8f;
        }

        p {
            text-align: justify;
            color: #191970;
        }

        ul {
            color: #191970;
        }

        a:link {
            background-color: #c2914c;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover, a:active{
            background-color: #7d7009;
        }

        h3{
            visibility: hidden;
        }
    </style>
<body>
<nav>
    <a href = "index.php">Home Page</a>
</nav>

<h1>
    PHP - mySQL Interaction Demo!
</h1>

<h2>
    <?php
    echo baseTable($default);
    addSomething();
    //$lastSnowTable = baseTable($last72);
    //$expectedSnowTable = baseTable($next72);
    //$baseSnowTable = baseTable($base);
    //$trailsTable = baseTable($trails);?>
</h2>
</body>
</head>
</html>


