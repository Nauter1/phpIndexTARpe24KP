<h1>Mobillimalli Konspekt</h1>
<div>
    Selle ülesande töö oli et teha mobiilisõbralik veebileht, antud juhul tegin Näideleht millel on väike tunniplaan ning Anekdoodi leht millel on naljad, Kasutasin php ja CSS-i mõlemal ülesandel ning näitan koodinäiteid mis kasutasin Anekdoodi tegemisel
</div>
<h2>Anekdoodid</h2>
<div>
    Antud juhul iga leht kasutab sarnast kujundust, nimelt selline: (lõikasin välja kõik kohad kus php mainin, näitan täieliku koodilõiget ka)
</div>

<pre>
require("anekdootpais.php");
   &lt; h2 &gt; Anekdootide pealeht &lt;/h2&gt;
    &lt;p&gt;
        require("anekdoot.txt");
    &lt;/p&gt;
 require("jalus.php");
</pre>
<br>
<h2>Täiendatud Leht</h2>
<br>
<div>
    Kõik require-id laevad osa lehest et ei peaks igal lehel olema  kopeeritud kujundus.
</div>
<br>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta name="viewport" content="width=device-width; initial-scale=1.0;
maximum-scale=1.0;"&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;title&gt;Anekdoodid&lt;/title&gt;
    &lt;link rel="stylesheet" href="anekdootkujundus.css"&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Kauri Anekdoodid&lt;/h1&gt;
&lt;div id="header"&gt;
    &lt;div class="nav"&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="../../../index.php"&gt;Tagasi&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="anekdoot.php"&gt;Pealeht&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="anekdootA.php"&gt;Josephi Tsitaat&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="anekdootB.php"&gt;Pinali nali&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="anekdootC.php"&gt;Programmeri nali&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="clear"&gt;&lt;/div&gt;
   &lt; h2 &gt; Anekdootide pealeht &lt;/h2&gt;
    &lt;p&gt;
        Kaks blondiini saavad kokku. Üks ütleb teisele:

        "Kuule, tegin täna rasedustesti."
        Teine vastu:
        "Kas olid ka rasked küsimused?"
    &lt;/p&gt;
&lt;div class="nav2"&gt;
    &lt;p&gt;Design by &lt;a
            href="http://www.mobifreaks.com"&gt;Mobifreaks.com&lt;/a&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<br>
<h2>CSS Kujundus</h2>
<br>
<div>
    CSS teeb nii et navigatsioon peab olema väike ning töötama korralikult mobiilis, nimelt margin:0 5px aitab lehel olla väike mobiilis kui vaja.
</div>
<br>
<pre>
.nav{
    font-size:14px;
    background: #beffc9;
    border-radius:6px;

    margin:0 5px;

}
</pre>
<br>
<h2>Näite pildid</h2>
<div class="flex-container">
    <div>
        Näide arvutis:<br>
        <img src="image/ArvutiNaide.png" alt="Arvuti Pilt" width="550" height="250">
    </div>
    <div>
        Näide mobiilis:<br>
        <img src="image/MobiiliNaide.jpg" alt="Arvuti Pilt" width="300" height="550">
    </div>
</div>