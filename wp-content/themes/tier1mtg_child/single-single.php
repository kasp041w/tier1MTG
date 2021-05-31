<?php
/**
 * The Template for displaying all single posts.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

    <style>
        /*GENEREL*/

        #single_udgaver,
        #single_info,
        #single_relaterede_varer {
            padding: 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        /*STYLING AF SINGLE-GRIDS*/

        #single_udgaver .single_wrapper {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            grid-gap: 1rem;
        }

        #single_udgaver .single_wrapper .single_container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            grid-gap: 1rem;
        }

        #single_udgaver img {
            border-radius: 5%;
        }

        #single_udgaver .single_pris,
        #single_udgaver .single_pris_2,
        #single_udgaver .single_pris_3,
        #single_desktop_version .pris,
        #single_info .pris_mobil,
        #single_relaterede_varer .single_pris_alternativ {
            color: #AD9261;
            margin-bottom: 0;
        }

        .single_col {
            font-size: 0.75rem;
        }

        .single_kurv {
            width: 8rem;
        }

        .single_fragt {
            display: grid;
            grid-template-columns: 1fr 2fr;
            grid-gap: 1rem;
            align-items: center;
            border-bottom: 2px solid #B3B3B3;
            border-top: 2px solid #B3B3B3;
            padding: 1rem;
            margin-top: 1rem;
        }

        .single_fragt img {
            width: 6rem;
        }

        .single_fragt p {
            margin-bottom: 0.5rem;
        }

        .lagertal {
            text-align: right;
        }
        /*RELATEREDE VARER*/

        .randomArticle h2 {
            font-size: 2rem;
            margin-bottom: 0;
        }

        #single_image_container .single_relaterede_wrapper .single_col_relaterede .single_kort1 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 1rem;
        }

        .single_article_bg {
            background-color: rgba(39, 39, 39, 0.96);
            height: 100%;
            margin-bottom: 3%;
            display: grid;
            grid-template-rows: 1fr;
            border-top-left-radius: 5%;
            border-top-right-radius: 5%;
        }

        .single_article_bg img {
            border-top-left-radius: 5%;
            border-top-right-radius: 5%;
            width: 100%;
            height: 60vw;
            object-fit: cover;
            padding: 0;
            display: grid;
            grid-template-rows: 1fr 1fr;
        }

        .single_baggrund_kort {
            padding: 5%;
        }

        .single_baggrund_kort h2 {
            color: #F1F0E8;
        }

        .single_se_kort_knap {
            margin-top: 5%;
        }
        /*DESKTOP-DISPLAY NONE*/

        #single_desktop_version {
            display: none;
        }

        @media (min-width: 950px) {
            #single_udgaver {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 5rem;
            }
            .single_h3 {
                display: none;
            }
            #single_info {
                display: none;
            }
            #single_desktop_version {
                display: block;
            }
            #single_image_container .single_relaterede_wrapper .single_col_relaterede .single_kort1 {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                grid-gap: 1rem;
            }
            .single_article_bg img {
                height: 45vh;
            }
            #single_baggrund_kort .single_titel_alternativ h2 {
                margin-bottom: 0;
            }
            .single_se_kort_knap {
                text-align: right;
            }
        }

    </style>

    <div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
        <main id="main" <?php generate_do_element_classes( 'main' ); ?>>


            <!-- single-view Singlekort -->
            <section id="single_udgaver">
                <h3 class="single_h3"></h3>
                <div class="single_wrapper">
                    <div class="single_container">
                        <div class="single_col">
                            <img src="" alt="" class="single_billede">
                            <p class="single_pris"></p>
                        </div>
                        <div class="single_col">
                            <img src="" alt="" class="single_billede_2">
                            <p class="single_pris_2"></p>
                        </div>
                        <div class="single_col">
                            <img src="" alt="" class="single_billede_3">
                            <p class="single_pris_3"></p>
                        </div>
                    </div>
                    <div class="single_col_2">
                        <img src="" alt="" class="billede">
                    </div>
                </div>
                <!--DISPLAY AF DESKTOP VERSION-->
                <article id="single_desktop_version" class="randomArticle">
                    <h2 class="titel"></h2>
                    <p class="pris"></p>
                    <p class="beskrivelse"></p>
                    <img class="single_kurv" src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/kurv.png" alt="Kurv-ikon">
                    <p class="lagertal"></p>
                    <div class="single_fragt">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/fragt.png" alt="Fragt-ikon">
                        <p>Fri fragt på over 1.000 DKK</p>
                    </div>
                </article>
            </section>

            <!--DISPLAy AF MOBIL VERSION-->
            <section id="single_info">
                <article class="randomArticle">
                    <h2 class="titel_mobil"></h2>
                    <p class="pris_mobil"></p>
                    <p class="beskrivelse_mobil"></p>
                    <img class="single_kurv" src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/kurv.png" alt="Kurv-ikon">
                    <p class="lagertal_mobil"></p>
                    <div class="single_fragt">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/fragt.png" alt="Fragt-ikon">
                        <p>Fri fragt på over 1.000 DKK</p>
                    </div>
                </article>
            </section>


            <section id="single_relaterede_varer">
                <h1>RELATEREDE VARER</h1>
                <a href="http://kasperdyhl.dk/tier1mtg/produktside/">
                    <h3 class="til_produktside">Se alle single cards →</h3>
                </a>
                <div id="single_image_container">
                    <div class="single_relaterede_wrapper">
                        <div class="single_col_relaterede">
                            <div class="single_kort1"></div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <template>
            <article class="single_article_bg">

                <img src="" alt="" class="single_random_billede">

                <div class="single_baggrund_kort">
                    <h2 class="single_titel_alternativ"></h2>
                    <p class="single_pris_alternativ"></p>
                    <button class="single_se_kort_knap knapper_dark">SE KORT</button>
                </div>

            </article>
        </template>

        <script>
            let single;

            //Henter den single der klikkes på
            let aktuelSingle = <?php echo get_the_ID() ?>;


            //Konstanten sættes til at lede efter Single-kortet der klikkes på
            const dbUrl = "http://kasperdyhl.dk/tier1mtg/wp-json/wp/v2/single/" + aktuelSingle;

            let newSingleKort;
            const single_url = "http://kasperdyhl.dk/tier1mtg/wp-json/wp/v2/single?per_page=100";

            async function getJson() {

                console.log("async function bliver kaldt")

                const data = await fetch(dbUrl);
                single = await data.json();

                const JsonData = await fetch(single_url);
                newSingleKort = await JsonData.json();
                console.log("loadJson", newSingleKort);

                visSingles();
                visUdgaver();
                visRandomImg();

            }


            //Henter information fra json, og sætter dem ind i single-kort-sektion
            function visSingles() {
                console.log("visSingles bliver kaldt", single);

                document.querySelector(".billede").src = single.billede.guid;
                document.querySelector(".titel").innerHTML = single.title.rendered;
                document.querySelector(".pris").innerHTML = single.pris + `${" DKK"}`;
                document.querySelector(".lagertal").innerHTML = single.lagertal + `${" på lager"}`;
                document.querySelector(".beskrivelse").innerHTML = single.beskrivelse;


                document.querySelector(".titel_mobil").innerHTML = single.title.rendered;
                document.querySelector(".pris_mobil").innerHTML = single.pris + `${" DKK"}`;
                document.querySelector(".lagertal_mobil").innerHTML = single.lagertal + `${" på lager"}`;
                document.querySelector(".beskrivelse_mobil").innerHTML = single.beskrivelse;
            }

            function visUdgaver() {
                //Visning af udgave 1
                document.querySelector(".single_h3").innerHTML = `${"Andre udgaver af "}` + single.title.rendered;
                document.querySelector(".single_billede").src = single.billede.guid;
                document.querySelector(".single_pris").innerHTML = single.pris + `${" DKK"}`;

                //Visning af udgave 2
                document.querySelector(".single_billede_2").src = single.billede.guid;
                document.querySelector(".single_pris_2").innerHTML = single.pris + `${" DKK"}`;

                //Visning af udgave 3
                document.querySelector(".single_billede_3").src = single.billede.guid;
                document.querySelector(".single_pris_3").innerHTML = single.pris + `${" DKK"}`;
            }

            function randInt(max) {
                return Math.floor(Math.random() * max);
            }

            function visRandomImg() {
                console.log("visRandomImg");

                var randomNumbers = [];
                var randomSingleCards = [];

                //Kører et loop 4 gange, for at få 4 tilfældige integers (tal). Disse bliver puttet i et randArray
                for (var i = 0; i < 4; i++) randomNumbers.push(randInt(newSingleKort.length));

                //Kører et loop for hvert tilfældigt tal i randints, og tilføjer tilsvarende singles til et array.
                randomNumbers.forEach(value => {
                    randomSingleCards.push(newSingleKort[value]);
                });

                randomSingleCards.forEach(newSingleKort => {
                    //Definerer konstanter til senere brug i kloningen af template
                    const skabelon = document.querySelector("template");
                    const randomContainer = document.querySelector(".single_kort1");

                    //Her klones template og udfyldes med data fra de tilfældige objekter
                    const klonRandom = skabelon.cloneNode(true).content;

                    klonRandom.querySelector(".single_random_billede").src = newSingleKort.billede.guid;
                    klonRandom.querySelector(".single_titel_alternativ").innerHTML = newSingleKort.title.rendered;
                    klonRandom.querySelector(".single_pris_alternativ").innerHTML = `${"Fra "}` + newSingleKort.pris + `${" DKK"}`;

                    // eventlisteners på hver enkelt artikel
                    klonRandom.querySelector(".single_se_kort_knap").addEventListener("click", () => {
                        location.href = newSingleKort.link;
                    })

                    randomContainer.appendChild(klonRandom);
                })
            }

            getJson();

        </script>

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
