<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>Job05</title>
        <?php if (isset($_GET["style"])): ?>
        <link rel="stylesheet" href=<?= $_GET["style"]?>>
        <?php endif; ?>
    </head>
    <body>
        <main>
            <form action="./index.php" method="get">
                <select name="style" id="style">
                    <option value="style1.css">style1</option>
                    <option value="style2.css">style2</option>
                    <option value="style3.css">style3</option>
                </select>
                <button type="submit">Submit</button>
            </form>
        </main>
    </body>
</html>