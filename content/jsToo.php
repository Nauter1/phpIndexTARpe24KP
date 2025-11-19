<h1>Joonistamine JS-ga</h1>
<canvas id="tahvel" width="300" height="250"></canvas>
<br>
<input type="button" value="Sirge joon" onclick="sirgeJoon()">
<input type="button" value="Kolmnurk" onclick="kolmnurkJoon()">
<br>
<label for="raadius">Radius:</label>
<input type="number" id="raadius" min="0" max="60" value="5">
<input type="button" value="Ring" onclick="ringJoon()">
<br>
<input type="number" id="width" min="0" max="60" value="5">
<input type="number" id="height" min="0" max="60" value="5">
<input type="button" value="Rectangle" onclick="rectJoon()">
<br>
<input type="button" value="Picsum Pilt" onclick="randomImg()">
<br>
<input type="button" value="Foor" onclick="foor()">
<input type="button" value="Mine" onclick="mineFoor()">
<input type="button" value="Oota" onclick="ootaFoor()">
<input type="button" value="Seisa" onclick="seisaFoor()">
<br>
<input type="button" value="Puhasta" onclick="puhasta()">
<br>

<h1>Lipud</h1>
<canvas id="lipp" width="330" height="210"></canvas>
<input type="button" value="Eesti lipp" onclick="eestiLipp()">
<input type="button" value="Prantsus lipp" onclick="franceLipp()">
<input type="button" value="Canada lipp" onclick="canadaLipp()">