<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<style>


</style>

<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
	<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
		<section id="top_sektion">
			<img src="" alt="splash_billede" class="">
			<h1>Commander</h1>
			<button></button>
			<div class="top_col_1">
				<img src="" alt="">
				<h2>Hvad er Commander?</h2>
				<p>Tekst her om Commander-formatet</p>
			</div>
			<div class="top_col_2">
				<video src=""></video>
			</div>
		</section>
		<section id="kort_sektion">
			<h2>Kort du ikke må gå glip af</h2>
			<a href="">Se alle single cards</a>
		</section>
		<section id="ugens_tip_sektion">
			<div class="tip_col_1">
				<h2>Se Ugens Tip</h2>
				<p>Tekst her om ugens tip</p>
				<button></button>
				<p>Se vores Commander-playliste på Youtube</p>
			</div>
			<div class="tip_col_2">
				<video src=""></video>
			</div>
		</section>
		<section>
			<h2>Skal du være med næste gang?</h2>
			<a href="">Se alle vores Commander-events</a>
			<!--			billedgalleri ind her - hvordan? -->
		</section>
		<section id="artikler">
			<h2>Det nyeste om Commander</h2>
			<p>Hold dig opdateret på det nyeste inden for Commander-formatet</p>
			<!--			Events ind her - hvordan?-->
		</section>
		<section>
			<h2>Vi er også på Cardmarket</h2>
			<p>Tekst om Cardmarket her</p>
			<button>Læs mere</button>
		</section>
	</main>
</div>

<?php

	//Hvad gør den dér?
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

	get_footer();
