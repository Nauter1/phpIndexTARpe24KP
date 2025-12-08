<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kaur PHP Tööde leht</title>
    <link rel="stylesheet" href="firmastyle.css">
</head>
<body>
<header>
    <h1>Kauri Lillepoe leht</h1>
</header>

<nav class="menu">
    <ul>
        <li>
            <a href="firmaindex.php">Firma Index</a>
        </li>
        <li>
            <a href="firmaandmed.php">Andmebaas</a>
        </li>
        <li>
            <a href="firmaadmin.php">Admin Andmebaas</a>
        </li>
    </ul>
</nav>
<br>

<div class="flex-container">
    <div class="aside">
        Tere tulemast Kauri Lillepoodi, kus meie müüme igasuguseid lille odavalt!
    </div>
    <div>
        <?php
        // sisu - laetakse content kaustast
        if(isset($_GET["leht"])){
            include($_GET["leht"]);
        } else {
            echo "Palun vali andmebaasi leht!";
        }
        ?>
    </div>
    <div class="aside">
        <img src="https://images.pexels.com/photos/6843561/pexels-photo-6843561.jpeg" alt="Lillepilt" width="150" height="650">
    </div>
</div>


<footer>
    <?php
    echo "Õpilase tehtud leht &copy;";
    echo date("Y");
    ?>
</footer>
</body>
</html>
