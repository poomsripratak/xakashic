const dur = document.getElementById("duration");
const valueDur = data["Duration"]*data["Episodes"];
if (Number(valueDur)>=60){
    const valueDuration = Number(valueDur)/60;
    if (Number.isInteger(valueDuration)){
        dur.innerHTML=valueDuration+" hr";
    }else {
        dur.innerHTML=Math.floor(valueDuration)+" hr "+Number(valueDur) % 60+" min";
    }
}else{
    dur.innerHTML=Number(valueDur)+" min";
}