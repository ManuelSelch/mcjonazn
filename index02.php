<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("json.php");
//echo "index";
$scrapper = new Scrapper();
$releases = $scrapper->getReleases();
//var_dump($releases);

/*
foreach ($releases as $release) {
    $key = $release["key"];
    $releaseDetails = $scrapper->getRelease($key);
}
*/

?>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>McJonazn - Artist Page</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" title="Favicon" />

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="css/namari-color.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!-- Modal CSS -->
    <link rel="stylesheet" href="css/modal.css?ttt">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status" class="la-ball-triangle-path">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--End of Preloader-->

    <div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
        <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
        <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
        <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
        <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
    </div>

    <div id="wrapper">

        <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
            <div id="header" class="nav-collapse">
                <div class="row clearfix">
                    <div class="col-1">

                        <!--Logo-->
                        <div id="logo">

                            <!--Logo that is shown on the banner-->
                            <img src="images/logo-2.png" id="banner-logo" alt="Landing Page" />
                            <!--End of Banner Logo-->

                        </div>
                        <!--End of Logo-->

                        <aside>

                            <!--Social Icons in Header-->
                            <ul class="social-icons">
                                <li>
                                    <a target="_blank" title="Youtube" href="https://youtube.com/@MCJonazn">
                                        <i class="fa fa-youtube-play fa-1x"></i><span>Youtube</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" title="Instagram" href="http://instagram.com/mcjonazn">
                                        <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" title="Spotify" href="https://open.spotify.com/artist/6FAEDYKPfsGIFp2T1fQbMk?si=bXTyWbhASmybenoGk15rMQ">
                                        <i class="fa fa-spotify fa-1x"></i><span>Spotify</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" title="Apple Music" href="https://music.apple.com/de/artist/mcjonazn/1682264758">
                                        <i class="fa fa-apple fa-1x"></i><span>Apple Music</span>
                                    </a>
                                </li>
                            </ul>
                            <!--End of Social Icons in Header-->

                        </aside>

                        <!--Main Navigation-->
                        <nav id="nav-main">
                            <ul>
                                <li>
                                    <a href="#banner">Home</a>
                                </li>
                                <li>
                                    <a href="#about">Zu mir</a>
                                </li>
                                <li>
                                    <a href="#gallery">Songs</a>
                                </li>
                                <li>
                                    <a href="#test">Bewertungen</a>
                                </li>
                            </ul>
                        </nav>
                        <!--End of Main Navigation-->

                        <div id="nav-trigger"><span></span></div>
                        <nav id="nav-mobile"></nav>

                    </div>
                </div>
            </div><!--End of Header-->
            <!--Banner Content-->
            <div id="banner-content" class="row clearfix">

                <div class="col-38" style="background-color: rgba(255, 255, 255, 0.8);">

                    <div class="section-heading">
                        <h1>MCJonazn</h1>
                        <h2>
                            Nach über einem Jahr Musik machen, release ich ein Album auf allen Streaming Plattformen.
                            (29.12.)🤩🎵
                            Nach mehreren Stunden Texte schreiben, aufnehmen und vielen Stunden im Mastering erscheint nach
                            dem qualitativ niedrigem Album |Der Anfang| nun |Kapitel 2|.
                            So viel Liebe, Herzblut und ein Großteil meiner Freizeit stecken genau hier drin. 🙏
                            Egal was passieren wird, nichts außer meine eigene Einstellung und Mindset werden mich
                            aufhalten. Jeden Monat ein Song ;)🔥
                            Allein im Vergleich zu letztem Jahr ist eine enorme Steigerung erkennbar. Sei es im Flow, Text,
                            oder Mastering. Ich bin noch lange kein Profi, aber zumindest jemand mit einem Traum, an dem er
                            arbeitet, anstatt auf unwichtige Dinge Fokus zu legen.🎶🎧
                        </h2>
                    </div>

                    <!--Call to Action-->
                    <a target="_blank" href="https://music.imusician.pro/artist/IrdowlMI2e/releases" class="button">JETZT STREAMEN 🎧</a>
                    <!--End Call to Action-->

                </div>

            </div><!--End of Row-->
        </header>

        <!--Main Content Area-->
        <main id="content">

            <!--Introduction-->
            <section id="about" class="introduction scrollto">

                <div class="row clearfix">

                    <div class="col-3">
                        <div class="section-heading">
                            <h3>Über mich</h3>
                            <h2 class="section-title">Wer bin ich?</h2>
                            <p class="section-subtitle">
                                Hobbymäßiger Rapper mit Leidenschaft🙏
                                Bin noch ganz am Anfang.....
                                Falls du Interesse hast, dann schau auf Spotify, Apple Music etc., oder Instagram
                                vorbei😉
                            </p>
                        </div>

                    </div>


                </div>


            </section>
            <!--End of Introduction-->
            <aside id="gallery" class="row text-center scrollto clearfix">
                <div class="row clearfix">
                    <div class="section-heading">
                        <h3>SONGS</h3>
                        <h2 class="section-title">Hier sind meine Releases!</h2>
                    </div>
                    <!--Gallery / Hier kommen die Songs rein Manu ;)-->
                    <?php
                    foreach ($releases as $release) {
                    $image = $release["image_src"];
                    $services = $scrapper->getRelease($release["key"]);
                    ?>
                    <a onclick='openModal(<?php echo json_encode($release);?>, <?php echo json_encode($services);?>)' id="modal-closed">
                        <img src="https://music.imusician.pro<?php echo $image; ?>" />
                    </a>
                    <?php
                    }
                    ?>
                </div>
            </aside>
            <!--End of Gallery-->

            <div class="modal-container" id="modal-opened">
                <div class="modal">

                    <div class="modal__details">
                        <h1 class="modal__title" id="modalTitle">Modal Title</h1>
                    </div>

                    <div style="display: flex; justify-content: center;">
                        <a target="_blank" class="modal__btn" href="" id="amazonmusic">
                            <svg class="css-1vp3f8h e13waqcv0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 24"><path d="M91.1 5a1 1 0 0 1 .76.29c.19.19.28.44.28.75s-.1.56-.28.75c-.18.2-.44.29-.76.29a1 1 0 0 1-.76-.29 1.04 1.04 0 0 1-.28-.75c0-.31.1-.56.28-.75.18-.2.43-.29.76-.29Z"></path><path fill-rule="evenodd" d="M10.78 17.45a.31.31 0 0 0 .37-.04c.3-.28.87-.79 1.19-1.06.13-.1.1-.28 0-.43l-.09-.13c-.25-.35-.5-.68-.5-1.36v-2.75c.02-.96.02-1.84-.67-2.5-.6-.6-1.59-.8-2.34-.8-1.48 0-3.13.56-3.48 2.45-.04.2.1.3.23.34l1.5.17c.15-.01.25-.16.28-.3.13-.65.66-.96 1.25-.96.32 0 .68.12.87.41.2.3.2.7.19 1.04v.33l-.44.05c-.82.09-1.77.19-2.48.51A2.73 2.73 0 0 0 5 15.04c0 1.67 1.02 2.5 2.33 2.5 1.1 0 1.7-.27 2.56-1.16l.11.18c.2.3.34.51.78.89Zm-1.2-3.87v-.43c-1.12 0-2.31.25-2.31 1.61 0 .7.35 1.17.94 1.17.44 0 .83-.28 1.08-.73.29-.53.29-1.03.29-1.62ZM31.5 17.4a.31.31 0 0 1-.36.04 3.4 3.4 0 0 1-.77-.9 16.37 16.37 0 0 0-.12-.17c-.86.9-1.46 1.17-2.56 1.17-1.31 0-2.33-.84-2.33-2.5 0-1.31.68-2.2 1.66-2.63a8.47 8.47 0 0 1 2.48-.5l.44-.06v-.32c0-.36 0-.75-.2-1.05-.18-.3-.54-.42-.86-.42-.6 0-1.12.32-1.25.97-.03.14-.13.29-.27.3l-1.5-.17c-.14-.03-.28-.14-.24-.34.35-1.89 2-2.46 3.47-2.46.76 0 1.75.21 2.34.8.7.67.7 1.55.69 2.5v2.76a2 2 0 0 0 .5 1.36l.08.13c.1.15.13.32 0 .43l-1.2 1.06Zm-1.56-3.83c0 .59 0 1.09-.3 1.62-.24.45-.63.73-1.07.73-.6 0-.94-.47-.94-1.17 0-1.36 1.18-1.61 2.3-1.61v.43Z"></path><path d="M13.84 17.43h1.55a.3.3 0 0 0 .3-.3v-4.47c0-.94 0-2.16 1.07-2.16 1 0 .98 1.09.96 1.98v4.66c0 .15.12.28.28.3h1.55a.3.3 0 0 0 .3-.3v-4.48c0-.46 0-1.08.15-1.47.16-.41.55-.68.93-.68.45 0 .8.16.9.72.07.26.06.88.06 1.29v4.62c0 .15.12.28.27.3h1.55a.3.3 0 0 0 .3-.3v-5.61c.02-.77.04-1.6-.39-2.19a2.18 2.18 0 0 0-1.8-.9c-.9 0-1.77.49-2.14 1.53-.44-1.04-1.05-1.53-2.02-1.53-.95 0-1.67.49-2.04 1.53h-.03V8.9a.3.3 0 0 0-.28-.28h-1.45a.3.3 0 0 0-.3.3v8.24a.3.3 0 0 0 .28.27ZM34.02 8.9v1.18a.29.29 0 0 0 .3.3h2.66l-3.06 4.54c-.19.29-.2.62-.2.8v1.2c0 .17.2.37.37.27a5.71 5.71 0 0 1 5.4 0c.19.1.37-.1.37-.28v-1.25a.53.53 0 0 0-.27-.46 5.52 5.52 0 0 0-2.91-.65l2.65-3.9c.24-.35.38-.57.38-.74V8.9a.29.29 0 0 0-.3-.3h-5.1a.29.29 0 0 0-.3.3Z"></path><path fill-rule="evenodd" d="M44.1 8.45c2.31 0 3.56 2.05 3.56 4.65 0 2.51-1.38 4.5-3.55 4.5-2.27 0-3.5-2.04-3.5-4.59 0-2.56 1.25-4.56 3.5-4.56Zm.02 1.68c-1.15 0-1.22 1.62-1.22 2.62v.04c0 1.02 0 3.12 1.2 3.12s1.27-1.74 1.27-2.8c0-.69-.03-1.52-.23-2.18-.18-.57-.53-.8-1.02-.8Z"></path><path d="M49.1 17.43h1.55a.3.3 0 0 0 .3-.3V12.7c0-.56.03-1.06.25-1.56.17-.4.52-.66.9-.66.99 0 .98 1.12.97 2v4.69a.3.3 0 0 0 .28.26h1.55a.3.3 0 0 0 .3-.26V12c0-.8 0-1.9-.4-2.57a2.02 2.02 0 0 0-1.82-.97c-1.07 0-1.68.54-2.11 1.67h-.03V8.86a.3.3 0 0 0-.28-.23h-1.44a.3.3 0 0 0-.3.26v8.25c0 .15.13.28.28.3Zm-12.97 3.16C33.21 22.82 28.98 24 25.34 24c-5.1 0-9.7-1.95-13.17-5.2-.28-.25-.03-.6.3-.4a25.88 25.88 0 0 0 13.18 3.62c3.23 0 6.78-.7 10.05-2.13.5-.22.91.34.43.7Z"></path><path d="M33.94 19.05c.94-.12 3.03-.38 3.4.11.38.5-.41 2.53-.76 3.44-.11.27.12.38.36.18 1.56-1.36 1.97-4.19 1.65-4.6-.32-.4-3.06-.75-4.73.46-.25.18-.2.44.08.4Zm52.89-3.03c-.29.22-.7.33-1.25.33a7.3 7.3 0 0 1-2.3-.36c-.2-.07-.34-.1-.42-.1-.14 0-.2.1-.2.3v.49c0 .15.02.26.07.33a.66.66 0 0 0 .28.19c.75.32 1.6.48 2.53.48.99 0 1.77-.24 2.37-.72.59-.49.89-1.14.89-1.96a2.2 2.2 0 0 0-.44-1.41 3.5 3.5 0 0 0-1.43-.95l-1.3-.52c-.53-.2-.88-.4-1.06-.57a.94.94 0 0 1-.27-.71c0-.75.54-1.13 1.61-1.13.62 0 1.22.1 1.81.28.18.06.31.09.39.09.14 0 .22-.1.22-.31V9.3c0-.15-.03-.27-.09-.34a.58.58 0 0 0-.28-.18 5.9 5.9 0 0 0-2.13-.4 3.4 3.4 0 0 0-2.23.7 2.24 2.24 0 0 0-.84 1.81c0 1.15.62 1.95 1.86 2.43l1.42.55c.46.18.78.35.95.52.18.18.26.4.26.68 0 .41-.14.73-.42.95Zm-7.43-.55V8.99c0-.23.11-.35.34-.35h.99c.22 0 .33.12.33.35v8.09c0 .23-.11.35-.34.35H80a.43.43 0 0 1-.26-.07c-.06-.05-.1-.14-.12-.26l-.12-.61c-1.04.8-2.1 1.2-3.2 1.2-.8 0-1.4-.24-1.83-.7a2.79 2.79 0 0 1-.64-1.96V9c0-.23.11-.35.34-.35h.98c.23 0 .34.12.34.35v5.49c0 .62.12 1.08.35 1.38.24.3.61.44 1.13.44.8 0 1.61-.28 2.43-.83Zm-9 1.96h1c.22 0 .33-.12.33-.35v-6.1c0-.83-.2-1.47-.62-1.93-.42-.45-1-.67-1.78-.67-1.1 0-2.21.4-3.32 1.23-.37-.82-1.07-1.23-2.11-1.23-1.02 0-2.07.38-3.14 1.14l-.1-.55c-.02-.13-.07-.22-.13-.26a.43.43 0 0 0-.26-.07h-.74c-.22 0-.33.11-.33.35v8.09c0 .23.11.35.33.35h1c.22 0 .33-.12.33-.35v-6.55c.78-.51 1.6-.76 2.45-.76.46 0 .8.13 1 .41.22.28.32.7.32 1.28v5.62c0 .23.11.35.34.35h.99c.22 0 .33-.12.33-.35V10.8l-.01-.26a4.61 4.61 0 0 1 2.46-.78c.46 0 .8.13 1.01.41.21.28.32.7.32 1.28v5.62c0 .23.11.35.33.35Zm27.65-7.58c-.94 0-1.61.25-2.03.74-.41.49-.62 1.27-.62 2.35v.22c0 1.05.21 1.82.63 2.32.42.49 1.09.73 1.99.73.47 0 .97-.08 1.51-.24.12-.04.2-.05.25-.05.15 0 .22.11.22.34v.47c0 .15-.02.26-.07.33a.59.59 0 0 1-.26.2 4.7 4.7 0 0 1-1.92.36c-1.32 0-2.33-.4-3.03-1.17-.7-.78-1.04-1.91-1.04-3.4 0-1.46.36-2.6 1.08-3.4a3.9 3.9 0 0 1 3.06-1.2c.6 0 1.2.1 1.78.33.12.04.2.1.26.17.05.07.07.19.07.35v.47c0 .23-.07.34-.22.34a1.1 1.1 0 0 1-.26-.05 4.78 4.78 0 0 0-1.4-.2ZM91.6 8.64h-1c-.22 0-.33.11-.33.34v8.1c0 .23.11.35.34.35h.99c.22 0 .33-.12.33-.35v-8.1c0-.23-.11-.34-.33-.34Z"></path></svg>
                        </a>
                    </div>

                    <br><br><br>
                    <div style="display: flex; justify-content: center;">
                        <a arget="_blank" class="modal__btn" href="" id="deezer">
                            <svg class="css-1vp3f8h e13waqcv0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 24"><path d="M37.23 9.26c1.32 0 2.39.63 2.96 1.6V5h2.52v13.8h-2.43v-1.34A3.4 3.4 0 0 1 37.3 19c-2.64 0-4.49-1.93-4.49-4.83 0-2.94 1.87-4.91 4.43-4.91Zm-1.91 4.92c0 1.65 1.08 2.68 2.48 2.68 1.36 0 2.48-1.03 2.48-2.68 0-1.68-1.12-2.74-2.48-2.74-1.4 0-2.48 1.06-2.48 2.74Zm22.33 2.65c-1.34 0-2.44-.8-2.46-2.23h6.35c.08-.37.12-.76.12-1.14 0-2.57-1.75-4.2-4.33-4.2-2.76 0-4.65 2.15-4.65 4.8A4.7 4.7 0 0 0 57.62 19c2.19 0 3.7-1.1 4.36-2.92l-2.16-.84c-.3 1.06-1.02 1.6-2.17 1.6Zm-.33-5.54c1.12 0 1.89.61 1.89 1.56l-.02.08h-4a2.1 2.1 0 0 1 2.13-1.64Z"></path><path d="M27.2 9.45h3.08v1.8H27.2v-1.8Zm0 2.51h3.08v1.8H27.2v-1.8Zm3.08 2.51H27.2v1.8h3.1v-1.8ZM16 17h3.09v1.8H16V17Zm6.82 0h-3.09v1.8h3.09V17Zm.64 0h3.1v1.8h-3.1V17Zm6.82 0H27.2v1.8h3.1V17Zm-6.82-2.51h3.1v1.8h-3.1v-1.8Zm-.64 0h-3.09v1.8h3.09v-1.8Zm-3.09-2.52h3.09v1.8h-3.09v-1.8Zm50.64-2.5v2.07l-5.14 5h5.28v2.27h-8.43v-2.17l5.12-5h-4.96V9.45h8.13Zm15.19 3.01c0 .16-.01.32-.03.47h2.39c.05-.3.08-.61.08-.92 0-1.6-1-2.76-2.68-2.76-1.08 0-1.85.53-2.24 1.4v-1.2h-2.52v9.34h2.52V12.8c0-.95.51-1.48 1.3-1.48.7 0 1.18.47 1.18 1.16Z"></path><path d="M75.6 16.83c-1.34 0-2.44-.8-2.46-2.23h6.35a5.25 5.25 0 0 0 .12-1.14c0-2.57-1.75-4.2-4.33-4.2-2.76 0-4.65 2.15-4.65 4.8A4.7 4.7 0 0 0 75.57 19c2.19 0 3.7-1.1 4.36-2.92l-2.16-.84c-.3 1.06-1.02 1.6-2.17 1.6Zm-.33-5.54c1.12 0 1.89.61 1.89 1.56l-.02.08h-4a2.1 2.1 0 0 1 2.13-1.64ZM45.89 14.6c.02 1.42 1.12 2.23 2.46 2.23 1.14 0 1.87-.53 2.16-1.6l2.15.85C52.01 17.9 50.5 19 48.31 19a4.7 4.7 0 0 1-4.94-4.93c0-2.66 1.89-4.81 4.65-4.81 2.57 0 4.33 1.64 4.33 4.2a5.18 5.18 0 0 1-.12 1.14h-6.34Zm4.01-1.75c0-.95-.77-1.56-1.89-1.56a2.1 2.1 0 0 0-2.12 1.64h4l.01-.08Z"></path></svg>
                        </a>
                    </div>

                    <br><br><br>
                    <div style="display: flex; justify-content: center;">
                        <a target="_blank" class="modal__btn" href="" id="tidal">
                            <svg class="css-1vp3f8h e13waqcv0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 24"><path d="m80.9 18-1-2.7h-5L73.6 18h-2.6l5-12h2.5l5 12H81ZM77.3 9 75.7 13H79L77.3 9ZM32 8.5V6.1h9.8v2.4h-3.6V18h-2.6V8.5H32ZM9 6.1l-3 3 3 3 3-3 2.9 3-3 3 3 2.9 3-3-3-3 3-3-3-2.9-3 3-3-3Zm8.9 3 3 3 3-3-3-3-3 3Zm32-3h-2.6V18H50V6ZM56.3 18h4.6c3.7 0 6.3-2.6 6.3-6 0-3.3-2.6-6-6.3-6h-4.6v12Zm4.6-9.6c2.1 0 3.6 1.5 3.6 3.6s-1.5 3.6-3.6 3.6h-2V8.4h2Zm28-2.3V18h8.5v-2.4h-6V6h-2.6Z"></path></svg>
                        </a>
                    </div>

                    <br><br><br>
                    <div style="display: flex; justify-content: center;">
                        <a target="_blank" class="modal__btn" href="" id="spotify">
                            <svg class="css-1vp3f8h e13waqcv0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 24"><path d="M32.1 10.64c-3.87-2.3-10.25-2.51-13.94-1.39a1.13 1.13 0 0 1-.86-.09 1.12 1.12 0 0 1-.46-1.51c.14-.26.38-.46.66-.55 4.24-1.29 11.29-1.04 15.74 1.6a1.12 1.12 0 0 1-1.15 1.94Zm-.13 3.4a.92.92 0 0 1-.58.42.94.94 0 0 1-.71-.11c-3.22-1.98-8.14-2.56-11.95-1.4a.94.94 0 0 1-1-.3.93.93 0 0 1-.1-1.03.95.95 0 0 1 .55-.46c4.36-1.32 9.78-.68 13.48 1.6.44.27.58.84.3 1.28Zm-1.47 3.27a.74.74 0 0 1-.46.34.75.75 0 0 1-.57-.1c-2.82-1.71-6.36-2.1-10.54-1.15a.76.76 0 0 1-.77-.3.73.73 0 0 1-.12-.26.74.74 0 0 1 .1-.56.76.76 0 0 1 .46-.34c4.57-1.04 8.49-.6 11.65 1.34a.75.75 0 0 1 .25 1.03ZM25 0a12 12 0 1 0 0 24 12 12 0 0 0 0-24Zm20.64 11.08c-2.07-.5-2.44-.84-2.44-1.57 0-.69.65-1.15 1.61-1.15.94 0 1.86.35 2.83 1.07a.14.14 0 0 0 .16.01.14.14 0 0 0 .04-.04l1-1.42a.14.14 0 0 0-.02-.19 6.12 6.12 0 0 0-3.98-1.38c-2.23 0-3.8 1.35-3.8 3.27 0 2.06 1.35 2.79 3.68 3.35 1.98.46 2.32.84 2.32 1.52 0 .76-.68 1.23-1.77 1.23-1.2 0-2.2-.4-3.3-1.36a.13.13 0 0 0-.15-.02.13.13 0 0 0-.04.03l-1.13 1.35a.14.14 0 0 0 .01.2 6.76 6.76 0 0 0 4.57 1.74c2.4 0 3.96-1.31 3.96-3.35 0-1.72-1.03-2.68-3.55-3.3Zm10.76 2.3c0 1.46-.9 2.48-2.18 2.48-1.27 0-2.23-1.06-2.23-2.47 0-1.41.96-2.47 2.23-2.47 1.26 0 2.18 1.04 2.18 2.47Zm-1.75-4.35c-1.05 0-1.9.42-2.61 1.26v-.95a.14.14 0 0 0-.14-.14h-1.85a.14.14 0 0 0-.13.09.14.14 0 0 0 0 .05V19.9c0 .07.05.13.13.13h1.85a.14.14 0 0 0 .14-.13v-3.33c.7.8 1.56 1.18 2.6 1.18 1.95 0 3.91-1.5 3.91-4.35 0-2.86-1.96-4.36-3.9-4.36Zm8.94 6.84c-1.33 0-2.33-1.06-2.33-2.48 0-1.43.96-2.46 2.3-2.46 1.34 0 2.35 1.07 2.35 2.49 0 1.42-.98 2.45-2.32 2.45Zm0-6.83a4.37 4.37 0 0 0-4.46 4.38 4.34 4.34 0 0 0 4.43 4.34c2.5 0 4.47-1.92 4.47-4.37a4.35 4.35 0 0 0-4.44-4.36Zm9.78.17h-2.04V7.1a.14.14 0 0 0-.14-.13h-1.85a.14.14 0 0 0-.14.14V9.2h-.89a.14.14 0 0 0-.1.04.13.13 0 0 0-.03.1v1.6c0 .07.06.13.13.13h.9v4.13c0 1.66.82 2.5 2.46 2.5.66 0 1.21-.13 1.74-.43a.14.14 0 0 0 .06-.11v-1.52a.14.14 0 0 0-.2-.12c-.35.18-.7.26-1.08.26-.6 0-.86-.27-.86-.87v-3.84h2.04a.14.14 0 0 0 .13-.14v-1.6a.14.14 0 0 0-.08-.12.14.14 0 0 0-.05 0Zm7.11 0v-.25c0-.76.29-1.1.94-1.1a3 3 0 0 1 1.04.2.14.14 0 0 0 .17-.07.13.13 0 0 0 .01-.06V6.37a.14.14 0 0 0-.1-.13A5.1 5.1 0 0 0 81 6c-1.7 0-2.62.97-2.62 2.8v.39h-.89a.14.14 0 0 0-.13.13v1.6c0 .08.06.14.13.14h.9v6.36c0 .08.06.14.13.14h1.86c.07 0 .13-.06.13-.14v-6.36h1.73l2.66 6.36c-.3.67-.6.8-1 .8-.33 0-.68-.1-1.03-.29a.14.14 0 0 0-.1 0 .14.14 0 0 0-.09.07l-.62 1.38a.13.13 0 0 0 .05.17 3.9 3.9 0 0 0 1.99.5c1.36 0 2.12-.63 2.79-2.35l3.21-8.3a.14.14 0 0 0-.13-.19h-1.93a.14.14 0 0 0-.13.1l-1.98 5.64-2.16-5.65a.14.14 0 0 0-.13-.09h-3.17Zm-4.12 0H74.5a.14.14 0 0 0-.13.13v8.1c0 .07.06.13.13.13h1.86c.07 0 .13-.06.13-.13v-8.1a.14.14 0 0 0-.13-.14Zm-.92-3.7a1.35 1.35 0 0 0-.94.4c-.25.25-.4.59-.39.94a1.31 1.31 0 0 0 .39.94 1.34 1.34 0 0 0 .94.39c.35 0 .7-.14.94-.4a1.33 1.33 0 0 0-.94-2.26Z"></path></svg>
                        </a>
                    </div>

                    <br><br><br>
                    <div style="display: flex; justify-content: center;">
                        <a target="_blank" class="modal__btn" href="" id="applemusic">
                            <svg class="css-1vp3f8h e13waqcv0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 24"><path d="M46.41 19.35V9.17h-.07l-4.12 10.18h-1.6L36.51 9.17h-.08v10.18h-1.9V5.55h2.44l4.41 11.01h.08l4.42-11h2.51v13.79h-1.98Zm12.73 0h-1.98v-1.73h-.08c-.53 1.2-1.6 1.88-3.12 1.88-2.21 0-3.5-1.43-3.5-3.77V9.25h2.05v6.1c0 1.51.76 2.34 2.13 2.34 1.53 0 2.36-1.05 2.36-2.64v-5.8h2.06l.08 10.1ZM64.78 9.1c2.36 0 3.8 1.28 3.88 3.16h-1.9c-.16-.98-.84-1.58-1.98-1.58-1.15 0-1.9.53-1.9 1.36 0 .6.45 1.05 1.51 1.28l1.6.38c2.06.45 2.82 1.28 2.82 2.71 0 1.8-1.67 3.09-4.03 3.09-2.52 0-4.04-1.2-4.2-3.17h2.06c.15 1.06.92 1.59 2.14 1.59 1.21 0 1.98-.53 1.98-1.36 0-.68-.38-1.05-1.45-1.28l-1.6-.38c-1.9-.45-2.82-1.35-2.82-2.86 0-1.74 1.52-2.94 3.89-2.94Zm5.56-2.49c0-.68.53-1.2 1.22-1.2.68 0 1.22.52 1.22 1.2 0 .68-.54 1.2-1.22 1.2a1.2 1.2 0 0 1-1.22-1.2Zm.15 2.64h2.06v10.1h-2.06V9.25Zm10.74 3.47c-.23-1.06-.99-1.96-2.36-1.96-1.6 0-2.67 1.35-2.67 3.46 0 2.19 1.07 3.47 2.67 3.47 1.3 0 2.06-.68 2.36-1.88h1.98c-.22 2.1-1.9 3.61-4.34 3.61-2.9 0-4.72-1.96-4.72-5.2 0-3.16 1.83-5.2 4.72-5.2 2.6 0 4.12 1.66 4.34 3.62l-1.98.08ZM28.2 6.92c-.53.6-1.37 1.12-2.2 1.05-.16-.9.3-1.81.76-2.34a3.03 3.03 0 0 1 2.2-1.13c.08.83-.22 1.73-.76 2.41Zm.77 1.2c.45 0 1.82.15 2.74 1.5-.08.08-1.6.99-1.6 2.87a3.27 3.27 0 0 0 1.98 3.02c0 .07-.3 1.05-1 2.1-.6.91-1.29 1.81-2.28 1.81-.99 0-1.3-.6-2.43-.6-1.15 0-1.53.6-2.44.6-1 0-1.76-.98-2.37-1.88-1.29-1.88-2.28-5.28-.9-7.54a3.58 3.58 0 0 1 3.04-1.88c.99 0 1.9.68 2.44.68.53 0 1.6-.76 2.82-.68Z"></path></svg>
                        </a>
                    </div>

                    <br><br><br>
                    <div style="display: flex; justify-content: center;">
                        <a target="_blank" class="modal__btn" href="" id="youtubemusic">
                            <svg class="css-1vp3f8h e13waqcv0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 24"><path d="M4.58 12a5.1 5.1 0 1 1 10.2.01 5.1 5.1 0 0 1-10.2 0ZM7.8 9.14v5.72L12.75 12 7.8 9.14Z"></path><path d="M9.67 2.33a9.67 9.67 0 1 0 0 19.34 9.67 9.67 0 0 0 0-19.34Zm0 15.55a5.87 5.87 0 1 1 0-11.75 5.87 5.87 0 0 1 0 11.75Zm49.19-8.6c.3.28.5.72.64 1.34.13.61.2 1.47.2 2.56v1.54c0 1.46-.18 2.53-.53 3.21-.35.69-.9 1.03-1.64 1.03-.41 0-.79-.1-1.13-.29-.34-.19-.6-.45-.76-.78h-.05l-.22.93h-1.82V4.97h2.12v5.14h.02c.19-.37.46-.67.8-.9.36-.23.74-.34 1.14-.34.52 0 .93.13 1.23.41Zm-1.46 6.99c.06-.4.09-.96.09-1.67v-1.26c0-.76-.03-1.35-.08-1.77-.04-.41-.13-.7-.25-.88a.6.6 0 0 0-.52-.26c-.21 0-.4.08-.59.25-.18.17-.3.39-.38.65v5.54a.96.96 0 0 0 .88.51c.23 0 .42-.08.55-.25.14-.17.24-.46.3-.86Z"></path><path d="M94.7 6.56c0-1.05.38-1.35 1.2-1.35s1.18.35 1.18 1.35c0 1.08-.36 1.35-1.19 1.35-.81 0-1.2-.27-1.2-1.35Zm-20.07 8.22-.17 1.12h-.1c-.13-1.05-.44-3.5-.85-5.49l-1.02-4.95h-3.1v13.36h1.92V7.8l.2 1.03 1.95 9.98h1.93l1.92-9.98.21-1.04v11.02h1.93V5.46H76.3l-.99 4.94c-.29 1.46-.52 3.17-.7 4.38Zm10.02 2.03c-.17.37-.56.62-.94.62-.44 0-.62-.35-.62-1.2V9.05h-2.2v7.29c0 1.8.6 2.63 1.9 2.63.9 0 1.6-.4 2.1-1.36h.05l.19 1.2h1.72V9.06h-2.2v7.75Zm5.29-5.54c0 .76.44 1.12 1.16 1.64 1.72 1.27 2.51 1.91 2.51 3.5 0 1.75-.98 2.63-2.88 2.63-2.16 0-2.97-1.18-2.69-3.2l1.87-.03c-.1 1.08.28 1.7.93 1.7.56 0 .88-.35.88-.86 0-.65-.59-1.1-1.6-1.89l-.09-.07c-1.24-.94-2-1.65-2-3.23 0-1.73.92-2.58 2.8-2.58 2.02 0 2.8.99 2.66 3.36l-1.85.08c-.02-1.46-.22-1.9-.84-1.9-.6 0-.86.3-.86.85Zm4.88 7.55h2.1V9.06h-2.1v9.76ZM104 15.3l-1.93-.1c0 1.72-.2 2.28-.85 2.28-.65 0-.76-.62-.76-2.64v-1.9c0-1.96.13-2.58.78-2.58.6 0 .76.6.76 2.4l1.91-.12c.13-1.51-.06-2.55-.65-3.14-.43-.43-1.08-.63-1.99-.63-2.13 0-3 1.14-3 4.36v1.37c0 3.3.74 4.38 2.92 4.38.92 0 1.56-.2 2-.61.61-.57.85-1.56.8-3.07Z"></path><path d="M28.06 17.15c.19.62.5 1.08.94 1.38.44.3 1.05.45 1.82.45a3.2 3.2 0 0 0 1.8-.44c.43-.3.75-.76.95-1.39.2-.63.3-1.46.3-2.5v-1.42c0-1.05-.1-1.9-.3-2.53-.21-.63-.53-1.1-.96-1.39a3.03 3.03 0 0 0-1.74-.44c-.73 0-1.32.14-1.77.43-.46.3-.79.76-1 1.4a8.22 8.22 0 0 0-.32 2.53v1.42c0 1.04.1 1.87.28 2.5Zm3.6-1.7c0 .71-.07 1.23-.2 1.55-.11.32-.33.48-.64.48-.3 0-.52-.16-.63-.48a4.96 4.96 0 0 1-.18-1.56V12.4c0-.7.06-1.21.18-1.54.13-.32.34-.48.63-.48.31 0 .53.16.65.48.12.33.18.84.18 1.54v3.04Zm31.16-.78v.5c0 .62.01 1.09.05 1.4.04.31.12.54.23.69.12.14.3.21.54.21.33 0 .56-.13.68-.38.12-.26.19-.68.2-1.28l1.9.12.01.35c0 .9-.25 1.57-.74 2.02-.5.44-1.2.67-2.1.67-1.08 0-1.84-.34-2.27-1.02-.44-.68-.65-1.73-.65-3.15v-1.7c0-1.47.22-2.54.67-3.22.45-.67 1.23-1 2.32-1 .75 0 1.33.13 1.74.4.4.28.68.71.85 1.3.16.58.24 1.39.24 2.42v1.67h-3.67Zm.27-4.1c-.1.13-.18.35-.22.67-.04.31-.05.79-.05 1.42v.7h1.6v-.7c0-.62-.02-1.1-.06-1.42a1.37 1.37 0 0 0-.23-.69c-.11-.13-.28-.2-.52-.2-.23 0-.4.07-.52.21Z"></path><path d="m21.15 5.46 2.5 9.03v4.33h2.17v-4.33l2.53-9.03h-2.18l-.91 4.1a46.3 46.3 0 0 0-.5 2.57h-.06c-.1-.71-.27-1.57-.5-2.58l-.87-4.1h-2.18Zm19.81 3.6v9.76h-1.72l-.2-1.2H39c-.47.9-1.17 1.36-2.1 1.36-.65 0-1.13-.22-1.43-.64-.31-.43-.47-1.09-.47-2V9.07h2.2v7.16c0 .44.05.75.14.93.1.19.26.28.48.28a1.08 1.08 0 0 0 .94-.62V9.06h2.2Zm11.27 9.76V9.06h-2.2v7.75a1.08 1.08 0 0 1-.94.62c-.22 0-.38-.1-.48-.28-.1-.18-.14-.5-.14-.93V9.06h-2.2v7.29c0 .9.16 1.56.47 1.99.3.42.78.64 1.43.64.93 0 1.63-.45 2.1-1.36h.05l.19 1.2h1.72Z"></path><path d="M46.93 7.23h-2.18v11.59H42.6V7.22h-2.18V5.47h6.5v1.77Z"></path></svg>
                        </a>
                    </div>



                    <a onclick="closeModal()" class="link-2"></a>

                </div>
            </div>


            <!--Testimonials-->
            <aside id="test" class="scrollto  clearfix text-center" data-enllax-ratio=".3">

                <div class="row clearfix">

                    <div class="section-heading">
                        <h3>FEEDBACK</h3>
                        <h2 class="section-title">Was meine Hörer sagten</h2>
                    </div>

                    <!--User Testimonial-->
                    <blockquote class="col-3 testimonial classic">
                        <img src="images/user-images/user-1.jpg" alt="User" />
                        <q>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua
                        </q>
                        <footer>John Doe - Happy Customer</footer>
                    </blockquote>
                    <!-- End of Testimonial-->
                    <!-- End of Testimonial-->

                </div>

            </aside>
            <!--End of Testimonials-->
        </main>
        <!--End Main Content Area-->
        <!--Footer-->
        <footer id="landing-footer" class="clearfix">
            <div class="row clearfix">

                <p id="copyright" class="col-2">Made with love by Manuel & Sebastian ;)</a></p>

                <!--Social Icons in Footer-->
                <ul class="social-icons">
                    <li>
                        <a target="_blank" title="Youtube" href="https://youtube.com/@MCJonazn">
                            <i class="fa fa-youtube-play fa-1x"></i><span>Youtube</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Instagram" href="http://instagram.com/mcjonazn">
                            <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Spotify" href="https://open.spotify.com/artist/6FAEDYKPfsGIFp2T1fQbMk?si=bXTyWbhASmybenoGk15rMQ">
                            <i class="fa fa-spotify fa-1x"></i><span>Spotify</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Apple Music" href="https://music.apple.com/de/artist/mcjonazn/1682264758">
                            <i class="fa fa-apple fa-1x"></i><span>Apple Music</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="TikTok" href="https://www.tiktok.com/@mcjonazn">
                            <i class="fa fa-tiktok fa-1x"></i><span>TikTok</span>
                        </a>
                    </li>
                </ul>
                <!--End of Social Icons in Footer-->
            </div>
        </footer>
        <!--End of Footer-->

    </div>

    <!-- Include JavaScript resources -->
    <script src="js/jquery.1.8.3.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/featherlight.min.js"></script>
    <script src="js/featherlight.gallery.min.js"></script>
    <script src="js/jquery.enllax.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.stickyNavbar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/images-loaded.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/site.js"></script>

    <script>
    function openModal(release, services) {
        const elem = document.getElementById("modal-opened");
        elem.style.display = "flex";
        document.getElementById("modalTitle").innerHTML = release["title"];

        services.forEach(service => {
            console.log(service["name"] + ": " + service["url"]);
            document.getElementById(service["name"]).setAttribute("href", service["url"]);
        });

        //var spotifyItem = services.filter(function(service) { return service["name"] == 'spotify'; });
        //console.log("spotifyitem: "+services[0]);
        //document.getElementById("spotifyButton").href = services[0]["url"];
    }

    function closeModal(){
        const elem = document.getElementById("modal-opened");
        elem.style.display = "none";
    }

    </script>

</body>
</html>
