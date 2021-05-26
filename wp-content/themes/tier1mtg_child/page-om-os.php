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
            border-right:;

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

            <div class="ansat1">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Group-943-e1622033319413.png" alt="Dan">
                <h3>Dan Sønderskov</h3>
                <p>GRUNDLÆGGER / DIREKTØR</p>
            </div>

            <div class="ansat2">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Group-944.png" alt="Allan">
                <h3>Allan Asmussen</h3>
                <p>GRUNDLÆGGER / SALG</p>
            </div>

            <div class="ansat3">
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
