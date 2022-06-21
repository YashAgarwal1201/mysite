
	<div class="work1b1" id="work1b1">
		<h2>Search Bars</h2>
		<div>
			<button id="Back2"><i class="material-icons">chevron_left</i></button>
			<button id="Ahead2"><i class="material-icons">chevron_right</i></button>
		</div>
	</div>
	<div class="work1b2" id="work1b2">
		<?php
			function len2() {
				$folder = 'searchbars/SearchTemplatesImages';
				$ass = array(0);
				if (is_dir($folder)) {
					$files = scandir($folder,0);
					$length = count($files) - 2;
				}
				return $length;
			}
			function searchScrollContainer() {
				echo "<div class='work1b2i' id='work1b2i'>\n";
				for ($i = 1; $i <= len2(); $i++) { 
					echo "	<div class='container'>\n";
					$id = 'simg' . strval($i);
					echo "		<section id=". $id ." class='thumbnail'></section>\n";
					echo "		<div class='middle'>\n";
					echo "			<section class='text'><p>Content</p></section>\n";
					echo "		</div>\n";
					echo "	</div>\n";
				}
				echo "</div>\n";
			}
			searchScrollContainer();  
		?>
	</div>
	<!-- Modal Section 2 -->
	<div class="work1b3" id="work1b3">
		<?php
			function modal2() {
				for ($i = 1; $i <= len2(); $i++) { 
					// code...
					$id = 'smc' . strval($i);
					echo "<div class='modalContainerCollection' id='". $id ."'>\n";
					echo "	<div class='modalContentCollection'>\n";
					echo "		<button onclick='$(\"#". $id ."\").slideUp();' title='Close this modal'><i class='material-icons'>close</i></button>\n";
					echo "		<h2>Content</h2>\n";
					echo "		<div>\n";
					$id_1 = 'smcf' . strval($i);
					echo "		<section id='". $id_1 ."'></section>\n";
					echo "		<section>\n";

					$id_2 = 'smc' . strval($i) . 'c1';
					echo "			<p>CSS:</p>\n<content id ='". $id_2 ."'></content>\n";

					$id_3 = 'smc' . strval($i) . 'c2';
					echo "			<p>HTML & Javascript</p>\n<content id = '" . $id_3 . "'></content>\n";

					echo "		</section>\n";
					echo "		</div>\n";
					echo "		<p></p>\n";
					echo "	</div>\n";
					echo "</div>\n";
				}
			}
			modal2();
		?>
	</div>