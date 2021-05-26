<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<style>
	/*SEKTIONER OG FARVER*/

	.splash {}

	#top_sektion {
		background-color: #F5F5F5;
	}

	#top_sektion h2,
	p {
		color: #272727;
	}

	#cardmarket_sektion {
		background-color: #272727;
	}

	#cardmarket_sektion h2 {
		color: #F5F5F5;
	}

	#cardmarket_sektion p {
		color: #AD9261;
	}

	#kort_sektion,
	#event_sektion,
	#artikler {
		background-color: #F7F6E9;
		color: #272727;
	}

</style>

<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
	<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
		<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/commander_splach.png" alt="commander splash billede" class="splash">
		<section id="top_sektion">
			<h1>Commander</h1>
			<div class="top_col_1">
				<h2>Hvad er Commander?</h2>
				<p>Tekst her om Commander-formatet. Blabjsndlks ifrdn ljiejr je rjwtnntndjfn erj shekj kje bkj bjkbgkj vkd kjdkj kjhekjr kjsh kjheskjt hhg kjhgkjh kjhkj hfkhdgl</p>
			</div>
			<div class="top_col_2">
				<video src=""></video>
			</div>
		</section>
		<section id="kort_sektion">
			<h2>Kort du ikke må gå glip af</h2>
			<a href="">Se alle single cards</a>

		</section>
		<section id="tip_sektion">
			<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/commander_baggrund.png" alt="grafik" class="tip_baggrund">
			<div class="tip_col_1">
				<h2>Se Ugens Tip</h2>
				<p>Tekst her om ugens tip</p>
				<button>
					<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/youtube_knap.png" alt="play knap">
				</button>
				<p>Se vores Commander-playliste på Youtube</p>
			</div>
			<div class="tip_col_2">
				<video src=""></video>
			</div>
		</section>
		<section id="event_sektion">
			<h2>Skal du være med næste gang?</h2>
			<a href="">Se alle vores Commander-events</a>
			<!--			billedgalleri ind her - hvordan? -->
		</section>
		<section id="artikler">
			<h2>Det nyeste om Commander</h2>
			<p>Hold dig opdateret på det nyeste inden for Commander-formatet</p>
			<!--			Events ind her - hvordan?-->
		</section>
		<section id="cardmarket_sektion">
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
