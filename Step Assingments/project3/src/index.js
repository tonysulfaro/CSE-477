import $ from 'jquery';

console.log('Welcome from index.js');

$(document).ready(function () {
    console.log('on page load');
    new Game("#gameboard");
});



const Game = function(sel) {
    var form = $(sel);

    form.submit(function(event) {
        event.preventDefault();
        //$(sel + " .result").html("<p>Searching</p>");



        console.log("submit");
    });

    $(sel + " td button").click(function(event) {
        event.preventDefault();

        var loc = this.value.split(',');
        var r = loc[0];
        var c = loc[1];

        console.log(loc);
    });

};