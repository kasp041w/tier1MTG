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
        background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/events_splach-1.png);
        background-size: cover;
        max-width: none;
        height: 45vh;
        width: 100%;
        background-position: 50%;
        margin-top: -9px;
    }

    #event_anden_sektion .top {
        margin: 8vw auto;
    }

    /*ANDEN SEKTION*/
    /* grid og siden styling*/

    #event_anden_sektion .event_anden_sektion_container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        max-width: 100vw;
        grid-gap: 1.5rem;
    }

    #event_anden_sektion,
    #event_fjerde_sektion,
    .event_trejde_container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 5%;
        text-align: center;
    }

    /*Knapper, img og fonte*/
    /* .event_mere_knap {
 position: absolute;
 left: 68%;
 bottom: 5%;
 z-index: 40;
 font-size: 10px;
 padding: 6px 10px 6px 10px;
 }*/

    #event_anden_sektion .top {
        text-align: center;
    }

    .h2_event {
        color: #F1F0E8;
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 0;
    }

    .p_event {
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
        padding: 12px;
        height: 37%;
        transition: .5s ease;
        overflow: hidden;
        text-align: left;
    }

    .event_indhold:hover .event_anden_text_felt {
        height: 100%;
        border-top-left-radius: 5%;
        border-top-right-radius: 5%;
    }

    /*TREJDE SEKTION*/

    #event_trejde_sektion {
        background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/bjerg_baggrund.png);
        background-size: cover;
        max-width: none;
        height: 100vh;
        width: 100%;
        display: grid;
        margin-top: 90px;
    }

    .event_trejde_container {
        place-self: center center;
        text-align: center;
        color: white;
        margin: 3wv;
    }

    .event_trejde_container h1,
    .event_trejde_container p {
        color: white;
    }

    .event_trejde_container iframe {
        width: 100%;
        margin: 1wv
    }

    /*FJERDE SEKTION*/

    .event_sociale_medier {
        text-align: center;
        margin: 50px auto 150px auto;
        gap: 5vw;
        display: flex;
        justify-content: center;
    }

    @media (min-width: 950px) {

        #event_anden_sektion,
        #event_fjerde_sektion,
        .event_trejde_container {
            padding: 0%;
        }

        /*FØRTE SEKTION*/
        #event_firste_sektion .event_splach {
            height: 90vh;
            margin-top: -70px;
        }

        /* ANDEN SEKTION EVENT*/
        .event_anden_sektion_container {
            margin-top: -70px;
        }

        #event_anden_sektion .top {
            max-width: 60vw;
        }


        /*TREJDE SEKTION LIVE STREAMING*/
        .event_trejde_container {
            margin-top: -120px;
        }

        /*Knapper*/
        .event_mere_knap {
            left: 68%;
            font-size: 12px;
            padding: 8px 15px 8px 15px;
        }

        #event_trejde_sektion {
            height: 130vh;
        }
    }

</style>



<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
    <main id="main" <?php generate_do_element_classes( 'main' ); ?>>

        <section id="event_firste_sektion">
            <div class="event_splach"></div>
        </section>

        <section id="event_anden_sektion">
            <div class="top">
                <h1>VORES EVENTS </h1>
                <p>Vi er både en fysisk og online butik, men vores helt store drivkraft er at skabe små og store events, hvor alle interesserede kan dyrke Magic The Gathering. Derfor holder vi hver mandag, onsdag og fredag turneringer i vores butik i Vipperød - og du er meget velkommen! Sommetider holder vi også større arrangementer i butikken, hvor vi fx inviterer til heldags Old School-turnering. Og så er der de helt store events, som vi afholder flere gange om året i København. Her kommer spillere fra hele verden, og det er en stor oplevelse at fordybe sig i Magic The Gathering en hel weekend. Du kan se alle vores kommende events herunder.</p>
            </div>
            <div class="event_anden_sektion_container">
                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/ikon_cards_ps-scaled.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_event">Old School Game</h2>
                        <p class="p_event">Dato: 23-06-2021</p>
                        <p class="p_event">Format: Old School</p>
                        <p class="p_event">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>Tilmelding starter den 8. juni.
                        </p>
                    </div>
                </div>

                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/butik_ps-scaled.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_event">Commander Game</h2>
                        <p class="p_event">Dato: 14-07-2021</p>
                        <p class="p_event">Format: Commander</p>
                        <p class="p_event">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>Tilmelding starter den 1. juli.
                        </p>
                    </div>
                </div>

                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/kort_ps.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_event">Tier1 Gonzo</h2>
                        <p class="p_event">Dato: 03-08-2021</p>
                        <p class="p_event">Format: Commander</p>
                        <p class="p_event">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>Tilmelding starter den 18. juli.
                        </p>
                    </div>
                </div>
                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/talking_people_ps-scaled.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_event">Lotus Game</h2>
                        <p class="p_event">Dato: 10-08-2021</p>
                        <p class="p_event">Format: Old School</p>
                        <p class="p_event">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>Tilmelding starter den 25. juli.
                        </p>
                    </div>
                </div>
                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/boys_ps-scaled.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_event">Flip the Coin Rave</h2>
                        <p class="p_event">Dato: 20-08-2021</p>
                        <p class="p_event">Format: Standard</p>
                        <p class="p_event">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>Tilmelding starter den 5. august.
                        </p>
                    </div>
                </div>
                <div class="event_indhold">
                    <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/forsamling_ps.jpg" alt="Tier1MTG event">
                    <button class="event_mere_knap knapper_dark">LÆS MERE</button>
                    <div class="event_anden_text_felt">
                        <h2 class="h2_event">Old Boys Tier1</h2>
                        <p class="p_event">Dato: 01-09-2021</p>
                        <p class="p_event">Format: Old School</p>
                        <p class="p_event">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.<br><br>Tilmelding starter den 15. august.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="event_trejde_sektion">
            <div class="event_trejde_baggrund"></div>
            <div class="event_trejde_container">
                <h1>LIVE STREAMING</h1>
                <p>Kan du ikke komme til et event, kan du livestreame det på Twitch eller se det efterfølgende på vores Youtube-kanal.</p>
                <iframe width="420" height="315" src="https://www.youtube.com/embed/k70dmf3kQYU">
                </iframe>
            </div>
        </section>

        <section id="event_fjerde_sektion">
            <h1>FØLG MED PÅ ANDRE KANALER</h1>
            <div class="event_sociale_medier">
                <a href="https://www.twitch.tv/tier1mtg"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/twitch_knap.png" alt="link til twitch"></a>
                <a href="https://www.youtube.com/channel/UCV8RZ4Kg3vg51M86UTQlE1Q"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/youtube_knap.png" alt="link til youtube"></a>
                <a href="https://www.facebook.com/Tier1MTG"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/facebook_knap.png" alt="link til facebook"></a>
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
