
	<div class="work1a1" id="work1a1">
		<h2>Forms</h2>
		<div>
			<button id="Back1"><i class="material-icons">chevron_left</i></button>
			<button id="Ahead1"><i class="material-icons">chevron_right</i></button>
		</div>
	</div>
	<div class="work1a2" id="work1a2">
		<?php
			function len()
			{
				// code...
				$folder = 'forms/FormsTemplatesImages';
				$ass = array(0);
				if (is_dir($folder)) {
					$files = scandir($folder,0);
					$length = count($files) - 2;
				}
				return $length;
			}
			echo "<div class='work1a2i' id='work1a2i'>\n";
			for ($i = 1; $i <= len(); $i++) { 
				echo "	<div class='container'>\n";
				$id = 'fimg' . strval($i);
				echo "		<section id='". $id ."' class='thumbnail'></section>\n";
				echo "		<div class='middle' id=>\n";
				echo "			<section class='text'><p>Content</p></section>\n";
				echo "		</div>\n";
				echo "	</div>\n";
			}
			echo "</div>\n";  
		?>
	</div>
	<!-- Modal Section 1 -->
	<div class="work1a3" id="work1a3">
		<?php
			function modal() {
				for ($i = 1; $i <= len(); $i++) { 
					// code...
					$id = 'fmc' . strval($i);
					echo "<div class='modalContainerCollection' id='". $id ."'>\n";
					echo "	<div class='modalContentCollection'>\n";
					echo "		<button onclick='$(\"#". $id ."\").slideUp();' title='Close this modal'><i class='material-icons'>close</i></button>\n";
					echo "		<h2>Content</h2>\n";
					echo "		<div>\n";
					$id_1 = 'fmcf' . strval($i);
					echo "		<section id='". $id_1 ."'></section>\n";
					echo "		<section>\n";

					$id_2 = 'fmc' . strval($i) . 'c1';
					echo "			<p>CSS:</p>\n<content id ='". $id_2 ."'></content>\n";

					$id_3 = 'fmc' . strval($i) . 'c2';
					echo "			<p>HTML & Javascript</p>\n<content id = '" . $id_3 . "'></content>\n";

					echo "		</section>\n";
					echo "		</div>\n";
					echo "		<p></p>\n";
					echo "	</div>\n";
					echo "</div>\n";
				}
			}
			modal();
		?>
	</div>