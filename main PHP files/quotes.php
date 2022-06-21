
<?php
//Star wars quotes are taken from 'starwars.com'
if(isset($_POST['get_quote']))
{
 	$quote = array(

 		"'It does not do well to dwell on dreams and forget to live.'\r\n ―<i>Albus Dumbledore</i>",
		"'It is our choices, Harry, that show what we truly are, far more than our abilities.'\r\n —<i>Albus Dumbledore</i>",
		"'Mischief Managed!'\r\n —<i> Harry Potter</i>",
		"'If you want to know what a man’s like, take a good look at how he treats his inferiors, not his equals.'\r\n —<i>Sirius Black</i>",
		"'I mean, it's sort of exciting, isn't it, breaking the rules?'\r\n —<i>Hermione Granger</i>",
		"'We’ve all got both light and dark inside us. What matters is the part we choose to act on. That’s who we really are.'\r\n ―<i>Sirius Black</i>",
		"'You’re just as sane as I am.'\r\n —<i>Luna Lovegood</i>",
		"'Every human life is worth the same, and worth saving.'\r\n —<i>Kingsley Shacklebolt</i>",
		"'Words are, in my not-so-humble opinion, our most inexhaustible source of magic. Capable of both inflicting injury, and remedying it.'\r\n ―<i>Albus Dumbledore</i>",
		"'It is the quality of one’s convictions that determines success, not the number of followers.'\r\n —<i>Remus Lupin</i>",
		"'The Force will be with you. Always.'<br> —<i>Obi-Wan Kenobi</i>",
		"'Fear is the path to the dark side. Fear leads to anger; anger leads to hate; hate leads to suffering. I sense much fear in you.'<br> —<i>Yoda</i>",
		"'To die for one’s people is a great sacrifice. To live for one’s people, an even greater sacrifice. I choose to live for my people.'<br> —<i>Riyo Chuchi</i>",
		"'Remember, my dear Obi-Wan. I’ve loved you always. I always will.'<br> —<i>Duchess Satine Kryze</i>",
		"'If you define yourself by your power to take life, your desire to dominate, to possess, then you have nothing.'<br> —<i>Obi-Wan Kenobi</i>",
		"'Oh, my dear friend. How I’ve missed you.'<br> —<i>C-3PO</i>",
		"'Hope.'<br> —<i>Leia Organa</i>",
		"'Every time I walked away from something I wanted to forget, I told myself it was for a cause that I believed in. A cause that was worth it. Without that, we’re lost.'<br> —<i>Cassian Andor</i>",
		"'I’m one with the Force. The Force is with me.'<br> —<i>Chirrut Îmwe</i>",
		"'Blind allegiance makes you a Pawn'<br> —<i>Hunter</i>"

	);
	$total = count($quote)-1;
	$var = mt_rand(0,$total);
	echo nl2br($quote[$var],TRUE);
}

?>