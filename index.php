<?php
ini_set('display_errors', 1);

require_once("./classes/Os.php");


$Gwidgets;
$Swidgets;
foreach (scandir('./widgets/grid/') as $file) {
    $ext = explode('.', $file);
    $ext = end($ext);
    if ($ext == "php") {
        $Gwidgets[] = $file;
    }
}
foreach (scandir('./widgets/sidePanel/') as $file) {
    $ext = explode('.', $file);
    $ext = end($ext);
    if ($ext == "php") {
        $Swidgets[] = $file;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>homestatus</title>
    <link rel="stylesheet" href="index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>



<div id="page">

    <div id="widget-grid">

        <?php
        foreach ($Gwidgets as $key=>$Gwidget) {
            $wid = $key;
            include "./widgets/grid/$Gwidget";
        }

        ?>

    </div>

    <div id="sidePanel">
        <?php
        foreach ($Swidgets as $key=>$Swidget) {
            $wid = $key;
            include "./widgets/sidePanel/$Swidget";
        }

        ?>
        <button id="settings"><span class="material-symbols-outlined">settings</span></button>
    </div>


</div>

</html>