<?php
	require 'config.php';
	$title = 'About Us | Directors | KaiNav Conservation Foundation | ';
	include_once 'static/head.php';
?>

<body>
<?php include_once 'static/noscript.php'; ?>

	<?php include_once 'static/header.php'; ?>


	<section class="grid" role="main">
		<span class="maxWidth">

<?php
			$directors = array(
				'kailen' => array(
					'name' 			=> 'Kailen Padayachee',
					'shortcut'	=> 'kailen',
					'title'			=> 'Executive&nbsp;Member | Nature&nbsp;Conservationist',
					'bio'				=> 'Kailen studied nature conservation at the Tshwane University of Technology in Pretoria, South Africa, as part of his qualification; he took part in a conservation internship with SAAMBR (The South African Association for Marine Biological Research) as a conservationist at the Sea World Aquarium in Ushaka, Durban, South Africa. During his time at sea world Kailen gained experience in environmental education, marine animal husbandry and capture and collection of marine specimens. After qualifying in nature conservation, Kailen was chosen to participate as a cultural representative on a cultural program for the Walt Disney Company in Orlando, USA. Whilst working for Walt Disney, Orlando, Kailen developed a great appreciation and respect for African culture and realized the importance of cultural conservation along with wildlife conservation and it’s interrelationships. Kailen is an avid scuba diver, outdoorsman and an amateur wildlife photographer. With a love for the natural environment and cultural heritage of the African continent, he strives to be the change in the world by promoting the wonders of the African continent through environmental education. Kailen is currently undertaking his masters in nature conservation through the Tshwane University of Technology and hopes to in the next three years obtain his doctorate in nature conservation, which will add to his current platform for the promotion of conservation on the African continent and globally.',
					'class'			=> 'one-half'
					),
				'navelan' => array(
					'name' 			=> 'Navelan Padayachee',
					'shortcut'	=> 'navelan',
					'title'			=> 'Executive&nbsp;Member | Nature&nbsp;Conservationist',
					'bio'				=> 'Navelan studied Nature Conservation at the Tswane University of Technology in Pretoria. As part of his Nature conservation qualification, Navelan took part in an internship with SAAMBR (South African Association for Marine Biological Research) at the uShaka Marine World where his job included environmental education as well as marine animal husbandry. After completing the SAAMBR internship Navelan moved to the United States of America for a year and worked for The Walt Disney Company, Orlando as a cultural representative and environmental and conservation educationist, Navelan returned to South Africa with the goal of finding a way to create an environmental and cultural awareness and tolerance. Navelan is a qualified fitness instructor, avid scuba diver and outdoorsman with a passion for nature, adventure and exploration. He also has a passion for environmental education and teaching others about Africa’s amazing natural environment, beautiful people and cultures. Navelan is currently undertaking his master’s degree in nature conservation through the Tshwane University of Technology and hopes to continue his quest in adding value to the betterment of conservation in Africa and the globe.',
					'class'			=> 'one-half'
					),
				'mogani' => array(
					'name' 			=> 'Mogani Padayachee',
					'shortcut'	=> 'mogani',
					'title'			=> 'Managing&nbsp;Member',
					'bio'				=> 'Architect and entrepreneur Mogani has embarked on a creative career after a successfully qualifying as an architect. She worked in all aspects of the architectural arena including the interior designing ambit. She was involved in commercial, industrial, high cost as well as low cost housing. She has since after a number of years as a design architect, entered the business world and currently is a successful entrepreneur with various business interests to her name, amongst which is the successful Dreamnails Franchise and a Steers Franchise. Mogani has, since the return of her sons, Kailen and Navelan from the USA, facilitated and supported their initiatives in the establishment and management of KCF. Her business track record and acumen reinforced her input into the provisions of managerial skills and advice to both Kailen and Navelan in terms of the stated objectives of KCF, a Section 21 Company.',
					'class'			=> 'one-half center'
					)
			);

			foreach ($directors as $key => $director) {
				$name = $director['name'];
				$shortcut = $director['shortcut'];
				$title = $director['title'];
				$bio = $director['bio'];
				$class = $director['class'];

$directorHTML .= <<<DIRECTORHTML
				<div class="profile--wrapper grid__item {$class}">
					<img src="img/directors/{$shortcut}.png" alt="{$name}, {$title} of the Kainav Conservation Foundation" class="profile--img center">
					<h2 class="profile--header">$name</h2>
					<h6 class="profile--title">$title</h6>
					<p class="profile--text">$bio</p>
				</div>
DIRECTORHTML;
			}

			echo $directorHTML;
		?>

		</span>
	</section><!-- //main -->


	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>
