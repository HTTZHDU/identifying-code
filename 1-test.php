<?php
header('content-type:text/html;charset=UTF-8');
function test($type){
	switch($type){
		case 1:
			// echo (rand(0,9)
			// 	echo(rand(0,9)
			// 		echo (rand(0,9)
			// 			echo (rand(0,9))
			echo rand(0,9);
			echo rand(0,9);
			echo rand(0,9);
			echo rand(0,9);
		break;
		case 2:
			function randomkeys($length){
				$pattern = 'abcdefghijklmnopqrstuvwxyz';
				for($i=0;$i<$length;$i++){
					$key .=$pattern{rand(0,$length)};
				}
				return $key;
			}
			echo randomkeys(4);
		break;
		case 3:
			function randomkeys($length1){
				$pattern = '0123456789abcdefghijklmnopqrstuvwxyz';
				for($i=0;$i<$length1;$i++){
					$key .=$pattern{rand(0,$length1)};
				}
				return $key;
			}
			echo randomkeys(4);
		break;
	}
}
test(3);
?>