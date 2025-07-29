<?php
function getTileLabel($i, $j)
{
    return $_SESSION["grid"][$i][$j];
}

function resetGame()
{
    $_SESSION["grid"] = [
        ['-', "-", "-"],
        ["-", "-", "-"],
        ["-", "-", "-"]
    ];
    $_SESSION["turn"] = 1;
    $_SESSION["gameOver"] = false;
}
function isGameOver(): int
{
    if ($_SESSION["turn"] == 10) {
        return 2;
    }
    $grid = $_SESSION["grid"];
    for ($i = 0; $i < 3; $i++) {
        // Check row
        if ($grid[$i][0] != "-" && $grid[$i][0] === $grid[$i][1] && $grid[$i][1] === $grid[$i][2]) {
            return 1;
        }

        // Check column
        if ($grid[0][$i] != "-" && $grid[0][$i] === $grid[1][$i] && $grid[1][$i] === $grid[2][$i]) {
            return 1;
        }
    }

    // Check diagonals
    if ($grid[0][0] != "-" && $grid[0][0] === $grid[1][1] && $grid[1][1] === $grid[2][2]) {
        return 1;
    }

    if ($grid[0][2] != "-" && $grid[0][2] === $grid[1][1] && $grid[1][1] === $grid[2][0]) {
        return 1;
    }
    return 0;
}

session_start();

if (!isset($_SESSION["grid"]) || !isset($_SESSION["turn"]) || isset($_POST["reset"])) {
    resetGame();
}

if (isset($_POST["input"]) && $_SESSION["gameOver"] === false) {
    $pos = explode("-", $_POST["input"]);
    if (
        isset($pos[0]) && isset($pos[1]) &&
        is_numeric($pos[0]) && is_numeric($pos[1]) &&
        $_SESSION["grid"][$pos[0]][$pos[1]] == "-"
    ) {
        if ($_SESSION["turn"] % 2 == 0) {
            $_SESSION["grid"][$pos[0]][$pos[1]] = "0";
        } else {
            $_SESSION["grid"][$pos[0]][$pos[1]] = "X";
        }
        $_SESSION["turn"] += 1;
        $gameOver = isGameOver();
        if ($gameOver === 1) {
            $_SESSION["gameOver"] = true;
            $winnerMessage = ($_SESSION["turn"] % 2 == 0 ? "X" : "O") . " a gagné";
            resetGame();
        } else if ($gameOver === 2) {
            $_SESSION["gameOver"] = true;
            $winnerMessage = "Match nul";
            resetGame();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Job05</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post">
        <table>
            <tbody>
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <tr>
                        <?php for ($j = 0; $j < 3; $j++): ?>
                            <td>
                                <button class="tile" type="submit" name="input"
                                    value=<?= "$i-$j" ?>><?= getTileLabel($i, $j) ?></button>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </form>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
    <?php if (isset($winnerMessage)): ?>
        <p><?= $winnerMessage ?></p>
    <?php endif; ?>
</body>

</html>