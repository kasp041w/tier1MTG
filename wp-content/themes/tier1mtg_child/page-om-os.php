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

        <style>
            h1 {
                margin: 0 0 5wv 0;
            }

            h3 {
                margin-bottom: 5px;
            }

            #omOs {
                max-width: 1200px;
                margin: 0 auto;
            }

            .col1 {
                margin-bottom: 6vw;
            }

            .ansatte {
                overflow: auto;
                white-space: nowrap;
                margin-bottom: 100px;
            }

            .ansat {
                display: inline-block;
                margin: 3vw;
            }

            /* Barens størrelse */
            .ansatte::-webkit-scrollbar {
                width: 10px;
            }

            /* Sporet den løber i */
            .ansatte::-webkit-scrollbar-track {
                box-shadow: 1px 0 5px grey;
                border-radius: 10px;
            }

            /* Farve på bar + kant */
            .ansatte::-webkit-scrollbar-thumb {
                background: #95BFE2;
                border-radius: 10px;
            }

            /*  hover */
            .ansatte::-webkit-scrollbar-thumb:hover {
                background: #CBBE23;
            }


            /*----------Desktop-------------*/
            @media (min-width: 900px) {
                .omOsTekstBoks {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    grid-gap: 5vw;
                }

            }

            /*----------Desktop-------------*/
            @media (min-width: 1200px) {
                .ansatte {
                    white-space: normal;
                }
            }

        </style>



        <section id="omOs"></section>

        <h1>Om os</h1>
        <div class="omOsTekstBoks">
            <div class="col1">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                <br>
                <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div class="col2">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                <br>
                <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>



        <div class="ansatte">

            <div class="ansat">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Group-943.png" alt="Dan">
                <h3>Dan Sønderskov</h3>
                <p>GRUNDLÆGGER / DIREKTØR</p>
            </div>

            <div class="ansat">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Group-944.png" alt="Allan">
                <h3>Allan Asmussen</h3>
                <p>GRUNDLÆGGER / SALG</p>
            </div>

            <div class="ansat">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Group-945.png" alt="Maria">
                <h3>Maria Sønderskov</h3>
                <p>FINANS / LOGISIK</p>
            </div>



        </div>


        <section id="kontaktOs"></section>

        <h2>KONTAKT OS</h2>
        <p>Har du spørgsmål vedrørende køb og salg af Magic the gathering Cards, er du velkommen til at skrive i formularen neden for. Du er også velkommen til at kontakte os, hvis du har andre spørgsmål.
            <br>Vi glæder os til at høre fra dig!
        </p>

        <div class="kontaktFormular"></div>

        <section id="serviceInfo">

            <div class="serviceInfo_1">
                <img src="" alt="">
                <h4>Hurtig levering</h4>
            </div>

            <div class="serviceInfo_2">
                <img src="" alt="">
                <h4>Hurtig levering</h4>
            </div>

            <div class="serviceInfo_3">
                <img src="" alt="">
                <h4>Hurtig levering</h4>
            </div>

            <div class="serviceInfo_4">
                <img src="" alt="">
                <h4>Hurtig levering</h4>
            </div>


        </section>



    </main>
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
