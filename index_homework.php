<html>
    <head>
        <meta charset = "uft-8">
</head>
<body>
    <h1><?php echo "Hello World<br><br>"; ?></h1>
    <?php echo "<h1>Hello Work<br><br</h1>"?>
    <?php $ver_a = "SE Camp"?>
    <?php echo $ver_b = 'Hello $ver_a'?>
    <br>
    <?php echo $ver_c = "Hello $ver_a"?>
    <?php
    $ver_c = $ver_b = 1;
    $ver_c = '1';
    If($ver_b===$ver_c){
        echo '$ver_b === $ver_c';
    }elSe iF($ver_b<>$ver_c){
        echo '$ver_b<>$ver_c';
    }Else{
        echo 'eles';
    }
    ?>
    <br>
    <?php echo $ver_c = 2 ; ?>
    <br>
    <?php echo $ver_c ; 
    switch($ver_c){
        case 1 ;
        echo "1 ";
        break;
        default:
        echo "test";
    }

    $arry = array();
    $arry1 = [1,2,3];//{}
    $arry2[] = 1;
    $arry2[] = 2;
    $arry2[] = 3;
    $arry2[] = "Hello";
    $arry2['SE'] = "World";
    ?> <?php print_r($arry); ?>
    <pre><?php print_r($arry);?></pre>
    <pre><?php print_r($arry2); ?></pre>
    <pre><?php print_r($arry3); ?></pre>

    <?php for ( $i <count($arry2); $i++) ?>
    <h3><?php ?>
    </br>

</br>

</body> 
</html>