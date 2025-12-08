<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kaur PHP Tööde leht</title>
    <link rel="stylesheet" href="firmastyle.css">
    <style>
        #menyykiht {
            float: left;
            padding-right: 30px;
        }
        #menyykiht>li{
            background-color:black;
            border: lime 3px solid;
            color:white;
        }
        #sisukiht {
            float: left;
        }
    </style>
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
        require('conf.php');

        global $yhendus;

        // Uue teate lisamine
        if (isset($_REQUEST["uusleht"])) {
            if($_REQUEST["uusleht"]!==0){
                $kask = $yhendus->prepare("INSERT INTO lilled (nimi, sisu,pilt,hind,kogus) VALUES (?, ?, ?, ?,?)");
                $kask->bind_param("ssssi", $_REQUEST["nimi"], $_REQUEST["sisu"], $_REQUEST["pilt"],$_REQUEST["hind"],$_REQUEST["kogus"]);
                $kask->execute();
                header("Location: ".$_SERVER["PHP_SELF"]);
                $yhendus->close();
                exit();
            }

        }

        // Teate kustutamine
        if (isset($_REQUEST["kustutusid"])) {
            $kask = $yhendus->prepare("DELETE FROM lilled WHERE id=?");
            $kask->bind_param("i", $_REQUEST["kustutusid"]);
            $kask->execute();
        }

        // Teate muutmine
        if (isset($_REQUEST["muutmisid"])) {
            $kask = $yhendus->prepare("UPDATE lilled SET nimi=?, sisu=?,pilt=?,hind=?,kogus=? WHERE id=?");
            $kask->bind_param(
                "ssssii",
                $_REQUEST["nimi"],
                $_REQUEST["sisu"],
                $_REQUEST["pilt"],
                $_REQUEST["hind"],
                $_REQUEST["kogus"],
                $_REQUEST["muutmisid"]
            );
            $kask->execute();
        }
        ?>
        <div id="menyykiht">
            <h2>Lilled</h2>
            <ul>
                <?php
                $kask = $yhendus->prepare(
                    "SELECT id, nimi FROM lilled"
                );
                $kask->bind_result($id, $nimi);
                $kask->execute();
                while ($kask->fetch()) {
                    echo "<li><a href='".$_SERVER["PHP_SELF"].
                        "?id=$id'>".htmlspecialchars($nimi)."</a></li><br>";
                }
                ?>
            </ul>
            <br>
            <a href="<?=$_SERVER['PHP_SELF']?>?lisamine=jah">Lisa ...</a>
        </div>

        <div id="sisukiht">
            <?php
            // Ühe teate kuvamine või muutmine
            if (isset($_REQUEST["id"])) {
                $kask = $yhendus->prepare("SELECT id, nimi, sisu, pilt, hind, kogus FROM lilled WHERE id=?");
                $kask->bind_param("i", $_REQUEST["id"]);
                $kask->bind_result($id, $nimi, $sisu, $pilt, $hind,$kogus);
                $kask->execute();

                if ($kask->fetch()) {
                    if (isset($_REQUEST["muutmine"])) {
                        echo "
                   <form action='".$_SERVER["PHP_SELF"]."'>
                     <input type='hidden' name='muutmisid' value='$id'/>
                     <h2>Lille muutmine</h2>
                     <dl>
                       <dt>Nimi:</dt>
                       <dd>
                         <input type='text' name='nimi' value='".
                            htmlspecialchars($nimi)."'/>
                       </dd>
                       <dt>Lille sisu:</dt>
                       <dd>
                         <textarea rows='20' cols='30' name='sisu'>".
                            htmlspecialchars($sisu)."</textarea>
                       </dd>
                       <dt>Lille pilt:</dt>
                       <dd>
                         <textarea rows='20' cols='30' name='pilt'>".
                            htmlspecialchars($pilt)."</textarea>
                       </dd>
                       <dt>Lille hind:</dt>
                       <dd>
                         <input type='text' name='hind' value='".
                            htmlspecialchars($hind)."'/>
                       </dd>
                       <dt>Lille hind:</dt>
                       <dd>
                         <input type='number' name='kogus' value='".
                            htmlspecialchars($kogus)."'/>
                       </dd>

                     </dl>                      
                     <input type='submit' value='Muuda' />
                   </form>
                ";
                    } else {
                        echo "<h2>".htmlspecialchars($nimi)."</h2>";
                        echo htmlspecialchars($sisu);
                        echo "<br>";
                        echo "<img src='$pilt'>";
                        echo "<br>";
                        echo "<br>";
                        echo "Hind: ".htmlspecialchars($hind);
                        echo "<br>";
                        echo "Kogus: ".htmlspecialchars($kogus);
                        echo "<br /><a href='".$_SERVER["PHP_SELF"].
                            "?kustutusid=$id'>kustuta</a> ";
                        echo "<a href='".$_SERVER["PHP_SELF"].
                            "?id=$id&amp;muutmine=jah'>muuda</a>";
                    }
                } else {
                    echo "Vigased andmed.";
                }
            }

            // Uue teate lisamise vorm
            if (isset($_REQUEST["lisamine"])) {
                ?>
                <form action="<?=$_SERVER["PHP_SELF"]?>">
                    <input type="hidden" name="uusleht" value="jah" />
                    <h2>Uue teate lisamine</h2>
                    <dl>
                        <dt><label for="nimi">Nimi:</label></dt>
                        <dd>
                            <input type="text" name="nimi" id="nimi" />
                        </dd>
                        <dt><label for="sisu">Sisu:</label></dt>
                        <dd>
                            <textarea rows="20" cols="30" name="sisu" id="sisu"></textarea>
                        </dd>
                        <dt><label for="pilt">Pilt:</label></dt>
                        <dd>
                            <input type="text" name="pilt" id="pilt"/>
                        </dd>
                        <dt><label for="hind">Hind:</label></dt>
                        <dd>
                            <input type="text" name="hind" id="hind"/>
                        </dd>
                        <dt><label for="kogus">Kogus:</label></dt>
                        <dd>
                            <input type="number" name="kogus" id="kogus"/>
                        </dd>
                    </dl>
                    <input type="submit" value="Sisesta" />
                </form>
                <?php
            }
            ?>
        </div>
        <?php
        $yhendus->close();
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

