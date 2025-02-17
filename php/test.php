<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>sakuralittle</title>
    </head>
    <body>
        <?php
            $a="sakuralittle";
            $b= &$a;
            $c= "a";
            $d= $$c;
            $PI= 3.14;
            print "name " . $a . "<br/>";
            print "name2 ". $b . "<br/>";
            print "name3 ". $c . "<br/>";
            print "name4 ". $d . "<br/>";
            echo $a,$b,$c;
            echo "PI:". $PI*5;
            ?>
    </body>
</html>