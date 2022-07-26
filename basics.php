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
    include 'includes/header.php';
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

    echo'<h2>Switch statements</h2>';


    switch($grade){
        case 'A':
            echo '<h3 style="color: green">You got an A!</h3>';
            break;
    }
    
    ?>

<!-- switch statements -->
    <?php 

    $grade = 'F';

    switch($grade){
        case 'A':
            echo '<h3 style="color: green">You got an A!!</h3>';
            break;
        case ('B'):
            echo '<h3>You got a B!!</h3>';
            break;
        default:
            echo '<h3>You failed!</h3>';
            break;
    }


    for($count = 0; $count < 1; $count++){
        echo"<p>LOOP $count</p>";
    }



    ?>
    <!-- while loop -->
    <?php 

    $count = 2;
    while ($count > 0) {
        echo"<p>LOOP $count</p>";
        $count--;
    }

    $count2 = 9;
    do{
        echo "<p>LOOP2 $count2</p>";
        $count2++;
    }while($count2 < 10);

    ?>

<!-- array stuff -->
    <?php 

    $list = [1,2,3,4,5];

    echo"<p>$list[4]</p>";

    $listCount = count($list);

    echo "<p>size is : $listCount </p>";


    ?>


<!-- string manipulation -->

    <?php 
    $name = 'John';
    $phrase = 'Hello World, how you doing';

    echo $phrase . " my friendo " . $name;


    ?>


<!-- Date and time manipulation -->
    

    <?php 
        echo "<h1>Date and time manipulation</h1>";
        $date = date('Y-m-d');
        echo "<p>Today is $date</p>";
        //shows date in a different format
        $time = date('H:i:s');
        echo "<p>The time is $time</p>";
        // time in hours, minutes, seconds
        $timestamp = time();
        echo "<p>The timestamp is $timestamp</p>";
        // will show bunch of numbers probably after the unix 1970 date epocal


    ?>


<!-- USER FUNCTIONS -->
    

<?php 
    echo "<h1>User functions</h1>";
    function sayHello(){
        echo "<p>Hello World</p>";
    }
    sayHello();


    function maththing($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }

    $result = maththing(10,20);
    echo("<p>The sum is $result</p>");

    ?>

<?php
    include 'includes/footer.php';
?>