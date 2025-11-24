<?php
function clearVarsExcept($url,$varname){
    $url=basename($url);
    if(str_starts_with($url,"?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url,"?")."?$varname=".$_REQUEST[$varname];
}
echo "<h2>Matemaatilised tehted/funktsioonid</h2>";
$arv1 = 10;
$arv2 = 15;
$liitmine = $arv1+$arv2;
$lahutamine = $arv1-$arv2;
$korrutis=$arv1*$arv2;
$jagamine=$arv1/$arv2;
echo "arv1 on ".$arv1." ja arv2 on ".$arv2."<br>";
echo "<strong>Vastused:</strong> <br>";
echo "Liitmine: ".$liitmine."<br>";
echo "Lahutmine: ".$lahutamine."<br>";
echo "Korrutis: ".$korrutis."<br>";
echo "Jagamine: ".$jagamine."<br>";
echo "Omistamise operaatorid:<br>";
// $arv1++ - suurendamine ühe võrra $arv1=$arv1+1
$arv1++;
echo $arv1." - Suurendamine ühe võrra";
echo "<br>";
$arv1--;
// $arv1-- - vähendamine ühe võrra $arv1=$arv1-1
echo $arv1." - vähendamine ühe võrra";
echo "<br>";
echo "<strong>Ruutjuur - sqrt() </strong>".sqrt($arv1)."<br>";
echo "<br>";
echo "<strong>Kõige väiksem ja suurem: Massiiv (12,24,36,48,60)</strong>";
echo "<br>";
echo "<strong>Väiksem - </strong>".min(12,24,36,48,60)."<br>";
echo "<strong>Suurem - </strong>".max(12,24,36,48,60)."<br>";
echo "<br>";
echo "<strong>Ümardamine</strong>";
echo "<br>";
$arv3 = 3.6272;
echo "Arv: ".$arv3;
echo "<br>";
echo "Ümardatud: ".round($arv3,2);
echo "<br>";
echo "Ümardamine üles: ".ceil($arv3);
echo "<br>";
echo "Ümardamine alla: ".floor($arv3);
echo "<br><br>";
echo "Suvaline Arv: ".rand();
echo "<br>";
echo "Astendamine: ".pow($arv2,2);
echo "<br>";
echo "Pii: ".pi();
echo "<br>";
$arvx = rand(2,13);
$arvy = rand(4,17);
echo "<br>";
echo "Pindala Arvutus kasutades suvalisi arvu: <br>";
echo "x: ".$arvx."<br>";
echo "y: ".$arvy."<br>";
echo "<br>";
echo "Pindala: ".$arvx*$arvy."cm2 <br>";
echo "<br>";
echo "<h2>Arvmõistatus - Arva ära kaks arvu vahemikus 0..10</h2>";
$salarv1=4;
$salarv2=8;
echo "Kui korrutada X Y-ga, vastus on ".$salarv1*$salarv2."<br>";
echo "Kui lahutada X Y-ga, vastus on ".$salarv1-$salarv2."<br>";
echo "Kui jagada Y X-ga, vastus on ".$salarv2/$salarv1."<br>";
echo "Kui astendada Y X-ga, vastus on ".pow($salarv2,$salarv1)."<br>";
echo "Kui lahutada Y X-ga, vastus on ".$salarv2-$salarv1."<br>";
?>
<form action="<?=clearVarsExcept($_SERVER['REQUEST_URI'],'leht')?>" method="post">
    <label for="ans1">Sisesta X:</label>
    <input type="text" id="ans1" name="ans1">
    <label for="ans2">Sisesta Y:</label>
    <input type="text" id="ans2" name="ans2">
    <input type="submit" value="kontrolli">
</form>
<?php
    echo "<br>";
if(isset($_REQUEST['ans1'])&&($_REQUEST['ans1']!="")) {
        echo "X:";
        if ($_REQUEST['ans1'] == $salarv1) {
            echo "<div id='correct'>";
            echo $_REQUEST['ans1'] . " on õige.";
            echo "</div>";
        } else {
            echo "<div id='incorrect'>";
            echo $_REQUEST['ans1'] . " on vale.";
            echo "</div>";
        }
    }
    echo "<br>";
    if(isset($_REQUEST['ans2'])&&($_REQUEST['ans2']!="")) {
            echo "Y:";
            if ($_REQUEST['ans2'] == $salarv2) {
                echo "<div id='correct'>";
                echo $_REQUEST['ans2'] . " on õige.";
                echo "</div>";
            } else {
                echo "<div id='incorrect'>";
                echo $_REQUEST['ans2'] . " on vale.";
                echo "</div>";
            }
    }