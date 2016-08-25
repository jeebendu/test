<?php 
$remark_text = 'Scuffing,Dent,School,abc,College,Brightsword,Sanu,Jeebendu,Anirudhha,Shruty Y';
echo $remark_text.'<br><br><br>' ; 


$max_remark_length = 16;
$available_space = $max_remark_length;
$remarkArray = [];

$myremark = explode(",", $remark_text);
$i=0;$j=0;
 foreach ($myremark as $remark){
	 
	 
	$remarkArray[$j]='';
	$remark_length =strlen($remark); 
	if($remark_length<$max_remark_length){
		
		
			if($available_space>$remark_length){
				if($j>0){
					$remarkArray[$j].= ','.$remark;
					
				}else {
					$remarkArray[$j].= $remark;
					$j++;
						
				}
				
				$available_space = $available_space-$remark_length;	
			
			}else {
				$remarkArray[$j].= $remark;
				$available_space=$max_remark_length;
				$j++;
			}
		
		echo $remark_length.'=='.$remark.'--'.$available_space.'<br>';
		
		
	}else{
		if (count(explode(' ', $remark)) > 1) {
			$remark_nospaces = explode(" ", $remark);
			foreach($remark_nospaces as $remark_nospace){
				
				$remarkArray[$j].= $remark_nospace;
				$j++;
			}
			
			
		}else{
			$remark_mores = str_split($remark,$max_remark_length);
			foreach($remark_mores as $remark_more){
				$remarkArray[$j].= $remark_more;
				$j++;
				
			}
			
		}
	}
	 
	 $i++;
 } 
 echo '-----------------------------------------------';
 var_dump($remarkArray);

echo 'Remark is '.$i.'--Split into '.$j;
?>