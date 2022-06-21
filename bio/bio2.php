			<h2>Education & Achievements</h2>
			<div>
				<h3>June, 2022</h3>
				<p>Published article titled "<u onclick="$('#cmc4').show();">RON - (a friendly chatbot)</u>" on IJSREM.</p>
			</div>
			<div>
				<h3>May, 2022</h3>
				<p>Received "<u onclick="$('#cmc3').show();">Canva 50 design Milestone</u>" from Canva.</p>
			</div>
			<div>
				<h3>July, 2020</h3>
				<p>Completed certification for "<u onclick='$("#cmc2").show();'>Crash course on Python by Google</u>" on Coursera.</p>
			</div>
			<div>
				<h3>July, 2020</h3>
				<p>Completed certification for "<u onclick='$("#cmc1").show();'>Introduction to HTML5 by University of Michigan</u>" on Coursera.</p>
			</div>
			<div>
				<h3>2018 - 2022</h3>
				<p>Bachelor of Technology in Computer Science and Engineering<br><i>DIT University, Dehradun, India</i></p>
			</div>
			<div>
				<h3>March, 2018</h3>
				<p>Completed 12th (Intermediate)<br><i>Modern Era Public School, Bijnor, India</i></p>
			</div>
			<div>
				<h3>March, 2016</h3>
				<p>Completed 10th (High School)<br><i>Modern Era Public School, Bijnor, India</i></p>
			</div>

			<div>
				<?php
					function modall() {
						for ($i = 1; $i <= 4; $i++) { 
							// code...
							$id = 'cmc' . strval($i);
							echo "<div class='modalContainerCollection' id='". $id ."'>\n";
							echo "	<div class='modalContentCollection'>\n";
							echo "		<button onclick='$(\"#". $id ."\").slideUp();' title='Close this modal'><i class='material-icons'>close</i></button>\n";
							$id_1 = 'cmcf' . strval($i);
							echo "		<section id='". $id_1 ."'></section>\n";
							echo "	</div>\n";
							echo "</div>\n";
						}
					}
					modall();
				?>
			</div>