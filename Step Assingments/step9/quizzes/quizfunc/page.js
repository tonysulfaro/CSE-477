/**
 * Create a multiplication table and
 * put into an HTML element.
 * id - Id for a div to put table into
 * rows - Number of rows
 * cols - Number of cols
 */
function multTable(id, rows, cols) {
    var str = "<table>";

    for(var i = 1; i<=rows; i++){
        str += "<tr>"
        for(var j = 1; j<=cols; j++){
            str += "<td>" + j*i + "</td>";
        }
        str += "</tr>";
    }

    str += "</table>";

    var container = document.getElementById(id);
    container.innerHTML = str;
}