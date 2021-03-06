function hangman() {

    console.log('Hangman Started');
    // Pick a random word
    var word = randomWord();
    var guesses = [];
    var incorrect_guess_count = 0;
    console.log(word);

    // Make a "guess" string with underbars
    // where each letter will go. We will fill
    // this in with letters as we find them.
    var guess = '';
    for (var i = 0; i < word.length; i++) {
        guess += '_';
    }

    // The HTML for the page
    var html = '<p id="image"><img id="hangpic" width="125" height="300" src="images/hm0.png"></p>';
    var img = 0;

    html += '<p id="guess"></p>';
    html += '<form>';
    html += '<input type="hidden" id="word" value="' + word + '">';
    html += '<p><label for="letter">Letter: </label><input type="text" id="letter"></p>';
    html += '<p><input type="submit" id="try" value="Guess!"> <input type="submit" id="new" value="New Game"> </p>';
    html += '<p id="message">&nbsp;</p>';
    html += '</form>';

    document.getElementById("play-area").innerHTML = html;

    setGuess(guess);

    //document attributes
    var message = document.getElementById('message');

    document.getElementById("try").onclick = function (event) {

        console.log('guessed');
        event.preventDefault();

        var letter_guess = document.getElementById('letter').value;

        // check length, display error
        if (letter_guess.length > 1 || letter_guess == "") {
            message.innerHTML = 'You must enter a letter!';
        }
        else {

            //add guess to array
            guesses.push(letter_guess);

            console.log(incorrect_guess_count);

            // guess not in word
            if(!word.includes(letter_guess)){
                incorrect_guess_count++;
            }

            document.getElementById('hangpic').src = "images/hm"+incorrect_guess_count+".png";
            if(incorrect_guess_count === 6){
                message.innerHTML = 'You guessed poorly!';
            }

            var new_display = "";
            message.innerHTML = "";

            // generate text
            for (var i = 0; i < word.length; i++) {
                if (guesses.includes(word[i])) {
                    new_display += word[i] + " ";
                } else {
                    new_display += "_ ";
                }
            }

            //check if won
            if (!new_display.includes('_')) {
                message.innerHTML = 'You Win!';
            }

            console.log(new_display);
            document.getElementById('guess').innerHTML = new_display;
        }
    };

    document.getElementById('new').onclick = function(event){

        word = randomWord();
        document.getElementById('word').innerHTML = word;
        console.log(word);

        guesses = [];
        incorrect_guess_count = 0;
        var new_display = "";
        message.innerHTML = "";
        document.getElementById('hangpic').src = "images/hm"+incorrect_guess_count+".png";

        // generate text
        for (var i = 0; i < word.length; i++) {
            if (guesses.includes(word[i])) {
                new_display += word[i] + " ";
            } else {
                new_display += "_ ";
            }
        }

        console.log(new_display);
        document.getElementById('guess').value = new_display;

        event.preventDefault();
    };

}

// Set the guess in the from
function setGuess(guess) {
    var g = '';
    for (var i = 0; i < guess.length; i++) {
        g += guess.charAt(i) + ' ';
    }

    document.getElementById("guess").innerHTML = g;
}


function randomWord() {
    var words = ["moon", "home", "mega", "blue", "send", "frog", "book", "hair", "late",
        "club", "bold", "lion", "sand", "pong", "army", "baby", "baby", "bank", "bird", "bomb", "book",
        "boss", "bowl", "cave", "desk", "drum", "dung", "ears", "eyes", "film", "fire", "foot", "fork",
        "game", "gate", "girl", "hose", "junk", "maze", "meat", "milk", "mist", "nail", "navy", "ring",
        "rock", "roof", "room", "rope", "salt", "ship", "shop", "star", "worm", "zone", "cloud",
        "water", "chair", "cords", "final", "uncle", "tight", "hydro", "evily", "gamer", "juice",
        "table", "media", "world", "magic", "crust", "toast", "adult", "album", "apple",
        "bible", "bible", "brain", "chair", "chief", "child", "clock", "clown", "comet", "cycle",
        "dress", "drill", "drink", "earth", "fruit", "horse", "knife", "mouth", "onion", "pants",
        "plane", "radar", "rifle", "robot", "shoes", "slave", "snail", "solid", "spice", "spoon",
        "sword", "table", "teeth", "tiger", "torch", "train", "water", "woman", "money", "zebra",
        "pencil", "school", "hammer", "window", "banana", "softly", "bottle", "tomato", "prison",
        "loudly", "guitar", "soccer", "racket", "flying", "smooth", "purple", "hunter", "forest",
        "banana", "bottle", "bridge", "button", "carpet", "carrot", "chisel", "church", "church",
        "circle", "circus", "circus", "coffee", "eraser", "family", "finger", "flower", "fungus",
        "garden", "gloves", "grapes", "guitar", "hammer", "insect", "liquid", "magnet", "meteor",
        "needle", "pebble", "pepper", "pillow", "planet", "pocket", "potato", "prison", "record",
        "rocket", "saddle", "school", "shower", "sphere", "spiral", "square", "toilet", "tongue",
        "tunnel", "vacuum", "weapon", "window", "sausage", "blubber", "network", "walking", "musical",
        "penguin", "teacher", "website", "awesome", "attatch", "zooming", "falling", "moniter",
        "captain", "bonding", "shaving", "desktop", "flipper", "monster", "comment", "element",
        "airport", "balloon", "bathtub", "compass", "crystal", "diamond", "feather", "freeway",
        "highway", "kitchen", "library", "monster", "perfume", "printer", "pyramid", "rainbow",
        "stomach", "torpedo", "vampire", "vulture"];

    return words[Math.floor(Math.random() * words.length)];
}