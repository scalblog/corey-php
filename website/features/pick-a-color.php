<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="http://www.coreycraig.com/website/img/favicon.ico"/>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hey Corey, pick a color</title>
    <meta name="robots" content="noindex">
    <meta name="description" content="Now the DJ picks the color of the main page" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins|Merienda" rel="stylesheet">
    <link rel="stylesheet" href="./root.css">
    <link rel="stylesheet" href="./pick-a-color.css">
    <script src="./jquery-3.3.1.min.js"></script>
    <!-- <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>     -->
    <script src="./pick-a-color.js"></script>
</head>

<body id="pick-color-page">
    <?php
        $fileName = "main-color.txt";
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

    <main>
        <div class="wrapper">
        <?php echo '<h1 id="title" style="Color:'.$customizedMainColor.'">Yes, you can customize<br/>the main color<br/>for the website.</h1>'; ?>
            <p>That's easy and cool...</p>
            <p>Currently the main color is / could become :</p>
            <div>
                <?php echo '<input type="color" id="main-color" name="main-color" value="'.$customizedMainColor.'" style="Color:'.$customizedMainColor.'">'; ?>
                <span>which is <?php echo'<input type="text" id="main-color-label" value="'.$customizedMainColor.'" style="Color:'.$customizedMainColor.'; border-bottom-color:'.$customizedMainColor.'"></input>'; ?></span>
            </div>
        </div>
    </main>
    <section class="preview">
        <p>So it may look like this :</p>
        <?php echo '<h2 class="sample" style="Color:'.$customizedMainColor.'">Coreyography</h2>'; ?>
    </section>
    <div class="result">
        <p id="if-it-s-hover">and the color for the effects Hover and Focus is : <span class="darken-result">xxx</span></p>
        <p>That's the way... ha ha... I like it !</p>
        <form action="action-color.php" method="post">
            <?php echo' <input id="cloud-color" type="hidden" name="cloud-color" value="'.$customizedMainColor.'" />'; ?>
            <?php echo '<button type="submit" id="send-result" style="Color:'.$customizedMainColor.'; Border-Color:'.$customizedMainColor.'">So... Send this color to the Cloud</button>'; ?>
        </form>
        
    </div>
    <div class="reset">
        <button id="reset-to-default-color">Otherwise, Please, Click this line to Reset the color to the original Blue</button>
    </div>
    <div class="random">
        <?php echo '<button id="random-result" style="Color:'.$customizedMainColor.'">Wait... Show me a random color</button>'; ?>
    </div>
</body>

</html>