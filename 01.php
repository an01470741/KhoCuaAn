<?php   
    $a = $_GET['x1'];
    $b = $_GET['x2'];
    $c = $_GET['x3'];
    
    if($a==0){
        
        if($b==0 && $c==0){
            echo 'Phuong trinh vo so nghiem';
        }else if($b==0 && $c!=0){
            echo 'Phuong trinh vo nghiem';
        }else{
            echo $x=-$b/$a;
        }
    }else if($a!=0){
        $D=$b*$b-4*$a*$c;
        if($D<0){
            echo 'Phuong trinh vo nghiem';
        }else if($D>0){
            $x1=((-$b+sqrt($D))/2*$a);
            echo 'x1='.$x1.'<br/>';
            echo 'x2='.$x2=((-$b-sqrt($D))/2*$a);
        }else if($D==0){
            echo 'Phuong trinh co nghiem kep'.'x1='.'x2='.(-$b/2*$a);
        }
    }
    
    header("location:02.php?a=123");
    
    
    
?>