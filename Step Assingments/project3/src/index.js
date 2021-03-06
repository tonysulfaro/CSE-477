import $ from 'jquery';

console.log('Welcome from index.js');

$(document).ready(function () {
    console.log('on page load');
    new Game("#gameboard");
});


// game event listeners
const Game = function(sel) {
    var form = $(sel);

    form.submit(function(event) {
        event.preventDefault();
        //$(sel + " .result").html("<p>Searching</p>");



        installListeners();
        console.log("submit");
    });

    function installListeners(){
        // select button cell that was pressed
        $(sel + " td button").click(function(event) {
            event.preventDefault();

            var loc = this.value.split(',');
            var r = loc[0];
            var c = loc[1];

            console.log(loc);

            var payload = {'cell': this.value};

            // make ajax call to indicate that it was pressed
            // expecting: array(1) { ["cell"]=> string(3) "1,2" }
            $.ajax({
                url: "post/game-post.php",
                data: payload,
                method: "POST",
                success: function(data) {
                    console.log('ok');
                    console.log(payload);
                    //console.log(data);

                    // take returned html and replace board
                    var responseBoard = document.createElement('html');
                    responseBoard.innerHTML = data;


                    var newBody = responseBoard.getElementsByClassName('mainboard')[0];
                    console.log(newBody);

                    var existingBody = document.getElementsByClassName('mainboard')[0];
                    console.log(existingBody);

                    existingBody.innerHTML = newBody.outerHTML;
                    installListeners();
                },
                error: function(xhr, status, error) {
                    console.log('failed');
                    console.log(error);
                }

            });
        });


        $("div.controls button").click(function(event) {
            event.preventDefault();

            console.log(this.name);

            $.ajax({
                url: "post/game-post.php",
                data: this.name,
                method: "POST",
                success: function(data) {
                    console.log('ok');

                    // take returned html and replace board
                    var responseBoard = document.createElement('html');
                    responseBoard.innerHTML = data;


                    var newBody = responseBoard.getElementsByClassName('mainboard')[0];
                    console.log(newBody);

                    var existingBody = document.getElementsByClassName('mainboard')[0];
                    console.log(existingBody);

                    existingBody.innerHTML = newBody.outerHTML;
                    installListeners();
                },
                error: function(xhr, status, error) {
                    console.log('failed');
                    console.log(error);
                }

            });
        });
    }

};