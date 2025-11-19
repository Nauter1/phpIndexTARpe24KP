<?php
echo "<div class='flex-container'>";
echo "<div>";
echo "<h1>Ajafunktsioonid</h1>";
echo "Tänane kuupäev ".date("d.m.Y");
date_default_timezone_set("Europe/Helsinki");
echo "<br>";
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezones</a>";
echo "<br>";
echo "time() - aeg sekundites ".time();
echo "<br>";
echo "date () -".date("d.m.Y G:i:s", time());
echo "<br>";
echo "<pre>
date('d.m.Y G:i:s', time())
d - päev, kasutab 01-31
m - kuu, kasutab 1-12
Y - aastat, neljakohane arv,
G - 24h formaat
i - minutid 0-59-ni
s - sekundid 0-59-ni

</pre>";
// timezone - kui timezone ei ole määratud siis php kasutab aega mis on local hostis -->
echo "</div>";
echo "<div>";
echo "<h2>Tehted kuupäevaga</h2>";
echo "<br>";
echo "+1min = time()+60 ".date("d.m.Y G:i:s", time()+60);
echo "<br>";
echo "+1hr = time()+60 ".date("d.m.Y G:i:s", time()+60*60);
echo "<br>";
echo "+1 päev = time()+60 ".date("d.m.Y G:i:s", time()+60*60*24);
echo "<br>";
echo "</div>";
echo "<div>";
echo "<h2>Kuupäeva genereerimine</h2>";
echo "<br>";
echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
echo "<br>";
$synnipäev=mktime(8,5,6,9,23,2007);
echo "Minu sünnipäev ".date("d.m.Y G:i:s", $synnipäev);

echo "<br>";

echo "massiivi abil näidata tänane kuu nimetus";
echo "<br>";
$kuud=array(1=>'Jaanuar','Veebruar','Märts','Aprill','Mai','Juuli','Juuni','August','September','Oktober','November','Detsember');
$paev=date('d');
$aasta=date('Y');
$kuu=$kuud[date('m')];
echo "Tänane kuupäev kuunimega - ".$paev.". ".$kuu." ".$aasta."a";
// ise kirjuta oma sünnipäeva kuu nimega
echo "<br>";
$synnipaev=23;
$synnikuu=$kuud[9];
$synniaasta=2007;
echo "Sünnipäev - ".$synnipaev.". ".$synnikuu." ".$synniaasta."a";
echo "</div>";
echo "</div>";
?>
