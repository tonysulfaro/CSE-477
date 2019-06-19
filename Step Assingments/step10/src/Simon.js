import * as $ from 'jquery';

export const Simon = function (sel) {
    const that = this;

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
        start.click(function(event) {
            that.onStart();
        });
    };

    this.onStart = function() {
        console.log('Start button pressed');

        const start = this.form.find('#start');
        start.remove();
    };

    // Ensure this is the last line of the function!
    this.initialize();


};