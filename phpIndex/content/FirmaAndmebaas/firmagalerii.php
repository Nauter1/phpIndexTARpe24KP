<?php if (isset($_GET['code'])) {die(highlight_file(__FILE__,1));} ?>
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
        <li>
            <a href="firmagalerii.php">Galerii</a>
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
        require ('conf.php');
        //tabelist kustutamine
        global $yhendus;
        ?>
        <h1>Lille Galerii</h1>
        <table>
            <tr>
                <td>Pilt</td>
            </tr>

            <?php
            $kask=$yhendus->prepare("SELECT id, nimi, sisu, pilt, hind, kogus FROM lilled");
            $kask->bind_result($id, $nimi, $sisu, $pilt, $hind, $kogus);
            $kask->execute();

            while($kask->fetch()){
                echo "<tr>";
                echo "<td><img src='$pilt' width='400' height='400'></td>";
                echo "</tr>";
            }
            ?>
        </table>
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