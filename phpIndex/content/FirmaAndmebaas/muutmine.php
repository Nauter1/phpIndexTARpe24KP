<?php if (isset($_GET['code'])) {die(highlight_file(__FILE__,1));} ?>
<?php
require('conf.php');

global $yhendus;

// Uue teate lisamine
if (isset($_REQUEST["uusleht"])) {
    if($_REQUEST["uusleht"]!==0){
        $kask = $yhendus->prepare("INSERT INTO lehed (pealkiri, sisu,kuupaev,autor,pilt) VALUES (?, ?, ?, ?,?)");
        $kask->bind_param("ssss", $_REQUEST["pealkiri"], $_REQUEST["sisu"], $_REQUEST["kuupaev"],$_REQUEST["autor"],$_REQUEST["pilt"]);
        $kask->execute();
        header("Location: ".$_SERVER["PHP_SELF"]);
        $yhendus->close();
        exit();
    }

}

// Teate kustutamine
if (isset($_REQUEST["kustutusid"])) {
$kask = $yhendus->prepare("DELETE FROM lehed WHERE id=?");
$kask->bind_param("i", $_REQUEST["kustutusid"]);
$kask->execute();
}

// Teate muutmine
if (isset($_REQUEST["muutmisid"])) {
$kask = $yhendus->prepare("UPDATE lehed SET pealkiri=?, sisu=?,kuupaev=?,autor=?,pilt=? WHERE id=?");
$kask->bind_param(
"sssssi",
$_REQUEST["pealkiri"],
$_REQUEST["sisu"],
$_REQUEST["kuupaev"],
$_REQUEST["autor"],
$_REQUEST["pilt"],
$_REQUEST["muutmisid"]
);
$kask->execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Teated lehel</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <style type="text/css">
        #menyykiht {
            float: left;
            padding-right: 30px;
        }
        #sisukiht {
            float: left;
        }
        #jalusekiht {
            clear: left;
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
<div id="menyykiht">
    <h2>Teated</h2>
    <ul>
        <?php
        $kask = $yhendus->prepare(
            "SELECT id, pealkiri FROM lehed"
        );
        $kask->bind_result($id, $pealkiri);
        $kask->execute();
        while ($kask->fetch()) {
            echo "<li><a href='".$_SERVER["PHP_SELF"].
                "?id=$id'>".htmlspecialchars($pealkiri)."</a></li>";
        }
        ?>
    </ul>
    <a href="<?=$_SERVER['PHP_SELF']?>?lisamine=jah">Lisa ...</a>
</div>

<div id="sisukiht">
    <?php
    // Ühe teate kuvamine või muutmine
    if (isset($_REQUEST["id"])) {
        $kask = $yhendus->prepare("SELECT id, pealkiri, sisu, kuupaev, autor, pilt FROM lehed WHERE id=?");
        $kask->bind_param("i", $_REQUEST["id"]);
        $kask->bind_result($id, $pealkiri, $sisu, $kuupaev, $autor,$pilt);
        $kask->execute();

        if ($kask->fetch()) {
            if (isset($_REQUEST["muutmine"])) {
                echo "
                   <form action='".$_SERVER["PHP_SELF"]."'>
                     <input type='hidden' name='muutmisid' value='$id'/>
                     <h2>Teate muutmine</h2>
                     <dl>
                       <dt>Pealkiri:</dt>
                       <dd>
                         <input type='text' name='pealkiri' value='".
                    htmlspecialchars($pealkiri)."'/>
                       </dd>
                       <dt>Teate sisu:</dt>
                       <dd>
                         <textarea rows='20' cols='30' name='sisu'>".
                    htmlspecialchars($sisu)."</textarea>
                       </dd>
                       <dt>Teate kuupaev:</dt>
                       <dd>
                         <input type='date' name='kuupaev' value='".
                    htmlspecialchars($kuupaev)."'/>
                       </dd>
                       <dt>Teate autor:</dt>
                       <dd>
                         <input type='text' name='autor' value='".
                    htmlspecialchars($autor)."'/>
                       </dd>
                       <dt>Teate pilt:</dt>
                       <dd>
                         <textarea rows='20' cols='30' name='pilt'>".
                    htmlspecialchars($pilt)."</textarea>
                       </dd>
                     </dl>                      
                     <input type='submit' value='Muuda' />
                   </form>
                ";
            } else {
                echo "<h2>".htmlspecialchars($pealkiri)."</h2>";
                echo htmlspecialchars($sisu);
                echo "<br>";
                echo "<img src='$pilt'>";
                echo "<br>";
                echo "<br>";
                echo "Lisamise kuupäev: ".htmlspecialchars($kuupaev);
                echo "<br>";
                echo "Autor: ".htmlspecialchars($autor);
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
                <dt><label for="pealkiri">Pealkiri:</label></dt>
                <dd>
                    <input type="text" name="pealkiri" id="pealkiri" />
                </dd>
                <dt><label for="sisu">Sisu:</label></dt>
                <dd>
                    <textarea rows="20" cols="30" name="sisu" id="sisu"></textarea>
                </dd>
                <dt><label for="kuupaev">Kuupaev:</label></dt>
                <dd>
                    <input type="date" name="Kuupaev" id="Kuupaev"/>
                </dd>
                <dt><label for="autor">Autor:</label></dt>
                <dd>
                    <input type="text" name="autor" id="autor"/>
                </dd>
                <dt><label for="pilt">Pilt:</label></dt>
                <dd>
                    <input type="text" name="pilt" id="pilt"/>
                </dd>
            </dl>
            <input type="submit" value="Sisesta" />
        </form>
        <?php
    }
    ?>
</div>

<div id="jalusekiht">
    Lehe tegi õpilane...
</div>
</body>
</html>
<?php
$yhendus->close();
?>
