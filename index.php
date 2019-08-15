<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="http://www.coreycraig.com/website/img/favicon.ico"/>
    <link rel="canonical" href="http://www.coreycraig.com/"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DJ Corey Craig</title>
    <style>/* critical path CSS goes here */
    body, html {
        margin: 0;
        width: 100%;
        height: 100%;
    }
    body, header, section, main, .wrapper {
        background-color: #070719;
        color: white;
        width: 100%;
        height: auto;
        margin: 0 auto;
        display: inline-block;
        /* to get the link Terms and Conditions clickable , we add these 2 lines :*/
        position: relative;
        z-index: 5;
    }
    header, main, section, .wrapper, footer {
        text-align: center;
    }
    </style>
    <link href="./website/style/mobile.css" rel="stylesheet">
    <link href="./website/style/tablet.css" rel="stylesheet" media="(min-width: 700px)">
    <link href="./website/style/desktop.css" rel="stylesheet" media="(min-width: 1030px)">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@djcoreycraig" />
    <meta name="twitter:title" content="Coreyography, DJ / Producer Corey Craig" />
    <meta name="twitter:url" content="http://www.coreycraig.com/" />
    <meta name="twitter:creator" content="@djcoreycraig" />
    <meta name="twitter:description" content="Music, mixes and links from Coreyography, DJ / Producer Corey Craig. New York City & Worldwide" />
    <meta property="og:title" content="Coreyography, DJ / Producer Corey Craig" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.coreycraig.com/" />
    <meta property="og:image:url" content="http://www.coreycraig.com/website/img/dj-corey-craig-card.png" />
    <meta property="og:image:secure_url" content="http://www.coreycraig.com/website/img/dj-corey-craig-card.png" />
    <meta property="og:description" content="Music, mixes and links from Coreyography, DJ / Producer Corey Craig. New York City & Worldwide" />
    <meta property="og:site_name" content="coreycraig" />
    <meta name="description" content="Coreyography, DJ / Producer Corey Craig. New York City & Worldwide. Music, mixes and links" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins|Merienda" rel="stylesheet">
    <script type="application/ld+json">
{
    "@context": "http://schema.org/",
    "@type": "Person",
    "name": "Corey Craig",
    "alternateName": "Coreyography",
    "url": "",
    "image": "http://www.coreycraig.com/website/img/corey_craig_profile.jpg",
    "sameAs": [
    "https://www.facebook.com/CoreyographyMusic",
    "https://twitter.com/djcoreycraig",
    "https://www.instagram.com/coreycraig/"
    ],
    "jobTitle": "DJ"  
}
</script>
<script src="website/js/main.js"></script>
</head>

<body>
    <?php
        $fileName = "./website/features/main-color.txt";
        if ( file_exists($fileName) && ($fp = fopen($fileName, "r"))!==false ) {
            $f = fopen($fileName, 'r');
            $firstLine = fgets($f);
            $customizedMainColor = $firstLine;
            fclose($f);
        }
        else {
            $customizedMainColor = "#146ef4";
        }
        ?>
    <?php echo '<style> h2:after, .social p:after { border-bottom-color: '.$customizedMainColor.';} </style>'; ?>
    <header>
    <?php echo '<h2 class="sample" style="Color:'.$customizedMainColor.'">Coreyography</h2>'; ?>
    <div class="top-panel-to-fix">
        <h1>DJ Corey Craig</h1>
        <nav>
            <ul>
                <!-- <li class="nav-item js-tab-1" data-target="#bio p">Bio</li> -->
                <li class="nav-item js-tab-2" data-target="#clouds h2">Podcast</li>
                <li class="nav-item js-tab-3" data-target=".calendar h2">Calendar</li>
                <li class="nav-item js-tab-4" data-target="#social">Social</li>
                <li class="nav-item js-tab-4" data-target="#merch">Merch</li>
                <li class="nav-item js-tab-5" data-target="#booking-separator">Booking</li>
            </ul>
        </nav>
    </div>
    </header>
    <section id="main-portrait">
        <div class="wrapper">
            <img src="./website/img/corey-craig.png" alt="coreyography portrait">
        </div>
    </section>
    <!-- <main id="bio">
        <div class="wrapper">
            <p>Here goes the text with the Bio<br/> Here goes the text with the Bio<br/> Here goes the text with the Bio<br/>                Here
                goes the text with the Bio
            </p>
        </div>
    </main> -->
    <section id="clouds">
        <div class="wrapper">
            <?php echo '<h2 style="border-bottom-color:'.$customizedMainColor.' ;"><span>Podcast</span></h2>'; ?>
            
            <iframe class="spotify" src="https://open.spotify.com/embed/show/20lQOfnnwoEkCaCttfkk2J" width="300" height="250" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <iframe class="mixcloud" title ="Corey Craig's gigs" width="100%" height="120" src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&feed=%2Fdjcoreycraig%2F" frameborder="0" ></iframe>
            <p>Podcast also available on</p>
            <ul>
                <li>
                    <?php echo '<a href="https://itunes.apple.com/us/podcast/dj-corey-craig/id340777323" target="_blank" style="color:'.$customizedMainColor.' ;">iTunes</a>'; ?>
                </li>
                <li>
                <?php echo '<a href="https://www.mixcloud.com/djcoreycraig/" target="_blank" style="color:'.$customizedMainColor.' ;">MixCloud</a>'; ?>
                </li>
                <li>
                <?php echo '<a href="https://open.spotify.com/show/20lQOfnnwoEkCaCttfkk2J?si=SNalafiNT-qTnzpuy3BrcQ" target="_blank" style="color:'.$customizedMainColor.' ;">Spotify</a>'; ?>
                </li>
                <!-- <li>
                    <a href="https://soundcloud.com/dj-corey-craig" target="_blank">SoundCloud</a>
                </li> -->
                <!-- <li>
                    <a href="spotify:show:20lQOfnnwoEkCaCttfkk2J" target="_blank">Spotify (app)</a>
                </li> -->
            </ul>
        </div>
    </section>
    <section class="calendar">
        <?php echo '<style> .gig-name, #gigs a { color: '.$customizedMainColor.'} </style>'; ?>
        <div class="wrapper">
            <!-- <h2 id="calendar">DJ Corey Craig's Upcoming <span>Gigs</span></h2> -->
            <h2 id="calendar"><span>Upcoming Coreyography</span></h2>
            <?php 
            $strJsonFileContents = file_get_contents("https://gigs.gigatools.com/user/CoreyCraig.json");
            // Convert to array 
            $array = json_decode($strJsonFileContents, true);
            var_dump($array[1][0]["event"]["eventdate"]);
            var_dump($array); // print array
            ?>
            <div id="month"></div>
            <div id="gigs"></div>
        </div>
    </section>
    <section class="social">
        <div class="wrapper">
            <h4 id="social"><span>Follow</span> DJ Corey Craig</h4>
            <p>It's fun all the way, you'll see.</p>
            <a href="https://twitter.com/djcoreycraig" target="_blank">
                <?php echo '<svg aria-hidden="true" data-prefix="fab" data-icon="twitter-square" class="svg-inline--fa fa-twitter-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="'.$customizedMainColor.'" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></svg>'; ?>
            </a>
            <a href="https://www.facebook.com/CoreyographyMusic" target="_blank">
            <?php echo '<svg aria-hidden="true" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="'.$customizedMainColor.'" d="M448 80v352c0 26.5-21.5 48-48 48h-85.3V302.8h60.6l8.7-67.6h-69.3V192c0-19.6 5.4-32.9 33.5-32.9H384V98.7c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9H184v67.6h60.9V480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"></path></svg>'; ?>
            </a>
            <a href="https://www.instagram.com/coreycraig/" target="_blank">
            <?php echo '<svg aria-hidden="true" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="'.$customizedMainColor.'" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>'; ?>
            </a>
            <a href="https://open.spotify.com/show/20lQOfnnwoEkCaCttfkk2J?si=SNalafiNT-qTnzpuy3BrcQ" target="_blank">
                <?php echo '<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="spotify" class="svg-inline--fa fa-spotify fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="'.$customizedMainColor.'" d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"></path></svg>'; ?>
            </a>
        </div>
        <div class="direct-message">
            <p>You can also send a Direct Message either to </p>
            <?php echo '<a href="https://twitter.com/messages/compose?recipient_id=15010977&text=Hi%20DJ%20Corey%20Craig%20!"
            class="twitter-dm-button" data-size="large" data-screen-name="@djcoreycraig">
        @djcoreycraig on <span class="button" style="border-color:'.$customizedMainColor.';">Twitter</span></a>'; ?>
        </div>
        <div class="direct-message two">
            <?php echo '<a href="https://m.me/CoreyographyMusic">
            or to @CoreyographyMusic on <span class="button" style="border-color:'.$customizedMainColor.';">Messenger</span></a>'; ?>
        </div>
    </section>
    <section class="merch">
        <div class="wrapper">
            <?php echo '<a id="merch" href="https://coreyography.threadless.com/" target="_blank" style="background-color:'.$customizedMainColor.'; border-color:'.$customizedMainColor.'">Merch</a>'; ?>
        </div>
        <div id="booking-separator"></div>
    </section>
    <footer id="booking">
        <div class="booking-area">
            <?php echo '<a href="mailto:bookings@coreycraig.com" style="background-color:'.$customizedMainColor.'; border-color:'.$customizedMainColor.'"><span>Booking</span> DJ Corey Craig</a>'; ?>
        </div>
        <div class="mentions">
            <p><small class="conditions">Terms and Conditions</small><br/>
                <small class="copyright">Copyright © <?php echo date("Y"); ?></small></p>
        </div>
        <img src="./website/img/coreyography-portrait.png" alt="book dj coreyography">
    </footer>

</body>

</html>