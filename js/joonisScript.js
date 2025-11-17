// sirge joon
function sirgeJoon() {
    // määrame tahvli
    const tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d'); // anname tahvlinimi on t
        // joon
        t.beginPath();
        t.strokeStyle="red";
        t.lineWidth = 3;
        t.moveTo(50,100) // algus
        t.lineTo(150,200) // lõpp
        t.stroke();
    }
}

function kolmnurkJoon() {
    // määrame tahvli
    const tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d'); // anname tahvlinimi on t
        // joon
        t.beginPath();
        t.strokeStyle="blue";
        t.lineWidth = 1;
        t.moveTo(50,100) // algus
        t.lineTo(150,200) // lõpp
        t.lineTo(150,75)
        t.lineTo(50,100)
        t.stroke();
    }
}

function ringJoon(){
    const tahvel=document.getElementById('tahvel');
    let radius=document.getElementById('raadius');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        t.beginPath();
        t.strokeStyle="green";
        t.linewidth = 2;
        t.arc(80,80,radius.value,0,2*Math.PI,true);
        t.stroke();
    }
}

function rectJoon(){
    const tahvel=document.getElementById('tahvel');
    let width=document.getElementById('width');
    let height=document.getElementById('height');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        t.fillStyle="purple";
        t.fillRect(50,30,width.value,height.value)
    }
}

function randomImg(){
    const tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        const fail=new Image();
        fail.src="https://picsum.photos/300/250";
        t.drawImage(fail,0,0,300,250);
    }
}

function foor(){
    const tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        let r=tahvel.getContext('2d');
        r.beginPath();
        r.fillStyle="darkgray";
        r.strokeStyle="black";
        r.fillRect(90,30,40,100);
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="gray";
        t.linewidth = 2;
        t.arc(110,110,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="gray";
        t.linewidth = 2;
        t.arc(110,80,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="gray";
        t.linewidth = 2;
        t.arc(110,50,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
    }
}

function mineFoor(){
    const tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        let r=tahvel.getContext('2d');
        r.beginPath();
        r.fillStyle="darkgray";
        r.strokeStyle="black";
        r.fillRect(90,30,40,100);
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="green";
        t.linewidth = 2;
        t.arc(110,110,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="gray";
        t.linewidth = 2;
        t.arc(110,80,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="gray";
        t.linewidth = 2;
        t.arc(110,50,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
    }
}

function ootaFoor(){
    const tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        let r=tahvel.getContext('2d');
        r.beginPath();
        r.fillStyle="darkgray";
        r.strokeStyle="black";
        r.fillRect(90,30,40,100);
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="gray";
        t.linewidth = 2;
        t.arc(110,110,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="yellow";
        t.linewidth = 2;
        t.arc(110,80,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="gray";
        t.linewidth = 2;
        t.arc(110,50,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
    }
}

function seisaFoor(){
    const tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        let r=tahvel.getContext('2d');
        r.beginPath();
        r.fillStyle="darkgray";
        r.strokeStyle="black";
        r.fillRect(90,30,40,100);
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="gray";
        t.linewidth = 2;
        t.arc(110,110,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="gray";
        t.linewidth = 2;
        t.arc(110,80,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
        t.beginPath();
        t.strokeStyle="black";
        t.fillStyle="red";
        t.linewidth = 2;
        t.arc(110,50,13,0,2*Math.PI,true);
        t.stroke();
        t.fill();
    }
}

function puhasta(){
    const tahvel=document.getElementById('tahvel');
    if(tahvel.getContext){
        let t=tahvel.getContext('2d');
        t.clearRect(0,0,300,250);
    }
}

function eestiLipp(){
    const lipp=document.getElementById("lipp")
    if(lipp.getContext){
        let l = lipp.getContext("2d")
        l.fillStyle="blue";
        l.fillRect(0,0,330,70);
        l.fillStyle="black";
        l.fillRect(0,70,330,70);
        l.fillStyle="white";
        l.fillRect(0,140,330,70);
    }
}

function franceLipp(){
    const lipp=document.getElementById("lipp")
    if(lipp.getContext){
        let l = lipp.getContext("2d")
        l.fillStyle="blue";
        l.fillRect(0,0,110,210);
        l.fillStyle="white";
        l.fillRect(110,0,110,210);
        l.fillStyle="red";
        l.fillRect(220,0,110,210);
    }
}

function canadaLipp(){
    const lipp=document.getElementById("lipp")
    const fail=new Image();
    fail.src="image/Flag_of_Canada_(leaf).png";
    if(lipp.getContext){
        let l = lipp.getContext("2d")
        l.fillStyle="red";
        l.fillRect(0,0,90,210);
        l.fillStyle="white"
        l.fillRect(90,0,300,210)
        fail.onload=()=> {
            l.drawImage(fail, 95, 40, 141, 144)
        }
        l.fillStyle="red";
        l.fillRect(240,0,90,210);
    }
}