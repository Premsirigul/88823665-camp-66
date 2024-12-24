<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h1>File index.php</h1>
        <?php
        echo "Hello World";
        echo "<br>";
        print("Hello World");
        echo "<br>";
        printf("Hello World");
        echo "<br>";
        print_r("Hello World");
        echo "<br>";
        var_dump("Hello World");
        $myvar = "Hello WorlD";
        ?>
        <h1><?php echo $myvar; ?></h1>
        
        <?php
        echo "<h1>".$myvar. "</h1>";
        ?>
        <?php
        function myfunction($myparam){
            global $x;
            $x = "Hello";
            return $myparam;
        }
        echo "<p>".MYFUNCTION("Hello World55")."</p>";
        ?>
        <h1><?php echo $x?></h1>
        <?php echo "1"+ '1'; //2 ?>    
        <?php
        $mychar = "a";
        ?>
        <?php
        $my_arry =array(1,2,3,4,5);
        for ($i=0; $i <count($my_arry) ; $i++) { 
            echo $my_arry[$i];
        }
        echo "<br>";
        $my_arry2[] =1;
        $my_arry2[] =2;
        $my_arry2[] =3;
        $my_arry2[] =4;
        $my_arry2[] =5;
        print_r($my_arry2);
        ?>

    </body>
</html>