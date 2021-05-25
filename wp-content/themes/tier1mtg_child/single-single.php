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

    <div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
        <main id="main" <?php generate_do_element_classes( 'main' ); ?>>

            <!-- single-view Singlekort -->
            <article>
                <img src="" alt="" class="billede">
                <h3 class="titel"></h3>
                <p class="pris"></p>
                <p class="lagertal"></p>
                <p class="beskrivelse"></p>
            </article>
        </main>

        <script>
            let single;

            //Henter den podcasts der klikkes på
            let aktuelSingle = <?php echo get_the_ID() ?>;


            //Konstanten sættes til at lede efter Single-kortet der klikkes på
            const dbUrl = "http://kasperdyhl.dk/tier1mtg/wp-json/wp/v2/single/" + aktuelSingle;


            async function getJson() {
                console.log("async function bliver kaldt")

                const data = await fetch(dbUrl);
                single = await data.json();

                visSingles();
            }


            //Henter information fra json, og sætter dem ind i podcast-sektion
            function visSingles() {
                console.log("visSingles bliver kaldt", single);

                document.querySelector(".billede").src = single.billede.guid;
                document.querySelector(".titel").innerHTML = single.title.rendered;
                document.querySelector(".pris").innerHTML = single.pris;
                document.querySelector(".lagertal").innerHTML = single.lagertal + `${" på lager"}`;
                document.querySelector(".beskrivelse").innerHTML = single.beskrivelse;
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
