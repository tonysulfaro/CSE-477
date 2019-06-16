var status = 0;

window.onload = function(){
    document.getElementById('flip').addEventListener("click", function(){
        if(status == 0){
            status = 1;
            document.getElementById("message").style.transform = "rotate(180deg)";
            document.getElementById("message").innerHTML = "Upside Down";
            document.getElementById("message").style.textAlign = "right";
        }
        else{
            status = 0;
            document.getElementById("message").style.transform = "rotate(0deg)";
            document.getElementById("message").innerHTML = "Right Side Up";
            document.getElementById("message").style.textAlign = "left";
        }

    });
}

