function combi() {
    // The current combination as entered
    var code = "";

    // The secret code we are looking for
    var secret = "CABB";

    /*
     * Create the HTML and put it into the div
     */
    var lock = document.getElementById("lock");

    var html = '<form>' +
        '<p id="code">&nbsp;</p>' +
        '<p>' +
        '<input type="submit" id="A" value="A">' +
        '<input type="submit" id="B" value="B">' +
        '<input type="submit" id="C" value="C">' +
        '<input type="submit" id="D" value="D">' +
        '<input type="submit" id="clear" value="Clear"></p>' +
        '<p id="status">Closed</p></form>';

    lock.innerHTML = html;

    /*
     * Install clear listener
     */
    document.getElementById("clear").onclick = function(event) {
        event.preventDefault();
        code = "";
        update();
    }

    /*
     * Install button listeners
     */
    installListener("A");
    installListener("B");
    installListener("C");
    installListener("D");

    /*
     * Install a button listener. I assume the
     * button id is the letter we are clicking
     */
    function installListener(letter) {
        document.getElementById(letter).onclick = function(event) {
            event.preventDefault();
            code += letter;
            update();
        }
    }

    /*
     * Update the code and status paragraphs to indicate
     * the current word and lock status
     */
    function update() {
        if(code === '') {
            document.getElementById("code").innerHTML = "&nbsp;";
        } else {
            document.getElementById("code").innerHTML = code;
        }

        document.getElementById("status").innerHTML = code === secret ? "Open" : "Closed";
    }
}