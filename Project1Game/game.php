<!DOCTYPE html>
<html>
<head>
    <title>Tic-Tac-Toe Game</title>
    <style>
body {
    background-color: #ffffcc; /* Light yellow background color */
}
        
/* Center the title horizontally and vertically */
h1 {
    text-align: center;
    line-height: 50px; /* Adjust this value to vertically center the title */
    margin: 25; /* Remove default margins */
	font-size: 90px;
	font-weight: bold;
	color: red;
}

/* Center the table horizontally and vertically */
table {
    margin: 0 auto; /* Center the table horizontally */
    margin-top: 25px; /* Adjust this value to vertically center the table */
}



table {
            border-collapse: collapse;
        }

        td {
            width: 100px;
            height: 100px;
            text-align: center;
            font-size: 70px;
            font-weight: bold;
            border: 3px solid red;
            cursor: pointer;
        }

#message {
        text-align: center; 
        color: black;
	font-size: 50px;
    }


    </style>
</head>
<body>
    <h1>Tic-Tac-Toe</h1>
    <table>
        <tr>
            <td id="cell0"></td>
            <td id="cell1"></td>
            <td id="cell2"></td>
        </tr>
        <tr>
            <td id="cell3"></td>
            <td id="cell4"></td>
            <td id="cell5"></td>
        </tr>
        <tr>
            <td id="cell6"></td>
            <td id="cell7"></td>
            <td id="cell8"></td>
        </tr>
    </table>
    <p id="message">Player X's turn. Click a cell to make a move.</p>

    <script>
        var intArray = new Array(9).fill(0);
        var currentPlayer = 1;
        var gameOver = false;
        var cells = document.querySelectorAll("td");
        var message = document.getElementById("message");

        function checkWin() {
            var winningCombinations = [
                [0, 1, 2], [3, 4, 5], [6, 7, 8],
                [0, 3, 6], [1, 4, 7], [2, 5, 8],
                [0, 4, 8], [2, 4, 6]
            ];

            for (var i = 0; i < winningCombinations.length; i++) {
                var [a, b, c] = winningCombinations[i];
                if (intArray[a] === currentPlayer && intArray[b] === currentPlayer && intArray[c] === currentPlayer) {

                    return true;
                }
            }
            return false;
        }

        function checkTie() {
            return !intArray.includes(0);
        }

        function updateMessage() {
            if (gameOver) {
                if (checkWin()) {
                    message.textContent = "Player " + (currentPlayer === 1 ? 'X' : 'O') + " wins!";

                } else {
                    message.textContent = "It's a stalemate!";
                }
            } else {
                message.textContent = "Player " + (currentPlayer === 1 ? 'X' : 'O') + "'s turn. Click a cell to make a move.";
            }
        }

        cells.forEach(function (cell, index) {
            cell.addEventListener("click", function () {
                if (!gameOver && intArray[index] === 0) {
                    intArray[index] = currentPlayer;
                    cell.textContent = currentPlayer === 1 ? 'X' : 'O';
                    cell.style.color = 'blue'; // Set the color to blue for the clicked cell
                    gameOver = checkWin() || checkTie();
                    if (!gameOver) {
                        currentPlayer = 3 - currentPlayer; // Toggle between 1 and 2
                    }

                    updateMessage();
                }
            });
        });
    </script>

      <button class="button button2" onclick="location.reload()">Reset Game</button>
    
    <a href="projects.php" class="button1">
        <button class="button button1">Return</button>
    </a>    
    <link rel="stylesheet" href="game.css">
</body>
</html>

