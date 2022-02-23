<?php
    function demo($n){
        if($n<=5){
            echo "Number: $n <br>";
            demo($n+1);         //3 4 5
        }
    }
    demo(3);

    function demo1($n){
        if($n<0){
           return -1;           //wrong value
        }
        if($n==0)
            return 1;            //terminate
            return $n*demo1($n-1);
                    //5*4 = 20
                    //20*3=60
                    //60*2=120
                    //120*1=120
    }
   echo "<br>Recursive factorial = ".demo1(5);
?>