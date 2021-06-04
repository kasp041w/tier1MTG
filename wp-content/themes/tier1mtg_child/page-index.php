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
        .knapper_dark a {
            font-weight: bold;
            font-family: 'Cormorant', serif;
        }
        /*Sektionernes margin og max-width*/

        #forside_first_section,
        #forside_trejde_sektion,
        #forside_fjerde_sektion,
        #forside_femte_sektion {
            max-width: 1200px;
            margin: 50px auto;
            padding: 5%;
        }
        /*FORSIDE SPLASH*/

        .forside_splach_container {
            width: 100vw;
            height: 80vh;
        }

        .forside_video {
            width: 100vw;
            height: 80vh;
            object-fit: cover;
            background-color: #272727;
        }

        .forside_kant_bjerg {
            height: 11vh;
            width: 100vw;
        }

        #forside_splach {
            margin-bottom: 0;
        }

        .forside_splash_knap {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            position: absolute;
            width: 100vw;
            bottom: 15%;
        }

        .forside_center_knap {
            grid-column-start: 2;
            grid-column-end: span 1;
            margin: 0 auto;
        }

        #forside_ikoner_wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .forside_ikoner_container {
            margin: 0 auto;
            text-align: center;
            width: 100px;
        }

        .forside_leverings_ikon,
        .forside_events_ikon {
            display: none;
        }
        /*FØRSTE SEKTION: nyeste kort*/
        /*styling af singel kortene på forsiden*/

        .titel_alternativ,
        .h2_acc {
            color: #F1F0E8;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0;
        }

        .pris_alternativ,
        .p_acc {
            color: #AD9261;
            font-size: 1rem;
            margin-bottom: 0;
        }

        .se_kort_knap {
            position: absolute;
            left: 58%;
            bottom: 5%;
            z-index: 40;
        }

        .billede_forside {
            border-top-left-radius: 5%;
            border-top-right-radius: 5%;
            width: 100%;
            background-size: contain;
        }
        /*Styling af hovereffekten på kort og produkter så den sorte bremme forsvinder med mus over bilelde*/
        /*Styler højden på billeder i mobil*/

        .forside_single_kob {
            position: relative;
            height: 57vh;
        }

        .baggrund_kort {
            position: absolute;
            bottom: 0;
            background-color: rgba(39, 39, 39, 0.96);
            width: 100%;
            padding: 20px;
            height: 30%;
            transition: .5s ease;
            overflow: hidden;
            margin-bottom: -6%;
        }

        article:hover .baggrund_kort {
            height: 0%;
            padding: 0px 20px 0px 20px;
        }
        /*billede baggrunden på kortet*/

        .billed_placering {
            background-color: #272727;
            height: 100%;
            border-top-left-radius: 5%;
            border-top-right-radius: 5%;
        }
        /*Slider opsætning, fungere både på mobil og destiop*/

        .forside_figure_ny {
            cursor: pointer;
        }

        .forside_image-container {
            overflow-x: auto;
            overflow-y: hidden;
            scroll-snap-type: x mandatory;
            display: flex;
            gap: 20px;
            padding: 0px 27px 0px 0px;
        }

        .forside_image-container .forside_figure_ny {
            flex-basis: 90%;
            flex-shrink: 0;
            scroll-snap-align: center;
        }
        /*ANDEN SEKTION: bliv en del af universet*/

        #forside_anden_sektion {
            background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/del_af_universet-_kanter-1.png);
            background-size: cover;
            max-width: none;
            width: 100%;
            margin: 80px 0 90px 0;
        }

        .forside_anden_sektion_knap {
            background-color: #AD9261;
            color: #F1F0E8;
            border-radius: 28px;
            padding: 12px 20px 12px 20px;
            font-weight: bold;
            z-index: 40;
            margin-top: 35px;
            width: 126px;
        }

        .forside_anden_sektion_tekst h1 {
            text-align: center;
        }

        .forside_anden_sektion_styl {
            color: #F1F0E8;
            text-align: left;
        }

        .forside_anden_sektion_styl h1 {
            text-align: center;
        }

        .forside_anden_sektion_tekst {
            display: grid;
            padding: 20vw 5% 20vw 5%;
        }
        /*TREJDE SKETION: styling af trejde sektion*/
        /*Styling af hovereffekten på kort så den sorte bremme forsvinder med mus over bilelde*/

        .forside_image-container figure {
            position: relative;
        }

        .trejde_sektion_figcuption {
            position: absolute;
            bottom: 0;
            background-color: rgba(39, 39, 39, 0.96);
            width: 100%;
            padding: 20px;
            height: 40%;
            transition: .5s ease;
            overflow: hidden;
        }

        .forside_figure_ny img {
            background-size: cover;
            width: 100%;
        }

        .forside_figure_ny:hover .trejde_sektion_figcuption {
            height: 0%;
            padding: 0px 20px 0px 20px;
        }

        .trejde_sektion_knap {
            position: absolute;
            left: 52%;
            bottom: 3%;
            z-index: 40;
        }
        /*FJERDE SEKTION: styling af fjerde sektion*/

        #forside_fjerde_sektion img {
            border-top-left-radius: 5%;
            border-top-right-radius: 5%;
            width: 100%;
        }

        .fjerde_sektion_figcuption {
            position: absolute;
            bottom: 0;
            background-color: rgba(39, 39, 39, 0.96);
            width: 100%;
            padding: 20px;
            height: 37%;
            transition: .5s ease;
            overflow: hidden;
        }

        .forside_figure_event:hover .fjerde_sektion_figcuption {
            height: 100%;
            border-top-left-radius: 5%;
            border-top-right-radius: 5%;
        }

        .forside_figure_event {
            flex-basis: 100%;
            flex-shrink: 0;
            scroll-snap-align: center;
            max-width: 385px;
            margin: 0 auto;
        }
        /*FEMTE SEKTION: styling af femte sektion*/

        #forside_femte_sektion {
            position: relative;
            background-image: url(http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/forside-om_os1.png);
            background-size: cover;
            max-width: none;
            width: 100%;
            padding-top: 60px;
            padding-bottom: 50px;
        }

        #forside_femte_sektion .bottom img {
            width: 6rem;
            margin: 1rem;
        }

        .forside_femte_sektion .bottom {
            margin-top: 75px;
            text-align: center;
        }

        .forside_femte_sektion .left,
        .forside_femte_sektion .rigtht {
            margin-top: 10%;
        }

        .forside_femte_sektion_knap {
            z-index: 40;
        }
        /*SJETTE SEKTION*/

        .forside_sjette_sektion_grid {
            position: relative;
        }

        .forside_sjette_sektion_grid .left {
            text-align: left;
            padding: 5%;
        }
        /*----- så blomsten i bunden går i ét med footer-----*/

        section .forside_sjette_sektion_grid {
            margin-bottom: -6px;
        }

        .forside_sjette_sektion_grid .right {
            text-align: right;
        }

        .forside_sjette_sektion_knap:hover {
            background-color: #272727;
            color: #AD9261;
        }
        /*desktop*/

        @media (min-width: 950px) {
            /*Sektionernes margin og max-width*/
            #forside_first_section,
            #forside_trejde_sektion,
            #forside_fjerde_sektion,
            .forside_femte_sektion {
                padding: 0%;
            }
            /*OVERSKRIFTERNE TIL HVER SEKTION*/
            #forside_first_section h1,
            #forside_trejde_sektion h1,
            #forside_fjerde_sektion h1 {
                margin-bottom: 0;
            }
            /*VIDEO SPLASH*/
            /*FØRSTE SEKTION OG KORT*/
            .til_kort_side_nav {
                text-align: end;
            }
            .baggrund_kort {
                height: 25%;
                margin-bottom: 0;
            }
            .se_kort_knap {
                position: absolute;
                left: 67%;
                bottom: 3%;
                z-index: 40;
            }
            .forside_image-container .forside_figure_ny {
                flex-basis: 27%;
            }
            .forside_image-container {
                padding: 0px;
            }
            .forside_splash_knap {
                bottom: 8%;
            }
            .forside_kant_bjerg {
                margin: 0;
            }
            #forside_ikoner_wrapper {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                margin-left: 17%;
                margin-right: 17%;
            }
            .forside_ikoner_container {
                margin: 0 auto;
                text-align: center;
                width: 40px;
            }
            .forside_leverings_ikon,
            .forside_events_ikon,
            .forside_ikoner_container {
                display: block;
                width: 100px;
            }
            /*ANDEN SEKTION*/
            #forside_anden_sektion {}
            #forside_anden_sektion .universTekst {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 3vw;
            }
            .forside_anden_sektion_tekst {
                padding: 90px 20px;
                margin: 0 auto;
                max-width: 1000px;
            }
            .trejde_sektion_knap {
                left: 58%;
            }
            /*FJERDE SEKTION ASS*/
            #forside_fjerde_sektion {
                margin: 120px auto;
            }
            /*FEMTE SEKTIONstyling af femte sektion*/
            #forside_femte_sektion {}
            .forside_femte_sektion {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-auto-rows: 1fr 0.35fr;
                grid-column-gap: 40px;
            }
            .forside_femte_sektion .left {
                grid-column-start: 1;
                grid-column-end: span 1;
                grid-row-start: 1;
                grid-row-end: span 1;
            }
            .forside_femte_sektion .rigtht {
                grid-column-start: 2;
                grid-column-end: span 1;
                grid-row-start: 1;
                grid-row-end: span 1;
                padding-top: 7%;
            }
            .forside_femte_sektion .left {
                padding-top: 5%;
            }
            .forside_femte_sektion .bottom {
                grid-column-start: 1;
                grid-column-end: span 2;
                grid-row-start: 2;
                grid-row-end: span 1;
                place-self: center;
                margin: 0%;
            }
            /*SJETTE SEKTION*/
            .forside_sjette_sektion_grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
            .forside_sjette_sektion_grid .left {
                place-self: center;
                margin-left: 15%;
                padding: 0%;
            }
        }

    </style>


    <div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
        <main id="main" <?php generate_do_element_classes( 'main' ); ?>>


            <section id="forside_splach">
                <div class="forside_splach_container">
                    <video class="forside_video" autoplay muted loop>
                        <source src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/splash_light.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="forside_splash_knap">
                    <button class="knapper_dark forside_center_knap"><a href="http://kasperdyhl.dk/tier1mtg/produktside/">SE UDVALG</a></button>
                </div>
            </section>

            <section id="forside_kant_bjerg">
                <img class="forside_kant_bjerg" src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/kant_under-1.png" alt="">
            </section>

            <section>
                <div id="forside_ikoner_wrapper">
                    <div class="forside_ikoner_container forside_leverings_ikon">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Levering-e1622195990716.png" alt="Betalings-logo">
                        <h3>Hurtig levering</h3>
                    </div>
                    <div class="forside_ikoner_container">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Betaling-e1622196037728.png" alt="Betalings-logo">
                        <h3>Køb &amp; Salg af Magic the Gathering</h3>
                    </div>
                    <div class="forside_ikoner_container">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/kalender.png" alt="Betalings-logo">
                        <h3>Arrangør af MTG <br> events</h3>
                    </div>
                    <div class="forside_ikoner_container forside_events_ikon">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Mail-e1622196016123.png" alt="Betalings-logo">
                        <h3>God kundeservice</h3>
                    </div>

                </div>
            </section>

            <section id="forside_first_section">
                <h1>NYESTE SINGLES</h1>
                <a href="http://kasperdyhl.dk/tier1mtg/produktside/">
                    <h3 class="til_kort_side_nav">Se alle MTG-Singles →</h3>
                </a>
                <div class="forside_image-container">
                    <figure class="forside_figure_ny">
                        <div class="new_single_kort"></div>
                    </figure>

                    <figure class="forside_figure_ny">
                        <div class="new_single_kort1"></div>
                    </figure>

                    <figure class="forside_figure_ny">
                        <div class="new_single_kort2"></div>
                    </figure>

                    <figure class="forside_figure_ny">
                        <div class="new_single_kort3"></div>
                    </figure>
                    <figure class="forside_figure_ny">
                        <div class="new_single_kort4"></div>
                    </figure>
                </div>
            </section>

            <section id="forside_anden_sektion">
                <div class="forside_anden_sektion_tekst">
                    <h1 class="forside_anden_sektion_styl">BLIV EN DEL AF UNIVERSET</h1>
                    <div class="universTekst">
                        <p class="forside_anden_sektion_styl">Magic The Gathering er verdens bedste spil i vores øjne, og du er meget velkommen til at blive en del af vores univers i Tier1MTG. Vi har selv spillet Magic The Gathering siden 1990’erne, og vi har derfor en kæmpe kærlighed til spillet og en stor viden omkring spillet, formater, miljøet og køb og salg af kort. Vi brænder for Magic-fællesskabet og laver derfor både lokale events i vores butik og store turneringer i København.
                        </p>
                        <p class="forside_anden_sektion_styl"> Vores events er for alle, og vi håber på at se dig til dem! Vil du vide mere om de forskellige formater inden for Magic The Gathering, kan du tjekke “Spilformater” i menuen. Her kan du dykke ned i vores Youtube-videoer og artikler og blive en del af Tier1MTG fællesskabet.
                            <br>
                        </p>
                    </div>
                    <button class="forside_anden_sektion_knap knapper_dark"><a href="http://kasperdyhl.dk/tier1mtg/commander/">LÆS MERE</a></button>
                </div>
            </section>

            <section id="forside_trejde_sektion">
                <h1>NYESTE ACCESSORIES</h1>
                <h3 class="til_kort_side_nav">Se alle accessories →</h3>
                <div class="forside_image-container">
                    <figure class="forside_figure_ny">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/box.jpeg" alt="Ultra Pro – Satin Tower Deck">
                        <button class="trejde_sektion_knap knapper_dark">SE PRODUKT</button>
                        <figcaption class="trejde_sektion_figcuption">
                            <h2 class="h2_acc">Ultra Pro – Satin Tower Deck</h2>
                            <p class="p_acc">99,95 DKK</p>
                        </figcaption>
                    </figure>

                    <figure class="forside_figure_ny">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/tube.jpeg" alt="Ultra Pro - Boombox">
                        <button class="trejde_sektion_knap knapper_dark">SE PRODUKT</button>
                        <figcaption class="trejde_sektion_figcuption">
                            <h2 class="h2_acc">Ultra Pro - Boombox</h2>
                            <p class="p_acc">324,95 DKK</p>
                        </figcaption>
                    </figure>

                    <figure class="forside_figure_ny">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/kort_ting.jpeg" alt="Secret Lair – Ultimate Edition">
                        <button class="trejde_sektion_knap knapper_dark">SE PRODUKT</button>
                        <figcaption class="trejde_sektion_figcuption">
                            <h2 class="h2_acc">Secret Lair – Ultimate Edition</h2>
                            <p class="p_acc">699,95 DKK</p>
                        </figcaption>
                    </figure>

                    <figure class="forside_figure_ny">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/skab_acc.jpeg" alt="Gamegenic - Playmat Tube">
                        <button class="trejde_sektion_knap knapper_dark">SE PRODUKT</button>
                        <figcaption class="trejde_sektion_figcuption">
                            <h2 class="h2_acc">Gamegenic - Playmat Tube</h2>
                            <p class="p_acc">49,95 DKK</p>
                        </figcaption>
                    </figure>

                    <figure class="forside_figure_ny">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/tube.jpeg" alt="Ultra Pro - Boombox">
                        <button class="trejde_sektion_knap knapper_dark">SE PRODUKT</button>
                        <figcaption class="trejde_sektion_figcuption">
                            <h2 class="h2_acc">Ultra Pro - Boombox</h2>
                            <p class="p_acc">324,95 DKK</p>
                        </figcaption>
                    </figure>

                    <figure class="forside_figure_ny">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/box.jpeg" alt="Ultra Pro – Satin Tower Deck">
                        <button class="trejde_sektion_knap knapper_dark">SE PRODUKT</button>
                        <figcaption class="trejde_sektion_figcuption">
                            <h2 class="h2_acc">Ultra Pro – Satin Tower Deck</h2>
                            <p class="p_acc">99,95 DKK</p>
                        </figcaption>
                    </figure>

                </div>
            </section>

            <section id="forside_fjerde_sektion">
                <h1>KOMMENDE EVENTS</h1>
                <a href="http://kasperdyhl.dk/tier1mtg/event/">
                    <h3 class="til_kort_side_nav">Se alle events →</h3>
                </a>
                <div class="forside_image-container">
                    <figure class="forside_figure_event">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Intersection-123.png" alt="Tier1MTG event">
                        <button class="event_mere_knap knapper_dark"><a href="http://kasperdyhl.dk/tier1mtg/event/">LÆS MERE</a></button>
                        <figcaption class="fjerde_sektion_figcuption">
                            <h2 class="h2_acc">Old School Game</h2>
                            <p class="p_acc">Dato: 23-06-2021</p>
                            <p class="p_acc">Format: Old School</p>
                            <p class="p_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.
                                <br>
                                <br>Tilmelding starter den 8. juni.
                            </p>
                        </figcaption>
                    </figure>

                    <figure class="forside_figure_event">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/butik_ps-scaled.jpg" alt="">
                        <button class="event_mere_knap knapper_dark"><a href="http://kasperdyhl.dk/tier1mtg/event/">LÆS MERE</a></button>
                        <figcaption class="fjerde_sektion_figcuption">
                            <h2 class="h2_acc">Commander Game</h2>
                            <p class="p_acc">Dato: 14-07-2021</p>
                            <p class="p_acc">Format: Commander</p>
                            <p class="p_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.
                                <br>
                                <br>Tilmelding starter den 8. juli.
                            </p>
                        </figcaption>
                    </figure>

                    <figure class="forside_figure_event">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/bytte_kort_ps.jpg" alt="Tier1MTG event">
                        <button class="event_mere_knap knapper_dark"><a href="http://kasperdyhl.dk/tier1mtg/event/">LÆS MERE</a></button>
                        <figcaption class="fjerde_sektion_figcuption">
                            <h2 class="h2_acc">Tier1 Gonzo</h2>
                            <p class="p_acc">Dato: 03-08-2021</p>
                            <p class="p_acc">Format: Commander</p>
                            <p class="p_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.
                                <br>
                                <br>TIlmelding starter den 18. juli.
                            </p>
                        </figcaption>
                    </figure>

                    <figure class="forside_figure_event">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/Intersection-123.png" alt="Tier1MTG event">
                        <button class="event_mere_knap knapper_dark"><a href="http://kasperdyhl.dk/tier1mtg/event/">LÆS MERE</a></button>
                        <figcaption class="fjerde_sektion_figcuption">
                            <h2 class="h2_acc">Old School Game</h2>
                            <p class="p_acc">Dato: 23-06-2021</p>
                            <p class="p_acc">Format: Old School</p>
                            <p class="p_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.
                                <br>
                                <br>Tilmelding starter den 8. juni.
                            </p>
                        </figcaption>
                    </figure>

                    <figure class="forside_figure_event">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/butik_ps-scaled.jpg" alt="">
                        <button class="event_mere_knap knapper_dark"><a href="http://kasperdyhl.dk/tier1mtg/event/">LÆS MERE</a></button>
                        <figcaption class="fjerde_sektion_figcuption">
                            <h2 class="h2_acc">Commander Game</h2>
                            <p class="p_acc">Dato: 14-07-2021</p>
                            <p class="p_acc">Format: Commander</p>
                            <p class="p_acc">Info: Glæd dig til vores kommende event hos Tier1MTG. Kom til hygge i trygge rammer, hvor du kan spille med andre og vinde fede præmier.
                                <br>
                                <br>Tilmelding starter den 8. juli.
                            </p>
                        </figcaption>
                    </figure>

                </div>
            </section>

            <section id="forside_femte_sektion">
                <div class="forside_femte_sektion">
                    <div class="left">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/dan_logo_ps.png" alt="billede af Dan ejeren">
                    </div>
                    <div class="rigtht">
                        <h1>HVEM ER TIER1MTG</h1>
                        <p>
                            Tier1MTG er startet af Allan Asmussen og Dan Sønderskov - to gamle venner, der er vokset op sammen og har spillet Magic The Gathering siden 1994.
                            <br>
                            <br> Vores vision er at levere sjældne og nye Magic The Gathering-kort til spillere på tværs af alle formater og at skabe et hyggeligt fællesskab omkring Magic-universet. Det gør vi gennem vores mange events og vores fysiske butik i Vipperød, hvor du altid er velkommen til at kigge forbi.
                        </p>
                        <button class="forside_femte_sektion_knap forside_sjette_sektion_knap knapper_dark"><a href="http://kasperdyhl.dk/tier1mtg/om-os/">LÆS MERE</a></button>
                    </div>
                    <div class="bottom">
                        <a href="https://www.twitch.tv/tier1mtg" target="_blank"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/twitch_knap.png" alt="link til twitch"></a>
                        <a href="https://www.youtube.com/channel/UCV8RZ4Kg3vg51M86UTQlE1Q" target="_blank"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/Youtube-logo.png" alt="link til youtube"></a>
                        <a href="https://www.facebook.com/Tier1MTG" target="_blank"><img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/06/Facebook-logo.png" alt="link til facebook"></a>
                    </div>
                </div>
            </section>

            <section id="forside_sjette_sektion">
                <div class="forside_sjette_sektion_grid">
                    <div class="left">
                        <h1>VI ER OGSÅ PÅ CARDMARKET</h1>
                        <p>Vi har Skandinaviens største udvalg af MTG-enkeltkort, og vi sælger også kort på Cardmarket. <a href="https://www.cardmarket.com/en/Magic/Users/Tier1MTG" target="_blank">Se vores udvalg på Cardmarket her.</a> Vi sender alle hverdage, så du hurtigt kan modtage dine nye kort, og vi sender over hele verden til gode priser. Vi er certificeret "Professional Seller" på Magic-Cardmarket, og det er din sikkerhed for, at vi er en troværdig sælger. Vi har altid et voksende katalog af over 240.000 Magic The Gathering-enkeltkort.</p>

                        <a class="forside_sjette_sektion_knap knapper_dark" href="https://www.cardmarket.com/en/Magic/Users/Tier1MTG" target="_blank">GÅ TIL CARDMARKET</a>
                    </div>
                    <div class="right">
                        <img src="http://kasperdyhl.dk/tier1mtg/wp-content/uploads/2021/05/lotos1.png" alt="MTG lotos">
                    </div>
                </div>


            </section>
        </main>


        <template>
            <article class="forside_single_kob">
                <div class="billed_placering">
                    <img src="" alt="" class="billede_forside">
                    <button class="se_kort_knap knapper_dark">SE KORT</button>
                </div>
                <div class="baggrund_kort">
                    <h2 class="titel_alternativ"></h2>
                    <p class="pris_alternativ"></p>
                </div>

            </article>
        </template>


        <script>
            let singles;

            // url til wp rest api/database
            const url = "http://kasperdyhl.dk/tier1mtg/wp-json/wp/v2/single?per_page=100";


            async function loadJson() {
                const JsonData = await fetch(url);
                newSingleKort = await JsonData.json();
                console.log("loadJson", newSingleKort);
                visNewSingleKort();
                visNewSingleKort1();
                visNewSingleKort2();
                visNewSingleKort3();
                visNewSingleKort4();

            }
            loadJson();


            //Her i funktioen genereres tre tilfeldeig podcast og sættes ind i HTML under sektionen, nye podcasts episoder
            function visNewSingleKort() {
                console.log("visNewSingleKort");

                //Genererer et nyt array af tilfældige objekter fra det komplette array
                const other1 = newSingleKort[Math.floor(Math.random() * newSingleKort.length)];
                const randomSingleKort = [other1];
                console.log(randomSingleKort);

                randomSingleKort.forEach(single => {
                    //Definerer konstanter til senere brug i kloningen af template
                    const template = document.querySelector("template");
                    const container = document.querySelector(".new_single_kort");


                    const klon = template.cloneNode(true).content; //Her klones template og udfyldes med data fra de tilfældige objekter
                    klon.querySelector(".billede_forside").src = single.billede.guid;
                    klon.querySelector(".titel_alternativ").innerHTML = single.title.rendered;
                    klon.querySelector(".pris_alternativ").innerHTML = `${"Fra "}` + single.pris;

                    // eventlisteners på hver enkelt artikel
                    klon.querySelector(".se_kort_knap").addEventListener("click", () => {
                        location.href = single.link;
                    })

                    container.appendChild(klon);
                })

            }

            function visNewSingleKort1() {
                console.log("visNewSingleKort1");

                //Genererer et nyt array af tilfældige objekter fra det komplette array
                const other1 = newSingleKort[Math.floor(Math.random() * newSingleKort.length)];
                const randomSingleKort = [other1];
                console.log(randomSingleKort);

                randomSingleKort.forEach(single => {
                    //Definerer konstanter til senere brug i kloningen af template
                    const template = document.querySelector("template");
                    const container = document.querySelector(".new_single_kort1");


                    const klon = template.cloneNode(true).content; //Her klones template og udfyldes med data fra de tilfældige objekter
                    klon.querySelector(".billede_forside").src = single.billede.guid;
                    klon.querySelector(".titel_alternativ").innerHTML = single.title.rendered;
                    klon.querySelector(".pris_alternativ").innerHTML = `${"Fra "}` + single.pris + `${" DKK"}`;

                    // eventlisteners på hver enkelt artikel
                    klon.querySelector(".se_kort_knap").addEventListener("click", () => {
                        location.href = single.link;
                    })

                    container.appendChild(klon);
                })

            }

            function visNewSingleKort2() {
                console.log("visNewSingleKort2");

                //Genererer et nyt array af tilfældige objekter fra det komplette array
                const other1 = newSingleKort[Math.floor(Math.random() * newSingleKort.length)];
                const randomSingleKort = [other1];
                console.log(randomSingleKort);

                randomSingleKort.forEach(single => {
                    //Definerer konstanter til senere brug i kloningen af template
                    const template = document.querySelector("template");
                    const container = document.querySelector(".new_single_kort2");


                    const klon = template.cloneNode(true).content; //Her klones template og udfyldes med data fra de tilfældige objekter
                    klon.querySelector(".billede_forside").src = single.billede.guid;
                    klon.querySelector(".titel_alternativ").innerHTML = single.title.rendered;
                    klon.querySelector(".pris_alternativ").innerHTML = `${"Fra "}` + single.pris + `${" DKK"}`;

                    // eventlisteners på hver enkelt artikel
                    klon.querySelector(".se_kort_knap").addEventListener("click", () => {
                        location.href = single.link;
                    })

                    container.appendChild(klon);
                })

            }

            function visNewSingleKort3() {
                console.log("visNewSingleKort3");

                //Genererer et nyt array af tilfældige objekter fra det komplette array
                const other1 = newSingleKort[Math.floor(Math.random() * newSingleKort.length)];
                const randomSingleKort = [other1];
                console.log(randomSingleKort);

                randomSingleKort.forEach(single => {
                    //Definerer konstanter til senere brug i kloningen af template
                    const template = document.querySelector("template");
                    const container = document.querySelector(".new_single_kort3");


                    const klon = template.cloneNode(true).content; //Her klones template og udfyldes med data fra de tilfældige objekter
                    klon.querySelector(".billede_forside").src = single.billede.guid;
                    klon.querySelector(".titel_alternativ").innerHTML = single.title.rendered;
                    klon.querySelector(".pris_alternativ").innerHTML = `${"Fra "}` + single.pris + `${" DKK"}`;

                    // eventlisteners på hver enkelt artikel
                    klon.querySelector(".se_kort_knap").addEventListener("click", () => {
                        location.href = single.link;
                    })

                    container.appendChild(klon);
                })

            }


            function visNewSingleKort4() {
                console.log("visNewSingleKort4");

                //Genererer et nyt array af tilfældige objekter fra det komplette array
                const other1 = newSingleKort[Math.floor(Math.random() * newSingleKort.length)];
                const randomSingleKort = [other1];
                console.log(randomSingleKort);

                randomSingleKort.forEach(single => {
                    //Definerer konstanter til senere brug i kloningen af template
                    const template = document.querySelector("template");
                    const container = document.querySelector(".new_single_kort4");


                    const klon = template.cloneNode(true).content; //Her klones template og udfyldes med data fra de tilfældige objekter
                    klon.querySelector(".billede_forside").src = single.billede.guid;
                    klon.querySelector(".titel_alternativ").innerHTML = single.title.rendered;
                    klon.querySelector(".pris_alternativ").innerHTML = `${"Fra "}` + single.pris + `${" DKK"}`;

                    // eventlisteners på hver enkelt artikel
                    klon.querySelector(".se_kort_knap").addEventListener("click", () => {
                        location.href = single.link;
                    })

                    container.appendChild(klon);
                })

            }

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
