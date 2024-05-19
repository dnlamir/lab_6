<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
<?php
    $name = "Muhammad Daniel Amir bin Md Zaihan";
    $matric_number = "DI220181";
    $course = "Information Technology";
    $year_of_study = "2nd Year";
    $address = "107, Kg Sri Bengkal, 83300, Sri Gading, Batu Pahat, Johor";
?>
<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric_number; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $year_of_study; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>
</body>
</html>
