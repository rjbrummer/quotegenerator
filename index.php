<!--Coded by Richard Brummer. http://www.richardbrummer.com, contact me at: mister@richardbrummer.com
Please feel free to use and adapt in your web development projects. Would very much like to hear from you if you do or are thinking about it! Networking and collaboration being the way forward!
-->
<?php
$messages = array(
'Stop hating yourself for everything you aren’t and start loving yourself for everything you already are',
'You don’t always need a plan. Sometimes you just need to breathe, trust, let go and see what happens',
'If “Plan A” didn’t work, the alphabet has 25 more letters. Stay cool.',
'In the end, we only regret the chances we didn’t take',
'Whatever you decide to do, make sure it makes you happy',
'You never cross the ocean unless you have the courage to lose sight of the shore',
'Life is like riding a bicycle. To keep your balance, you must keep moving',
'Don’t wait for the perfect moment. Take the moment and make it perfect',
'Be the change that you wish to see in the world',
'You gotta start somewhere',
'Everything happens for a reason',
'You are confined only by the walls that you build yourself',
'Let your smile change the world. Not the world change your smile',
'The only time you should ever look back is to see how far you’ve come',
'Life begins at the end of your comfort zone',
'It always seems impossible until it is done',
'Love is a verb',
'Work hard and be nice to people',
'I will go anywhere as long as it is forward',
'Don’t ruin today by worrying about yesterday’s problems',
'The best way to clear the air is to have it all out in the open',
'Every artist was once an amateur',
'Be happy'
);
?>

<!DOCTYPE HTML>

<html>

	<head>
		<title>Quote Generator</title>
        
			<link rel="stylesheet" href="css/style.css" />
			<link href='https://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
            
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Banner -->
						<div id="banner">
							<class id="container">
								<section>
									<header class="major">
										<h2><font FACE="arial">Quote Generator</font></h2>

										<!-- PHP random generator code -->
                                        <class id="indie"><h1><?= $messages[rand(0, count($messages) - 1)]; ?></h1></class>
									</header>

									<a href="index.php" id="logo" class="button alt">Click for a different quote</a>
								</section>			
							</div>
						</div>

				</div>
			</div>

		<!-- Footer -->
			<div id="footer">


					<!-- Lists -->
								<section>
									<header>
										<h3><span class="byline"><a href="http://www.richardbrummer.com" target="_blank">http://wwww.richardbrummer.com/</span></h3>
                                        <h3><span class="byline">Email: <a href="mailto:mister@richardbrummer.com?Subject=Coding" target="_top">mister@richardbrummer.com</a></h3>
									</header>


			</div>

	</body>
</html>