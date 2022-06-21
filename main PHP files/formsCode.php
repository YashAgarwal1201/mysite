
<?php

$element_id = $_GET['elementId'];
$index = $_GET['index'];
if ($element_id and $index) 
{
	if (isset($element_id) and !empty($element_id) and isset($index) and !empty($index)) {
		//$dir = '../forms/FormsTemplatesImages';
		$dir2 = '../forms/FormsTemplates';
		$arr = array(0);
		if (is_dir($dir2)) {
			$files = scandir($dir2, 0);
			for ($i = 2, $j = 0; $i < count($files), $j < count($files) - 2; $i++, $j++) {
				//$ass[$j] = $dir . '/' . $files[$i];
				$arr[$j] = '../forms/FormsTemplates/' . $files[$i];
			}
			for ($i = 0; $i < count($arr); $i++) { 
				if ($index == $i) {
					$frameSrc = $arr[$i]; 
					//$frameCont = '<pre>' . file_get_contents($frameSrc) . '</pre>';
				}
			}
		}

		$file_name = $frameSrc;//'../' . $frameSrc;
		copy($file_name, 'booby.txt');	// copies the content of file name into a file called 'booby.txt'

		$fz = fopen('booby.txt', 'w');

		$z = file_get_contents($file_name);

		preg_match('#<style>#', $z, $matches);
		$pos1 = strpos($z, $matches[0]);
		$pos1 += 7;
		$extra = $matches[0][0];

		preg_match('#</style>#', $z, $matches2);
		$pos2 = strpos($z, '/style');
		$pos2 -= 1;

		for ($i = $pos1; $i < $pos2; $i++) 
		{ 
			fwrite($fz, $z[$i]);
		}
		$alpha = '<pre>' . htmlentities(file_get_contents('booby.txt')) . '</pre>';


		fclose($fz);

		$fzz = fopen('booby.txt', 'w');

		preg_match('#<body>#', $z, $matchesx);
		$posx1 = strpos($z, $matchesx[0]);
		$posx1 += 7;

		$posx2 = strpos($z, '/body');
		$posx2 -= 1;

		for ($i = $posx1; $i < $posx2; $i++) 
		{ 
			fwrite($fzz, $z[$i]);
		}

		$beta = '<pre>' . htmlentities(file_get_contents('booby.txt')) . '</pre>';
		fclose($fzz);
	}
	else {
		echo "Sorry But an ERROR has occured, Please try after some time.";
	}

	echo json_encode(array('a' => $frameSrc, 'b' => $alpha, 'c' => $beta));
}
else {
	echo "Sorry But an ERROR has occured, Please try after some time.";
}

?>