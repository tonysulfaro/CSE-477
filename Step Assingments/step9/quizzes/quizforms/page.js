var number = Math.floor(Math.random() * 100);
console.log(number); 

window.onload = function () {



    // override form default function
    document.getElementById('form').onsubmit = function (event) {
        var guess = document.getElementById('guess').value;
        console.log("guess:"+guess);

        console.log("number:"+number);

        if (guess === null || guess === '') {
            document.getElementById('result').innerText = 'Silly you, enter a number!';
        }
        else{
            guess = Number(guess);

            if (guess < number) {
                document.getElementById('result').innerText = 'Too Low!';
            }
            if (guess > number) {
                document.getElementById('result').innerText = 'Too High!';
            }
            if (guess === number) {
                document.getElementById('result').innerText = "You're a winner!";
                console.log("win");
                number = Math.floor(Math.random() * 100);
            }
        }
        event.preventDefault();
    };

    

};

function giveUp(){
    document.getElementById('result').innerText = "The number was "+number+", dood. It's not that hard.";
        number = Math.floor(Math.random() * 100);
        console.log(number);
      
        }
