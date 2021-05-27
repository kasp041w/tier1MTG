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
        /*--- GENEREL ---*/

        .site-content .content-area {
            max-width: 1200px;
            margin: 0 auto;
            padding-right: 1.2rem;
            padding-left: 1.2rem;
            padding-bottom: 1.2rem;
        }
        /*---GRIDVIEW MOBIL*/

        .one-container .site-main>:last-child,
        .separate-containers .site-main>:last-child {
            text-align: left;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(135px, 1fr));
            max-width: 100vw;
            grid-gap: 1rem;
        }
        /*---SINGLE CARDS---*/

        img.billede {
            border-top-left-radius: 5%;
            border-top-right-radius: 5%;
            width: 100%;
            height: 55%;
            object-fit: cover
        }

        .single_kort {
            background-color: #272727;
            border-top-left-radius: 5%;
            border-top-right-radius: 5%;
        }

        .titel {
            padding-left: 5%;
            padding-right: 5%;
            padding-top: 5%;
            color: #F1F0E8;
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 0;
        }

        .lagertal {
            padding-left: 5%;
            padding-right: 5%;
            padding-top: 5%;
            color: #F1F0E8;
            font-size: 0.75rem;
            margin-bottom: 0;
        }

        .pris {
            padding-left: 5%;
            padding-right: 5%;
            color: #AD9261;
            font-size: 0.7rem;
            margin-bottom: 0;
        }
        /*---FILTRERINGSNAVIGATION---*/

        .filtrering {
            display: none;
        }

        .filter_knapper {
            width: 96.5%;
            margin: 0.1rem;
            display: inline;
        }

        .filter {
            width: 48%;
            margin: 0.1rem;
            display: inline-block;
        }

    </style>

    <div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
        <main id="main" <?php generate_do_element_classes( 'main' ); ?>>

            <section id="nav-mobil">
                <button id="visKategorier">≡</button>
                <button id="visFilter">⇆</button>
                <nav class="filtrering">
                    <button class="filter_knapper" data-single="alle">Alle</button>
                </nav>
            </section>

            <section id="single_cat_overskrift">
                <h1>Alle</h1>
            </section>

            <section id="single_oversigt"></section>

        </main>

        <!-- Visning af Single-kort -->
        <template>
            <article class="single_kort">
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

                //Viser kategorierne i en pop-up menu i mobilversion
                document.querySelector("#visKategorier").addEventListener("mousedown", visFilter);

                visSingles();
                opretKnapper();
            }


            function opretKnapper() {
                console.log("opretKnapper virker");

                categories.forEach(cat => {
                    document.querySelector(".filtrering").innerHTML += `<button class="filter" data-single="${cat.id}">${cat.name}</button>`
                })

                addEventListenersToButtons();
            }


            function addEventListenersToButtons() {
                console.log("lytTilKnapper virker");

                document.querySelectorAll(".filtrering button").forEach(elm => {
                    elm.addEventListener("click", filtrering);
                })
            };

            //Viser kategorierne i en pop-up menu i mobilversion
            function visFilter() {
                document.querySelector(".filtrering").classList.toggle("filter_knapper");
            }

            function filtrering() {
                filterSingle = this.dataset.single;
                document.querySelector(".filtrering").classList.toggle("filter_knapper");

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

                //Sorter singles efter navn
                singles.sort(function(a, b) {
                    if (a.title.rendered < b.title.rendered) {
                        return -1;
                    }
                    if (a.title.rendered > b.title.rendered) {
                        return 1;
                    }
                    return 0;
                })

                // loop igennem json (single)
                singles.forEach(single => {

                    //if (filter == single.kategori || filter == "alle") {
                    if (filterSingle == "alle" || single.categories.includes(parseInt(filterSingle))) {

                        const klon = skabelon.cloneNode(true).content;
                        klon.querySelector(".billede").src = single.billede.guid;
                        klon.querySelector(".titel").innerHTML = single.title.rendered;
                        klon.querySelector(".pris").innerHTML = `${"Fra "}` + single.pris + `${" DKK"}`;
                        klon.querySelector(".lagertal").innerHTML = single.lagertal + `${" på lager"}`;

                        // eventlisteners på hver enkelt artikel
                        klon.querySelector(".single_kort").addEventListener("click", () => {
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
	//do_action( 'generate_after_primary_content_area' );

	//generate_construct_sidebars();

	get_footer();
