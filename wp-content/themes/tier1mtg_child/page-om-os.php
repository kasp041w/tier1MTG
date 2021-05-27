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
            #omOs h2 {
                margin: 0 0 5wv 0;
            }

            .ansatte h3 {
                margin-bottom: 5px;
            }


            #omOs {
                max-width: 1200px;
                margin: 8vw auto;
                padding: 0 3vw;
            }

            .omOsCol1 {
                margin-bottom: 6vw;
            }

            .ansatte {
                display: flex;
                overflow-x: scroll;
                scroll-snap-type: x mandatory;

            }

            .ansat {
                margin: 3vw;
                text-align: center;
                scroll-snap-align: center;
                flex-shrink: 0;
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

            #kontaktOs {
                background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/kontakt_baggrund.png);
                background-size: cover;
                height: 100vh;
                width: 100%;
                height: auto;
                max-height: 112vh;
                text-align: center;
                padding-top: 130px;
                padding-bottom: 110px;
            }

            #kontaktOs p {
                color: #AD9261;
                max-width: 500px;
                margin: 10px auto;
            }

            #kontaktOs h1 {
                color: white;
                margin-top: 150px;
                max-width: 500px;
                margin: 0 auto;
            }

            textarea {
                margin: 10px auto 10px auto;
                width: 75vw;
            }

            input {
                margin: 10px auto 10px auto;
                width: 75vw;
            }

            .kontaktFormular {
                max-width: 700px;
                text-align: center;
                margin: 0 auto;
            }

            #serviceInfo {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 3vw;
            }

            #serviceInfo {
                display: grid;
                grid-template-columns: 1fr 1fr;
                max-width: 100vw;
                grid-gap: 2rem;
                text-align: center;
                margin: 10vw auto 12vw auto;
            }

            .serviceInfo_billed {
                width: 100px;
                margin: 0 auto;
            }

            /*----------Desktop-------------*/
            @media (min-width: 900px) {
                .omOsTekstBoks {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    grid-gap: 5vw;
                }

                #serviceInfo {
                    grid-template-columns: 1fr 1fr 1fr 1fr;
                }

                .serviceInfo_billed {
                    width: 150px;
                }

            }

            /*----------Desktop-------------*/
            @media (min-width: 1200px) {
                .ansatte {
                    white-space: normal;
                }
            }

        </style>



        <section id="omOs">

            <h2>Om os</h2>
            <div class="omOsTekstBoks">
                <div class="omOsCol1">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    <br>
                    <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="omOsCol2">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
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

        </section>


        <section id="kontaktOs">


            <h1>KONTAKT OS</h1>
            <p>Har du spørgsmål vedrørende køb og salg af Magic the gathering Cards, er du velkommen til at skrive i formularen neden for. Du er også velkommen til at kontakte os, hvis du har andre spørgsmål.
                <br>
                <br>Vi glæder os til at høre fra dig!
            </p>


            <div class="kontaktFormular">

                <!-- Fornavn -->
                <div class="form-felt">
                    <label for="">
                        <input type="text" placeholder="Fornavn" name="fornavn">
                    </label>
                </div>

                <!-- Efternavn -->
                <div class="form-felt">
                    <label for="">
                        <input type="text" placeholder="Efternavn" name="efternavn">
                    </label>
                </div>

                <!-- Mailadressee -->
                <div class="form-felt">
                    <label for="">
                        <input type="text" placeholder="Mailadresse" name="mailadresse">
                    </label>
                </div>

                <!-- Skrive felt -->
                <div class="form-felt-skrivHer">
                    <label for="">
                        <textarea name="skrivHer" placeholder="Skriv hér" id="" cols="1" rows="6"></textarea>
                    </label>
                </div>
                <button class="formKnap">Send</button>

            </div>
        </section>



        <section id="serviceInfo">

            <div class="serviceInfo_billed">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Levering.png" alt="Levering logo">
                <h4>Hurtig levering</h4>
            </div>

            <div class="serviceInfo_billed">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Mail.png" alt="Mail Logo">
                <h4>Hurtig levering</h4>
            </div>

            <div class="serviceInfo_billed">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Betaling.png" alt="Betaling logo">
                <h4>Hurtig levering</h4>
            </div>

            <div class="serviceInfo_billed">
                <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Tier1.png" alt="Tier1 cardmarket">
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
