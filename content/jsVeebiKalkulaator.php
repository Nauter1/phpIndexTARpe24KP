<h1>Teenuse kalkulaator</h1>
<fieldset>
    <legend>Teenus</legend>
    <input type="radio" name="teenus" id="t1" value="teenus1" onclick="teenusSelection()">
    <label for="t1">Takso</label>
    <br>
    <input type="radio" name="teenus" id="t2" value="teenus2" onclick="teenusSelection()">
    <label for="t2">Rong</label>
    <br>
    <input type="radio" name="teenus" id="t3" value="teenus3" onclick="teenusSelection()">
    <label for="t3">Restoran</label>
    <br>
    <input type="radio" name="teenus" id="t4" value="teenus4" onclick="teenusSelection()">
    <label for="t4">Bussipilet</label>
</fieldset>
<br>
<fieldset>
    <legend>Kogus</legend>
    <div id="kogusinfo"></div>
    <label for="kogus" id="koguslabel"></label>
    <input type="number" name="kogus" id="kogus" min="1" max="100" value="1">
</fieldset>
<br>
<input type="button" value="Arvuta!" onclick="arvutaTeenusHind()">
<br><br>
<fieldset>
    <legend>Lõpphind</legend>
    <img src="" id="selection" alt="">
    <div id="l6pphindinfo"></div>
    <br>
    <div id="l6pphindinfo2"></div>
    <br>
    <div id="l6pphind"></div>
</fieldset>