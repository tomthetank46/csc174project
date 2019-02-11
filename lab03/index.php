<?php $currentPage="When Novel Meets Fashion| Lab 3: Smash Website | Team Hong Kong";
include "inc/html-top.inc";?>

	<header>
		<h1>When Novel Meets Fashion</h1>
	</header>

	<?php include "inc/nav.inc"; ?>


	<main>

		<section class="excerpt">
			<div class="text">
				<h2>Novel</h2>

				<ul>
					<li>"The Sun Also Rises" (1920)</li>
					<li>"A Farewell to Arms" (1929)</li>
					<li>"For Whom the Bell Tolls" (1940)</li>
				</ul>

				<p>These novels written in the 20th century offer a unique insight into the time periods in which they were written, and in turn allow us to peek into the human condition.</p>

				<a href="novel.php">Read More</a>
			</div>
			<img src="images/novel.jpg"
		    	alt="a picture about novel">
		</section>

		<section class="excerpt">
			<div class="text">

				<h2>High-Street Fashion</h2>

				<ul>
					<li>Everlane</li>
					<li>Forever 21</li>
					<li>American Eagles</li>
				</ul>

				<p>Fame. Wealth. Fashion. Once unattainable by any except for the social elite, these characteristics were envied by all. However, with the development of high-street fashion, these companies with humble, family-owned beginnings now allow people to experience fashion in a way never before seen.</p>

				<a href="sfashion.php">Read More</a>
			</div>
			<img src="images/sfashion.jpg"
			     alt="a picture about high street fashion">
		</section>

		<section class="excerpt">
			<div class="text">
				<h2>Designer House</h2>

				<ul>
					<li>Louis Vuitton</li>
					<li>Chanel</li>
					<li>Dior</li>
				</ul>

				<p>Fashion isn't created over night, and neither are the companies that make it. Designer houses have a unique history of innovation and inspiration representative of humans ingenuity and creativity. They play a big role in the creation of style and in tern help shape cultures.</p>
				
				<a href="designerhouse.php">Read More</a>
			</div>
			<img src="images/dhouse.jpg"
			     alt="a picture about designer house">
		</section>
		
	</main>

	<footer> © CSC 174: Advanced Front-end Web Design and Development</footer>	

    <?php include "inc/scripts.inc"; ?>

</body>

</html>