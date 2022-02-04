//hamburger menu
function menu(){
    let x=document.getElementById("nav-links");
    if(x.style.display==="flex"){
        x.style.display="none";
    }
    else{
        x.style.display="flex";
    }
}


//show drop-down menu
function dropdown(){
    let drop=document.getElementById("dropdown");
    if(drop.style.display=="block"){
        drop.style.display="none";
    }
    else{
        drop.style.display="block";
    }
}
