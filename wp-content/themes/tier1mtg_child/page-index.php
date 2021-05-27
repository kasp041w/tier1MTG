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

    /*Styling af første sektion: nyeste kort*/
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

    .billede {
        border-top-left-radius: 5%;
        border-top-right-radius: 5%;
        width: 100%;
        height: 55%;
    }

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

    .baggrund_kort:hover {
        height: 0%;
    }


    /*Slider effekten, fungere både på mobil og destiop*/
    .figure_ny {
        cursor: pointer;
    }

    /*    lyt vidre styling */

    .image-container {
        overflow-x: scroll;
        scroll-snap-type: x mandatory;
    }

    .image-container .figure_ny {
        flex-basis: 90%;
        flex-shrink: 0;
        scroll-snap-align: center;
    }


    .image-container {
        display: flex;
        gap: 20px;
        padding: 20px;
    }

    .remove_object {
        display: none;
    }





    /*styling af anden sektion: bliv en del af universet*/

    .baggrundsbillede_anden_sektion {
        background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/del_af_universet.png);
        background-size: cover;
        max-width: none;
        height: 90vh;
        width: 100%;
    }

    .baggrundsbillede_anden_sektion h1,
    p {
        color: #F1F0E8;
        text-align: center;

    }

    #forside_anden_sektion_knap {
        position: relative;
        left: 50%;
        color: #AD9261;
    }


    /*styling af trejde sektion*/

    .image-container figure {
        position: relative;
    }

    figcaption {
        position: absolute;
        bottom: 0;
        background-color: rgba(39, 39, 39, 0.96);
        width: 100%;
        padding: 20px;
        height: 30%;
        transition: .5s ease;
        overflow: hidden;
    }

    figcaption:hover {
        height: 0%;
    }

    #fjerde_sektion img {
        border-top-left-radius: 5%;
        border-top-right-radius: 5%;
        width: 100%;
    }



    /*styling af fjerde sektion*/
    #fjerde_sektion figcaption {
        position: absolute;
        bottom: 0;
        background-color: rgba(39, 39, 39, 0.96);
        width: 100%;
        padding: 20px;
        height: 30%;
        transition: .5s ease;
        overflow: hidden;
    }

    #fjerde_sektion figcaption:hover {
        height: 100%;

    }

    /*styling af femte sektion*/
    .forside_femte_sektion {
        background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/om_os_forside.png);
        background-size: cover;
        max-width: none;
        height: 100vh;
        width: 100%;
    }







    /*desktop*/
    @media (min-width: 950px) {
        .til_kort_side_nav {
            text-align: end;
        }

        .image-container .figure_ny {
            flex-basis: 27%;
        }


        /*styling af femte sektion*/
        .forside_femte_sektion {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-auto-rows: 1fr 1fr;
        }

        .left {
            grid-column-start: 1;
            grid-column-end: span 1;
            grid-row-start: 1;
            grid-row-end: span 1;
        }

        .right {
            grid-column-start: 2;
            grid-column-end: span 1;
            grid-row-start: 1;
            grid-row-end: span 1;
        }

        .bottom {
            grid-column-start: 1;
            grid-column-end: span 2;
            grid-row-start: 2;
            grid-row-end: span 1;
        }



    }

</style>


<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
    <main id="main" <?php generate_do_element_classes( 'main' ); ?>>
        <div>
            <p>Dette er forsiden</p>
        </div>

        <section id="first_section">
            <h1>NYESTE SINGLE</h1>
            <a href="http://kasperdyhl.dk/tier1mtg/produktside/">
                <h3 class="til_kort_side_nav">Se alle single cards →</h3>
            </a>
            <div class="image-container">
                <figure class="figure_ny">
                    <div class="new_single_kort"></div>
                </figure>

                <figure class="figure_ny">
                    <div class="new_single_kort1"></div>
                </figure>

                <figure class="figure_ny">
                    <div class="new_single_kort2"></div>
                </figure>

                <figure class="figure_ny">
                    <div class="new_single_kort3"></div>
                </figure>
            </div>
        </section>

        <section id="anden_sektion">
            <div class="baggrundsbillede_anden_sektion">
                <h1>BLIV EN DEL AF UNIVERSET</h1>
                <p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. lorem Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text. lorem</p>
                <button id="forside_anden_sektion_knap">LÆS MERE</button>
            </div>
        </section>

        <section id="trejde_sektion">
            <h1>NYESTE ACCESSORIES</h1>
            <h3 class="til_kort_side_nav">Se alle accessories →</h3>
            <div class="image-container">
                <figure class="figure_ny">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/skab_acc.jpeg" alt="Gamegenic - Playmat Tube">
                    <button class="se_kort_knap">SE PRODUKT</button>
                    <figcaption>
                        <h2 class="h2_acc">Gamegenic - Playmat Tube</h2>
                        <h3 class="h3_acc">49,95 DKK</h3>
                    </figcaption>
                </figure>

                <figure class="figure_ny">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/box.jpeg" alt="Ultra Pro – Satin Tower Deck">
                    <button class="se_kort_knap">SE PRODUKT</button>
                    <figcaption>
                        <h2 class="h2_acc">Ultra Pro – Satin Tower Deck</h2>
                        <h3 class="h3_acc">99,95 DKK</h3>
                    </figcaption>
                </figure>

                <figure class="figure_ny">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/tube.jpeg" alt="Ultra Pro - Boombox">
                    <button class="se_kort_knap">SE PRODUKT</button>
                    <figcaption>
                        <h2 class="h2_acc">Ultra Pro - Boombox</h2>
                        <h3 class="h3_acc">324,95 DKK</h3>
                    </figcaption>
                </figure>

                <figure class="figure_ny">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/kort_ting.jpeg" alt="Secret Lair – Ultimate Edition">
                    <button class="se_kort_knap">SE PRODUKT</button>
                    <figcaption>
                        <h2 class="h2_acc">Secret Lair – Ultimate Edition</h2>
                        <h3 class="h3_acc">699,95 DKK</h3>
                    </figcaption>
                </figure>
            </div>
        </section>

        <section id="fjerde_sektion">
            <h1>KOMMENDE EVENTS</h1>
            <a href="http://kasperdyhl.dk/tier1mtg/event/">
                <h3 class="til_kort_side_nav">Se alle events →</h3>
            </a>
            <div class="image-container">
                <figure class="figure_ny">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/jeweled-bird.jpg" alt="Tier1MTG event">
                    <button class="se_kort_knap">LÆS MERE</button>
                    <figcaption>
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </figcaption>
                </figure>

                <figure class="figure_ny">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/jeweled-bird.jpg" alt="">
                    <button class="se_kort_knap">LÆS MERE</button>
                    <figcaption>
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </figcaption>
                </figure>

                <figure class="figure_ny">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/jeweled-bird.jpg" alt="Tier1MTG event">
                    <button class="se_kort_knap">LÆS MERE</button>
                    <figcaption>
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </figcaption>
                </figure>
            </div>
        </section>


        <section id="femte_sektion">
            <div class="forside_femte_sektion">
                <div class="left">
                    <img src="" alt="">
                </div>
                <div class="rigtht">
                    <h2>HVEM ER TIER1MTG</h2>
                    <p>
                        Tier1MTG Alt i Magic <br><br> Tier1MTG er startet af Allan Asmussen og Dan Sønderskov 2 gamle venner der er vokset op sammen og har spillet magic siden 1994. <br><br>Vores Vision er at kunne levere magickort til spilleren på tværs af alle formater, at gøre det nemt for spilleren, ved salg online på vores hjemmeside, Magiccardmarket og ude fysisk på events. Til markedspriser og hurtig leveringstid.
                    </p>
                    <button class="se_kort_knap">LÆS MERE</button>
                </div>
                <div class="bottom">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/twitch_knap.png" alt="link til twitch">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/youtube_knap.png" alt="link til youtube">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/facebook_knap.png" alt="link til facebook">
                </div>
            </div>
        </section>
    </main>


    <template>
        <article>
            <div class="billed_placering">
                <img src="" alt="" class="billede">
                <button class="se_kort_knap">SE KORT</button>
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
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

	get_footer();
