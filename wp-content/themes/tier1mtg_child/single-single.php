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




<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
    <main id="main" <?php generate_do_element_classes( 'main' ); ?>>


        <!-- tilbageknap -->
        <a href="javascript:history.back()" class="tilbage_knap">
            <h3>← Tilbage</h3>
        </a>
        <div id="tilbage_desk_single">
            <h3 class="single_h3_desk"></h3>
        </div>

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
                <img class="single_kurv" src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/kurv_knap1.png" alt="Kurv-ikon">
                <p class="lagertal"></p>
                <div class="single_fragt">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/fragt.png" alt="Fragt-ikon">
                    <p>Fri fragt på over 1.000 DKK</p>
                </div>
                <br>
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/mastercard-dark-large.png" alt="">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/visa-dark-large.png" alt="">
            </article>
        </section>

        <!--DISPLAy AF MOBIL VERSION-->
        <section id="single_info">
            <article class="randomArticle">
                <h2 class="titel_mobil"></h2>
                <p class="pris_mobil"></p>
                <p class="beskrivelse_mobil"></p>
                <img class="single_kurv" src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/kurv_knap1.png" alt="Kurv-ikon">
                <p class="lagertal_mobil"></p>
                <div class="single_fragt">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/fragt.png" alt="Fragt-ikon">
                    <p>Fri fragt på over 1.000 DKK</p>
                </div>
                <br>
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/mastercard-dark-large.png" alt="">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/visa-dark-large.png" alt="">
            </article>
        </section>


        <section id="single_relaterede_varer">
            <h1>RELATEREDE VARER</h1>
            <a href="http://kasperdyhl.dk/tier1mtg/produktside/">
                <h3 class="til_produktside">Se alle singles →</h3>
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
                <p class="single_lagertal"></p>
                <p class="single_pris_alternativ"></p>
                <br>
                <button class="single_se_kort_knap knapper_dark">SE KORT</button>
                <br>
            </div>

        </article>
    </template>

    <script>
        let single;

        //Henter den single der klikkes på
        let aktuelSingle = <?php echo get_the_ID() ?>;

        //variabel der laver en tældig pris i oversigt over små singlekort
        let randomPris1 = Math.floor(Math.random() * 9000) + 700;
        let randomPris2 = Math.floor(Math.random() * 150000) + 10000;
        let randomPris3 = Math.floor(Math.random() * 50000) + 5000;



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

            document.querySelector(".tilbage_knap").addEventListener("click", tilbageKnap);

            visSingles();
            visUdgaver();
            visRandomImg();


        }

        function tilbageKnap() {
            history.back();
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
            document.querySelector(".single_h3_desk").innerHTML = `${"Andre udgaver af "}` + single.title.rendered;
            document.querySelector(".single_billede").src = single.billede.guid;
            document.querySelector(".single_pris").innerHTML = randomPris1 + `${".00"}` +
                `${" DKK"}`;

            //Visning af udgave 2
            document.querySelector(".single_billede_2").src = single.billede.guid;
            document.querySelector(".single_pris_2").innerHTML = randomPris2 + `${".00"}` +
                `${" DKK"}`;

            //Visning af udgave 3
            document.querySelector(".single_billede_3").src = single.billede.guid;
            document.querySelector(".single_pris_3").innerHTML = randomPris3 + `${".00"}` +
                `${" DKK"}`;
        }

        //genererer et tilfældigt tal i et array
        function randInt(max) {
            return Math.floor(Math.random() * max);
        }

        function visRandomImg() {
            console.log("visRandomImg");

            var randomNumbers = [];
            var randomSingleCards = [];

            //Kører et loop 4 gange, for at få 4 tilfældige integers (tal). Disse bliver puttet i et randArray
            //vi lader værdien af "i" være lig med 0. "i" er altid mindre end 4, og ellers lægges der en værdi til "i".
            //vi "pusher" randInt (et tilfældigt tal) ind i newSingleKort arrayet, det antal gange som længden er (altså 4 gange!)
            for (let i = 0; i < 4; i++) randomNumbers.push(randInt(newSingleKort.length));

            //Kører et loop for hvert tilfældigt tal i randints, og tilføjer tilsvarende singles til et array.
            randomNumbers.forEach(value => {
                randomSingleCards.push(newSingleKort[value]);
            });

            //relaterede varer
            randomSingleCards.forEach(newSingleKort => {
                //Definerer konstanter til senere brug i kloningen af template
                const skabelon = document.querySelector("template");
                const randomContainer = document.querySelector(".single_kort1");

                //Her klones template og udfyldes med data fra de tilfældige objekter
                const klonRandom = skabelon.cloneNode(true).content;

                klonRandom.querySelector(".single_random_billede").src = newSingleKort.billede.guid;
                klonRandom.querySelector(".single_titel_alternativ").innerHTML = newSingleKort.title.rendered;
                klonRandom.querySelector(".single_lagertal").innerHTML = newSingleKort.lagertal + `${" på lager"}`;
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
