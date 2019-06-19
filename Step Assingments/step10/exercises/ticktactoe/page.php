<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>
<body>

<div id="ttt"></div>

<script>

    window.onload = function () {
        ttt = new TicTacToe("ttt");

        ttt.makeMove(0, 0);
        ttt.makeMove(1, 1);
    }

</script>

</body>
</html>
