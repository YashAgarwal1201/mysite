
	<div class="work1c1" id="work1c1">
		<h2>Inspired Designs</h2>
		<div>
			<button id="Back3"><i class="material-icons">chevron_left</i></button>
			<button id="Ahead3"><i class="material-icons">chevron_right</i></button>
			<button id="inspiredScroll"><i class="material-icons">swap_horiz</i></button>
		</div>
	</div>
	<div class="work1c2" id="work1c2">
		<?php
			function len3()
			{
				// code...
				$folder = 'Inspired/ProjectLily/';
				$ass = array(0);
				if (is_dir($folder)) {
					$files = scandir($folder,0);
					$length = count($files) - 2;
				}
				return $length;
			}
			echo "<div class='work1c2i' id='work1c2i'>\n";
			for ($i = 1; $i <= len3(); $i++) { 
				echo "	<div class='container'>\n";
				$id = 'inspImg' . strval($i);
				echo "		<section id='". $id ."' class='inspired'></section>\n";
				echo "	</div>\n";
			}
			echo "</div>\n";  
		?>
	</div>