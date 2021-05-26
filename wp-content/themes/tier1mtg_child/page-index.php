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
    /*Styling af første sektion: nyeste kort*/
    /*styling af singel kortene på forsiden*/

    .titel_alternativ {
        color: #F1F0E8;
        margin-bottom: 0;
    }

    .pris_alternativ {
        color: #AD9261;
    }

    .se_kort_knap {
        position: absolute;
        left: 58%;
        bottom: 5%;
        z-index: 40;
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
        height: 30vh;
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

        <section id="anden_sektion">
            <div>
                <div class="baggrundsbillede_anden_sektion"></div>
                <h1>BLIV EN DEL AF UNIVERSET</h1>
                <p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. lorem Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text. lorem</p>
                <button>LÆS MERE</button>
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
