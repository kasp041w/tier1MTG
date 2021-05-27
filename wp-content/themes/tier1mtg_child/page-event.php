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
    /*FØRTE SEKTION*/
    #event_firste_sektion .event_splach {
        background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/events_splach-e1622017884631.png);
        background-size: cover;
        max-width: none;
        height: 100vh;
        width: 100%;
    }


    /*ANDEN SEKTION*/
    /* grid og siden styling*/
    #event_anden_sektion .event_anden_sektion_container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        max-width: 100vw;
        grid-gap: 1rem;
    }

    #event_anden_sektion {
        max-width: 1200px;
        margin: 0 auto;
    }

    /*Knapper, img og fonte*/
    .event_mere_knap {
        position: absolute;
        left: 58%;
        bottom: 5%;
        z-index: 40;
    }


    .h2_acc {
        color: #F1F0E8;
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 0;
    }

    .h3_acc {
        color: #AD9261;
        font-size: 1rem;
        margin-bottom: 0;
    }

    .event_anden_sektion_container img {
        border-top-left-radius: 5%;
        border-top-right-radius: 5%;
        width: 100%;
    }

    /*Hover effekts*/


    .event_indhold {
        position: relative;
    }

    .event_anden_text_felt {
        position: absolute;
        bottom: 0;
        background-color: rgba(39, 39, 39, 0.96);
        width: 100%;
        padding: 20px;
        height: 30%;
        transition: .5s ease;
        overflow: hidden;
    }

    .event_indhold:hover .event_anden_text_felt {
        height: 100%;
        border-top-left-radius: 5%;
        border-top-right-radius: 5%;
    }






    @media (min-width: 950px) {}

</style>



<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
    <main id="main" <?php generate_do_element_classes( 'main' ); ?>>

        <section id="event_firste_sektion">
            <div class="event_splach"></div>
        </section>

        <section id="event_anden_sektion">
            <div class="top">
                <h1>Vores events</h1>
                <p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
            </div>
            <div class="event_anden_sektion_container">
                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/jeweled-bird.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </div>
                </div>

                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/jeweled-bird.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </div>
                </div>

                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/jeweled-bird.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </div>
                </div>
                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/jeweled-bird.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </div>
                </div>
                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/jeweled-bird.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </div>
                </div>
                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/jeweled-bird.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_acc">Old School Game</h2>
                        <h3 class="h3_acc">Dato: 23-06-2021</h3>
                        <h3 class="h3_acc">Format: Commander</h3>
                        <h3 class="h3_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>TIlmelding starter den 8. juli.
                        </h3>
                    </div>
                </div>

            </div>
        </section>
        <section id="event_trejde_sektion"></section>
        <section id="event_fjerde_sektion"></section>








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
