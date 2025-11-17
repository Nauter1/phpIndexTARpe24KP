function arvuta(kogus, hind){
    return (kogus*hind).toFixed(2);
    // toFixed - ümardab 2 numbri peale koma

}
const taksoHind=7;
const rongHind=5;
const restoranHind=12;
const bussiHind=3;

function teenusSelection(){
    let t1=document.getElementById('t1');
    let t2=document.getElementById('t2');
    let t3=document.getElementById('t3');
    let t4=document.getElementById('t4');
    let kogusinfo=document.getElementById('kogusinfo');
    let koguslabel=document.getElementById('koguslabel');
    if (t1.checked){
        kogusinfo.innerHTML="Valitud Teenus: Takso, iga kilomeeter maksab 7 eurot"
        koguslabel.innerHTML="Kilomeetrid: "
    }
    if (t2.checked){
        kogusinfo.innerHTML="Valitud Teenus: Rong, iga pilet maksab 5 eurot"
        koguslabel.innerHTML="Piletid: "
    }
    if (t3.checked){
        kogusinfo.innerHTML="Valitud Teenus: Restoran, Ühe inimese eine maksab 12 eurot"
        koguslabel.innerHTML="Mitu inimest sööb: "
    }
    if (t4.checked){
        kogusinfo.innerHTML="Valitud Teenus: Buss, iga pilet maksab 3 eurot"
        koguslabel.innerHTML="Piletid: "
    }
}


function arvutaTeenusHind(){

    let t1=document.getElementById('t1');
    let t2=document.getElementById('t2');
    let t3=document.getElementById('t3');
    let t4=document.getElementById('t4');
    let kogus=document.getElementById('kogus');
    let l6pphindinfo=document.getElementById('l6pphindinfo');
    let l6pphindinfo2=document.getElementById('l6pphindinfo2');
    let l6pphind=document.getElementById('l6pphind');
    let selection=document.getElementById('selection');

    if (t1.checked){
        l6pphindinfo.innerHTML="Valitud teenus on Takso, iga kilomeeter maksab 7 eurot"
        l6pphindinfo2.innerHTML="Sõidad " + kogus.value + " kilomeetrit."
        selection.src="https://pngimg.com/d/taxi_logos_PNG8.png"
        l6pphind.innerHTML="Lõpphind: " + arvuta(kogus.value, taksoHind)+" €";
    }
    if (t2.checked){
        l6pphindinfo.innerHTML="Valitud teenus on Rong, iga pilet maksab 5 eurot"
        l6pphindinfo2.innerHTML="Ostsid " + kogus.value + " piletit."
        selection.src="https://www.bluebell-railway.com/wp-content/uploads/2025/01/IMG_6702-300x300.jpg"
        l6pphind.innerHTML="Lõpphind: " + arvuta(kogus.value, rongHind)+" €";
    }
    if (t3.checked){
        l6pphindinfo.innerHTML="Valitud teenus on Restoran, Ühe inimese eine maksab 12 eurot"
        l6pphindinfo2.innerHTML=kogus.value + " inimest sööb."
        selection.src="https://static.dezeen.com/uploads/2019/03/wayan-restaurant-rockwell-group-interior-lower-manhattan-new-york-city-us_dezeen_2364_sq2-300x300.jpg"
        l6pphind.innerHTML="Lõpphind: " + arvuta(kogus.value, restoranHind)+" €";
    }
    if (t4.checked){
        l6pphindinfo.innerHTML="Valitud teenus on Buss, iga pilet maksab 3 eurot"
        l6pphindinfo2.innerHTML="Ostsid " + kogus.value + " piletit."
        selection.src="https://atko.ee/wp-content/uploads/2017/03/373BNZ6-300x300.jpg"
        l6pphind.innerHTML="Lõpphind: " + arvuta(kogus.value, bussiHind)+" €";
    }
}