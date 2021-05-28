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
		margin-bottom: 10vw;
	}

	commander_kort_sektion,
	commander_event_sektion,
	commander_artikler {
		max-width: 1200px;
		margin: 0 auto;
	}

	h1,
	p,
	a,
	.commander_playknap,
	iframe {
		padding-left: 2rem;
		padding-right: 2rem;
	}

	/*FARVER OG DIVERSE*/

	#commander_top_sektion {
		background-color: #F5F5F5;
	}

	#commander_top_sektion h1,
	p {
		color: #272727;
	}

	#commander_tip_sektion {
		background-image: url("http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/commander_baggrund.png");
		background-size: cover;
		max-width: none;
		height: 110vh;
		width: 100%;
	}

	.commander_tip_col_1 {
		padding-top: 10vw;
	}

	#commander_cardmarket_sektion {
		background-color: #272727;
	}

	#commander_cardmarket_sektion h1 {
		color: #F5F5F5;
		text-align: center;
	}

	#commander_cardmarket_sektion p {
		color: #AD9261;
		text-align: center;
		padding-left: 15vw;
		padding-right: 15vw;
	}

	/*VIRKER IKKE?*/
	.commander_knap_cardmarket {
		align-self: center;
	}

	/*VIDEOER*/

	iframe {
		place-self: center;
	}

	/*KNAPPER OG LINKS*/



	/*MEDIA QUERIES*/

	@media only screen and (min-width: 800px) {

		/*GRID PÅ TOPSEKTION*/
		#commander_top_sektion {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-template-rows: 1fr;
		}

		.commander_top_col_1 {
			grid-column: 1/2;
			grid-row: 1;
		}

		.commander_top_col_2 {
			grid-column: 2/2;
			grid-row: 1;
		}

		/*GRID PÅ UGENS TIP-SEKTION*/
		#commander_tip_sektion {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-template-rows: 1fr;
		}

		.commander_tip_col_1 {
			grid-column: 1/2;
			grid-row: 1;
			padding-top: 10vw;
		}

		.commander_tip_col_2 {
			grid-column: 2/2;
			grid-row: 1;
			padding-top: 10vw;
		}
	}

	@media only screen and (min-width: 1200px) {

		/*GRID PÅ TOPSEKTION*/
		#commander_top_sektion {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-rows: 1fr;
		}

		.commander_top_col_1 {
			grid-column: 1/3;
			grid-row: 1;
		}

		.commander_top_col_2 {
			grid-column: 3/3;
			grid-row: 1;
		}

		/*GRID PÅ UGENS TIP-SEKTION*/
		#commander_tip_sektion {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-rows: 1fr;
		}

		.commander_tip_col_1 {
			grid-column: 1/3;
			grid-row: 1;
			padding-top: 12vw;
		}

		.commander_tip_col_2 {
			grid-column: 3/3;
			grid-row: 1;
			padding-top: 12vw;
		}

		/*CARDMARKET SEKTION*/
		#commander_cardmarket_sektion p {
			padding-left: 25vw;
			padding-right: 25vw;
		}
	}

</style>

<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
	<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
		<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/commander_splach.png" alt="commander splash billede" class="commander_splash">
		<section id="commander_top_sektion">
			<div class="commander_top_col_1">
				<h1>HVAD ER COMMANDER?</h1>
				<p>Tekst her om Commander-formatet. Etiam justo erat, pellentesque vel lacus vel, tincidunt pellentesque nisl. Integer auctor nibh eget lorem aliquet, pulvinar efficitur augue ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus. In id pretium est. Aenean vehicula arcu nunc, et sodales ante finibus in. Proin sed tellus varius, consectetur leo sit amet, gravida velit. Vivamus ac eleifend sem. Suspendisse mattis dolor lorem, id venenatis odio venenatis quis. Sed sit amet finibus mauris. Phasellus id elementum velit. Nulla facilisi. Cras elementum gravida pulvinar.</p>
			</div>
			<div class="commander_top_col_2">
				<iframe width="420" height="315" src="https://www.youtube.com/embed/k70dmf3kQYU">
				</iframe>
			</div>
		</section>
		<section id="commander_kort_sektion">
			<h1>KORT DU IKKE MÅ GÅ GLIP AF</h1>
			<a href="http://kasperdyhl.dk/tier1mtg/produktside/" class="commander_singles">Se alle single cards &#8594;</a>
		</section>
		<section id="commander_tip_sektion">
			<div class="commander_tip_col_1">
				<h1>SE UGENS TIP</h1>
				<p>Tekst her om ugens tip. In id pretium est. Aenean vehicula arcu nunc, et sodales ante finibus in. Proin sed tellus varius, consectetur leo sit amet, gravida velit. Vivamus ac eleifend sem. Suspendisse mattis dolor lorem, id venenatis odio venenatis quis. Sed sit amet finibus mauris. Phasellus id elementum velit. Nulla facilisi. Cras elementum gravida pulvinar.</p>
				<a href="https://www.youtube.com/watch?v=6p6LFFgYVKg" target="_blank" rel="noopener noreferrer" class="commander_playknap"> <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/youtube_knap.png" alt="play knap"> </a>
				<p>Se vores Commander-playliste på Youtube</p>
			</div>
			<div class="commander_tip_col_2">
				<iframe width="420" height="315" src="https://www.youtube.com/embed/Js6hJ_4K5CU">
				</iframe>
			</div>
		</section>
		<section id="commander_event_sektion">
			<h1>SKAL DU VÆRE MED NÆSTE GANG?</h1>
			<a href="">Se alle vores Commander-events</a>
			<!--			billedgalleri ind her - hvordan? -->
		</section>
		<section id="commander_artikler">
			<h1>DET NYESTE OM COMMANDER?</h1>
			<p>Hold dig opdateret på det nyeste inden for Commander-formatet</p>
			<!--			Events ind her - hvordan?-->
		</section>
		<section id="commander_cardmarket_sektion">
			<h1>VI ER OGSÅ PÅ CARDMARKET</h1>
			<p>Tekst om Cardmarket her. Nulla mollis nisi in turpis interdum, nec feugiat dui suscipit. Praesent dapibus tristique justo et dictum. Fusce vel tellus a mauris interdum pulvinar. Vivamus nec lacinia lorem. Nullam commodo dictum ornare. Nunc sit amet turpis vehicula turpis maximus venenatis eu vel mi. Duis a blandit elit, non pulvinar ante. Fusce venenatis est at urna scelerisque interdum. Donec in dignissim lacus, in ullamcorper dolor. Aenean sollicitudin diam vitae elit condimentum maximus. Praesent aliquam, massa ut ultricies commodo, tellus ex varius ante, sed luctus nulla diam eu nunc.</p>
			<button class="commander_knap_cardmarket">Læs mere</button>
		</section>
	</main>
</div>

<?php

	//Hvad gør den dér?
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

	get_footer();
