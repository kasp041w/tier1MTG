<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<style>
	/*SIDE MARGEN PÅ MOBIL*/

	#omOs,
	#kontaktOs,
	#serviceInfo {
		padding: 5%;
		max-width: 100vw;
	}

	/*OM OS SEKTIONEN*/

	.ansatte h3 {
		margin-bottom: 5px;
	}

	#omOs {
		max-width: 1200px;
		margin: 10vw auto 8vw auto;
		padding: 0 3vw;
	}

	.omOsCol1,
	.omOsCol2 {
		margin-bottom: 15%;
	}

	.ansatte {
		display: flex;
		overflow-x: auto;
		scroll-snap-type: x mandatory;
	}

	.ansat {
		margin: 2vw auto;
		padding: 35px;
		text-align: center;
		scroll-snap-align: center;
		flex-shrink: 0;
	}

	.ansat img {
		height: 250px;
	}

	/*Sociale meider*/

	.omos_sociale_medier {
		text-align: center;
		margin-top: 10%;
	}

	/*KONTAKT SEKTIONEN */

	#kontaktOs {
		background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/kontakt_baggrund.png);
		background-size: cover;
		width: 100%;
		height: 122vh;
		text-align: center;
		padding-top: 130px;
		padding-bottom: 110px;
	}

	#kontaktOs p {
		color: #F1F0E8;
		max-width: 500px;
		margin: 10px auto;
	}

	#kontaktOs h1 {
		color: white;
		margin-top: 150px;
		max-width: 500px;
		margin: 0 auto;
	}

	textarea {
		margin: 10px auto 10px auto;
		width: 75vw;
	}

	.kontaktFormular input {
		margin: 10px auto 10px auto;
		width: 75vw;
	}

	.kontaktFormular {
		max-width: 700px;
		text-align: center;
		margin: 0 auto;
	}

	#serviceInfo {
		max-width: 1200px;
		margin: 0 auto;
		padding: 0 3vw;
	}

	#serviceInfo {
		display: grid;
		grid-template-columns: 1fr 1fr;
		max-width: 100vw;
		grid-gap: 2rem;
		text-align: center;
		margin: 10vw auto 12vw auto;
		max-width: 1200px;
	}

	.serviceInfo_billed {
		width: 100px;
		margin: 0 auto;
	}

	/*Fjerner default-indstilling, så siden forbliver i 100vw*/

	/*   @media (max-width: 768px) {
   .container .site-content .content-area {
   width: 100vw;
   }
   }*/

	/*----------Desktop-------------*/

	@media (min-width: 900px) {
		#omOs {
			margin: 5vw auto 2vw auto;
		}

		/* sociale medier mergen*/
		.omos_sociale_medier img {
			padding: 0px 20px 0px 20px;
		}

		.omOsTekstBoks {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-gap: 5vw;
		}

		#serviceInfo {
			grid-template-columns: 1fr 1fr 1fr 1fr;
		}

		.serviceInfo_billed {
			width: 150px;
		}
	}

	/*----------Desktop-------------*/

	@media (min-width: 1200px) {
		.ansatte {
			white-space: normal;
		}
	}

</style>

<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
	<main id="main" <?php generate_do_element_classes( 'main' ); ?>>




		<section id="omOs">
			<h1>OM OS</h1>
			<div class="omOsTekstBoks">
				<div class="omOsCol1">Vi startede Tier1MTG i august 2019. Butikken er en gammel drøm for os, for vi har spillet Magic the Gathering siden 1990’erne, hvor det udkom. I oktober 2020 åbnede vi også en fysisk butik i Vipperød, og den danner ramme for vores ugentlige turneringer og hyggelige arrangementer. Her kan du komme forbi og se vores mange sjældne Magic-kort fysisk eller købe de decks og accessories, du mangler.
					<br>
					<br> Vi er specialiseret i at sælge enkeltkort - også kaldet “singles” - fra Magic the Gathering. Faktisk er vi Skandinaviens største udbyder af singles med et online varelager på omkring 240.000 kort - og med mange flere kort på lageret, som er ved at blive sorteret. Vi opkøber også samlinger, så kontakt os, hvis du ligger inde med kort, som du gerne vil have vurderet eller solgt.

				</div>
				<div class="omOsCol2">Vi er ikke i tvivl om, at Magic the Gathering er verdens bedste spil, og vi elsker det fællesskab, der er omkring universet. Det fællesskab prøver vi selv at bidrage til ved at holde små og store events, hvor alle kan komme og hygge og spille. Du kan se kommende events under “Events” i menuen, og du kan holde øje med vores Facebookside. Du kan også følge vores Youtube- og Twitchkanal, hvor vi livestreamer turneringer og annoncerer events.
					<br>
					<br> Vi glæder os til at se dig i butikken eller til et event!

					<div class="omos_sociale_medier">
						<a href="https://www.twitch.tv/tier1mtg"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/twitch_knap.png" alt="link til twitch"></a>
						<a href="https://www.youtube.com/channel/UCV8RZ4Kg3vg51M86UTQlE1Q"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/Youtube-logo-e1622801920595.png" alt="link til youtube"></a>
						<a href="https://www.facebook.com/Tier1MTG"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/Facebook-logo-e1622801932687.png"></a>
					</div>
				</div>
			</div>



			<div class="ansatte">
				<div class="ansat">
					<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Group-943.png" alt="Dan">
					<h3>Dan Sønderskov</h3>
					<p>GRUNDLÆGGER / DIREKTØR</p>
				</div>

				<div class="ansat">
					<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Group-944.png" alt="Allan">
					<h3>Allan Asmussen</h3>
					<p>GRUNDLÆGGER / SALG</p>
				</div>

				<div class="ansat">
					<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Group-945.png" alt="Maria">
					<h3>Maria Sønderskov</h3>
					<p>FINANS / LOGISTIK</p>
				</div>
			</div>

		</section>


		<section id="kontaktOs">
			<h1>KONTAKT OS</h1>
			<p>Har du spørgsmål vedrørende køb og salg af Magic the Gathering kort, er du velkommen til at skrive i formularen nedenfor. Du er også velkommen til at kontakte os, hvis du har andre spørgsmål.
				<br>
				<br>Vi glæder os til at høre fra dig!
			</p>


			<div class="kontaktFormular">

				<!-- Fornavn -->
				<div class="form-felt">
					<label for="">
						<input type="text" placeholder="Fornavn" name="fornavn">
					</label>
				</div>

				<!-- Efternavn -->
				<div class="form-felt">
					<label for="">
						<input type="text" placeholder="Efternavn" name="efternavn">
					</label>
				</div>

				<!-- Mailadressee -->
				<div class="form-felt">
					<label for="">
						<input type="text" placeholder="Mailadresse" name="mailadresse">
					</label>
				</div>

				<!-- Skrive felt -->
				<div class="form-felt-skrivHer">
					<label for="">
						<textarea name="skrivHer" placeholder="Skriv hér" id="" cols="1" rows="6"></textarea>
					</label>
				</div>
				<button class="formKnap knapper_dark">SEND</button>

			</div>
		</section>



		<section id="serviceInfo">

			<div class="serviceInfo_billed">
				<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Levering-e1622195990716.png" alt="Levering logo">
				<h4>Hurtig levering</h4>
			</div>

			<div class="serviceInfo_billed">
				<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Mail-e1622196016123.png" alt="Mail Logo">
				<h4>God kunderservice</h4>
			</div>

			<div class="serviceInfo_billed">
				<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Betaling-e1622196037728.png" alt="Betaling logo">
				<h4>Køb & salg af MTG</h4>
			</div>

			<div class="serviceInfo_billed">
				<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Tier1-e1622195947526.png" alt="Tier1 cardmarket">
				<h4>Cardmarket & Tier1MTG samlet levering</h4>
			</div>
		</section>



	</main>
</div>

<?php
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

    generate_construct_sidebars();

	get_footer();
