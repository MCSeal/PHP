<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics PHP</title>
</head>
<body>
    <?php 
    echo '<h2>If statements</h2>';
    
    $grade = 49;

    if ($grade >= 50) {
        echo '<h3>You passed!</h3>';
    } else {
        echo '<h3 style="color: red">You failed!</h3>';
    }
    $grade = 'A';

    if ($grade == 'A') {
        echo '<h3 style="color: green">You got an A!</h3>';
    } 
    elseif ($grade = 'B') {
        echo '<h3>You got a B!</h3>';
    }


    ?>
</body>
</html>