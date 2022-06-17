<?php
    //1-2 
    for($i=2;$i <= 10000; $i++){
        $prime = true;//boolean

        for($j=2; $j*$j<=$i; $j++){
            if($i % $j == 0){
                //1か$i以外で割り切れる時、if文処理がされる
                $prime = false;
                break;
            }
        }
        //この時点でまだ$primeがtrueのとき、素数
        if($prime){
             echo $i."<br>";
        }
    }
?>