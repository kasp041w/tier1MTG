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
    main {
        width: 100%;
        padding-left: 0rem;
        padding-right: 0rem;
    }

    /*Sektionernes margin og max-width*/
    #forside_first_section,
    #forside_trejde_sektion,
    #forside_fjerde_sektion,
    .forside_femte_sektion {
        max-width: 1200px;
        margin: 70px auto;
    }



    /*FORSIDE SPLASH*/

    #forside_splach .forside_splach_container {
        background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/del_af_universet.png);
        background-size: cover;
        max-width: none;
        height: 100vh;
        width: 100%;
    }





    /*FØRSTE SEKTION: nyeste kort*/
    /*styling af singel kortene på forsiden*/

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

    .billede_forside {
        border-top-left-radius: 5%;
        border-top-right-radius: 5%;
        width: 100%;
        height: 57vh;
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


    /*Slider opsætning, fungere både på mobil og destiop*/
    .forside_figure_ny {
        cursor: pointer;
    }

    .forside_image-container {
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        display: flex;
        gap: 20px;
        padding: 20px;
    }

    .forside_image-container .forside_figure_ny {
        flex-basis: 90%;
        flex-shrink: 0;
        scroll-snap-align: center;
    }



    /*ANDEN SEKTION: bliv en del af universet*/

    #forside_anden_sektion {
        background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/del_af_universet.png);
        background-size: cover;
        max-width: none;
        height: 75vh;
        width: 100%;
        margin: 130px 0 90px 0;
    }

    .forside_anden_sektion_styl {
        color: #F1F0E8;
        text-align: center;
    }

    .forside_anden_sektion_tekst {
        display: grid;
        padding: 16vh 0;
    }


    .forside_anden_sektion_knap {
        place-self: center;
    }


    /*TREJDE SKETION: styling af trejde sektion*/
    /*Styling af hovereffekten på kort så den sorte bremme forsvinder med mus over bilelde*/
    .forside_image-container figure {
        position: relative;
    }

    .trejde_sektion_figcuption {
        position: absolute;
        bottom: 0;
        background-color: rgba(39, 39, 39, 0.96);
        width: 100%;
        padding: 20px;
        height: 40%;
        transition: .5s ease;
        overflow: hidden;
    }

    .forside_figure_ny:hover .trejde_sektion_figcuption {
        height: 0%;
        padding: 0px 20px 0px 20px;
    }

    .trejde_sektion_knap {
        position: absolute;
        left: 49%;
        bottom: 5%;
        z-index: 40;
    }





    /*FJERDE SEKTION: styling af fjerde sektion*/
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

    /*FEMTE SEKTION: styling af femte sektion*/
    #forside_femte_sektion {
        position: relative;
        background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/forside-om_os1.png);
        background-size: cover;
        max-width: none;
        height: 100vh;
        width: 100%;
    }

    .forside_femte_sektion .bottom img {
        padding: 0px 20px 0px 20px;
    }

    .forside_femte_sektion .bottom {
        margin-top: 40%;
    }

    .forside_femte_sektion_knap {
        position: absolute;
        z-index: 40;
    }

    /*SJETTE SEKTION*/
    .forside_sjette_sektion_grid {
        position: relative;
    }

    .forside_sjette_sektion_grid .left {
        text-align: center;
    }

    /*----- så blomsten i bunden går i ét med footer-----*/
    section .forside_sjette_sektion_grid {
        margin-bottom: -6px;
    }

    .forside_sjette_sektion_knap {
        background-color: #AD9261;
        color: #F1F0E8;
        border-radius: 28px;
        padding: 12px 20px 12px 20px;
        font-weight: bold;
        place-self: center;
        z-index: 40;
    }

    .forside_sjette_sektion_knap:hover {
        background-color: #272727;
        color: #AD9261;
    }


    /*desktop*/
    @media (min-width: 950px) {

        /*OVERSKRIFTERNE TIL HVER SEKTION*/

        #forside_first_section h1,
        #forside_trejde_sektion h1,
        #forside_fjerde_sektion h1 {
            margin-bottom: 0;
        }


        /*FØRSTE SEKTION OG KORT*/
        .til_kort_side_nav {
            text-align: end;
        }

        .forside_image-container .forside_figure_ny {
            flex-basis: 27%;
        }



        /*ANDEN SEKTION*/

        #forside_anden_sektion {
            height: 57vh;
        }

        .forside_anden_sektion_tekst {
            padding: 90px 0px;
            margin: 0px 290px;
        }



        /*FEMTE SEKTIONstyling af femte sektion*/
        #forside_femte_sektion {
            height: 90vh;
        }

        .forside_femte_sektion {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-auto-rows: 1fr 0.5fr;
            grid-row-gap: 50px;
        }

        .forside_femte_sektion .left {
            grid-column-start: 1;
            grid-column-end: span 1;
            grid-row-start: 1;
            grid-row-end: span 1;
        }

        .forside_femte_sektion .rigtht {
            grid-column-start: 2;
            grid-column-end: span 1;
            grid-row-start: 1;
            grid-row-end: span 1;
            padding-top: 15%;
        }

        .forside_femte_sektion .bottom {
            grid-column-start: 1;
            grid-column-end: span 2;
            grid-row-start: 2;
            grid-row-end: span 1;
            place-self: center;
            margin: 0%;
        }


        /*SJETTE SEKTION*/
        .forside_sjette_sektion_grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .forside_sjette_sektion_grid .left {
            place-self: center;
            margin-left: 15%;
        }
    }

</style>


<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
    <main id="main" <?php generate_do_element_classes( 'main' ); ?>>

        <section id="forside_splach">
            <div class="forside_splach_container"></div>
        </section>

        <section id="forside_first_section">
            <h1>NYESTE SINGLE</h1>
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

        <section id="forside_anden_sektion">
            <div class="forside_anden_sektion_tekst">
                <h1 class="forside_anden_sektion_styl">BLIV EN DEL AF UNIVERSET</h1>
                <p class="forside_anden_sektion_styl">Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. lorem Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text. lorem</p>
                <button class="forside_anden_sektion_knap knapper_dark">LÆS MERE</button>
            </div>
        </section>

        <section id="forside_trejde_sektion">
            <h1>NYESTE ACCESSORIES</h1>
            <h3 class="til_kort_side_nav">Se alle accessories →</h3>
            <div class="forside_image-container">
                <figure class="forside_figure_ny">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/skab_acc.jpeg" alt="Gamegenic - Playmat Tube">
                    <button class="trejde_sektion_knap knapper_dark">SE PRODUKT</button>
                    <figcaption class="trejde_sektion_figcuption">
                        <h2 class="h2_acc">Gamegenic - Playmat Tube</h2>
                        <h3 class="h3_acc">49,95 DKK</h3>
                    </figcaption>
                </figure>

                <figure class="forside_figure_ny">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/box.jpeg" alt="Ultra Pro – Satin Tower Deck">
                    <button class="trejde_sektion_knap knapper_dark">SE PRODUKT</button>
                    <figcaption class="trejde_sektion_figcuption">
                        <h2 class="h2_acc">Ultra Pro – Satin Tower Deck</h2>
                        <h3 class="h3_acc">99,95 DKK</h3>
                    </figcaption>
                </figure>

                <figure class="forside_figure_ny">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/tube.jpeg" alt="Ultra Pro - Boombox">
                    <button class="trejde_sektion_knap knapper_dark">SE PRODUKT</button>
                    <figcaption class="trejde_sektion_figcuption">
                        <h2 class="h2_acc">Ultra Pro - Boombox</h2>
                        <h3 class="h3_acc">324,95 DKK</h3>
                    </figcaption>
                </figure>

                <figure class="forside_figure_ny">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/kort_ting.jpeg" alt="Secret Lair – Ultimate Edition">
                    <button class="se_kort_knap knapper_dark">SE PRODUKT</button>
                    <figcaption class="trejde_sektion_figcuption">
                        <h2 class="h2_acc">Secret Lair – Ultimate Edition</h2>
                        <h3 class="h3_acc">699,95 DKK</h3>
                    </figcaption>
                </figure>
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
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </figcaption>
                </figure>

                <figure class="forside_figure_event">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Intersection-123.png" alt="">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <figcaption class="fjerde_sektion_figcuption">
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </figcaption>
                </figure>

                <figure class="forside_figure_event">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Intersection-123.png" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <figcaption class="fjerde_sektion_figcuption">
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </figcaption>
                </figure>
            </div>
        </section>

        <section id="forside_femte_sektion">
            <div class="forside_femte_sektion">
                <div class="left">
                    <img src="" alt="">
                </div>
                <div class="rigtht">
                    <h1>HVEM ER TIER1MTG</h1>
                    <p>
                        Tier1MTG Alt i Magic <br><br> Tier1MTG er startet af Allan Asmussen og Dan Sønderskov 2 gamle venner der er vokset op sammen og har spillet magic siden 1994. <br><br>Vores Vision er at kunne levere magickort til spilleren på tværs af alle formater, at gøre det nemt for spilleren, ved salg online på vores hjemmeside, Magiccardmarket og ude fysisk på events. Til markedspriser og hurtig leveringstid.
                    </p>
                    <button class="forside_femte_sektion_knap forside_sjette_sektion_knap">LÆS MERE</button>
                </div>
                <div class="bottom">
                    <a href="https://www.twitch.tv/tier1mtg"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/twitch_knap.png" alt="link til twitch"></a>
                    <a href="https://www.youtube.com/channel/UCV8RZ4Kg3vg51M86UTQlE1Q"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/youtube_knap.png" alt="link til youtube"></a>
                    <a href="https://www.facebook.com/Tier1MTG"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/facebook_knap.png" alt="link til facebook"></a>
                </div>
            </div>
        </section>

        <section id="forside_sjette_sektion">
            <div class="forside_sjette_sektion_grid">
                <div class="left">
                    <h1>VI ER OGSÅ PÅ CARDMARKET</h1>
                    <p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. lorem Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text. lorem</p>
                    <button class="forside_sjette_sektion_knap">LÆS MERE</button>
                </div>
                <div class="right">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/lotos1.png" alt="MTG lotos">
                </div>
            </div>


        </section>
    </main>


    <template>
        <article>
            <div class="billed_placering">
                <img src="" alt="" class="billede_forside">
                <button class="se_kort_knap knapper_dark">SE KORT</button>
            </div>
            <div class="baggrund_kort">
                <h2 class="titel_alternativ"></h2>
                <h3 class="pris_alternativ"></h3>
            </div>

        </article>
    </template>


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


        //Her i funktioen genereres tre tilfeldeig podcast og sættes ind i HTML under sektionen, nye podcasts episoder
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
                klon.querySelector(".billede_forside").src = single.billede.guid;
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
                klon.querySelector(".billede_forside").src = single.billede.guid;
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
                klon.querySelector(".billede_forside").src = single.billede.guid;
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
                klon.querySelector(".billede_forside").src = single.billede.guid;
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
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

	get_footer();
