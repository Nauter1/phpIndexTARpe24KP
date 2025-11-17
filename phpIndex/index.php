<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="js/joonisScript.js"></script>
    <script src="js/kalkulaatorScript.js"></script>
</head>
<body>

<?php
// päis
include("header.php");
?>

<?php
// navigeerimismenüü
include("nav.php");
?>
<div class="flex-container">
    <div>
        <?php
        // sisu - laetakse content kaustast
        if(isset($_GET["leht"])){
            include('content/'.$_GET["leht"]);
        } else {
            include('content/kodu.php');
        }
        ?>
    </div>
    <div>
        PHP - (rekursiivne lühend sõnadest PHP: Hypertext Preprocessor) on laialdaselt kasutatav avatud lähtekoodiga üldotstarbeline skriptimiskeel, mis sobib eriti hästi veebiarenduseks ja mida saab HTML-i manustada.
    </div>
    <div>
        <img src="image/phpPilt.png" alt="PHP pilt">
    </div>
</div>


<?php
// jalus
include("footer.php");
?>
</body>
</html>