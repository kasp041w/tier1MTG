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

    .site-header {
        z-index: 5;
    }

    .separate-containers .site-main {
        margin: 0;
    }

    .page-header,
    .sidebar .widget,
    .site-main>* {
        margin: 0;
    }

    /*---GRIDVIEW MOBIL*/

    #single_oversigt {
        text-align: left;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(135px, 1fr));
        max-width: 100vw;
        grid-gap: 2rem;
        padding-right: 1.2rem;
        padding-left: 1.2rem;
        padding-bottom: 1.2rem;
        padding-top: 1.2rem;
    }

    #single_cat_overskrift {
        padding-right: 1.2rem;
        padding-left: 1.2rem;
        padding-top: 1.2rem;
    }

    #produktliste {
        max-width: 1200px;
        margin: 0 auto;
    }

    /*---SINGLE CARDS---*/

    img.billede {
        border-top-left-radius: 5%;
        border-top-right-radius: 5%;
        width: 100%;
        height: 55%;
        object-fit: contain;
    }

    .single_kort {
        background-color: #272727;
        border-top-left-radius: 5%;
        border-top-right-radius: 5%;
        position: relative;
    }

    .se_kort_knap {
        position: absolute;
        left: 5%;
        bottom: 3%;
    }

    .titel {
        padding-left: 5%;
        padding-right: 5%;
        padding-top: 5%;
        color: #F1F0E8;
        font-size: 1.5rem;
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
        font-size: 1rem;
        margin-bottom: 0;
    }

    /*---FILTRERINGSNAVIGATION---*/
    /*Knappernen */
    .knapper_dark_kategori {
        background-color: #AD9261;
        color: #272727;
        border-radius: 20px;
        padding: 12px 20px 12px 20px;
        font-weight: bold;
        font-family: 'Cormorant', serif;
        font-size: 0.83rem;
    }

    .knapper_dark_kategori:hover {
        background-color: #F1F0E8;
        color: #AD9261;
    }



    .knapper_dark_filter {
        background-color: #AD9261;
        color: #272727;
        border-radius: 20px;
        padding: 12px 20px 12px 20px;
        font-weight: bold;
        font-family: 'Cormorant', serif;
        font-size: 0.83rem;
    }

    .knapper_dark_filter:hover {
        background-color: #F1F0E8;
        color: #AD9261;
    }



    #nav-desk {
        display: none;
    }

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
        height: auto;
        margin: 0.1rem;
        display: inline-block;
    }

    .visSidebar_left {
        display: none;
    }

    .visSidebar_right {
        display: none;
    }

    .sidebar-display_left {
        position: absolute;
        height: 130%;
        width: 100vw;
        background-color: #272727;
        left: 0px;
        display: block;
        color: #F1F0E8;
        padding-left: 10vw;
        padding-right: 10vw;
        z-index: 30;
    }


    .sidebar-display_right {
        position: absolute;
        height: 130%;
        width: 100vw;
        background-color: #272727;
        left: 0px;
        display: block;
        color: #F1F0E8;
        padding-left: 10vw;
        padding-right: 10vw;
        z-index: 30;
    }

    .produkt_nav_h3 {
        display: none;
    }

    .luk-display {
        position: absolute;
        top: 0%;
        left: 82%;
    }

    .visSidebar h2 {
        color: #F1F0E8;
        text-transform: uppercase;
    }

    .visSidebar label {
        font-family: 'Assistant', sans-serif;
        color: #F1F0E8;
    }

    .opdeling {
        background-color: #F1F0E8;
        height: 0.1%;
        width: 80vw;
    }

    .search-knap {
        font-family: 'Cormorant', serif;
        color: #F1F0E8;
    }

    #nav-mobil {
        text-align: right;
        padding: 1rem;
        background-color: #272727;
        width: 100%;
    }

    #visFilter,
    #visKategorier {
        margin-bottom: 0.5rem;
    }

    /*---TABLET---*/

    @media screen and (max-width: 949px) and (min-width: 500px) {
        #single_oversigt {
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        }
    }

    /*---DESKTOP---*/

    @media (min-width: 950px) {
        #single_oversigt {
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        }

        img.billede {
            object-fit: cover;
            height: 76%;
        }

        .pris {
            font-size: 1rem;
        }

        .lagertal {
            font-size: 0.8rem;
        }

        .se_kort_knap {
            position: absolute;
            left: 54%;
            top: 84%;
            bottom: 0%;
            margin: 1rem;
        }


        /*FILTRERING: styling af filtrerings sektionen med grid i bremmen*/

        #nav-mobil {
            display: grid;
            grid-template-columns: 1fr 0.5fr 0.5fr;
            text-align: left
        }

        #visFilter {
            place-self: center start;
        }

        #visFilter_right {
            grid-column-start: 3;
            place-self: center end;
        }

        .produkt_nav_h3 {
            display: block;
            place-self: center end;
        }

        .produkt_nav_h3 h3 {
            padding: 12px 20px 12px 20px;
            font-weight: bold;
            font-family: 'Cormorant', serif;
            color: #F1F0E8;
            margin: 0;
            font-size: 0.83ram;
        }


        .knapper_dark_filter {
            background-color: #272727;
            color: #F1F0E8;
            border-radius: 20px;
            padding: 12px 20px 12px 20px;
            font-weight: bold;
            font-family: 'Cormorant', serif;
        }

        .knapper_dark_filter:hover {
            background-color: #272727;
            color: #AD9261;
        }

        .knapper_dark_katagori {
            font-size: 1.2rem;
        }

        /* FILTRERING DROPDOWN: styling af dropdown*/

        #visKategorier {
            display: none;
        }

        .filtrering {
            display: none;
        }

        .luk-display {
            left: 10%;
        }

        .sidebar-display_left {
            width: 50%;
            padding-right: 0;
            margin-top: 90px;

        }

        .sidebar-display_right {
            width: 50%;
            padding-right: 0;
            margin-top: 90px;

        }



        .opdeling {
            width: 30vw;
        }


        #nav-desk {
            display: block;
            background-color: #272727;
            width: 100%;
        }

        .filtrering-desk {
            width: 100vw;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }



        /*IDAS FORSØG PÅ AT LAVE FILTERINGS KNAPPERNE*/
        .filter {
            width: 98%;
        }

        .filtrering-desk {
            width: 98%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            margin: 0 auto;
            max-width: 1200px;
        }

    }

</style>

<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
    <main id="main" <?php generate_do_element_classes( 'main' ); ?>>

        <section id="nav-desk">
            <nav class="filtrering-desk">
                <button class="filter_knapper knapper_light" data-single="alle">Alle</button>
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
                <button class="filter_knapper knapper_light" data-single="alle">Alle</button>
            </nav>
        </section>


        <section id="produkt_filter_bremme">
            <div class="produkt_filter_container">
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
                    <input class="search-knap" type="submit" value="Søg">
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



        <!--
        <section class="visSidebar">
            <div class="t">

                <button id="luk-knap" class="luk-display knapper_dark">×
                </button>

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
                <input class="search-knap" type="submit" value="Søg">
                <br>
            </div>
        </section>
-->

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
            <h3 class="titel"></h3>
            <p class="pris"></p>
            <p class="lagertal"></p>
            <br>
            <button class="se_kort_knap knapper_dark">Se kort</button>
            <br>
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
            //            document.querySelector("#luk-knap").addEventListener("mousedown", visFilter);

            visSingles();
            opretKnapper();
        }


        function opretKnapper() {
            console.log("opretKnapper virker");

            categories.forEach(cat => {
                document.querySelector(".filtrering").innerHTML += `<button class="filter knapper_light" data-single="${cat.id}">${cat.name}</button>`
                document.querySelector(".filtrering-desk").innerHTML += `<button class="filter knapper_light" data-single="${cat.id}">${cat.name}</button>`
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
