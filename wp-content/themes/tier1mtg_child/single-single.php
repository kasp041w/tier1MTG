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


    #single_relaterede_varer {
        margin: 60px auto;
    }



    /*STYLING AF TILBAGEKNAP*/

    .tilbage_knap h3 {
        padding-top: 4vh;
        padding-left: 4vw;
        font-size: larger;
    }

    .single_h3_desk {
        display: none;
    }

    /*STYLING AF SINGLE-GRIDS*/

    #single_udgaver .single_wrapper {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        grid-gap: 1rem;
    }

    .billede:hover {
        cursor: crosshair;
    }

    .single_col img:hover {
        transform: scale(1.2);
        cursor: pointer;
    }

    #single_udgaver .single_wrapper .single_container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 0.1fr 0.1fr;
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

    .single_kurv:hover {
        cursor: pointer;
        transform: scale(1.1);

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
        grid-gap: 1rem 0.5rem;
    }


    .single_random_billede {
        border-top-left-radius: 5%;
        border-top-right-radius: 5%;
        width: 100%;
        height: 55%;
        object-fit: contain;
    }

    .single_article_bg {
        background-color: #272727;
        border-top-left-radius: 5%;
        border-top-right-radius: 5%;
        position: relative;
    }

    .single_baggrund_kort {
        height: auto;
    }

    .single_titel_alternativ {
        padding-left: 5%;
        padding-right: 5%;
        padding-top: 5%;
        color: #F1F0E8;
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 0;
    }

    .single_lagertal {
        padding-left: 5%;
        padding-right: 5%;
        padding-top: 5%;
        color: #F1F0E8;
        font-size: 0.75rem;
        margin-bottom: 0;
    }

    .single_pris_alternativ {
        padding-left: 5%;
        padding-right: 5%;
        color: #AD9261;
        font-size: 1rem;
        margin-bottom: 0;

    }


    .single_se_kort_knap {
        position: absolute;
        left: 5%;
        bottom: 3%;
        font-size: 14px;
    }






    /*DESKTOP-DISPLAY NONE*/

    #single_desktop_version {
        display: none;
    }

    @media (min-width: 950px) {

        /*general margen settings*/
        #single_udgaver,
        #single_info,
        #single_relaterede_varer {
            padding: 0%;
        }


        #single_relaterede_varer {
            margin: 100px auto;
        }


        /*DET VALGTE KORT OG INFO*/
        /*STYLING AF SINGLE-GRIDS*/

        #single_udgaver .single_wrapper {
            grid-gap: 3rem;
        }

        #tilbage_desk_single {
            max-width: 1200px;
            margin: 0 auto;
        }

        .single_h3_desk {
            display: block;
            padding-top: 4vh;
            font-size: larger;
        }

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


        /*RELAVANTE KORT*/
        /*grid i den sorte tekst bremme under kortene*/
        #single_relaterede_varer .til_produktside {
            text-align: right;
        }


        .single_baggrund_kort {
            display: grid;
            grid-template-columns: 1fr 0.4fr;
            grid-template-rows: 1fr 1fr;
        }

        .single_titel_alternativ {
            grid-row-start: 1;
            grid-row-end: span 1;
            grid-column-start: 1;
            grid-column-end: span 1;

        }

        .single_pris_alternativ {
            font-size: 1rem;
            grid-row-start: 2;
            grid-row-end: span 1;
            grid-column-start: 1;
            grid-column-end: span 2;
        }

        .single_lagertal {
            font-size: 0.8rem;
            grid-row-start: 1;
            grid-row-end: span 1;
            grid-column-start: 2;
            grid-column-end: span 1;
        }


        .single_se_kort_knap {
            position: absolute;
            left: 54%;
            top: 84%;
            bottom: 0%;
            margin: 1rem;
        }


    }

</style>

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
                <img class="single_kurv" src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/kurv_knap_2.png" alt="Kurv-ikon">
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
                <img class="single_kurv" src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/kurv_knap_2.png" alt="Kurv-ikon">
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
