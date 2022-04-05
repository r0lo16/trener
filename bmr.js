
function Calo()
{
   var h= document.getElementById('hi').value;
   var w= document.getElementById('we').value;
   var age=document.getElementById('age').value;

   var calo=Math.round(10*w/1+ 6.25 * h/1 - 5 * age/1 + 5);
   var calom = calo*1.4;

    document.getElementById("resultcal").innerHTML = "Twoje Dzienne Zapotrzebowanie: "+ calom+"&nbsp"+"kcal" ;
    //for showing protin fats carbs in pie chat

    const proteins =Math.round(calom*0.25)/4;
    const carbs= Math.round(calom*0.60)/4;
    const fats = Math.round(calom*0.15)/9; 

    document.getElementById("resultcalp").innerHTML = "Dzienne zapotrzebowanie białka: "+ proteins +"&nbsp"+"g";
    document.getElementById("resultcalc").innerHTML = "Dzienne zapotrzebowanie węglowodanów: "+ carbs +"&nbsp"+"g";
    document.getElementById("resultcalf").innerHTML = "Dzienne zapotrzebowanie tłsuzczy: "+ fats +"&nbsp"+"g";

}

function Clear()
{
    document.getElementById('resultcal').innerHTML="";
    document.getElementById('resultcalp').innerHTML="";
    document.getElementById('resultcalc').innerHTML="";
    document.getElementById('resultcalf').innerHTML="";
} 