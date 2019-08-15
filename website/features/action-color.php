<?php

if (empty($_POST['cloud-color'])) {
    //set color to the default blue
    $newColor = "#146ef4";
}
else {
    //get the color from the hidden Input
    $newColor = $_POST['cloud-color'];
}

$fileName = "./main-color.txt";
if ( file_exists($fileName) && ($fp = fopen($fileName, "w"))!==false ) {
    //create a file handler by opening the file
    $myTextFile = @fopen("./main-color.txt","w");

    //truncate the file to zero
    //or you could have used the write method and written nothing to it
    @ftruncate($myTextFile, 0);

    fwrite($myTextFile, $newColor);
    fclose($myTextFile);
}

//back to the Pick a color Page
//header("Location:pick-a-color.php");
header("Location:./../../index.php");
?>