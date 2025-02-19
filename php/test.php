<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>sakuralittle</title>
        <link rel="icon" type="image/png" href="G:\程式開發項目\早餐店計畫\code\breakfast_order_system\data\PNG\aqua.png">
    </head>
    <body>
    <img src="aqua.png" width="480px"/>
        <?php
            $a="sakuralittle";

            $b= &$a;
            $c= "a";
            $d= $$c;
            $PI= 3.14;
            $filename="sakura.txt";
            print "name " . $a . "<br/>";
            print "name2 ". $b . "<br/>";
            print "name3 ". $c . "<br/>";
            print "name4 ". $d . "<br/>";
            echo $a,$b,$c;
            echo "PI:". $PI*5;
            print "<br/>";
            $fp =@fopen($filename,"r") or exit("ERROR FILE OPEN ERROR");
            fclose( $fp );
            ?>
        
    </body>
</html>