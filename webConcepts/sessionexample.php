<?php

include 'include.php';

if(isset($_SESSION['formdata'])) {
    $formData = $_SESSION['formdata'];
    unset($_SESSION['formdata']);
}
else{
    header('Location: forms.php');
}
?>

<html>
<body>

<?php echo $formData['name']."'s favorite beverage is ".$formData['beverage']?>.

<br><br>

<a href = "forms.php">Back</a>
</body>
</html>