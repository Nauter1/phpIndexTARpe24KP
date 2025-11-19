<?php
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
echo "<br>";
echo "+1min = time()+60 ".date("d.m.Y G:i:s", time()+60);
echo "<br>";
echo "+1hr = time()+60 ".date("d.m.Y G:i:s", time()+60*60);
echo "<br>";
echo "+1 päev = time()+60 ".date("d.m.Y G:i:s", time()+60*60*24);
?>
