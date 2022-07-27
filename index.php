<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Workshop</title>
</head>
<body>
    <h1>PHP Workshop</h1>
    <h2>Follow each link to a new page!</h2>
    <li><a href="basics.php">basics of php</a></li>

    <br>
    <br><br>
<?php
    echo 'Hello World eat !!me';

    $name = 'John';
    $age = '30';


    
    $list = [1,2];
    var_dump($name);

    echo(str_replace('ohn', 'ason', $name));
    echo'<br>';
    echo('second line!');

    echo('<h3>My name is:' .$name.' </h3>');

?>


</body>
</html>