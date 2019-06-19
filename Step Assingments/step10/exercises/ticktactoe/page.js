function TicTacToe(id) {
    this.board = [['', '', ''], ['', '', ''], ['', '', '']];
    this.current = 'X';
    this.div = document.getElementById(id);

    this.present = function () {
        var html = "<table>";
        for (var r = 0; r < 3; r++) {
            html += "<tr>";
            for (var c = 0; c < 3; c++) {
                html += `<td onclick="ttt.makeMove(` + r + `,` + c + `)">`;
                html += this.board[r][c] + "</td>";
            }
            html += `</tr>`;
        }

        html += "</table>";

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
    };

    this.present();
}