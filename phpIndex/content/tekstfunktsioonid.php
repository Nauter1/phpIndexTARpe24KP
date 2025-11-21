<?php
echo "<h2>Tekstfunktsioonid</h2>";
$tekst='Veebirakendused on arvutitarkvara programm';
echo $tekst; // näitab muutuja sisu
echo "<br>";
echo "Mitu sõna on lauses - str_word_count() - ".str_word_count($tekst)." sõna";
// metshein.com --> PHP alused
echo "<br>";
echo "Kõik tähed muudab väikseks - strtolower() - ". strtolower($tekst);
echo "<br>";
echo "Kõik tähed muudab suureks - strtoupper() - ".strtoupper($tekst);
echo "<br>";
echo "Näitab mitu tähemarki on tekstis - strlen() - ".strlen($tekst);
echo "<br>";
echo "<h3>Teksti trimmimine</h3>";
$tekst2 = ' 	A woman should soften but not weaken a man   ';
echo "<pre>$tekst2</pre>";
echo "<br>";
echo "trim Eemaldab tühikud tekstis - ";
echo "<pre>".trim($tekst2)."</pre>";
echo "<br>";
echo "ltrim Eemaldab tühikud teksti algusest - ";
echo "<pre>".ltrim($tekst2)."</pre>";
echo "<br>";
echo "rtrim Eemaldab tühikud teksti lõpust - ";
echo "<pre>".rtrim($tekst2)."</pre>";
echo "<br>";
echo "<h3>Tekst kui massiiv</h3>";
echo "Tekst on käsitletud massiivina";
echo "<br>";
echo "Võtab tekstist esimene täht tekst[0] - ".$tekst[0];
echo '<br>';
echo "Võtab tekstist viies täht tekst[4] - ".$tekst[4];
echo '<br>';
echo '<h3>Substringid</h3>';
echo "substr - võtab teksti osa alates neljandast kuni kuues täht - substr(tekst,3,5) - ".substr($tekst, 3, 5);
echo '<br>';
echo "substr - võtab teksti osa alates viiendast kuni kolmeteistkümnes täht lõpust - substr(tekst,4,-13) - ".substr($tekst, 4, -13);
echo '<br>';
echo "substr - võtab paremalt poolt alates 8. tähest ning loeb 7 tähte - substr(tekst,-8,7) - ".substr($tekst, -8, 7);
echo '<br>';
print_r(str_word_count($tekst, 1)); // Array ( [0] => Veebirakendused [1] => on [2] => arvutitarkvara [3] => programm )
echo '<br>';
$sona = str_word_count($tekst, 1);
echo "võtab viies sõna tekstist - sona[4] - ".$sona[3];
echo '<br>';
echo '<h3>Teksti asendamine</h3>';
$asendus = 'Tarkvara';
$otsitav_algus = 19;
$otsitav_pikkus = 14;
echo "asendab teksti alustades tähest kuni jõuab pikkuse lõpuni - substr_replace(tekst,asendussõna,kust algab,kui pikk) - ".substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
echo '<br>';
echo '<pre>';
echo '$asendus = Tarkvara; // eemaldasin kirjamärgid kuna tegi pre katki
$otsitav_algus = 19;
$otsitav_pikkus = 14;
echo substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);';
echo '</pre>';
echo '<br>';
$otsi = array('on', 'programm');
$asenda = array('----', 'software');
echo "otsib sõna ja asendab - str_replace(otsi,asenda,tekst) - ".str_replace($otsi, $asenda, $tekst);
echo '<br>';
echo '<pre>';
echo '$otsi = array(on, programm);
$asenda = array(----, software);
echo str_replace($otsi, $asenda, $tekst);';
echo '</pre>';
echo '<br>';
echo '<h3>Mõistatus</h3>';
$linn='Rakvere';
$linnotsi = array('a','e');
$linnasenda = '*';


echo '<pre>';
echo 'Mõistatus - Arva ära eesti linnanimi
eesmärk on ära arvata, millist eesti linna on kirjeldatud
sul on 6 erinevat vihjet antud.';
echo '</pre>';
echo '<br>';
echo 'Esimene täht on - '.substr($linn,0,1);
echo '<br>';
echo 'Viies täht on - '.substr($linn,4,1);
echo '<br>';
echo 'Kuues täht on - '.substr($linn,5,1);
echo '<br>';
echo 'Kolmas kuni Neljas täht on - '.substr($linn,2,2);
echo '<br>';
echo 'Tähtede arv on - '.strlen($linn);
echo '<br>';
echo 'Kui vahetan kõik A ja E tähed *-iga, linna nimi on - '.str_replace($linnotsi, $linnasenda, $linn);
echo '<br>';
?>
<form action="tekstfunktsioonid.php" method="post">
    <label for="linn">Sisesta linnanimi</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="kontrolli">
</form>
<?php
    if(isset($_REQUEST['linn'])){
        if($_REQUEST['linn']=='Rakvere'){
            echo $_REQUEST['linn']." on õige.";
        }else{
            $_REQUEST['linn']." on vale.";
        }
    }