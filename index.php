<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les constantes en PHP</title>

    <?php 

    define("BIENVENUE", "Bienvenue dans le site");
    echo(BIENVENUE);

    echo'<br/>';

    echo __LINE__ .'<br/>';

    function test(){ 
        echo __FONCTION__ .'<br/>';
    }
    test();

    echo __FILE__ .'<br/>';
    echo __DIR__ .'<br/>';
    echo __LINE__ .'<br/>';

    ?>

</head>
<body>
    
</body>
</html>