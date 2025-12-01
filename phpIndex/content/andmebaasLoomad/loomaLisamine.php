<?php
require('conf.php');
global $yhendus;
if(isset($_REQUEST["loomanimi"]) && $_REQUEST["loomanimi"]!=0){
    $kask=$yhendus->prepare("INSERT INTO loomad(loomanimi,kaal,varv) VALUES(?,?,?)");
    $kask->bind_param("sis",$_REQUEST["loomanimi"],$_REQUEST["kaal"],$_REQUEST["varv"]);
    $kask->execute();
    header("Location:loomadeKuvamine.php");
}

?>
<!DOCTYPE html>
<html lang="et">
    <head>
        <title>Looma Lisamine SQL Tabeli Sisse</title>
        <link rel="stylesheet" href="andmebaasStyle.css">
    </head>
<body>
<h1>
    Looma Lisamine
</h1>
<form action="" name="loom">
<table>

        <tr>
            <td>
                <label for="loomanimi">Sisesta looma nimi</label>
            </td>
            <td>
                <input type="text" name="loomanimi" id="loomanimi">
            </td>
        </tr>
        <tr>
            <td>
                <label for="kaal">Sisesta looma kaal</label>
            </td>
            <td>
                <input type="number" name="kaal" id="kaal">
            </td>
        </tr>
        <tr>
            <td>
                <label for="varv">Sisesta looma varv</label>
            </td>
            <td>
                <input type="text" name="varv" id="varv">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Lisa">
            </td>
        </tr>

</table>
</form>

</body>
</html>
