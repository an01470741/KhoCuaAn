<?php
    $mangSoLe = array();
    for($i=1;$i<=150;$i++){
       if($i%2==1){
           array_push($mangSoLe,$i);
       }
    }
    foreach ($mangSoLe as $key =>$value){
        echo $value.'       ';
    }
?>