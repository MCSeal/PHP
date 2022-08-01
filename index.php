<?php 
include 'includes/header.php';

?>
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
<button type="button" class="btn btn-primary">button ref</button>

<?php
    include 'includes/footer.php';
?>