

window.onload = function(){
    document.getElementById('expand').addEventListener("click", function(){
        if(document.getElementById("region").style.display != "initial"){

            document.getElementById("region").style.display = "initial";
            document.getElementById("image").src = "minus.png";
        }
        else{
            document.getElementById("region").style.display = "none";
            document.getElementById("image").src = "plus.png";
        }

    });
}

