
	<div class="work1a1" id="work1a1">
		<h2>Forms</h2>
		<div>
			<button><i class="material-icons">chevron_left</i></button>
			<button><i class="material-icons">chevron_right</i></button>
		</div>
	</div>
	<div class="work1a2" id="work1a2">
		<?php
			$folder = 'forms/FormsTemplatesImages';
			$ass = array(0);
			if (is_dir($folder)) {
				$files = scandir($folder,0);
				$length = count($files) - 2;
			}
			echo "<div class='work1a2i' id='work1a2i'>\n";
			for ($i = 1; $i <= $length; $i++) { 
				echo "	<div class='container'>\n";
				$id = 'fimg' . strval($i);
				echo "		<section id=". $id ." class='thumbnail'></section>\n";
				echo "		<div class='middle'>\n";
				echo "			<section class='text'><p>Content</p></section>\n";
				echo "		</div>\n";
				echo "	</div>\n";
			}
			echo "</div>\n";

			for ($i = 1; $i < $length; $i++) { 
				// code...
				$id = 'fmc' . strval($i);
				echo "<div class='modalContainerCollection' id=" . $id . ">";
				
				echo "</div>";
			}  
		?>
	</div>
	<div>
		<?php
			//echo "<div class="modalContainerCollection" id="mc1">";
		?>
	</div>
	<script>

	</script>