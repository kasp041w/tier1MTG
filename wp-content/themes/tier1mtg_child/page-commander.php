<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<style>
	/*SEKTIONER OG FARVER*/

	/*FJERN MARGIN PÅ SEKTIONER*/

	main {
		width: 100%;
		padding-left: 0rem;
		padding-right: 0rem;
	}

	section {
		margin-bottom: 5vw;
	}

	h1,
	p,
	a,
	.playknap,
	iframe {
		padding-left: 2rem;
		padding-right: 2rem;
	}

	/*FARVER OG DIVERSE*/

	/* VIRKER IKKE .site-header {
		margin-bottom: 0;
	}*/

	#top_sektion {
		background-color: #F5F5F5;
	}

	#top_sektion h1,
	p {
		color: #272727;
	}

	#tip_sektion {
		background-image: url("http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/commander_baggrund.png");
		background-size: cover;
	}

	#cardmarket_sektion {
		background-color: #272727;
	}

	#cardmarket_sektion h1 {
		color: #F5F5F5;
		text-align: center;
	}

	#cardmarket_sektion p {
		color: #AD9261;
		text-align: center;
	}

	.knap_cardmarket {
		align-content: center;
	}


	/*MEDIA QUERIES*/

	@media only screen and (min-width: 800px) {

		/*GRID PÅ TOPSEKTION*/
		#top_sektion {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-template-rows: 1fr;
		}

		.top_col_1 {
			grid-column: 1/2;
			grid-row: 1;
		}

		.top_col_2 {
			grid-column: 2/2;
			grid-row: 1;
		}

		/*GRID PÅ UGENS TIP-SEKTION*/
		#tip_sektion {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-template-rows: 1fr;
		}

		.tip_col_1 {
			grid-column: 1/2;
			grid-row: 1;
		}

		.tip_col_2 {
			grid-column: 2/2;
			grid-row: 1;
		}
	}

	@media only screen and (min-width: 1200px) {

		/*GRID PÅ TOPSEKTION*/
		#top_sektion {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-rows: 1fr;
		}

		.top_col_1 {
			grid-column: 1/3;
			grid-row: 1;
		}

		.top_col_2 {
			grid-column: 3/3;
			grid-row: 1;
		}

		/*GRID PÅ UGENS TIP-SEKTION*/
		#tip_sektion {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-rows: 1fr;
		}

		.tip_col_1 {
			grid-column: 1/3;
			grid-row: 1;
		}

		.tip_col_2 {
			grid-column: 3/3;
			grid-row: 1;
		}
	}

</style>

<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
	<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
		<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/commander_splach.png" alt="commander splash billede" class="splash">
		<section id="top_sektion">
			<div class="top_col_1">
				<h1>Hvad er Commander?</h1>
				<p>Tekst her om Commander-formatet. Etiam justo erat, pellentesque vel lacus vel, tincidunt pellentesque nisl. Integer auctor nibh eget lorem aliquet, pulvinar efficitur augue ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus. In id pretium est. Aenean vehicula arcu nunc, et sodales ante finibus in. Proin sed tellus varius, consectetur leo sit amet, gravida velit. Vivamus ac eleifend sem. Suspendisse mattis dolor lorem, id venenatis odio venenatis quis. Sed sit amet finibus mauris. Phasellus id elementum velit. Nulla facilisi. Cras elementum gravida pulvinar.</p>
			</div>
			<div class="top_col_2">
				<iframe width="420" height="315" src="https://www.youtube.com/embed/k70dmf3kQYU">
				</iframe>
			</div>
		</section>
		<section id="kort_sektion">
			<h1>Kort du ikke må gå glip af</h1>
			<a href="http://kasperdyhl.dk/tier1mtg/produktside/">Se alle single cards</a>
		</section>
		<section id="tip_sektion">
			<div class="tip_col_1">
				<h1>Se Ugens Tip</h1>
				<p>Tekst her om ugens tip. In id pretium est. Aenean vehicula arcu nunc, et sodales ante finibus in. Proin sed tellus varius, consectetur leo sit amet, gravida velit. Vivamus ac eleifend sem. Suspendisse mattis dolor lorem, id venenatis odio venenatis quis. Sed sit amet finibus mauris. Phasellus id elementum velit. Nulla facilisi. Cras elementum gravida pulvinar.</p>
				<a href="https://www.youtube.com/watch?v=6p6LFFgYVKg" target="_blank" rel="noopener noreferrer" class="playknap"> <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/youtube_knap.png" alt="play knap"> </a>
				<p>Se vores Commander-playliste på Youtube</p>
			</div>
			<div class="tip_col_2">
				<iframe width="420" height="315" src="https://www.youtube.com/embed/Js6hJ_4K5CU">
				</iframe>
			</div>
		</section>
		<section id="event_sektion">
			<h1>Skal du være med næste gang?</h1>
			<a href="">Se alle vores Commander-events</a>
			<!--			billedgalleri ind her - hvordan? -->
		</section>
		<section id="artikler">
			<h1>Det nyeste om Commander</h1>
			<p>Hold dig opdateret på det nyeste inden for Commander-formatet</p>
			<!--			Events ind her - hvordan?-->
		</section>
		<section id="cardmarket_sektion">
			<h1>Vi er også på Cardmarket</h1>
			<p>Tekst om Cardmarket her</p>
			<button class="knap_cardmarket">Læs mere</button>
		</section>
	</main>
</div>

<?php

	//Hvad gør den dér?
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

	get_footer();
