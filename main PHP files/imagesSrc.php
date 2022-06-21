
<?php

// variable to find which folder to be checked for images sources
$var = $_POST['folder'];

switch ($var) {

	case 'script1':
		$alpha =  'main JS files/mainScript1.js';
		$beta = 'main CSS files/mainCSS1.css';
		$gamma = 'main JS files/mainScript2.js';
		echo json_encode(array('a' => $alpha, 'b' => $beta, 'c' => $gamma));
		break;

	case 'main Images':
		if (isset($var) and !empty($var)) {
			$dir = '../main Images';
			$ass = array(0);
			if (is_dir($dir)) {
				$files = scandir($dir, 0);
				for ($i = 2, $j = 0; $i < count($files), $j < count($files) - 2; $i++, $j++) {
					//$ass[$j] = $dir . '/' . $files[$i];
					$ass[$j] = $var . '/' . $files[$i];
				}
				echo json_encode($ass);
			}
			else {
				echo "OOPS, SORRY BUT AN ERROR HAS OCCURED. PLEASE TRY AFTER SOME TIME.";
			}
		}
		else{
			echo "OOPS, SORRY BUT AN ERROR HAS OCCURED. PLEASE TRY AFTER SOME TIME.";
		}
		break;

	/*case 'SearchTemplatesImages':
		if (isset($var) and !empty($var)) {
			$dir = '../searchbars/SearchTemplatesImages';
			$ass = array(0);
			if (is_dir($dir)) {
				$files = scandir($dir, 0);
				for ($i = 2, $j = 0; $i < count($files), $j < count($files) - 2; $i++, $j++) {
					//$ass[$j] = $dir . '/' . $files[$i];
					$ass[$j] = "forms/" . $var . '/' . $files[$i];
				}
				echo json_encode($ass);
			}
			else {
				echo "OOPS, SORRY BUT AN ERROR HAS OCCURED. PLEASE TRY AFTER SOME TIME.";
			}
		}
		else{
			echo "OOPS, SORRY BUT AN ERROR HAS OCCURED. PLEASE TRY AFTER SOME TIME.";
		}
		break;*/

	case 'TemplatesImages':
		if (isset($var) and !empty($var)) {
			$dir = '../forms/FormsTemplatesImages';
			$arr = array(0);
			if (is_dir($dir)) {
				$files = scandir($dir, 0);
				for ($i = 2, $j = 0; $i < count($files), $j < count($files) - 2; $i++, $j++) {
					//$ass[$j] = $dir . '/' . $files[$i];
					$arr[$j] = 'forms/FormsTemplatesImages/' . $files[$i];
				}
				//echo json_encode($ass);
			}
			else {
				echo "OOPS, SORRY BUT AN ERROR HAS OCCURED. PLEASE TRY AFTER SOME TIME.";
			}
			$dir2 = '../searchbars/SearchTemplatesImages';
			$arr2 = array(0);
			if (is_dir($dir)) {
				$files = scandir($dir2, 0);
				for ($i = 2, $j = 0; $i < count($files), $j < count($files) - 2; $i++, $j++) {
					//$ass[$j] = $dir . '/' . $files[$i];
					$arr2[$j] = 'searchbars/SearchTemplatesImages/' . $files[$i];
				}
				//echo json_encode($ass2);
			}
			else {
				echo "OOPS, SORRY BUT AN ERROR HAS OCCURED. PLEASE TRY AFTER SOME TIME.";
			}
			$dir3 = '../Inspired/ProjectLily';
			$arr3 = array(0);
			if (is_dir($dir3)) {
				$files = scandir($dir3, 0);
				for ($i = 2, $j = 0; $i < count($files), $j < count($files) - 2; $i++, $j++) {
					//$ass[$j] = $dir . '/' . $files[$i];
					$arr3[$j] = 'Inspired/ProjectLily/' . $files[$i];
				}
				//echo json_encode($ass);
			}
			else {
				echo "OOPS, SORRY BUT AN ERROR HAS OCCURED. PLEASE TRY AFTER SOME TIME.";
			}
			echo json_encode(array('a' => $arr, 'b' => $arr2, 'c' => $arr3));
		}
		else{
			echo "OOPS, SORRY BUT AN ERROR HAS OCCURED. PLEASE TRY AFTER SOME TIME.";
		}
		break;

	default:
		echo "OOPS, SORRY BUT AN ERROR HAS OCCURED. PLEASE TRY AFTER SOME TIME.";
		break;
}

?>