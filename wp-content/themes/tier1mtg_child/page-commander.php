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
		padding-bottom: 8vw;
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

	h1 {
		margin-bottom: 20px;
	}

	/*FARVER OG DIVERSE*/

	#commander_top_sektion {
		background-color: #F5F5F5;
	}

	#commander_top_sektion h1,
	p {
		color: #272727;
	}

	/*KORT DU IKKE MÅ GÅ GLIP AF-SEKTION*/
	.titel_alternativ,
	.h2_acc {
		color: #F1F0E8;
		font-size: 1.5rem;
		font-weight: bold;
		margin-bottom: 0;
	}

	.pris_alternativ,
	.h3_acc {
		color: #AD9261;
		font-size: 1rem;
		margin-bottom: 0;
	}

	.se_kort_knap {
		position: absolute;
		left: 58%;
		bottom: 5%;
		z-index: 40;
	}

	.billede {
		border-top-left-radius: 5%;
		border-top-right-radius: 5%;
		width: 100%;
		height: 34rem;
	}

	/*Styling af hovereffekten på kort og produkter så den sorte bremme forsvinder med mus over bilelde*/
	article {
		position: relative;
	}

	.baggrund_kort {
		position: absolute;
		bottom: 0;
		background-color: rgba(39, 39, 39, 0.96);
		width: 100%;
		padding: 20px;
		height: 30%;
		transition: .5s ease;
		overflow: hidden;
	}

	article:hover .baggrund_kort {
		height: 0%;
		padding: 0px 20px 0px 20px;
	}

	/*SLIDER OPSÆTNING TIL MOBIL OG DESKTOP*/
	.forside_figure_ny {
		cursor: pointer;
	}

	.forside_image-container .forside_figure_ny {
		flex-basis: 90%;
		flex-shrink: 0;
		scroll-snap-align: center;
	}

	/*UGENS TIP-SEKTION*/
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
		padding-bottom: 20vw;
		text-align: center;
	}

	#commander_cardmarket_sektion h1 {
		color: #F5F5F5;
	}

	#commander_cardmarket_sektion p {
		color: #AD9261;
		padding-left: 15vw;
		padding-right: 15vw;
	}

	/*EVENT SEKTION STYLING*/
	.forside_image-container figure {
		position: relative;
	}

	#forside_fjerde_sektion img {
		border-top-left-radius: 5%;
		border-top-right-radius: 5%;
		width: 100%;
	}

	.fjerde_sektion_figcuption {
		position: absolute;
		bottom: 0;
		background-color: rgba(39, 39, 39, 0.96);
		width: 100%;
		padding: 20px;
		height: 30%;
		transition: .5s ease;
		overflow: hidden;
	}

	.forside_figure_event:hover .fjerde_sektion_figcuption {
		height: 100%;
		border-top-left-radius: 5%;
		border-top-right-radius: 5%;
	}

	.forside_figure_event {
		flex-basis: 100%;
		flex-shrink: 0;
		scroll-snap-align: center;
		max-width: 350px;
		margin: 0 auto;
	}

	.forside_image-container {
		overflow-x: auto;
		scroll-snap-type: x mandatory;
		display: flex;
		gap: 20px;
		padding: 20px;
	}

	.h2_acc {
		color: #F5F5F5;
	}

	.h3_acc {
		color: #AD9261;
	}

	/*VIDEOER*/

	iframe {
		place-self: center;
	}

	/*KNAPPER OG LINKS*/

	.commander_knap_cardmarket {
		background-color: #AD9261;
		color: #272727;
		border-radius: 20px;
		padding: 12px 20px 12px 20px;
		font-weight: bold;
		font-family: 'Cormorant', serif;
		place-self: center;
	}

	.commander_knap_cardmarket:hover {
		background-color: #F1F0E8;
		color: #AD9261;
	}

	/*MEDIA QUERIES*/

	@media only screen and (min-width: 800px) {

		section {
			padding-bottom: 6vw;
		}

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
			padding-right: 0;
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

		/*EVENT SEKTION*/

		.til_kort_side_nav {
			text-align: end;
		}

		.forside_image-container .forside_figure_ny {
			flex-basis: 27%;
		}

		/*CARDMARKET SEKTION*/
		#commander_cardmarket_sektion {
			padding-bottom: 6vw;
		}
	}

	@media only screen and (min-width: 1200px) {

		section {
			padding-bottom: 4vw;
		}

		/*TILPASNING AF PADDING PÅ UGENS TIP-SEKTION*/
		.commander_tip_col_1 {
			padding-top: 12vw;
		}

		.commander_tip_col_2 {
			padding-top: 12vw;
		}

		/*CARDMARKET SEKTION*/
		#commander_cardmarket_sektion p {
			padding-left: 25vw;
			padding-right: 25vw;
		}

		#commander_cardmarket_sektion {
			padding-bottom: 4vw;
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
				<iframe width="560" height="315" src="https://www.youtube.com/embed/k70dmf3kQYU">
				</iframe>
			</div>
		</section>
		<section id="forside_first_section">
			<h1>KORT DU IKKE MÅ GÅ GLIP AF</h1>
			<a href="http://kasperdyhl.dk/tier1mtg/produktside/">
				<h3 class="til_kort_side_nav">Se alle single cards →</h3>
			</a>
			<div class="forside_image-container">
				<figure class="forside_figure_ny">
					<div class="new_single_kort"></div>
				</figure>

				<figure class="forside_figure_ny">
					<div class="new_single_kort1"></div>
				</figure>

				<figure class="forside_figure_ny">
					<div class="new_single_kort2"></div>
				</figure>

				<figure class="forside_figure_ny">
					<div class="new_single_kort3"></div>
				</figure>
			</div>
		</section>
		<section id="commander_tip_sektion">
			<div class="commander_tip_col_1">
				<h1>SE UGENS TIP</h1>
				<p>Tekst her om ugens tip. In id pretium est. Aenean vehicula arcu nunc, et sodales ante finibus in. Proin sed tellus varius, consectetur leo sit amet, gravida velit. Vivamus ac eleifend sem. Suspendisse mattis dolor lorem, id venenatis odio venenatis quis. Sed sit amet finibus mauris. Phasellus id elementum velit. Nulla facilisi. Cras elementum gravida pulvinar.</p>
				<a href="https://www.youtube.com/watch?v=6p6LFFgYVKg" target="_blank" rel="noopener noreferrer" class="commander_playknap"> <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/youtube_knap.png" alt="play knap"> </a>
				<p>Se vores Commander-playliste på Youtube</p>
			</div>
			<div class="commander_tip_col_2">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Js6hJ_4K5CU">
				</iframe>
			</div>
		</section>
		<section id="forside_fjerde_sektion">
			<h1>KOMMENDE EVENTS</h1>
			<a href="http://kasperdyhl.dk/tier1mtg/event/">
				<h3 class="til_kort_side_nav">Se alle events →</h3>
			</a>
			<div class="forside_image-container">
				<figure class="forside_figure_event">
					<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Intersection-123.png" alt="Tier1MTG event">
					<button class="event_mere_knap knapper_dark">LÆS MERE</button>
					<figcaption class="fjerde_sektion_figcuption">
						<h2 class="h2_acc">Commander Game</h2>
						<h3 class="h3_acc">Dato: 23-06-2021</h3>
						<h3 class="h3_acc">Format: Commander</h3>
						<h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>Tilmelding starter den 8. juni.
						</h3>
					</figcaption>
				</figure>

				<figure class="forside_figure_event">
					<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Intersection-123.png" alt="">
					<button class="event_mere_knap knapper_dark">LÆS MERE</button>
					<figcaption class="fjerde_sektion_figcuption">
						<h2 class="h2_acc">High score Alpha</h2>
						<h3 class="h3_acc">Dato: 14-07-2021</h3>
						<h3 class="h3_acc">Format: Commander</h3>
						<h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>Tilmelding starter den 8. juli.
						</h3>
					</figcaption>
				</figure>

				<figure class="forside_figure_event">
					<img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Intersection-123.png" alt="Tier1MTG event">
					<button class="event_mere_knap knapper_dark">LÆS MERE</button>
					<figcaption class="fjerde_sektion_figcuption">
						<h2 class="h2_acc">Tier1 Commander Gonzo</h2>
						<h3 class="h3_acc">Dato: 03-08-2021</h3>
						<h3 class="h3_acc">Format: Commander</h3>
						<h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>Tilmelding starter den 18. juli.
						</h3>
					</figcaption>
				</figure>
			</div>
		</section>

	</main>

	<!--SKABELON TIL SINGLES - KORT DU IKKE MÅ GÅ GLIP AF-->
	<template>
		<article>
			<div class="billed_placering">
				<img src="" alt="" class="billede">
				<button class="se_kort_knap knapper_dark">SE KORT</button>
			</div>
			<div class="baggrund_kort">
				<h2 class="titel_alternativ"></h2>
				<h3 class="pris_alternativ"></h3>
			</div>

		</article>
	</template>

	<!--JAVASCRIPT - MATH RANDOM TIL SINGLES-->
	<script>
		let singles;

		// url til wp rest api/database
		const url = "http://kasperdyhl.dk/tier1mtg/wp-json/wp/v2/single?per_page=100";

		async function loadJson() {
			const JsonData = await fetch(url);
			newSingleKort = await JsonData.json();
			console.log("loadJson", newSingleKort);
			visNewSingleKort();
			visNewSingleKort1();
			visNewSingleKort2();
			visNewSingleKort3();
		}

		loadJson();

		//Her i funktioen genereres tre tilfeldeig singles og sættes ind i HTML under sektionen Kort du ikke må gå glip af
		function visNewSingleKort() {
			console.log("visNewSingleKort");

			//Genererer et nyt array af tilfældige objekter fra det komplette array
			const other1 = newSingleKort[Math.floor(Math.random() * newSingleKort.length)];
			const randomSingleKort = [other1];
			console.log(randomSingleKort);

			randomSingleKort.forEach(single => {
				//Definerer konstanter til senere brug i kloningen af template
				const template = document.querySelector("template");
				const container = document.querySelector(".new_single_kort");


				const klon = template.cloneNode(true).content; //Her klones template og udfyldes med data fra de tilfældige objekter
				klon.querySelector(".billede").src = single.billede.guid;
				klon.querySelector(".titel_alternativ").innerHTML = single.title.rendered;
				klon.querySelector(".pris_alternativ").innerHTML = `${"Fra "}` + single.pris;

				// eventlisteners på hver enkelt artikel
				klon.querySelector(".se_kort_knap").addEventListener("click", () => {
					location.href = single.link;
				})

				container.appendChild(klon);
			})
		}

		function visNewSingleKort1() {
			console.log("visNewSingleKort1");

			//Genererer et nyt array af tilfældige objekter fra det komplette array
			const other1 = newSingleKort[Math.floor(Math.random() * newSingleKort.length)];
			const randomSingleKort = [other1];
			console.log(randomSingleKort);

			randomSingleKort.forEach(single => {
				//Definerer konstanter til senere brug i kloningen af template
				const template = document.querySelector("template");
				const container = document.querySelector(".new_single_kort1");


				const klon = template.cloneNode(true).content; //Her klones template og udfyldes med data fra de tilfældige objekter
				klon.querySelector(".billede").src = single.billede.guid;
				klon.querySelector(".titel_alternativ").innerHTML = single.title.rendered;
				klon.querySelector(".pris_alternativ").innerHTML = `${"Fra "}` + single.pris;

				// eventlisteners på hver enkelt artikel
				klon.querySelector(".se_kort_knap").addEventListener("click", () => {
					location.href = single.link;
				})

				container.appendChild(klon);
			})
		}

		function visNewSingleKort2() {
			console.log("visNewSingleKort2");

			//Genererer et nyt array af tilfældige objekter fra det komplette array
			const other1 = newSingleKort[Math.floor(Math.random() * newSingleKort.length)];
			const randomSingleKort = [other1];
			console.log(randomSingleKort);

			randomSingleKort.forEach(single => {
				//Definerer konstanter til senere brug i kloningen af template
				const template = document.querySelector("template");
				const container = document.querySelector(".new_single_kort2");


				const klon = template.cloneNode(true).content; //Her klones template og udfyldes med data fra de tilfældige objekter
				klon.querySelector(".billede").src = single.billede.guid;
				klon.querySelector(".titel_alternativ").innerHTML = single.title.rendered;
				klon.querySelector(".pris_alternativ").innerHTML = `${"Fra "}` + single.pris;

				// eventlisteners på hver enkelt artikel
				klon.querySelector(".se_kort_knap").addEventListener("click", () => {
					location.href = single.link;
				})

				container.appendChild(klon);
			})
		}

		function visNewSingleKort3() {
			console.log("visNewSingleKort3");

			//Genererer et nyt array af tilfældige objekter fra det komplette array
			const other1 = newSingleKort[Math.floor(Math.random() * newSingleKort.length)];
			const randomSingleKort = [other1];
			console.log(randomSingleKort);

			randomSingleKort.forEach(single => {
				//Definerer konstanter til senere brug i kloningen af template
				const template = document.querySelector("template");
				const container = document.querySelector(".new_single_kort3");


				const klon = template.cloneNode(true).content; //Her klones template og udfyldes med data fra de tilfældige objekter
				klon.querySelector(".billede").src = single.billede.guid;
				klon.querySelector(".titel_alternativ").innerHTML = single.title.rendered;
				klon.querySelector(".pris_alternativ").innerHTML = `${"Fra "}` + single.pris;

				// eventlisteners på hver enkelt artikel
				klon.querySelector(".se_kort_knap").addEventListener("click", () => {
					location.href = single.link;
				})

				container.appendChild(klon);
			})
		}

	</script>

</div>

<?php

	//Hvad gør den dér?
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

	get_footer();
