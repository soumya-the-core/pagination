
D
D
D
C
C
C
C
C


hi i can do any w




?php
//////////////////////////////////
$l = 330;
$k = 45;

$val3 = 0;
$val6 = 0;
$val9 = 0;

/*for($i=0;$i<$k;$i++){
	echo $i*$l;
	echo '&nbsp;&nbsp;';
}
echo '</br>......3.......</br>';
for($i=0;$i<$k;$i++){
		echo $i%3;
		echo '&nbsp;&nbsp;';
}
echo '</br>';
for($i=0;$i<$k;$i++){
	if( ($i+1)%3==0){
		$val3++;
	}
}
echo $val3;
echo '</br>.....6......</br>';
for($i=0;$i<$k;$i++){
		echo $i%6;
		echo '&nbsp;&nbsp;';
}
echo '</br>';
for($i=0;$i<$k;$i++){
	if( ($i+1)%6==0){
		$val6++;
	}
}
echo $val6;
echo '</br>.....9......</br>';
for($i=0;$i<$k;$i++){
		echo $i%9;
		echo '&nbsp;&nbsp;';
}
echo '</br>';
for($i=0;$i<$k;$i++){
	if( ($i+1)%9==0){
		$val9++;
	}
}
echo $val9;
echo '</br>..................................</br>';*/


$val9val = 0;
$newVal  = 0;
for($i=0;$i<$k;$i++){
	
//	if( ($i+1)%4==0 && $newVal != 2){
//		$newVal = 2;
//	}
//	if($newVal == 2){
//		$newVal = 4;
//	}
        if(($i%9)==0 || ($i%9)==1 || ($i%9)==2)
        {
            $newVal = 0;
        }
        else if(($i%9)==3 || ($i%9)==4 || ($i%9)==5)
        {
            $newVal = 2;
        }
         else if(($i%9)==6 || ($i%9)==7 || ($i%9)==8)
        {
            $newVal = 4;
        }
        
	echo (($i%3)*$l)+($val9val*3).'px,top:'.$newVal.' px | &nbsp;&nbsp;';
	
	if( ($i+1)%3==0){
		echo '<br>';
	}
	if( ($i+1)%6==0){
		echo '<br>';
	}
	
	if( ($i+1)%9==0){
		$val9val += $l;
		echo '...9...<br>';
	}	
}
?>
