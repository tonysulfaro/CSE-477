import * as $ from 'jquery';

export const Simon = function (sel) {
    const that = this;

    this.state = "initial";
    this.sequence = [0, 2, 1];
    this.current = 0;

    this.initialize = function () {
        console.log('Simon started');

        const div = $(sel);
        div.html(
            '<form>' +
            '<p>' +
            '<input type="button" value="Red">' +
            '<input type="button" value="Green">' +
            '<input type="button" value="Blue">' +
            '<input type="button" value="Yellow">' +
            '</p>' +
            '<p>' +
            '<input id="start" type="button" value="Start">' +
            '</p>' +
            '</form>' +
            '<audio id="red" src="audio/red.mp3" preload="auto"></audio>' +
            '<audio id="green" src="audio/green.mp3" preload="auto"></audio>' +
            '<audio id="blue" src="audio/blue.mp3" preload="auto"></audio>' +
            '<audio id="yellow" src="audio/yellow.mp3" preload="auto"></audio>' +
            '<audio id="buzzer" src="audio/buzzer.mp3" preload="auto"></audio>'
        );

        this.form = div.find('form');
        const start = this.form.find('#start');
        start.click(function (event) {
            that.onStart();
        });


    }

    this.play = function() {
        this.state = "play";    // State is now playing
        this.current = 0;       // Starting with the first one

        this.playCurrent();
    }

    this.playCurrent = function() {

        var that = this;

        if(this.current < this.sequence.length) {
            // We have one to play
            var colors = ['red', 'green', 'blue', 'yellow'];
            document.getElementById(colors[this.sequence[this.current]]).play();
            this.current++;

            window.setTimeout(function() {
                that.playCurrent();
            }, 1000);
        } else {
        }
    }

    this.onStart = function () {
        console.log('Start button pressed');

        const start = this.form.find('#start');
        start.remove();

        this.configureButton(0, "red");
        this.configureButton(1, "green");
        this.configureButton(2, "blue");
        this.configureButton(3, "yellow");


        this.play();
    }

    this.buttonOn = function(button) {
        // button.css("background-color", color);

        // reset on press
        if(button === -1){

            for(var i = 0; i <= 3; i++){
                // set to grey
                $(this.form.find("input").get(0)).css('background-color', 'grey');
            }
        }
        else{
            $(this.form.find("input").get(button)).css('background-color', 'purple');
        }
    }

    this.configureButton = function (ndx, color) {
        var button = $(this.form.find("input").get(ndx));
        //  var button = this.form.find('p:first-child input:nth-child(' + ndx + ')');
        var that = this;

        button.click(function (event) {

        });

        button.mousedown(function (event) {
            button.css("background-color", color);
        });

        button.mouseup(function (event) {
            button.css("background-color", "lightgrey");
        });

        button.click(function (event) {
            document.getElementById(color).currentTime = 0;
            document.getElementById(color).play();
        });
    }

    // Ensure this is the last line of the function!
    this.initialize();
}

Simon.prototype.configureButton = function (ndx, color) {
    var button = $(this.form.find("input").get(ndx));
    //  var button = this.form.find('p:first-child input:nth-child(' + ndx + ')');
    var that = this;

    button.click(function (event) {

    });

    button.mousedown(function (event) {
        button.css("background-color", color);
    });

    button.mouseup(function (event) {
        button.css("background-color", "lightgrey");
    });


}

