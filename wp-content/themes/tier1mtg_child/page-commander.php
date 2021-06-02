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

    .site-content .content-area {
        margin: 0 0;
    }

    .commander_top_sektion_container,
    #commander_anden_section,
    .commander_tip_sektion_container,
    .commander_galleri_container,
    #commander_artikler {
        max-width: 1200px;
        margin: 0 auto;
        padding: 5%;
    }

    /*
    Mobil margen på siderne
    #commander_anden_section, .commander_top_sektion_container, .commander_tip_sektion_container,
    {
        padding: 5%;
    }
*/
    /*FARVER OG DIVERSE*/

    #commander_top_sektion {
        background-color: #F5F5F5;
        padding: 1.5rem;
        margin-top: -85px;
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
        height: 57vh;
    }

    /*SLIDER OPSÆTNING TIL MOBIL OG DESKTOP*/

    .commander_figure_ny {
        cursor: pointer;
    }

    .commander_image-container .commander_figure_ny {
        flex-basis: 90%;
        flex-shrink: 0;
        scroll-snap-align: center;
    }

    .commander_image-container {
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        display: flex;
        gap: 20px;
        padding: 20px;
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
        margin-bottom: 3%;
    }

    article:hover .baggrund_kort {
        height: 0%;
        padding: 0px 20px 0px 20px;
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

    .commander_tip_col_1 h1,
    .commander_tip_col_1 p,
    .commander_tip_col_1 a {
        color: #F1F0E8;
    }

    .commander_tip_col_1 h1 {
        margin-top: 80px;
    }

    .commander_tip_col_1 a,
    .commander_tip_col_1 img {
        display: none;
    }

    /*CARDMARKET SEKTIONEN */

    .commander_cardmarket_container {
        background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/del_af_universet.png);
        background-size: cover;
        max-width: none;
        height: 80vh;
        width: 100%;
        padding-bottom: 20vw;
        text-align: center;
        margin-bottom: -5px;
    }

    #commander_cardmarket_sektion h1 {
        color: #F5F5F5;
        padding-top: 10%;
    }

    #commander_cardmarket_sektion p {
        color: #AD9261;
        padding-left: 15vw;
        padding-right: 15vw;
    }

    #commander_cardmarket_sektion a {
        color: #AD9261;
        text-decoration: underline;
    }

    #commander_cardmarket_sektion a:hover {
        color: #F1F0E8;
    }

    /*ARTIKEL SEKTION STYLING*/

    .commander_image-container figure {
        position: relative;
    }

    #forside_fjerde_sektion img {
        width: 100%;
    }

    .fjerde_sektion_figcuption {
        background-color: #272727;
        height: 15vh;
    }

    .event_mere_knap {
        left: 80%;
        bottom: 3%;
    }

    .h2_acc {
        padding: 10px 20px;
    }

    .h3_acc {
        padding: 0px 80px 0px 20px;
    }

    .commander_figure_event {
        flex-basis: 100%;
        flex-shrink: 0;
        scroll-snap-align: center;
        max-width: 350px;
        margin: 0 auto;
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

        .commander_top_sektion_container,
        #commander_anden_section,
        .commander_tip_sektion_container,
        .commander_galleri_container,
        #commander_artikler {
            padding: 0%;
        }

        #commander_anden_section h1,
        .commander_galleri_container h1,
        #commander_artikler h1 {
            margin-top: 100px;
        }

        /*SLIDER OPSÆTNING TIL MOBIL OG DESKTOP*/
        .commander_image-container {
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            display: flex;
            gap: 20px;
            padding: 0px;
        }

        /*GRID PÅ TOPSEKTION*/
        .commander_top_sektion_container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr;
            margin-top: 50px;
            grid-gap: 30px;
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

        /*UGENS TIP-SEKTION*/
        .commander_tip_sektion_container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr;
            grid-gap: 20px;
            margin-top: 70px;
        }

        .commander_tip_col_1 {
            grid-column: 1/2;
            grid-row: 1;
            padding-top: 10vw;
        }

        .commander_tip_col_2 {
            grid-column: 2/2;
            grid-row: 1;
            padding-top: 18vw;
        }

        .commander_tip_col_1 a,
        .commander_tip_col_1 img {
            display: flex;
        }

        /*EVENT SEKTION*/
        .til_kort_side_nav {
            text-align: end;
        }

        .commander_image-container .commander_figure_ny {
            flex-basis: 27%;
        }

        /*ARTIKEL SEKTIONEN*/
        .event_mere_knap {
            left: 76%;
        }

        /*CARDMARKET SEKTIONEN */
        .commander_cardmarket_container {
            background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/del_af_universet.png);
            background-size: cover;
            max-width: none;
            height: 60vh;
            width: 100%;
            padding-bottom: 20vw;
            text-align: center;
            margin-bottom: -5px;
            margin-top: 70px;
        }

        #commander_cardmarket_sektion h1 {
            color: #F5F5F5;
            padding-top: 7%;
        }
    }

    @media only screen and (min-width: 1200px) {

        /*TILPASNING AF PADDING PÅ UGENS TIP-SEKTION*/
        .commander_tip_col_1 {
            padding-top: 12vw;
        }

        .commander_tip_col_2 {
            padding-top: 18vw;
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
            <div class="commander_top_sektion_container">
                <div class="commander_top_col_1">
                    <h1>HVAD ER COMMANDER?</h1>
                    <p>I Commander-formatet spiller du med et deck med 100 unikke kort. Du kan spille med et færdigkøbt deck, eller du kan opbygge dit eget. Du skal vælge en “commander” - et legendarisk væsen - som resten af decket bygges op omkring. Alle kort skal være i samme farve som din commander.
                        <br>
                        <br>I Commander kan I være 2-6 spillere, og I starter hver med 40 liv. Den sidste, der har overlevet i krigszonen, vinder. Du kan frit optimere dit Commander deck løbende med bedre kort, så længe de har samme farve (eller er uden farve) som din commander - dog er der omkring 50 kort, der er forbudte at bruge i Commander-formatet.
                        <br>
                        <br> Alt dette kan du læse mere om i vores artikler længere nede på siden. Se, hvordan du kan komme i gang med at spille Commander i videoen.
                    </p>
                </div>
                <div class="commander_top_col_2">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/k70dmf3kQYU">
                    </iframe>
                </div>
            </div>
        </section>

        <section id="commander_anden_section">
            <h1>KORT DU IKKE MÅ GÅ GLIP AF</h1>
            <a href="http://kasperdyhl.dk/tier1mtg/produktside/">
                <h3 class="til_kort_side_nav">Se alle single cards →</h3>
            </a>
            <div class="commander_image-container">
                <figure class="commander_figure_ny">
                    <div class="new_single_kort"></div>
                </figure>
                <figure class="commander_figure_ny">
                    <div class="new_single_kort1"></div>
                </figure>
                <figure class="commander_figure_ny">
                    <div class="new_single_kort2"></div>
                </figure>
                <figure class="commander_figure_ny">
                    <div class="new_single_kort3"></div>
                </figure>
            </div>
        </section>

        <section id="commander_tip_sektion">
            <div class="commander_tip_sektion_container">
                <div class="commander_tip_col_1">
                    <h1>SE UGENS TIP</h1>
                    <p>Hver uge lægger vi en ny Youtube-video op, som undersøger og forklarer Commander-formatet. Her kan du lære mere om formatet og få tips til at spille og opbygge dit deck. Vil du se vores andre videoer om Commander, kan du se hele vores playliste herunder.</p>
                    <a href="https://www.youtube.com/watch?v=6p6LFFgYVKg" target="_blank" rel="noopener noreferrer" class="commander_playknap"> <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/youtube_knap.png" alt="play knap"> </a>
                    <p>Se vores Commander-playliste på Youtube</p>
                </div>
                <div class="commander_tip_col_2">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Js6hJ_4K5CU">
                    </iframe>
                </div>
            </div>
        </section>


        <section id="commander_galleri">
            <div class="commander_galleri_container">
                <h1>SKAL DU VÆRE MED NÆSTE GANG?</h1>
                <a href="http://kasperdyhl.dk/tier1mtg/event/">
                    <h3 class="til_kort_side_nav">Se vores Commander-event →</h3>
                </a>

                <div class="commander_image-container">

                    <figure class="commander_figure_event">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/kort_sko_ps-scaled.jpg" alt="Tier1MTG event">
                    </figure>

                    <figure class="commander_figure_event">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/talking_people_ps-scaled.jpg" alt="Tier1MTG event">
                    </figure>

                    <figure class="commander_figure_event">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/boys_ps-scaled.jpg" alt="Tier1MTG event">
                    </figure>

                    <figure class="commander_figure_event">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/butik_ps-scaled.jpg" alt="Tier1MTG event">
                    </figure>

                    <figure class="commander_figure_event">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/sitting_ps-scaled.jpg" alt="Tier1MTG event">
                    </figure>
                </div>
            </div>
        </section>


        <section id="commander_artikler">
            <h1>LÆS DET NYESTE OM COMMANDER</h1>
            <p>Hold dig opdateret på det nyeste inden for Commander-formatet på vores blog</p>
            <a href="">
                <h3 class="til_kort_side_nav">Se alle artikler →</h3>
            </a>
            <div class="commander_image-container">

                <figure class="commander_figure_event">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/ikon_cards_ps-scaled.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS NU</button>
                    <figcaption class="fjerde_sektion_figcuption">
                        <h2 class="h2_acc">Hvilken type spiller er du?</h2>
                        <h3 class="h3_acc">Find den Magic-strategi, der passer bedst til din spillestil.</h3>
                    </figcaption>
                </figure>

                <figure class="commander_figure_event">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/bunke_kort_ps-scaled.jpg" alt="">
                    <button class="event_mere_knap knapper_dark">LÆS NU</button>
                    <figcaption class="fjerde_sektion_figcuption">
                        <h2 class="h2_acc">Det bedste fra Strixhaven</h2>
                        <h3 class="h3_acc">Tjek dine yndlings Commander-kort ud fra de nyeste sæt.</h3>
                    </figcaption>
                </figure>

                <figure class="commander_figure_event">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/kort_ps.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS NU</button>
                    <figcaption class="fjerde_sektion_figcuption">
                        <h2 class="h2_acc">Sådan laver du et deck</h2>
                        <h3 class="h3_acc">Se vores anbefalinger til kort, som du kan lave Commander-decks med.</h3>
                    </figcaption>
                </figure>
            </div>
        </section>




        <section id="commander_cardmarket_sektion">
            <div class="commander_cardmarket_container">
                <h1>VI ER OGSÅ PÅ CARDMARKET</h1>
                <p>Vi har Skandinaviens største udvalg af MTG-enkeltkort, og vi sælger også kort på Cardmarket. <a href="https://www.cardmarket.com/en/Magic/Users/Tier1MTG" target="_blank">Se vores udvalg på Cardmarket her.</a> Vi sender alle hverdage, så du hurtigt kan modtage dine nye kort, og vi sender over hele verden til gode priser. Vi er certificeret "Professional Seller" på Magic-Cardmarket, og det er din sikkerhed for, at vi er en troværdig sælger. Vi har altid et voksende katalog af over 210.000 Magic The Gathering-enkeltkort.</p>
                <button class="commander_knap_cardmarket">Læs mere</button>
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
                <p class="pris_alternativ"></p>
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
