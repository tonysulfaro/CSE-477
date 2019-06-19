function TicTacToe(id) {
    this.board = [['', '', ''], ['', '', ''], ['', '', '']];
    this.current = 'X';
    this.div = document.getElementById(id);

    this.present = function () {
        var html = "<table>";
        for (var r = 0; r < 3; r++) {
            html += "<tr>";
            for (var c = 0; c < 3; c++) {
                if (this.board[r][c] === '') {
                    html += `<td onclick="ttt.makeMove(` + r + `,` + c + `)">`;
                } else {
                    html += '<td>';
                }
                html += this.board[r][c] + "</td>";
            }
            html += `</tr>`;
        }

        html += "</table>";

        if(this.checkWinner() !== ''){
            html += '<p id="newgame"><a href="">New Game</a></p>';
        }

        html += '<p id="message"></p>';

        this.div.innerHTML = html;
    };

    this.makeMove = function (r, c) {
        console.log('making move');

        this.board[r][c] = this.current;

        console.log(this.board[r][c]);

        // switch up turns
        if (this.current === 'X') {
            this.current = 'O';
        } else {
            this.current = 'X';
        }
        this.present();
        document.getElementById('message').innerHTML = this.checkWinner();
    };

    this.checkWinner = function () {
        console.log(this.board);

        // check horizontal
        for (var i = 0; i < this.board.length; i++) {

            console.log(this.board[i]);

            if (this.board[i] == ['X', 'X', 'X']) {
                return 'X Wins!';
            }
            if (this.board[i] == ['O', 'O', 'O']) {
                return 'O Wins!';
            }
        }

        // check vertical
        for (var j = 0; j < this.board.length; j++) {
            var xcount = 0;
            var ocount = 0;

            for (var k = 0; k < this.board.length; k++) {

                if (this.board[k][j] === 'X') {
                    xcount++;
                }
                if (this.board[k][j] === 'O') {
                    ocount++;
                }
            }

            if (xcount === 3) {
                return 'X Wins!';
            }
            if (ocount === 3) {
                return 'O Wins!';
            }
        }

        //diagonal check, just hardcode
        if (this.board[1][1] !== '') {
            if (this.board[0][0] === this.board[1][1] && this.board[2][2] === this.board[1][1]) {
                return this.board[0][0] + " Wins!";
            }
            if (this.board[2][0] === this.board[1][1] && this.board[0][2] === this.board[1][1]) {
                return this.board[0][0] + " Wins!";
            }
        }

        // no winner
        return '';
    };

    this.present();
}