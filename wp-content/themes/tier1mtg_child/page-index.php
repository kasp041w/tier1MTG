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
    /*    styling af singel kortene på forsiden*/

    .titel_alternativ {
        color: #F1F0E8;
    }

    .pris_alternativ {
        color: #AD9261;
    }

    article {
        display: grid;
        grid-template-rows: 1fr 1fr;
    }

    article img {
        grid-row-start: 1;
        grid-row-end: span 2;
    }

    .baggrund_kort {
        background-color: rgba(39, 39, 39, 0.9);
        grid-row-start: 2;
        grid-row-end: span 1;

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

    /*desktop*/
    @media (min-width: 950px) {
        .til_kort_side_nav {
            text-align: end;
        }

        .image-container .figure_ny {
            flex-basis: 25%;
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
            <h3 class="til_kort_side_nav">Se alle Single Cards →</h3>
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
    </main>


    <template>
        <article>
            <div><img src="" alt="" class="billede"></div>
            <div class="baggrund_kort">
                <h2 class="titel_alternativ"></h2>
                <h3 class="pris_alternativ"></h3>
                <button class="se_kort_knap">SE KORT</button>
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
