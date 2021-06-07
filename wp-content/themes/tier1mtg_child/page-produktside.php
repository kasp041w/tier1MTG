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

        <section id="nav-desk">
            <nav class="filtrering-desk">
                <button class="filter_knapper katagori_knapper_produkt" data-single="alle">Alle</button>
            </nav>

        </section>

        <section id="nav-mobil">
            <button id="visKategorier" class="knapper_dark_kategori">KATEGORI ☰</button>
            <button id="visFilter" class="knapper_dark_filter">FILTER ⇆</button>
            <div class="produkt_nav_h3">
                <h3>PRODUKTER: 24</h3>
            </div>
            <button id="visFilter_right" class="knapper_dark_filter">SORTER EFTER ⋎</button>
            <nav class="filtrering">
                <button class="filter_knapper katagori_knapper_produkt" data-single="alle">Alle</button>
            </nav>
        </section>


        <section id="produkt_filter_bremme">
            <div class="produkt_filter_container">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/filter_kolonne.png" alt="">
                <div class="left visSidebar_left">
                    <h2>Farveidentiet</h2>
                    <input type="checkbox">
                    <label>Rød
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Grøn
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Blå
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Sort
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Hvid
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Colorless
                    </label>
                    <br>
                    <div class="opdeling"></div>
                    <br>
                    <h2>Korttype</h2>
                    <input type="checkbox">
                    <label>Creature
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Instant
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Sorcery
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Artifact
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Land
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Planeswalker
                    </label>
                    <br>
                    <div class="opdeling"></div>
                    <br>
                    <h2>Ekstra</h2>
                    <input type="checkbox">
                    <label>Foil
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Signed
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Altered
                    </label>
                    <br>
                    <div class="opdeling"></div>
                    <br>
                    <input type="submit" value="SLET FILTREINGE">
                    <input type="submit" value="VIS RESULTATER">
                    <br>
                </div>

                <div class="right visSidebar_right">
                    <h2>Sortér efter</h2>
                    <input type="checkbox">
                    <label>Nyeste
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Navn A-Z
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Navn Z-A
                    </label>
                    <br>
                    <div class="opdeling"></div>
                    <br>
                    <h2>Pris</h2>
                    <input type="checkbox">
                    <label>Fra lavest til højst
                    </label>
                    <br>
                    <input type="checkbox">
                    <label>Fra højst til lavest
                    </label>
                    <br>
                    <div class="opdeling"></div>
                    <br>
                </div>
            </div>
        </section>


        <div id="produktliste">
            <section id="single_cat_overskrift">
                <h1>Alle</h1>
            </section>

            <section id="single_oversigt"></section>
        </div>

    </main>

    <!-- Visning af Single-kort -->
    <template>
        <article class="single_kort">
            <img src="" alt="" class="billede">
            <div class="produkt_text_baggrund">
                <h3 class="titel"></h3>
                <p class="lagertal"></p>
                <p class="pris"></p>
                <br>
                <button class="se_kort_knap knapper_dark">SE KORT</button>
                <br>
            </div>

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
            document.querySelector("#visKategorier").addEventListener("mousedown", visKategorier);
            document.querySelector("#visFilter").addEventListener("mousedown", visFilter);
            document.querySelector("#visFilter_right").addEventListener("mousedown", visFilter_right);

            visSingles();
            opretKnapper();
        }


        function opretKnapper() {
            console.log("opretKnapper virker");

            categories.forEach(cat => {
                document.querySelector(".filtrering").innerHTML += `<button class="filter katagori_knapper_produkt" data-single="${cat.id}">${cat.name}</button>`
                document.querySelector(".filtrering-desk").innerHTML += `<button class="filter katagori_knapper_produkt" data-single="${cat.id}">${cat.name}</button>`
            })

            addEventListenersToButtons();
        }


        function addEventListenersToButtons() {
            console.log("lytTilKnapper virker");

            document.querySelectorAll(".filtrering button").forEach(elm => {
                elm.addEventListener("click", filtrering);
            })
            document.querySelectorAll(".filtrering-desk button").forEach(elm => {
                elm.addEventListener("click", filtrering);
            })
        };

        //Viser kategorierne i en pop-up menu i mobilversion
        function visKategorier() {
            document.querySelector(".filtrering").classList.toggle("filter_knapper");
        }

        //Viser filterne i en pop-up menu i mobilversion
        function visFilter() {
            document.querySelector(".visSidebar_left").classList.toggle("sidebar-display_left");

        }

        function visFilter_right() {
            document.querySelector(".visSidebar_right").classList.toggle("sidebar-display_right");
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
