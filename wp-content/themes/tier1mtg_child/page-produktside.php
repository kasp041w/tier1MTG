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

    <div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
        <main id="main" <?php generate_do_element_classes( 'main' ); ?>>

            <nav id="filtrering">
                <button class="filter_knapper" data-single="alle">Alle</button>
            </nav>

            <section id="single_cat_overskrift">
                <h1>Alle Singles</h1>
            </section>

            <section id="single_oversigt"></section>

        </main>

        <!-- Visning af Single-kort -->
        <template>
            <article>
                <img src="" alt="" class="billede">
                <h3 class="titel"></h3>
                <p class="pris"></p>
                <p class="lagertal"></p>
            </article>
        </template>

        <script>
            let singles;
            let categories;
            let filterSingle = "alle";

            //Henfører til overskriften "alle singles"
            const header = document.querySelector("#single_cat_overskrift h1");


            //Henfører til placeringen af templaten, i en sektion
            const dest = document.querySelector("#single_oversigt");


            //HTML-skabelon peges på i denne konstant
            const skabelon = document.querySelector("template");


            // url til wp rest api/database
            const url = "http://kasperdyhl.dk/tier1mtg/wp-json/wp/v2/single?per_page=100";
            const cat_url = "http://kasperdyhl.dk/tier1mtg/wp-json/wp/v2/categories";



            //Filtrering træder i kraft med async-function
            async function loadJson() {
                const JsonData = await fetch(url);
                const catData = await fetch(cat_url);

                singles = await JsonData.json();
                categories = await catData.json();
                console.log(categories);

                visSingles();
                opretKnapper();
            }

            function opretKnapper() {
                console.log("opretKnapper virker");

                categories.forEach(cat => {
                    document.querySelector("#filtrering").innerHTML += `<button class="filter" data-single="${cat.id}">${cat.name}</button>`
                })
                addEventListenersToButtons();
            }

            function addEventListenersToButtons() {
                console.log("lytTilKnapper virker");

                document.querySelectorAll("#filtrering button").forEach(elm => {
                    elm.addEventListener("click", filtrering);
                })
            };


            function filtrering() {
                filterSingle = this.dataset.single;

                console.log("filterSingle");
                visSingles();


                //Overskrift skifter alt efter hvilken kategori der vælges
                header.textContent = this.textContent;
            }

            //funktion, der viser singles i liste view
            function visSingles() {
                console.log("visSingles-funktion");

                // ryd ekst. indhold:
                dest.innerHTML = "";

                // loop igennem json (single)
                singles.forEach(single => {

                    //if (filter == single.kategori || filter == "alle") {
                    if (filterSingle == "alle" || single.categories.includes(parseInt(filterSingle))) {

                        const klon = skabelon.cloneNode(true).content;
                        klon.querySelector(".billede").src = single.billede.guid;
                        klon.querySelector(".titel").innerHTML = single.title.rendered;
                        klon.querySelector(".pris").innerHTML = single.pris;
                        klon.querySelector(".lagertal").innerHTML = single.lagertal + `${" på lager"}`;

                        // eventlisteners på hver enkelt artikel
                        klon.querySelector("article").addEventListener("click", () => {
                            location.href = single.link;
                        })


                        dest.appendChild(klon);
                    }
                })
            }

            loadJson();

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